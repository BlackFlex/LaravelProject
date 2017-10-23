<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome in index';

        // first method
        //return view ('pages.index',compact('title'));

        // second method
        return view ('pages.index')->with('title',$title);

    }
    public function about(){
        $title = 'Welcome in about';

        // first method
        //return view ('pages.about',compact('title'));

        // second method
        return view ('pages.about')->with('title',$title);
    }
    public function contact(){
        $title = 'Welcome in contact';

        // first method
        //return view ('pages.contact',compact('title'));

        // second method
        return view ('pages.contact')->with('title',$title);
    }
}
