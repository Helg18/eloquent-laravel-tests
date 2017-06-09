<?php

namespace Eloquent;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = "books";

    protected $fillable = ['title', 'authors', 'status', 'synopsis', 'editorial', 'year', 'pages', 'price'];


}
