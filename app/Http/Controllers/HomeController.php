<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
    	    return view('frontend.pages.home');


    }
    public function about(){
    return view('frontend.pages.about');

    }
 public function service(){
    return view('frontend.pages.service');

    }
  public function test(){
  	return view('backend.pages.dashboard');
  }

  public function addPost(){
      $role = Role::all();
  	return view('backend.pages.addpost',compact('role'));
  }   
  public function table(){
    return view('backend.pages.table');

  }
  public function postInsert(Request $r){
    User::insert(['name'=>$r->name,
                  'email'=>$r->email,
                  'password'=>$r->password]);
    return back();
    
  }
}
