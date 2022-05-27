<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run()
	{
		Post::create([
			'title'=> 'asdasdasd',
			'body' => 'bodasdasdasd',
		]);
		Post::create([
			'title'=> 'asdasdasd',
			'body' => 'bodasdasdasd',
		]);
	}
}
