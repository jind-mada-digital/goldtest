<?php

namespace Goldtest\Mall\Classes;

use OFFLINE\Mall\Classes\Utils\DefaultMoney as BaseDefaultMoney;

class DefaultMoney extends BaseDefaultMoney
{
    protected function render($contents, array $vars)
    {
        $price = number_format(
            $vars['price'],
            $vars['currency']->decimals, '.', "'"
        );

        return $vars['currency']->code . ' ' . $price;
    }
}
