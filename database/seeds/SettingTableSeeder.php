<?php

use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=array(
            'description'=>"Akibara's Box berdiri sejak 17 Juni 2020. Bisnis yang bergerak dalam bidang cookies and dessert yang terkenal dengan kualitas premium dan rasa yang authentic. Ada berbagai macam dessert untuk mu... -love akibara.",
            'short_des'=>"Delicious food in the box.",
            'photo'=>"image.png",
            'logo'=>'logo.png',
            'address'=>"Jakarta Selatan",
            'email'=>"akibarabox@gmail.com",
            'phone'=>"+62 8572 2091 110",
        );
        DB::table('settings')->insert($data);
    }
}
