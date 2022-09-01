<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PostController extends Controller
{
	/**
	 * Return view with all Posts
	 */
	public function index(): View
	{
		$posts = Post::all();
		return view('posts-index', ['posts' => $posts]);
	}

	/**
	 * Return view with single Post
	 */
	public function show(Post $post): View
	{
		// [!] Always write this kind of routes using Route::view() method.
		// in this app it's left like this only for learning purposes
		return view('posts-show', ['post' => $post]);
	}

	/**
	 * Return view with Create Post form
	 */
	public function create(): View
	{
		// [!] Always write this kind of routes using Route::view() method.
		// in this app it's left like this only for learning purposes
		return view('posts-create');
	}

	/**
	 * Store Post in database
	 */
	public function store(StorePostRequest $request): RedirectResponse
	{
		Post::create($request->validated());
		return redirect()->route('posts-index');
	}

	/**
	 * Return view with Edit Post form
	 */
	public function edit(Post $post): View
	{
		// [!] Always write this kind of routes using Route::view() method.
		// in this app it's left like this only for learning purposes
		return view('posts-edit', ['post' => $post]);
	}

	/**
	 * Update Post in database
	 */
	public function update(UpdatePostRequest $request, Post $post): RedirectResponse
	{
		$post->update($request->validated());
		return redirect()->route('posts-index');
	}

	/**
	 * Destroy Post in database
	 */
	public function destroy(Post $post): RedirectResponse
	{
		$post->delete();
		return back();
	}
}
