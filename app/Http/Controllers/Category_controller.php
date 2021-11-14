<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Category_controller extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipes = DB::table('all_')->get();

        //return view('category.index',['category' => $category]);

        var_dump($recipes);

        
        //echo view('index', ['category' => $category]);
    }

    
}