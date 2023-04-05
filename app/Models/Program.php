<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $table = 'programs';

    protected $fillable = [
        'program_name',
        'program_img',
        'detail',
        'total_cost',
        'day_amount',
    ];

    public function day_details(){
        return $this->hasMany(Day_detail::class);
    }

    public function reservations(){
        return $this->hasMany(Reservation::class);
    }
}
