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
        // Retrieve paginated schedules with related products
        $products = WebscrapperScheduleProduct::with('schedule')
        ->orderBy('created_at', 'desc')
        ->paginate(10);  // Keep the pagination

        $products->getCollection()->transform(function ($product) {
            return [
                'id' => $product->id,
                'pcode' => $product->pcode,
                'frequency' => $product->schedule->frequency,
                'title' => $product->schedule->title,
                'date' => Carbon::parse($product->schedule->date)->format('F j, Y'),
                'time' => str_pad($product->schedule->time_hh, 2, '0', STR_PAD_LEFT) . ':' . str_pad($product->schedule->time_mm, 2, '0', STR_PAD_LEFT),
            ];
        });

        return $products; 
    }

    public function deleteProduct($productId)
    {
        DB::beginTransaction();
        try {
            // find the product by id
            $product = WebscrapperScheduleProduct::findOrFail($productId);

            // get the schedule id before deleting the product
            $scheduleId = $product->schedule_id;

            // delete the product
            $product->delete();

            // check if there are any remaining products associated with this schedule
            $remainingProducts = WebscrapperScheduleProduct::where('schedule_id', $scheduleId)->count();

            if($remainingProducts === 0) {
                WebscrapperSchedule::where('id', $scheduleId)->delete();
            }
            DB::commit();
            return ['success' => true, 'message' => 'Product deleted successfully.'];
        } catch (\Exception $e) {
            DB::rollback();
            return ['success' => false, 'message' => 'Error deleting product: ' . $e->getMessage()];
        }
    }


}
