<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index (){
        //return  view('pages.index', compact('title'));
        return  view('pages.index');
    }

    public function about (){
        return  view('pages.about');
    }

    public function book_bank (){
        return  view('pages.book_bank');
    }


    public function contact (){
        return  view('pages.contact');
    }

    public function gallery (){
        return  view('pages.gallery');
    }

    public function notice_single (){
        return  view('pages.notice_single');
    }

    public function notice (){
        return  view('pages.notice');
    }

    public function book_library (){
        return  view('pages.book_library');
    }
    
    public function admin_ (){
        return  view('layouts.admin');
    }
    public function add_staff ()
    {
        return view('admin_pages.books-staff');
    }
    
}
