<?php

namespace App\Http\Controllers;
use App\News;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }
    
    function index ()
    {
        $this->middleware('admin');
        $myNews = new News();
        $newsRecords = $myNews->listNews();
        return view('admin.news.news_list', compact('newsRecords'));
    }

    function view($newsId)
    {
        $myNews = new News();
        $news = $myNews->oneNews($newsId);
        $translation_id = $news->translation_id;
        if($translation_id){
            $translations = $myNews->getNewsTranslations($translation_id);
        }else{
            $translations = array();
        }
        return view('news.news_view', compact('news','translations'));
    }
}
