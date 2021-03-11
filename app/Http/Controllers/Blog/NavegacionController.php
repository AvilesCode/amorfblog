<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\PostModel;
use Illuminate\Http\Request;

class NavegacionController extends Controller
{
    public function landing()
    {
        $infoPosts = PostModel::all();
        return view('blog.index')->with('datos', $infoPosts);
    }
}
