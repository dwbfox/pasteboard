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

		$paste_count = 10;

		for ($i = 0; $i < $paste_count; $i++) {

			// Generate the paste
			$examplePaste = new Paste();
			$examplePaste->paste = <<<PASTE
				<html>
					<head>
					<title>PHP Test</title>
					</head>
					<body>
						<?php echo '<p>Hello World</p>'; ?> 
					</body>
				</html>
PASTE;
			$examplePaste->token = Str::random(40);
			$examplePaste->delete_token = Str::random(40);
			$examplePaste->save();

			// Attach some tags to the new paste
			$exampleTag = new Tag();
			$exampleTag->tag = 'PHP';
			$exampleTag->paste_id = $examplePaste->id;
			$exampleTag->save();
		}


	}

}