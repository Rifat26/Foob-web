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
        
      return view('recipes');
      
    }
    public function event()
    {
        
      return view('event');
      
    }
    public function blog()
    {
        
      return view('blog');
      
    }
    
    public function contact()
    {
        
      return view('contact');
      
    }
    public function faq()
    {
        
      return view('faq');
      
    }
    public function myaccount()
    {
        
      return view('my-account');
      
    }
    public function login()
    {
        
      return view('login');
      
    }
    public function checkout()
    {
        
      return view('checkout');
    }
    public function about()
    {
        
      return view('about');
    }
      

    
}