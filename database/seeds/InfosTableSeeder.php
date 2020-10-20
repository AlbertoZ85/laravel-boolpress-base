<?php
use App\Info;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class InfosTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker) {
        $users = User::all();

        foreach ($users as $user) {
            $newInfo = new Info();

            $newInfo->phone = $faker->phoneNumber;
            $newInfo->avatar = $faker->imageUrl(640, 480);
            $newInfo->user_id = $user->id;

            $newInfo->save();
        }
    }
}