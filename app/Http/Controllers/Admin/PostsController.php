<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Post;
use App\Category;
use App\Tag;

class PostsController extends Controller
{
	public function index() {
		$posts = Post::all();
		return view('admin.posts.index', compact('posts'));
	}

	public function create() {
		$categories = Category::all();
		$tags = Tag::all();
		return view('admin.posts.create', compact('categories', 'tags'));
	}

	public function store(Request $request) {

		$this->validate($request, [
			'title' => 'required',
			'body' => 'required',
			'excerpt' => 'required',
			'category' => 'required',
			'tags' => 'required'
		]);

		$post = new Post;
		$post->title = $request->title;
		$post->url = str_slug($request->title);
		$post->body = $request->body;
		$post->excerpt = $request->excerpt;
		$post->published_at = $request->has('published_at') ? Carbon::parse($request->published_at) : null;
		
		$post->category_id = $request->category;
		$post->save();

		$post->tags()->attach($request->tags);
		return back()->with('flash', 'Tu publicacion ha sido creada.');

	}
}
