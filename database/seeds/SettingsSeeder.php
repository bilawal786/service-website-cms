<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\str;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'aboutus'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore ipsam alias quae cupiditate quas, neque eum magni impedit asperiores.',
            'image'=>'frontend/assets/images/logo/logo-1.png',
            'address'=>'Offixe mx 142 dha lahorwe',
            'email1'=>'hello@barky.com',
            'email2'=>"info@barky.com",
            'number1'=>'(312)-895-9800',
            'number2'=>'(312)-895-9888'
        ]);
    }
}
