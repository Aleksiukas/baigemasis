<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public $fillable = ['title', 'pages', 'isbn', 'short_description', 'author_id'];

    public function author(){
        return $this->belongsTo('App\Author');
    }

}
