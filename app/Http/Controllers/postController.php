<?php

namespace App\Http\Controllers;

use App\Post1;
use Illuminate\Http\Request;
use App\post_1;
use Illuminate\Routing\Controller;

class postController extends Controller
{
    public function index() {
       
        return view('posts',["title" => "Post", 'posts' => Post1::all()]);
       
    }
    public function show(Post1 $post) {
        return view('post',["title" => "Single Post", 'posts' => $post]);
    } 
}
