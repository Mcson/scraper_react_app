<?php

use Carbon\Carbon;
use App\Models\WebscrapperSchedule;
use Illuminate\Support\Facades\Log;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;
use App\Console\Commands\RunWebScrapperSchedules;


Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

Artisan::command('scrapper:run-schedules', function () {
    $now = Carbon::now()->timezone('America/New_York');
    Log::info('Current time: ' . $now->toDateTimeString());
    $this->info('Current time: ' . $now->toDateTimeString());

    $schedules = WebscrapperSchedule::all();
   
    foreach ($schedules as $schedule) {
        if (shouldRunSchedule($schedule, $now)) {
            $this->info('Running schedule with ID: ' . $schedule->id);
            Log::info('Running schedule with ID: ' . $schedule->id);

            runSchedule($schedule);
        }
    }
})->everyFiveSeconds();

// Helper function to determine if the schedule should run
function shouldRunSchedule(WebscrapperSchedule $schedule, Carbon $now)
{
   
    $isTimeToRun = $schedule->time_hh == $now->format('G') && $schedule->time_mm == (int)$now->format('i');
    $date = Carbon::parse($schedule->date);
   
    switch ($schedule->frequency) {
        case 'Daily':
            return $isTimeToRun;
        case 'Weekly':
            return $isTimeToRun && $date->dayOfWeek === $now->dayOfWeek;
        case 'Monthly':
            return $isTimeToRun && $date->day === $now->day;
        default:
            return false;
    }
   
}

// Helper function to run the schedule and display associated products
function runSchedule(WebscrapperSchedule $schedule)
{
    $products = $schedule->products;

    if ($products->isEmpty()) {
        Log::info('No products associated with schedule: ' . $schedule->id);
    } else {
        foreach ($products as $scheduleProduct) {
            $product = $scheduleProduct->product;

            if ($product) {
                Log::info("Product Code: {$product->pcode}, Product Name: {$product->pname}");
            } else {
                Log::info("Product with code {$scheduleProduct->pcode} not found.");
            }
        }
    }
}