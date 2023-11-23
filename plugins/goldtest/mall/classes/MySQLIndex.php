<?php namespace Goldtest\Mall\Classes;

use DB;
use Illuminate\Support\Collection;
use OFFLINE\Mall\Classes\CategoryFilter\SortOrder\SortOrder;
use OFFLINE\Mall\Classes\Index\MySQL\MySQL;

class MySQLIndex extends MySQL
{
    /**
     * Type casts for index columns.
     * @var array
     */
    public $columnCasts = [
        'prices' => 'float',
        'sort_orders' => 'unsigned',
    ];

    /**
     * Override original method for list all available variants except the size
     *
     * @param string     $index
     * @param Collection $filters
     * @param SortOrder  $order
     *
     * @return array
     */
    protected function search(string $index, Collection $filters, SortOrder $order)
    {
        $idCol = $index === 'products' ? 'product_id' : 'variant_id';
        $otherIdCol = $idCol === 'product_id' ? 'variant_id' : 'product_id';

        $db = DB::table($this->db()->table)->select([
            $idCol . ' as id',
            $otherIdCol . ' as other_id',
            'is_ghost',
        ]);

        $db->where('index', $index)->where('published', true);

        $filters = $this->applySpecialFilters($filters, $db);

        $this->applyCustomFilters($filters, $db);

        $this->handleOrder($order, $db);
//        $db->orderBy('sort_orders', $order->direction());

        // List all available variants except the size
        $db->groupBy(DB::raw(
            'product_id, JSON_EXTRACT(property_values, \'$."5"\'), JSON_EXTRACT(property_values, \'$."7"\')'
        ));

        return $db->get()->toArray();
    }
}
