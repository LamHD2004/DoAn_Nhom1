<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class auction_details extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'id_product',
        'fee',
        'time_start',
        'time_end'
    ];

}
