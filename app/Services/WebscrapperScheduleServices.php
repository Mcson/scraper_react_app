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
        // Retrieve paginated products with related schedule
        $products = WebscrapperScheduleProduct::with(['schedule.products']) // Eager load the schedule
            ->orderBy('created_at', 'desc')
            ->paginate(10);  // Paginate the products

        // Transform the products to include schedule details
        $products->getCollection()->transform(function ($product) {
            return [
                'id' => $product->id,
                'pcode' => $product->pcode,
                'schedule' => [
                    'id' => $product->schedule->id,
                    'title' => $product->schedule->title,
                    'frequency' => $product->schedule->frequency,
                    'date' => $product->schedule->date,
                    'time' => [
                        'hour' => str_pad($product->schedule->time_hh, 2, '0', STR_PAD_LEFT),
                        'minute' => str_pad($product->schedule->time_mm, 2, '0', STR_PAD_LEFT),
                    ],
                    'products' => $product->schedule->products->map(function ($scheduleProduct) {
                        return [
                            'id' => $scheduleProduct->id,
                            'pcode' => $scheduleProduct->pcode
                        ];
                    })->toArray(),
                ]
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

    public function updateSchedule(array $data, WebscrapperSchedule $schedule)
    {
       
        DB::beginTransaction();
    
        try {
            // Parse the date and ensure correct format
            $date = Carbon::create($data['date']['year'], $data['date']['month'], $data['date']['day']);
            $time_hh = $data['time']['hour'];
            $time_mm = $data['time']['minute'];
    
            // Update the schedule
            $schedule->update([
                'title' => $data['title'],
                'date' => $date,
                'frequency' => $data['frequency'],
                'time_hh' => $time_hh,
                'time_mm' => $time_mm,
            ]);
    
            // Update products (First remove the existing ones)
            WebscrapperScheduleProduct::where('schedule_id', $schedule->id)->delete();
            // dd($data['products']);
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
