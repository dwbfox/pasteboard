<?php

class LanguagesSeeder extends Seeder {

    public function run()
    {

        $languages = array(
            array('name' => 'PHP', 'name_safe' => 'php'),
            array('name' => 'Ruby', 'name_safe' => 'rb'),
            array('name' => 'JavaScript', 'name_safe' => 'js'),
            array('name' => 'HTML', 'name_safe' => 'html'),
            array('name' => 'CSS', 'name_safe' => 'css'),
            array('name' => 'C#', 'name_safe' => 'cs'),
            array('name' => 'R', 'name_safe' => 'r'),
            array('name' => '.NET', 'name_safe' => 'dotnet'),
        );
        DB::table('languages')->insert($languages);
    }

}

?>