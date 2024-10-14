<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductWebsite extends Model
{
    use HasFactory;

    protected $table = 'product_websites';

    protected $fillable = [
       'pcode',
       'pname',
       'module',
       'country',
       'terms_condition',
       'terms_condition_url',
       'outlet_id',
       'url',
       'title',
       'price',
       'specs',
       'user_id',
       'location',
       'icp_product',
    ];

    function btn_xpath(){
        $this->hasMany(ProductWebsiteButton::class);
    }

    function spec_xpath(){
        $this->hasMany(ProductWebsiteButton::class);
    }

    public function scheduleProducts()
    {
        return $this->hasMany(WebscrapperScheduleProduct::class, 'pcode', 'pcode');
    }
}
