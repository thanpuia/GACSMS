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
        DB::table('courses')->insert([
            'semester' => "0",
            'name' => "none",
            'details' => "none"
        ]);
        DB::table('courses')->insert([
            'semester' => "1",
            'name' => "English",
            'details' => "English"
        ]);
        DB::table('courses')->insert([
            'semester' => "1",
            'name' => "Sociology",
            'details' => "Sociology"
        ]);
        DB::table('courses')->insert([
            'semester' => "1",
            'name' => "Philosophy",
            'details' => "Philosophy"
        ]);
        DB::table('courses')->insert([
            'semester' => "1",
            'name' => "Economy",
            'details' => "Economy"
        ]);
        DB::table('courses')->insert([
            'semester' => "1",
            'name' => "Public Administration",
            'details' => "Public Administration"
        ]);
        DB::table('courses')->insert([
            'semester' => "1",
            'name' => "Mizo",
            'details' => "Mizo"
        ]);
        DB::table('courses')->insert([
            'semester' => "1",
            'name' => "History",
            'details' => "History"
        ]);


        DB::table('courses')->insert([
            'semester' => "2",
            'name' => "English",
            'details' => "English"
        ]);
        DB::table('courses')->insert([
            'semester' => "2",
            'name' => "Sociology",
            'details' => "Sociology"
        ]);
        DB::table('courses')->insert([
            'semester' => "2",
            'name' => "Philosophy",
            'details' => "Philosophy"
        ]);
        DB::table('courses')->insert([
            'semester' => "2",
            'name' => "Economy",
            'details' => "Economy"
        ]);
        DB::table('courses')->insert([
            'semester' => "2",
            'name' => "Public Administration",
            'details' => "Public Administration"
        ]);
        DB::table('courses')->insert([
            'semester' => "2",
            'name' => "Mizo",
            'details' => "Mizo"
        ]);
        DB::table('courses')->insert([
            'semester' => "2",
            'name' => "History",
            'details' => "History"
        ]);
       
       
    }
}
