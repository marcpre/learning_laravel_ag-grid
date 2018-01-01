<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $limit = 1166;
        
        for ($i = 0; $i < $limit; $i++) {
            DB::table('tasks')->insert([
                'name' => $faker->sentence(),
            ]);
        }
    }
}
