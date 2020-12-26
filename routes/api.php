<?php

use Illuminate\Http\Request;

use App\Resource;
use App\User;
use App\News;
use App\Page;
use App\Menu;
use App\ResourceAttachment;
use App\ResourceAuthor;
use App\ResourceComment;
use App\ResourceView;
use App\ResourceFlag;
use App\ResourceFavorite;

use App\Http\Resources\Resource as apiResource;
use App\Http\Resources\User as apiUser;
use App\Http\Resources\News as apiNews;
use App\Http\Resources\Page as apiPage;
use App\Http\Resources\Menu as apiMenu;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//All resources based on language
Route::get('/resources/{lang?}', function ($lang="en") {
    return apiResource::collection(Resource::where('status', 1)->where('language', $lang)->paginate(32));
});

//Single resource based on language
Route::get('/resource/{id}/{lang?}', function ($id, $lang="en") {
    return apiResource::collection(Resource::where('status', 1)->where('language', $lang)->where('id',$id)->get());
});

//All users
Route::get('/users', function () {
    return apiUser::collection(User::where('status', 1)->paginate(32));
});

//Single User
Route::get('/user/{id}', function ($id) {
    return apiUser::collection(User::where('status', 1)->where('id', $id)->get());
});

//All pages
Route::get('/pages/{lang?}', function ($lang="en") {
    return apiPage::collection(Page::where('status', 1)->where('language', $lang)->paginate(32));
});

//Single page
Route::get('/page/{id}/{lang?}', function ($id, $lang="en") {
    return apiPage::collection(Page::where('status', 1)->where('language', $lang)->where('id', $id)->get());
});

//This endpoint returns all news items
Route::get('/news/{lang?}', function ($lang="en") {
    return apiNews::collection(News::where('status', 1)->where('language', $lang)->orderBy('id', 'desc')->paginate(32));
});

//This endpoint returns a single news item
Route::get('/news/{id}/{lang?}', function ($id, $lang="en") {
    return apiNews::collection(News::where('status', 1)->where('language', $lang)->where('id', $id)->get());
});

//This endpoint returns link items for a specific language
Route::get('/links/{lang}', function ($lang="en") {
    return apiMenu::collection(
        Menu::select(['id', 'title', 'path'])
        ->where('language', $lang)
        ->where('location', 'bottom-menu')
        ->orderBy('id', 'desc')
        ->get()
    );
});

//This endpoint returns link item view for a specific id
Route::get('/link/{lang}', function ($id="") {
    return 'link view';
});

//This endpoint returns all resources based on language, and filters provided
Route::get('/resources/{lang}/{offset}', function ($lang="en", $offset=0, Request $request) {

    $searchQuery = $request['search'];

    $subjectAreaIds = $request['subject_area'];
    $levelIds = $request['level'];
    $typeIds = $request['type'];

    $resources = DB::table('resources AS rs')
    ->select(
        'rs.id',
        'rs.language', 
        'rs.abstract',
        'rs.title'
    )
    ->when(count($subjectAreaIds) > 0, function($query) use($subjectAreaIds){
        return $query->join('resource_subject_areas AS rsa', 'rsa.resource_id', '=', 'rs.id')
                ->join('taxonomy_term_hierarchy AS tth','tth.tid','=','rsa.tid')
                ->where('tth.parent', $subjectAreaIds)
                ->orWhere('tth.tid', $subjectAreaIds)
                ->groupBy('tth.tid');
    })
    ->when(count($levelIds) > 0, function($query)  use($levelIds){
        return $query->join('resource_levels AS rl', function ($join) use($levelIds) {
            $join->on('rl.resource_id', '=', 'rs.id')
                ->where('rl.tid', $levelIds);
        });
    })
    ->when(count($typeIds) > 0, function($query)  use($typeIds){
        return $query->join('resource_learning_resource_types AS rlrt', function ($join) use($typeIds) {
            $join->on('rlrt.resource_id', '=', 'rs.id')
                    ->where('rlrt.tid', $typeIds);
            });
    })
    ->when(count($searchQuery) > 0, function($query)  use($searchQuery){
        return $query->leftJoin('resource_authors AS ra','ra.resource_id','=','rs.id')
            ->leftJoin('resource_publishers AS rp','rp.resource_id','=','rs.id')
            ->leftJoin('taxonomy_term_data AS ttd','ttd.id','=','ra.tid')
            ->leftJoin('taxonomy_term_data AS ttdp','ttdp.id','=','rp.tid')
            ->where('rs.title','like','%'.$searchQuery.'%')
            ->orwhere('rs.abstract', 'like' , '%'.$searchQuery.'%')
            ->orwhere('ttd.name', 'like' , '%'.$searchQuery.'%')
            ->orwhere('ttdp.name', 'like' , '%'.$searchQuery.'%');
    })
    ->when($request->filled('publisher'), function($query) use($request){
        return $query->leftJoin('resource_publishers AS rpub','rpub.resource_id','=','rs.id')
            ->where('rpub.tid', $request['publisher']);
    })
    ->where('rs.language', $lang)
    ->where('rs.status', 1)
    ->orderBy('rs.created_at','desc')
    ->limit(32)
    ->offset($offset)
    ->groupBy(
        'rs.id',
        'rs.language', 
        'rs.title',
        'rs.abstract',
        'rs.created_at'
    )
    ->get();

    $results = [];

    foreach($resources->unique('id') as $resource)
    {
        $res['id'] = $resource->id;
        $res['title'] = $resource->title;
        $res['abstract'] = $resource->abstract;
        $res['img'] = getImagefromResource($resource->abstract);
        
        array_push($results, $res);
    }

    return $results;
});

//This endpoint returns a single resource all attributes
Route::get('/resource_attributes/{id}', function ($resourceId) {

    //setting the search session empty
    DDLClearSession();
    
    $myResources = new Resource();

    $attachments = new ResourceAttachment();
    $attachments = $attachments->where('resource_id', $resourceId)->get();

    //$authors = new ResourceAuthor();


    $resource = Resource::findOrFail($resourceId);
    $authors = $resource->authors;

    $result = [];

    $relatedItems = $myResources->getRelatedResources($resourceId, $resource->subjects);
    $comments = ResourceComment::where('resource_id', $resourceId)->published()->get();
    if($resource){
        $translation_id = $resource->tnid;
        if($translation_id){
            $translations = $myResources->getResourceTranslations($translation_id);
        }else{
            $translations = array();
        }
    }

    $result['authors'] = $authors;
    $result['levels'] = $resource->levels;
    $result['subjects'] = $resource->subjects;
    $result['LearningResourceTypes'] = $resource->LearningResourceTypes;
    $result['publishers'] = $resource->publishers;
    $result['translations'] = $translations;
    $result['CreativeCommons'] = $resource->creativeCommons;
    $result['attachments'] = $attachments;
    $result['related_items'] = $relatedItems;

    return $result;

});

//This end point return resource categories based on language
Route::get('/resource_categories/{lang?}', function ($lang="en") {
    $resource = new Resource();
    return $resource->subjectIconsAndTotal($lang);
});

//This end point return featured resources based on language
Route::get('/featured_resources/{lang?}', function ($lang="en") {
    $resource = new Resource();
    return $resource->featuredCollections($lang);
});

//Single page
Route::get('/api_page/{id}', function ($id) 
{
    //setting the search session empty
    DDLClearSession();
    
    $page = Page::find($id);

    $translation_id = $page->tnid;
    if($translation_id){
        $translations = Page::where('tnid',$translation_id)->get();
    }else{
        $translations = array();
    }

    return view('pages.page_app_view', compact('page','translations'));
});

//Single news
Route::get('/api_news/{id}', function ($id) 
{
    //setting the search session empty
    DDLClearSession();

    $news = News::find($id);
    $translation_id = $news->tnid;
    if($translation_id){
        $translations = News::where('tnid',$translation_id)->get();
    }else{
        $translations = array();
    }
    return view('news.news_api_view', compact('news','translations'));
});

//This end point return filtered resources based on language
Route::get('/filter_resources/{lang?}', function (Request $request) 
{
    $myResources = new Resource();

    //Getting all whatever in the parameterBag
    $everything = $request->all();

    if(isset($everything['search'])){
        session(['search' => $everything['search']]);
    }

    $subjectAreaIds = array();
    $levelIds = array();
    $typeIds = array();

    //if subject_area exists in the request
    if($request->filled('subject_area')){
        $subjectAreaIds = $everything['subject_area'];
    }

    //if level exists in the request
    if($request->filled('level')){
        $levelIds = $everything['level'];
    }

    //if type exists
    if($request->filled('type')){
        $typeIds = $everything['type'];
    }

    $views = new ResourceView();
    $favorites = new ResourceFavorite();
    $comments = new ResourceComment();
    $resources = $myResources->paginateResourcesBy($request);

    $subjects = $myResources->resourceAttributesList('taxonomy_term_data',8);
    $types = $myResources->resourceAttributesList('taxonomy_term_data', 7);
    $levels = $myResources->resourceAttributesList('taxonomy_term_data', 13);
    
    if ($request->ajax()) {
        $resources = $myResources->paginateResourcesBy($request);
        return view('resources.resources_list_content', compact(
            'resources',
            'views',
            'favorites',
            'comments'
        ));
    }

    return compact(
        'resources',
        'subjects',
        'types',
        'levels',
        'subjectAreaIds',
        'levelIds',
        'typeIds',
        'views',
        'favorites',
        'comments'
    );
});
