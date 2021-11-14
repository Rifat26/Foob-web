<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Information_controller extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['information'] = DB::table('information')->first();
        $data['category'] = DB::table('category')->get();
        $data['recipes'] = DB::table('all_recipes')->get();

        
        echo view('master.head',$data);
        echo view('index',$data);
        echo view('master.foot',$data);
       

    }

    public function recipes()
   {
        $data['information'] = DB::table('information')->first();
        $data['recipes'] = DB::table('all_recipes')->get();
    

        echo view('master.head',$data);
        echo view('recipes',$data);
        echo view('master.foot',$data);
        
    }

    public function recipe_single()
    {
        $data['information'] = DB::table('information')->first();
        $data['recipes'] = DB::table('all_recipes')->get();

        echo view('master.head',$data);
        echo view('recipe-single',$data);
        echo view('master.foot',$data);
        
    }

    public function event()
    {
        $data['information'] = DB::table('information')->first();
        $data['event'] = DB::table('events')->get();


        echo view('master.head',$data);
        echo view('event',$data);
        echo view('master.foot',$data);

    }

    public function event_single()
    {
        $data['information'] = DB::table('information')->first();
        $data['event'] = DB::table('events')->get();


        echo view('master.head',$data);
        echo view('event-single',$data);
        echo view('master.foot',$data);

    }

    
    public function blog()
    {
        $data['information'] = DB::table('information')->first();
        $data['blog'] = DB::table('blog')->get();


        echo view('master.head',$data);
        echo view('blog',$data);
        echo view('master.foot',$data);

    }
    

    
}