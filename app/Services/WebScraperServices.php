<?php

namespace App\Services;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\WebscrapperSchedule;
use App\Models\WebscrapperScheduleProduct;


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

        dd($data);
        $newProductWebsite = ProductWebsite::create([
            'pcode' => $data->pcode,
            'pname' => $data->pname,
            'module' => $data->module,
            'country' => $data->country,
            'terms_condition' => $data->terms_condition,
            'terms_condition_url' => $data->terms_condition_url,
            'outlet_id' => $data->outlet_id,
            'url' => $data->url,
            'title' => $data->title,
            'price' => $data->price,
            'specs' => $data->specs,
            'user_id' => $data->user_id,
            'location' => $data->location,
            'icp_product' => $data->icp_product,
            'created_at' => now(),
        ]);

        return response()->json(['success' => 'Product Website saved successfully!']);
    }
}
