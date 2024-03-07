<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class DiscounRefact extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'discount:refact';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'refact all db discount';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        DB::transaction(static function () {
            collect(DB::table('offline_mall_discounts')->where(function ($query) {
                $query->orWhereNotNull('product_id')
                    ->orWhereNotNull('product_ids')
                    ->orWhereNotNull('trigger')
                    ->orWhereNotNull('code');
            })
                ->get())->each(function ($item) {
                /** */
                $product_id = $item->product_id;
                $product_ids = $item->product_ids;
                $trigger = $item->trigger;
                $code = $item->code;
                $discount_id =  $item->id;
                /** */
                DB::table('offline_mall_discounts')->where('id', $discount_id)->update([
                    "product_id" => null,
                    "product_ids" => null,
                    "trigger" => null,
                    "code" => null
                ]);
                /** */
                if (DB::table('goldtest_mall_discount_trigger')->where([
                    'trigger' => $trigger,
                    'discount_id' => $discount_id
                ])->count() == 0) {
                    $id = DB::table('goldtest_mall_discount_trigger')->insertGetId([
                        'product_id' => $product_id,
                        'product_ids' => $product_ids,
                        'trigger' => $trigger,
                        'code' => $code,
                        'discount_id' => $discount_id
                    ]);
                    /** */
                    $discount_trigger = DB::table('goldtest_mall_discount_trigger')->find($id);
                    $discount = json_decode(json_encode($discount_trigger));
                    $discount->discount = DB::table('offline_mall_discounts')->find($discount_id);
                    /** */
                    collect(DB::table('offline_mall_prices')->where(['field' => 'totals_to_reach', 'priceable_type' => 'mall.discount', 'priceable_id' => $discount->discount->id])->get())->each(function ($price) use ($discount) {
                        DB::table('offline_mall_prices')->where([
                            'id' => $price->id
                        ])->update([
                            "priceable_id" => $discount->id,
                            "priceable_type" => 'mall.discount_trigger'
                        ]);
                    });
                    DB::table('offline_mall_cart_discount')->where(['discount_id' => $discount->discount->id])->update(['discount_id' => $discount->id]);

                    collect(DB::table('offline_mall_orders')->where('discounts', 'LIKE', '%"discount":{"id":' . $discount->discount->id . ',%')->get())->each(function ($item) use ($discount) {
                        $discount_ = collect(json_decode($item->discounts));
                        if ($discount_->contains('discount.id', $discount->discount->id) && !$discount_->has('discount.discount')) {
                            $discount_ = $discount_->map(function ($item)  use ($discount) {
                                if ($item->discount->id == $discount->discount->id) {
                                    $item->discount = $discount;
                                }
                                return $item;
                            });
                            DB::table('offline_mall_orders')->where('id', $item->id)->update([
                                "discounts" => json_encode($discount_)
                            ]);
                        }
                    });
                    collect(DB::table('offline_mall_payments_log')->where('order_data', 'LIKE', '%"discount":{"id":' . $discount->discount->id . ',%')->get())->each(function ($item) use ($discount) {
                        $order_data = json_decode($item->order_data);
                        if (isset($order_data->discounts)) {
                            //dd($order_data);
                            if (collect($order_data->discounts)->contains('discount.id', $discount->discount->id) && !collect($order_data->discounts)->has('discount.discount')) {
                                $order_data->discounts = collect($order_data->discounts)->map(function ($item)  use ($discount) {
                                    if ($item->discount->id == $discount->discount->id) {
                                        $item->discount = $discount;
                                    }
                                    return $item;
                                });
                                DB::table('offline_mall_payments_log')->where('id', $item->id)->update([
                                    "order_data" => json_encode($order_data)
                                ]);
                            }
                        }
                    });
                }
            });
        });
    }
}
