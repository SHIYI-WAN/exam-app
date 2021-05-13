<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';
    protected $primarykey = 'id';
    public function bookac()
    {
        return $this->hasOneThrough(
            Category::class,
            Author::class,
            'category_id', 
            'author_id', 
            'id', 
            'id' 
        );
    }
