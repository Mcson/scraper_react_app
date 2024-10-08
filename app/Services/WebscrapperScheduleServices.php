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
}
