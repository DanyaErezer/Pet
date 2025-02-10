<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnreadBook extends Model
{
    use HasFactory;
    protected $table = 'unread_books';

    protected $fillable = ['book_name', 'author', 'review', 'link', 'image', 'country', 'year'];

    public $timestamps = false;
}
