<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postController extends Controller
{
    public function showPage()
    {
        return view('posts');
    }
}
