<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Day_detail extends Model
{
    use HasFactory;

    protected $table = 'day_details';

    protected $fillable = [
        'detail',
        'day_no',
    ];
}
