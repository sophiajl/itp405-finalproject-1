<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Wine;

use DB;

class WineController extends Controller
{
    public function index()
    {
        return view('wine.index');
    }

    public function search()
    {
        $wine = DB::table('wine_list')
//            ->select('wine_id', 'name', 'wine_type_id', 'year')
//            ->orderBy('wine_id')
            ->get();
        return view('wine.results', [
            'wine' => $wine
        ]);
    }
}
