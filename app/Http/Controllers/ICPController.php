<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Services\WebScraperServices;


class ICPController extends Controller
{
    //
    protected $webScraperServices;

    public function __construct(WebScraperServices $webScraperServices)
    {
        $this->webScraperServices = $webScraperServices;
    }
    public function index() 
    {
        $icp = $this->webScraperServices->getIcpProductsPaginate();
        return Inertia::render('ICP', ['icp' => $icp]);
    }
}
