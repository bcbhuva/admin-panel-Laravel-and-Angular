<?php

use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
      $faker = Faker\Factory::create();
      for($i=0;$i<100;$i++){
        DB::table('videos')->insert([
            'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
            'description' => $faker->text,
            'duration' => time($format = 'H:i:s', $max = 'now'),
        ]);
      }
    }
}
