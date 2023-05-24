<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function index() {
        return view("index", [
            "posts" => Post::latest("uploaded_at")->get()->take(4),
        ]);
    }
}
