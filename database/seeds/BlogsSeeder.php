<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([
           'title'=>'Guide To Newly Suppored Modern CSS Pseudo',
            'fDescription'=>'Sit amet consecte adeiscin eiusme tempor incididunt labore dolore',
            'fImage'=>'frontend/assets/images/blog/img-1.jpg',
            'date'=>'02-25-2022',
            'image'=>'frontend/assets/images/blog/blog-single-1.jpg',
            'categoryid'=>'Web Design',
            'heading'=>'Powerful Terminal And Command Line Seeny Tools Modern Designing Better Links For Websites',
            'description'=>'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque lau dantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernate aut odit aut fugit, sed quia consequuntur magni dolores eosqui ratione voluptatem nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur adipise velit sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.',
            'author'=>'William K. Parker',
        ]);
    }
}
