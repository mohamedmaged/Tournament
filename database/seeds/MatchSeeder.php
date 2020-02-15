<?php

use Illuminate\Database\Seeder;

class MatchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $teams = \App\Team::all()->pluck('id')->toArray();
        $faker = Faker\Factory::create();
        for ($i = 1; $i < count($teams); $i++) {
            for ($j = 1; $j < count($teams); $j++) {
                if($i == $j) continue;
                \App\Match::create([
                    'team_a_id' => $teams[$i],
                    'team_b_id' => $teams[$j],
                    'team_a_score' => $faker->numberBetween(0, 20),
                    'team_b_score' => $faker->numberBetween(0, 20),
                ]);
            }
        }

    }
}
