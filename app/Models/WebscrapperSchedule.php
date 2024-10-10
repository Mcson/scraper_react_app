<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebscrapperSchedule extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'frequency', 'date', 'time_hh', 'time_mm'];

    public function products()
    {
        return $this->hasMany(WebscrapperScheduleProduct::class, 'schedule_id');
    }
}
