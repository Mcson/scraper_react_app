<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebscrapperScheduleProduct extends Model
{
    use HasFactory;
    protected $fillable = ['schedule_id', 'pcode'];

    public function schedule(){
        return $this->belongsTo(WebscrapperSchedule::class, 'schedule_id');
    }

    public function product(){
        return $this->belongsTo(ProductWebsite::class, 'pcode', 'pcode');
    }
}
