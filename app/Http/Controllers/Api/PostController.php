<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;
use Illuminate\Http\JsonResponse;

class PostController extends Controller
{
	/**
	 * Get Post from the database
	 */
	public function get(Post $post): JsonResponse
	{
		return response()->json(['post'=>$post], 200);
	}

	/**
	 * Store Post in the database
	 */
	public function store(StorePostRequest $request): JsonResponse
	{
		Post::create([
			'title' => $request->title,
			'body'  => $request->body,
		]);
		return response()->json(['message'=>'Post Successfuly Created!'], 200);
	}

	/**
	 * Update Post in the database
	 */
	public function update(UpdatePostRequest $request, Post $post): JsonResponse
	{
		$post->update([
			'title' => $request->title,
			'body'  => $request->body,
		]);
		return response()->json(['message'=>'Post Successfuly Updated!'], 200);
	}

	/**
	 * Destroy Post in the database
	 */
	public function destroy(Post $post): JsonResponse
	{
		$post->delete();
		return response()->json(['message'=>'Post Successfuly Deleted!'], 200);
	}
}
