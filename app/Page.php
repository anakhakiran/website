<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Page extends Model
{
    public function totalPages()
    {
        $records = DB::table('pages')
                    ->selectRaw('pages.pageid as totalPages')
                    ->count();
        return $records;
    }

    public function listPages()
    {
        $records = DB::table('pages')
                ->select(
                    'pageid',
                    'title',
                    'summary',
                    'body',
                    'language',
                    'created',
                    'updated'
                )
                ->paginate(20);

        return $records;
    }
}