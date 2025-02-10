<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';

    protected $fillable = ['book_name', 'author', 'review', 'link', 'image', 'country', 'year'];

    public $timestamps = false;
}


