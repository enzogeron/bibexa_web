<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Post;

class PagesController extends Controller
{
	
	public function home() {
		$posts = Post::published()->get();
		return view('blog.index', compact('posts'));
	}
	
}
