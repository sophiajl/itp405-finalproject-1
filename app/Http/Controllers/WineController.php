<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Wine;

use DB;
use Validator;
use Auth;


class WineController extends Controller
{
    public function index()
    {
        $grape = DB::table('grapes')
            ->get();
        $wine_type = DB::table('wine_types')
            ->get();
        $country = DB::table('countries')
            ->get();
        return view('wine.index', [
            'user' => Auth::user(),
            'grape' => $grape,
            'wine_type' => $wine_type,
            'country' => $country,
        ]);
    }

    public function search()
    {
//        $validation = Validator::make($request->all()

//        if        if($validation->passes())

            $name = request('name');
            $year = request('year');
            $price = request('price');
            $grape = request('grape_id');
            $country = request('country_id');
            $wine_type = request('wine_type_id');

//      $wine = DB::table('wine_list')
//                ->orderBy('wine_id')
//                ->get();




        if ($grape != 'all') {
            $wine = DB::table('wine_list')
                ->join('grapes', 'wine_list.grape_id', '=', 'grapes.grape_id')
                ->join('countries', 'wine_list.country_id', '=', 'countries.country_id')
                ->join('wine_types', 'wine_list.wine_type_id' , '=', 'wine_types.wine_type_id')
                ->where('wine_list.name', 'LIKE' , "%$name%")
                ->where('wine_list.year', 'LIKE' , $year)
                ->where('wine_list.price', 'LIKE' , $price)
                ->where('grapes.grape_id', '=', $grape)
                ->get();
        }
        elseif ($country != 'all') {
            $wine = DB::table('wine_list')
                ->join('grapes', 'wine_list.grape_id', '=', 'grapes.grape_id')
                ->join('countries', 'wine_list.country_id', '=', 'countries.country_id')
                ->join('wine_types', 'wine_list.wine_type_id' , '=', 'wine_types.wine_type_id')
                ->where('wine_list.name', 'LIKE' , "%$name%")
                ->where('wine_list.year', 'LIKE' , $year)
                ->where('wine_list.price', 'LIKE' , $price)
                ->where('countries.country_id', '=', $country)
                ->get();
        }
        elseif ($wine_type != 'all') {
            $wine = DB::table('wine_list')
                ->join('grapes', 'wine_list.grape_id', '=', 'grapes.grape_id')
                ->join('countries', 'wine_list.country_id', '=', 'countries.country_id')
                ->join('wine_types', 'wine_list.wine_type_id' , '=', 'wine_types.wine_type_id')
                ->where('wine_list.name', 'LIKE' , "%$name%")
                ->where('wine_list.year', 'LIKE' , $year)
                ->where('wine_list.price', 'LIKE' , $price)
                ->where('wine_types.wine_type_id', '=', $wine_type)
                ->get();
        }
        elseif ($wine_type != 'all' && $grape != 'all') {
            $wine = DB::table('wine_list')
                ->join('grapes', 'wine_list.grape_id', '=', 'grapes.grape_id')
                ->join('countries', 'wine_list.country_id', '=', 'countries.country_id')
                ->join('wine_types', 'wine_list.wine_type_id' , '=', 'wine_types.wine_type_id')
                ->where('wine_list.name', 'LIKE' , "%$name%")
                ->where('wine_list.year', 'LIKE' , $year)
                ->where('wine_list.price', 'LIKE' , $price)
                ->where('wine_types.wine_type_id', '=', $wine_type)
                ->where('grapes.grape_id', '=', $grape)
                ->get();
        }
        elseif ($wine_type != 'all' && $country != 'all') {
            $wine = DB::table('wine_list')
                ->join('grapes', 'wine_list.grape_id', '=', 'grapes.grape_id')
                ->join('countries', 'wine_list.country_id', '=', 'countries.country_id')
                ->join('wine_types', 'wine_list.wine_type_id' , '=', 'wine_types.wine_type_id')
                ->where('wine_list.name', 'LIKE' , "%$name%")
                ->where('wine_list.year', 'LIKE' , $year)
                ->where('wine_list.price', 'LIKE' , $price)
                ->where('wine_types.wine_type_id', '=', $wine_type)
                ->where('countries.country_id', '=', $country)
                ->get();
        }
        elseif ($grape != 'all' && $country != 'all') {
            $wine = DB::table('wine_list')
                ->join('grapes', 'wine_list.grape_id', '=', 'grapes.grape_id')
                ->join('countries', 'wine_list.country_id', '=', 'countries.country_id')
                ->join('wine_types', 'wine_list.wine_type_id' , '=', 'wine_types.wine_type_id')
                ->where('wine_list.name', 'LIKE' , "%$name%")
                ->where('wine_list.year', 'LIKE' , $year)
                ->where('wine_list.price', 'LIKE' , $price)
                ->where('grapes.grape_id', '=', $grape)
                ->where('countries.country_id', '=', $country)
                ->get();
        }
        elseif ($wine_type != 'all' && $country != 'all' && $grape != 'all') {
            $wine = DB::table('wine_list')
                ->join('grapes', 'wine_list.grape_id', '=', 'grapes.grape_id')
                ->join('countries', 'wine_list.country_id', '=', 'countries.country_id')
                ->join('wine_types', 'wine_list.wine_type_id' , '=', 'wine_types.wine_type_id')
                ->where('wine_list.name', 'LIKE' , "%$name%")
                ->where('wine_list.year', 'LIKE' , $year)
                ->where('wine_list.price', 'LIKE' , $price)
                ->where('wine_types.wine_type_id', '=', $wine_type)
                ->where('grapes.grape_id', '=', $grape)
                ->where('countries.country_id', '=', $country)
                ->get();
        }

        else{
            $wine = DB::table('wine_list')
                ->join('grapes', 'wine_list.grape_id', '=', 'grapes.grape_id')
                ->join('countries', 'wine_list.country_id', '=', 'countries.country_id')
                ->join('wine_types', 'wine_list.wine_type_id' , '=', 'wine_types.wine_type_id')
                ->get();
        }
      //  elseif($price != '')

//                $wine = DB::table('wine_list')
//                    ->where('year', '=', $year)
//                    ->where('name', 'LIKE' , "%$name%")
//             //       ->where('price', '=' , $price)
////                    ->where('grape_id', '=', $grape)
//                    ->get();
//            }
//            else{
//                $wine = DB::table('wine_list')
//                    ->get();
//
//            }


//        $wine = DB::table('wine_list')
//            ->orderBy('wine_id')
//            ->get();
        return view('wine.results', [
            'wine' => $wine
        ]);
    }
}
