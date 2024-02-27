<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post_1;
use Illuminate\Routing\Controller;

class postController extends Controller
{
    public function index() {
       
        return view('posts',["title" => "Post", 'posts' => post_1::all()]);
       
    }
    public function show($slug) {
        return view('post',["title" => "Single Post", 'posts' => post_1::find($slug)]);
    } 
}
