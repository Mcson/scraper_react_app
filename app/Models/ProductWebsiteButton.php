<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductWebsiteButton extends Model
{
    use HasFactory;

    protected $table = 'product_website_buttons';

    protected $fillable = [
        'registered_hh_id',
        'label',
        'buttons_xpath',
    ];
}
