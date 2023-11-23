<?php namespace OFFLINE\Mall\Controllers;

use Backend;
use Backend\Classes\Controller;
use BackendMenu;
use Event;
use Flash;
use October\Rain\Exception\ValidationException;
use OFFLINE\Mall\Classes\Stats\OrdersStats;
use OFFLINE\Mall\Classes\Utils\Money;
use OFFLINE\Mall\Models\Order;
use OFFLINE\Mall\Models\PaymentLog;
use OFFLINE\Mall\Models\OrderProduct;
use OFFLINE\Mall\Models\OrderState;
use League\Csv\Writer as CsvWriter;

class Orders extends Controller
{
    public $implement = [
        Backend\Behaviors\ListController::class,
        Backend\Behaviors\ImportExportController::class,
        Backend\Behaviors\RelationController::class,
    ];

    public $listConfig = 'config_list.yaml';
    public $relationConfig = 'config_relation.yaml';
    public $importExportConfig = 'config_import_export.yaml';

    public $requiredPermissions = ['offline.mall.manage_orders'];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('OFFLINE.Mall', 'mall-orders', 'mall-orders');
    }

    public function index()
    {
        parent::index();
        $this->addCss('/plugins/offline/mall/assets/backend.css');
        $this->vars['stats'] = new OrdersStats();
        $this->vars['money'] = app(Money::class);
    }

    public function show()
    {
        $this->bodyClass = 'compact-container';
        $this->pageTitle = trans('offline.mall::lang.titles.orders.show');
        $this->addCss('/plugins/offline/mall/assets/backend.css');
        $this->vars['ordersList']      = Backend::url('offline/mall/orders');
        $this->vars['productUpdate']   = Backend::url('offline/mall/products/update');
        $this->vars['addressUpdate']   = Backend::url('offline/mall/addresses/update');
        $this->vars['customerPreview'] = Backend::url('rainlab/user/users/preview');

        $order = Order::with('products', 'order_state')->findOrFail($this->params[0]);

        $this->initRelation($order, 'payment_logs');

        $this->vars['order']        = $order;
        $this->vars['money']        = app(Money::class);
        $this->vars['orderStates']  = OrderState::orderBy('sort_order', 'ASC')->get();
        $this->vars['paymentState'] = $this->paymentStatePartial($order);
    }

    public function exportOrders($id) {

        $result = Order::with('products', 'order_state')->findOrFail($id);
        

        $customer = $result->customer;
        $user = $customer->user;

        $address = $result->customer->shipping_address;
        $address = $address['lines'] . ','. $address['city'] . ','. $address['state']['name'] . ',' . $address['zip'] . ',' . $address['country']['name'];
        $address = explode(',', $address);
        $address = array_filter($address);
        $address = implode(';', $address);
        
        // $csv->insertOne([
        //     $user->id,
        //     $user->name,
        //     $user->surname,
        //     $address,
        //     $user->goldtest_phone,
        //     $user->email,
        //     $customer->height,
        //     $customer->weight,
        // ]);
        
        $fileName = strtolower("{$user->surname}_{$user->name}_goldtest.vcf");
	  


        $content = "BEGIN:VCARD
VERSION:3.0
N:{$user->surname};{$user->name};;;
FN:{$user->name} {$user->surname}
TITLE:{$user->goldtest_civility}
ADR;TYPE=HOME:;;{$address}
TEL;type=CELL:{$user->goldtest_phone}
EMAIL;type=INTERNET;type=HOME;type=pref:{$user->email}
END:VCARD";
	  
$content = "BEGIN:VCARD
VERSION:3.0
N:{$user->surname};{$user->name};;;
FN:{$user->name} {$user->surname}
TITLE:{$user->goldtest_civility}
ADR;TYPE=HOME:;;{$address}
TEL;type=CELL:{$user->goldtest_phone}
EMAIL;type=INTERNET;type=HOME;type=pref:{$user->email}
END:VCARD";

        $vcfName = uniqid('orders-exp');
        $vcfPath = temp_path().'/'.$vcfName;
        \File::put($vcfPath, $content);

        return \Response::download($vcfPath, $fileName)->deleteFileAfterSend(true);
        
        /*$this->listRefresh();
        $widget = $this->listGetWidget();
        $widget->showPagination = false;
        $widget->prepareVars();
        //Flash::success($widget->vars['records']->count());
        $results = $widget->vars['records'];

        // file name when you download CSV
        $fileName = 'orders_export.csv';

        // prepare CSV writer
        $csv = CsvWriter::createFromFileObject(new \SplTempFileObject);
        $csv->setOutputBOM(CsvWriter::BOM_UTF8);
        
        // - no only name, surname, address, tel, email, height, weight, client number in CVS

        // add headers as per your need
        // $csv->insertOne(['Name', 'Flower']);
        
        $csv->insertOne([
            'Client Number',
            'Name',
            'Surname',
            'Address',
            'Telephone',
            'Email',
            'Height',
            'Weight'
        ]);

        // loop through your records and add to csv rows
        foreach ($results as $result) {
            //dd($result->attributes);
            //dd($result->customer->attributes);
            //dd($result->customer->address->attributes);
            $customer = $result->customer;
            $user = $result->customer->user;
            $address = $result->customer->shipping_address;
            $address = $address['company'] . ', '. $address['name'] . ', '. $address['lines'] . ', '. $address['zip'] . ', '. $address['city'] . ', '. $address['state']['name'] . ', ' . $address['country']['name'];
            $address = explode(',', $address);
            $address = array_filter($address);
            $address = implode(',', $address);

            // add single record to CSV
            $csv->insertOne([
                $user->id,
                $user->name,
                $user->surname,
                $address,
                $user->goldtest_phone,
                $user->email,
                $customer->height,
                $customer->weight,
            ]);
        }

        // Save for download
        $csvName = uniqid('orders-exp');
        $csvPath = temp_path().'/'.$csvName;
        $output = $csv->__toString();
        \File::put($csvPath, $output);

        // download it
        return \Response::download($csvPath, $fileName)->deleteFileAfterSend(true);*/
    }

    public function onChangeOrderState()
    {
        $orderState = OrderState::findOrFail(input('state'));

        $this->updateOrder(['order_state_id' => $orderState->id]);

        return [
            '#order_state' => $orderState->name,
        ];
    }


    public function onChangePaymentState()
    {
        $order    = Order::findOrFail(input('id'));
        $newState = input('state');

        $availableStatus = $order->payment_state::getAvailableTransitions();
        if ( ! in_array($newState, $availableStatus)) {
            throw new ValidationException([trans('offline.mall::lang.order.invalid_status')]);
        }

        $order->payment_state = $newState;
        $order->save();

        return [
            '#payment-state'        => trans($newState::label()),
            '#payment-state-toggle' => $this->paymentStatePartial($order),
        ];
    }

    public function onUpdateTrackingInfo()
    {
        $trackingNumber = input('trackingNumber');
        $trackingUrl    = input('trackingUrl');
        $notification   = (bool)input('notification', false);
        $shipped        = (bool)input('shipped', false);
        $completed      = (bool)input('completed', false);

        $data = ['tracking_url' => $trackingUrl, 'tracking_number' => $trackingNumber];

        if ($shipped) {
            $data['shipped_at'] = now();
        }
        if ($completed) {
            $state = OrderState::where('flag', OrderState::FLAG_COMPLETE)->first();
            if ($state) {
                $data['order_state_id'] = $state->id;
            }
        }

        $order = $this->updateOrder($data, false);

        $order->shippingNotification = $notification;

        Event::fire('mall.order.shipped', [$order]);

        return [
            '#shipped_at'  => $order->shipped_at ? $order->shipped_at->toFormattedDateString() : '-',
            '#order_state' => e($order->order_state->name),
        ];
    }

    public function onUpdateInvoiceNumber()
    {
        $invoiceNumber = input('invoiceNumber');

        $data = ['invoice_number' => $invoiceNumber];

        $this->updateOrder($data);
    }

    /**
     * Download a PDF invoice.
     *
     * @return mixed
     */
    public function invoice()
    {
        $id    = $this->params[0];
        $order = Order::with(['customer', 'products'])->findOrFail($id);

        return $order->getPDFInvoice()->stream(sprintf('mall-order-%s.pdf', $id));
    }

    public function onDelete($recordId = null)
    {
        $order = Order::findOrFail($recordId);
        $order->delete();

        Flash::success(trans('offline.mall::lang.order.deleted'));

        return Backend::redirect('offline/mall/orders');
    }

    protected function updateOrder(array $attributes, bool $stateNotification = true)
    {
        $order = Order::findOrFail(input('id'));
        $order->forceFill($attributes);

        // When updating the shipping information we don't care about the state change notification.
        $order->stateNotification = $stateNotification;

        $order->save();
        Flash::success(trans('offline.mall::lang.order.updated'));

        return $order;
    }

    protected function paymentStatePartial($order)
    {
        return $this->makePartial('payment_state', ['order' => $order]);
    }
  	public function onDuplicateOrder()
    {
    
	    $selectedOrderIds = \Request::input('checked');
	  	foreach($selectedOrderIds as $orderId){
		  $order = Order::find($orderId);
		  if(!$order){
			continue;
		  }	  	
		  $lastOrder=Order::orderBy("id","desc")->first();
		  if($lastOrder){
			$newOrderNumber=$lastOrder->order_number+1;
			$duplicateOrder=$order->replicate();
			$duplicateOrder->order_number=$newOrderNumber;
			if($duplicateOrder->save()){
			
			  $orderProducts=OrderProduct::where("order_id",$order->id)->get();
				if($orderProducts){
				  foreach($orderProducts as $orderProduct){
						$duplicateOrderProduct=$orderProduct->replicate();
						$duplicateOrderProduct->order_id=$duplicateOrder->id;
						$duplicateOrderProduct->save();
				  }
				}
			  
			  $paymentLog=PaymentLog::where("order_id",$order->id)->first();
			  if($paymentLog){
				$duplicatePaymentLog=$paymentLog->replicate();
				$duplicatePaymentLog->order_id=$duplicateOrder->id;
				if($duplicatePaymentLog->save()){
				  $duplicateOrder->payment_id=$duplicatePaymentLog->id;
				  $duplicateOrder->payment_hash=$order->payment_hash;
				  $duplicateOrder->save();
				}
				
			  }
			 }
		  }
		}
	  	
	  
	    Flash::success("Duplicated successfully!");
	  
	  return Backend::redirect('offline/mall/orders');
    }
}
