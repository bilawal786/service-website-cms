<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\str;

class WebsiteImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('websiteimages')->insert([
        'image1'=>'frontend/assets/images/hero/hero-one-img-2.jpg',
        'image2'=>'frontend/assets/images/about/about-1.jpg',
        'image3'=>'frontend/assets/images/cta/img-1.jpg',
        'image4'=>'frontend/assets/images/testimonial/img-3.jpg',
        'image5'=>'frontend/assets/images/testimonial/img-1.jpg',
        'image6'=>'frontend/assets/images/contact/contact-1.jpg',
        'image7'=>'frontend/assets/images/logo/footer-logo-1.png'
       ]);
    }
}
