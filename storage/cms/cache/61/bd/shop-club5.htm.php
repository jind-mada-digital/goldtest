<?php 
use RainLab\Pages\Classes\Page;
class Cms653f595949720642101580_f3fc10d347616dc49a4051e9b23b4a7bClass extends Cms\Classes\PageCode
{
public function onStart() {
$home = Page::find('index');

foreach($home->viewBag as $key => $value):
if (!Str::startsWith($key, 'shop_league5_')) {continue;}

$this[$key] = $value;
endforeach;


}
}
