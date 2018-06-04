<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


// laravel knows that since this model is name Movie,
// its database table name is "movies"
class Movie extends Model {

    protected $table = 'movies';

}