<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
        DB::table('tags')->truncate();
        //DB::table('pastes')->truncate();

		$faker = Faker\Factory::create();
		$paste_count = 10;
		$tags = array('php', 'javascript', 'ruby', 'js', 'cpp', 'c++', 'c#', 'go', 'html', 'css');
		for ($i = 0; $i < $paste_count; $i++) {
			$tags_per_paste = rand(1,3);

			// Generate the paste
			$examplePaste = new Paste();
			$examplePaste->paste = $faker->paragraph;
			$examplePaste->title = $faker->realText(46);
			$examplePaste->expire = $faker->dateTime($max = 'now');
			$examplePaste->token = Str::random(40);
            $examplePaste->private = rand(0, 1);
			$examplePaste->delete_token = Str::random(40);
			$examplePaste->save();


			// Attach some tags to the new paste
			for ($i = 0; $i < $tags_per_paste; ++$i) {
				$exampleTag = new Tag();
				$exampleTag->tag = $tags[rand(0, sizeof($tags)-1)];
				$exampleTag->paste_id = $examplePaste->id;
				$examplePaste->tags()->save($exampleTag);
			}
			print "Seeded paste with ID of " . $examplePaste->id . "\n";

		}


	}

}
