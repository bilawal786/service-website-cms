<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\str;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            'name'=>'Project Details',
            'image'=>'frontend/assets/images/portfolio/img-1.jpg',
            'image1'=>'frontend/assets/images/breadcrumb/img-3.jpg',
            'heading1'=>'Creative 3D Illustration',
            'description1'=>'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis quasi architeto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit asperna turaut odit aut fugit sed quia consequntur magni dolore eosqui ratione voluptatem seque nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem',
            'heading2'=>'Project Benefit',
            'description2'=>'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porroses quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore dolore magnam',
            'categoryid'=>'1',
            'serviceid'=>'1',
            'client'=>'Microsoft LTS, Washington',
            'date'=>'25 February 2022',
            'location'=>'55 Main Street, New York',
            'image2'=>'frontend/assets/images/portfolio/single-img-1.jpg',
            'summarydescription'=>'On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish.',
        ]);
    }
}
