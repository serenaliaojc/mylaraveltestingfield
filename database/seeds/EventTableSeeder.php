<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
// use Illuminate\Console\Scheduling\Event;
use App\Event;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // reset table records
        DB::table('events')->truncate();

        Event::create([
            'name' => "Laravel and Coffee",
            'enabled' => false,
            'city' => "Dublin",
            'venue' => "Cup of Joe",
            'description' => "Let's learn Laravel together!" 
        ]);

        $faker = Faker\Factory::create();

        foreach(range(1,50) as $index) {
            Event::create([
                'name' => $faker->sentence(2),
                'enabled' => true,
                'city' => $faker->city,
                'venue' => $faker->company,
                'description' => $faker->paragraphs(1, true) 
            ]);
        }
    }
}
