<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $table = 'payments';
    public $timestamps = true;
    protected $guarded = [
        'id',
    ];
    protected $fillable = [
        'payment_date',
        'amount',
        'payment_cost',
        'author_id',
        'book_id',
    ];
}
