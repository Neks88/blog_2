<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $user =  App\User::create([
            'name'=>"nemanja",
            "email"=>"neks.92@live.com",
            'password'=>bcrypt("password"),
            'admin'=>1
        ]);

        App\Profile::create([
            "user_id"=> $user->id,
            "avatar"=>"uploads/avatars/2.png",
            "about"=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi enim tempora quos sed ab repellendus accusantium, magni soluta atque reprehenderit eum, numquam non vero, quod aut. Libero omnis quidem illo!',
            'facebook'=>'facebook.com',
            'youtube'=>'youtube.com'

        ]);
    }
}
