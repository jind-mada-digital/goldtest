<?php 
use RainLab\Pages\Classes\Page;
class Cms653f58ef933cd268630202_67be924f865f872f11dd3f80e9bb3934Class extends Cms\Classes\PageCode
{
public function onStart() {
$home = Page::find('index');

foreach($home->viewBag as $key => $value):
if (!Str::startsWith($key, 'shop_club5_')) { continue; }

$this[$key] = $value;
endforeach;
$this['tempproducts'] = \DB::table('offline_mall_property_values')
                            ->select('offline_mall_property_values.value')
                            ->join('offline_mall_products', 'offline_mall_property_values.product_id', 'offline_mall_products.id')
                            ->join('offline_mall_product_variants', 'offline_mall_property_values.variant_id', 'offline_mall_product_variants.id')
                            ->join('offline_mall_category_product', 'offline_mall_category_product.product_id', 'offline_mall_products.id')
                            ->where('offline_mall_category_product.category_id', 2)
                            ->where('offline_mall_products.published', 1)
                            ->where('offline_mall_product_variants.published', 1)
                            ->where('offline_mall_property_values.property_id', 7)
                            ->distinct('offline_mall_property_values.value')
                            ->pluck('offline_mall_property_values.value')
                            ->toArray();

$this['mycolours_temp'] = json_decode(\DB::table('offline_mall_properties')->where('id', '7')->first()->options, true);

$mycolours = [];

foreach($this['mycolours_temp'] as $item){
    if(in_array($item['value'], $this['tempproducts'])){
        $mycolours[$item['value']] = $item['color'];
    }
}

$this['mycolours'] = $mycolours;

}
}
