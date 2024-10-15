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

    /**
     * Show the form for creating a new resource.
     */
    public function createProductWebsite(Request $request)
    {
        // dd($request->all());

        try {
            $products = $this->webScraperServices->registerProductWebsite($request->all());
            
            return Redirect::back()->with(['success' => 'Product Website saved successfully!']);
        } catch (\Exception $e) {
            return Redirect::back()->with(['error' => $e->getMessage()]);
        }
        
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
