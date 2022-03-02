<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function edugames(){
        return view('pages.product.marbel-edu-games');
    }

    public function kidsgames(){
        return view('pages.product.marbel-and-friends-kids-games');
    }

    public function storybooks(){
        return view('pages.product.riri-story-books');
    }

    public function kidsongs(){
        return view('pages.product.kolak-kids-songs');
    }
}
