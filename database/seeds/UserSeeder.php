<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i<=25; $i++) {
            \App\Models\Images\UserImage::create([
                'user_id'=>$i,
                'actif'=>true,
                'name' => 'defaultUserAvatar',
                'description' => 'image par defaut',
                'medium_path' => 'defaultImg/medium/image.png',
                'low_path' => 'defaultImg/low/image.png',
                'path' => 'defaultImg/image.png',
                'avatar_path' => 'defaultImg/avatar/image.png',
                'uploaded_at'=>now()
            ]);
        }

        factory('App\User', 25)->create();
    }
}
