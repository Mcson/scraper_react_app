<?php

namespace App\Services;

use Carbon\Carbon;
use App\Models\ProductWebsite;
use Illuminate\Support\Facades\DB;
use App\Models\WebscrapperSchedule;
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

    public function getIcpProductsPaginate()
    {
        $paginatedProducts = DB::table('household_products')->paginate(10);
        return $paginatedProducts;
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

        foreach ($data['products'] as $productData) {

            $product = DB::table('household_products')
                ->where('id', $productData["product_id"])
                ->select('pcode', 'pname')
                ->first();

            // dd($data);
            
            $newProductWebsite = ProductWebsite::create([
                'pcode' => $product->pcode,
                'pname' => $product->pname,
                'module' => "dummy_module",
                'country' => "dummy_country",
                'terms_condition' => "dummy_terms_condition",
                'terms_condition_url' => $productData["terms_url"],
                'outlet_id' => $productData["outlet_id"],
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

            // save multiple btn_xpath
            foreach ($productData["btn_xpaths"] as $btn_xpath) {
            
                $newBtnXpath = ProductWebsiteButton::create([
                    'registered_hh_id' => $newProductWebsite->id,
                    'buttons_xpath' => $btn_xpath,
                    'created_at' => now(),
                ]);

            }

            // save multiple specs_xpath
            foreach ($productData["specs_xpaths"] as $value) {
            
                $newSpecsXpath = ProductWebsiteSpecification::create([
                    'registered_hh_id' => $newProductWebsite->id,
                    'label' => $value["specs_label"],
                    'specs_xpath' => $value["specs_xpath"],
                    'created_at' => now(),
                ]);

            }
    
        }

        return response()->json(['success' => 'Product Website saved successfully!']);
    }

    public function getRegisteredProductWebsite()
    {
        $data = ProductWebsite::paginate(10);
        return $data;
    }
}
