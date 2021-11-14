<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Connect_controller extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
      return view('index');

    }
     public function recipes()
     {
        
       $information = DB::table('information')->first();

         echo view('recipes', ['information' => $information]);
      
     }
    public function event()
    {
      $information = DB::table('information')->first();

      echo view('event', ['information' => $information]);
       
      
      
    }
    public function blog()
    {
        
      $information = DB::table('information')->first();

      echo view('blog', ['information' => $information]);
      
    }
    
    public function contact()
    {
        
      $information = DB::table('information')->first();

      echo view('contact', ['information' => $information]);
      
    }
    public function faq()
    {
        
      $information = DB::table('information')->first();

      echo view('faq', ['information' => $information]);
      
    }
    public function myaccount()
    {
        
      $information = DB::table('information')->first();

      echo view('my-account', ['information' => $information]);
      
    }
    public function login()
    {
        
      $information = DB::table('information')->first();

      echo view('login', ['information' => $information]);
      
    }
    public function checkout()
    {
        
      $information = DB::table('information')->first();

      echo view('checkout', ['information' => $information]);
    }
    public function about()
    {
        
      $information = DB::table('information')->first();

      echo view('about', ['information' => $information]);
    }
      

    
}