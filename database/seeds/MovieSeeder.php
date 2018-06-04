<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        
        DB::table('movies')->insert([
            'title' => "Deadpool",
            'released_on' => '2016-02-12',
            'rating' => 5,
            'review' => "Those who thought 'Deadpool' might just be a smidge more violent than your 
                        standard Avengers or X-Men movie, know this: It's NOT for middle schoolers.",
        ]);

        DB::table('movies')->insert([
            'title' => "Django Unchained",
            'released_on' => "2013-01-18",
            'rating' => 5,
            'review' => "The story isn't as strong as either Leone or Corbucci's best work, but the 
                        iconic imagery and solid central performance from Nero make it easy to see why this became 
                        a worldwide success.",
        ]);

        DB::table('movies')->insert([
            'title' => "Inglourious Basterds",
            'released_on' => "2009-08-19",
            'rating' => 5,
            'review' => "This might just be my masterpiece', runs the last line of Inglourious Basterds.
                        While that may not be true, it's an often dazzling movie that sees QT back on 
                        exhilarating form.",
        ]);



    }
}
