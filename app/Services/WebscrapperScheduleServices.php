<?php

namespace App\Services;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\WebscrapperSchedule;
use App\Models\WebscrapperScheduleProduct;


class WebscrapperScheduleServices
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function createSchedule(array $data)
    {
        DB::beginTransaction();

        try {
            // parse the date and time form the input
            $date = Carbon::create($data['date']['year'], $data['date']['month'], $data['date']['day']);
            $time = $data['time'];
            $time_hh = $time['hour'];
            $time_mm = $time['minute'];

            // create schedule
            $schedule = WebscrapperSchedule::create([
                'title' => $data['title'],
                'date' => $date,
                'frequency' => $data['frequency'],
                'time_hh' => $time_hh,
                'time_mm' => $time_mm,
            ]);

            // attached products to the schedule
            foreach($data['products'] as $product) {
                WebscrapperScheduleProduct::create([
                    'schedule_id' => $schedule->id,
                    'pcode' => $product['pcode'],
                ]);
            }

            DB::commit();

            return $schedule;
        } catch (\Exception $e) {
            DB::rollback();
            throw $e;
        }
    }

    public function getSchedulesWithProducts()
    {
        $schedules = WebscrapperSchedule::with('products')
                                        ->select('id', 'title', 'frequency', 'date', 'time_hh', 'time_mm')
                                        ->orderBy('created_at', 'desc')
                                        ->get();

        // initialize an array for the formatted date
        $tableData = [];

        // loop through each schedule and product
        foreach($schedules as $schedule) {
            foreach ($schedule->products as $product) {
                $tableData[] = [
                    'id' => $product->id,
                    'pcode' => $product->pcode,
                    'frequency' => $schedule->frequency,
                    'title' => $schedule->title,
                    'date' => Carbon::parse($schedule->date)->format('F j, Y'),
                    'time' => str_pad($schedule->time_hh, 2, '0', STR_PAD_LEFT) . ':' . str_pad($schedule->time_mm, 2, '0', STR_PAD_LEFT),
                ];
            }
        }

        return $tableData;
    }
}
