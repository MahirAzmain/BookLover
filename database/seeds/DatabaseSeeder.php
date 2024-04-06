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
        Eloquent::unguard();
         //$this->call(DatabaseSeeder::class);
        $file_path = resource_path('sql/books.sql');


        DB::unprepared(
            file_get_contents($file_path)
        );
    }
}
