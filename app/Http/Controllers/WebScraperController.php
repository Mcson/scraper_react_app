<?php

namespace App\Http\Controllers;

use App\Services\WebScraperServices;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Http\Request;

class WebScraperController extends Controller
{

    protected $webScraperServices;

    public function __construct(WebScraperServices $webScraperServices)
    {
        $this->webScraperServices = $webScraperServices;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = $this->webScraperServices->getIcpProductsAsSelectOption();
        return Inertia::render('Scraper')->with([
            'products' => $products
        ]);
    }

    public function registProductView()
    {
        $products = $this->webScraperServices->getIcpProductsAsSelectOption();
        return Inertia::render('RegisterProductWebsite')->with([
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createProductWebsite(Request $request)
    {

        $request->validate([
            'products' => 'required|array|min:1',
            'products.*.product_id' => 'required|string',
            'products.*.outlet_id' => 'required|string|nullable',
            'products.*.terms_url' => 'required|string|nullable',
            'products.*.product_url' => 'required|string|nullable',
            'products.*.product_title_xpath' => 'required|string|nullable',
            'products.*.product_price_xpath' => 'required|string|nullable',
            'products.*.btn_xpaths' => 'required|array|min:1',
            'products.*.btn_xpaths.*' => 'required|string',
            'products.*.specs_xpaths' => 'required|array|min:1',
            'products.*.specs_xpaths.*.specs_label' => 'required|string',
            'products.*.specs_xpaths.*.specs_xpath' => 'required|string',
        ], [            
            'products.*.product_id.required' => 'Product ID is required.',
            'products.*.outlet_id.required' => 'Outlet ID is required.',
            'products.*.terms_url.required' => 'The Terms URL is required.',
            'products.*.product_url.required' => 'The Product URL is required.',
            'products.*.product_title_xpath.required' => 'The Product Title XPath is required.',
            'products.*.product_price_xpath.required' => 'The Product Price XPath is required.',
            'products.*.btn_xpaths.required' => 'At least one Button XPath is required.',
            'products.*.specs_xpaths.required' => 'At least one Specs XPath is required.',
        ]);
        // dd($request->all());

        try {
            $products = $this->webScraperServices->registerProductWebsite($request->all());
            
            return Redirect::back()->with(['success' => 'Product Website saved successfully!']);
        } catch (\Exception $e) {
            return Redirect::back()->with(['error' => $e->getMessage()]);
        }
        
    }

    public function registeredProductView()
    {
        $registeredProducts = $this->webScraperServices->getRegisteredProductWebsite();
        // dd($registeredProducts);
        return Inertia::render('RegisteredProductWebsite')->with([
            'registered_products' => $registeredProducts
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
