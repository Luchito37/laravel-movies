<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public $fillable = ["title", "description", "thumb", "director", "original_language", "parental_rating", "release_date"];
}
