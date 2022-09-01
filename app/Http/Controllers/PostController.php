<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;
use Illuminate\Http\Response;
use Illuminate\View\View;

class PostController extends Controller
{
	/**
	 * Return view with all Posts
	 */
	public function index(): View
	{
		$posts = Post::all();
		return view('posts.index', ['posts' => $posts]);
	}

	/**
	 * Return view with single Post
	 */
	public function show(Post $post): View
	{
		return view('posts.show', ['post' => $post]);
	}

	/**
	 * Return view with Create Post form
	 */
	public function create(): View
	{
		return view('posts.create');
	}

	/**
	 * Store Post in database
	 */
	public function store(StorePostRequest $request): Response
	{
		Post::create($request->validated());
		return response(status: 201);
	}

	/**
	 * Return view with Edit Post form
	 */
	public function edit(Post $post): View
	{
		return view('posts.edit', ['post' => $post]);
	}

	/**
	 * Update Post in database
	 */
	public function update(UpdatePostRequest $request, Post $post): Response
	{
		$post->update($request->validated());
		return response(status: 204);
	}

	/**
	 * Destroy Post in database
	 */
	public function destroy(Post $post): Response
	{
		$post->delete();
		return response(status: 204);
	}

	// # [!] NOTE
	// # If you are Redirecting the type should be: Illuminate\Http\RedirectResponse
	// # example:
	//
	// public function destroy(Post $post): RedirectResponse
	// {
	// 	$post->delete();
	// 	return redirect('posts'); //or return back();
	// }
}
