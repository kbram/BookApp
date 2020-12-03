<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table = 'books';
    public $timestamps = true;
    protected $guarded = [
        'id',
    ];
    protected $fillable = [
        'book_name',
        'author_id',
        'cost',
        'file_path',
        'published_date',
    ];
}
