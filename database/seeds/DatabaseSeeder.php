<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(SettingsSeeder::class);
        $this->call(WebsiteImagesSeeder::class);
        $this->call(ServicesSeeder::class);
        $this->call(ProjectsSeeder::class);
        $this->call(BlogsSeeder::class);
    }
}
