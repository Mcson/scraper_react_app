<?php

namespace App\Services;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\WebscrapperSchedule;
use App\Models\ProductWebsite;
use App\Models\ProductWebsiteButton;
use App\Models\ProductWebsiteSpecification;


class WebScraperServices
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function getIcpProducts()
    {
        $products = DB::table('household_products')->get();
        return $products;
    }

    public function getIcpProductsAsSelectOption()
    {
        $products = DB::table('household_products')->select([
            '*',
            'id as value',
            'pname as label',
        ])->get();

        return $products;
    }

    public function registerProductWebsite($data)
    {

        $product = DB::table('household_products')
            ->where('id', $data["product_id"])
            ->select('pcode', 'pname')
            ->first();

        // dd($data);
        
        $newProductWebsite = ProductWebsite::create([
            'pcode' => $product->pcode,
            'pname' => $product->pname,
            'module' => "dummy_module",
            'country' => "dummy_country",
            'terms_condition' => "dummy_terms_condition",
            'terms_condition_url' => $data["terms_url"],
            'outlet_id' => $data["outlet_id"],
            'url' => "dummy_url",
            'title' => "dummy_title",
            'price' => "dummy_price",
            'specs' => "dummy_specs",
            // 'user_id' => Auth()->user()->id,
            'user_id' => "dummy_user",
            'location' => "dummy_location",
            'icp_product' => "default",
            'created_at' => now(),
        ]);
        
        $newBtnXpath = ProductWebsiteButton::create([
            'registered_hh_id' => $newProductWebsite->id,
            'buttons_xpath' => $data["btn_xpath"],
            'created_at' => now(),
        ]);
        
        $newSpecsXpath = ProductWebsiteSpecification::create([
            'registered_hh_id' => $newProductWebsite->id,
            'label' => $data["specs_label"],
            'specs_xpath' => $data["specs_xpath"],
            'created_at' => now(),
        ]);

        return response()->json(['success' => 'Product Website saved successfully!']);
    }
}
