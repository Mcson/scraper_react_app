<?php

namespace App\Http\Controllers;

use App\Services\WebscrapperScheduleServices;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class ScheduleController extends Controller
{

    protected $webScrapperScheduleServices;

    public function __construct(WebscrapperScheduleServices $webScrapperScheduleServices)
    {
        $this->webScrapperScheduleServices = $webScrapperScheduleServices;
    }
    

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->webScrapperScheduleServices->getSchedulesWithProducts();
       
        return Inertia::render('Schedule', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'frequency' => 'required|string',
            'date' => 'required',
            'time' => 'required',
            'products' => 'required|array',
        ]);

        try {
            $schedule = $this->webScrapperScheduleServices->createSchedule($data);
            
            return Redirect::back()->with(['success' => 'Successfully created a schedule.']);
        } catch (\Exception $e) {
            return Redirect::back()->with(['error' => $e->getMessage()]);
        }
        // dd($request->all());
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
