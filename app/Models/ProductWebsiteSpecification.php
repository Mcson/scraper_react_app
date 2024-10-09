<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductWebsiteSpecification extends Model
{
    use HasFactory;

    protected $table = 'product_website_specifications';

    protected $fillable = [
        'registered_hh_id',
        'label',
        'specs_xpath',
    ];
}
