<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\str;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'icon'=>'flaticon-strategy',
            'name'=>'Strategy',
            'price'=>'5000',
            'title1'=>'Product Management',
            'title2'=>'MVP Definition',
            'title3'=>'Product Strategy',
            'title4'=>'',
            'image'=>'frontend/assets/images/breadcrumb/img-2.jpg',
            'heading'=>'Build Your Business Workflow Faster',
            'subheading'=>'Professional Design Agency to provide solutions',
            'description'=>'Sed ut perspiciatis unde omnis iste natus error sit voluptate accusantium doloremque laudantium totam',
            'otherimages'=>'',
        ]);
    }
}
