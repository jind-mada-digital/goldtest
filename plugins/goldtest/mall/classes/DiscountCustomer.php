<?php

namespace Goldtest\Mall\Classes;

use Carbon\Carbon;
use Goldtest\Mall\Models\DiscountTrigger;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use October\Rain\Exception\ValidationException;
use OFFLINE\Mall\Classes\Totals\TotalsCalculatorInput;
use OFFLINE\Mall\Classes\Utils\Money;
use Illuminate\Support\Collection;
use RainLab\User\Facades\Auth;

class DiscountCustomer
{
    private $input;
    /**
     * @var int
     */
    private $total;
    /**
     * @var int
     */
    private $reducedTotal;
    /**
     * @var Collection
     */
    private $discounts;
    /**
     * @var bool
     */
    private $reducedTotalIsFixed = false;
    /**
     * @var Money
     */
    private $money;

    public function __construct(TotalsCalculatorInput $input, float $total, float $baseTotal = null)
    {
        $this->input        = $input;
        $this->total        = $total;
        $this->reducedTotal = $baseTotal ?? $total;
        $this->discounts    = collect([]);
        $this->money        = app(Money::class);
    }
    
    public function apply(): Collection
    {
        if(Auth::getUser() && Auth::getUser()->customer_group && Auth::getUser()->customer_group->discount){
            $savings            = $this->total * Auth::getUser()->customer_group->percentageDecimal;
            //dd(Auth::getUser()->customer_group->percentageDecimal);
            //dd($this->total);
            //dd( $savings);
            $this->reducedTotal -= $savings;
            $this->discounts->push([
                'discount'          => Auth::getUser()->customer_group,
                'savings'           => $savings * -1,
                'savings_formatted' => $this->money->format($savings * -1),
            ]);
        }
        return $this->discounts;
    }
    /** modifier par manitra */

    public function reducedTotal(): ?float
    {
        return $this->reducedTotal;
    }
}
