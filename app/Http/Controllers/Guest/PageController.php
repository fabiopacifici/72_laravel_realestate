<?php

namespace App\Http\Controllers\Guest;

use App\Models\House;
use App\Models\Post;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index()
    {
        return view('welcome');
    }


    public function houses()
    {
        //$houses = House::all(); // returns all houses in order
        $houses = House::orderByDesc('id')->get();
        //dd($houses);
        return view('houses', compact('houses'));
    }

    public function posts()
    {
        $posts = Post::all();
        //dd($posts);
        return view('posts', compact('posts'));
    }
}
