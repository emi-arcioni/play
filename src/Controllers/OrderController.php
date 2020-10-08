<?php

namespace FuquIo\Play\Controllers;

use Illuminate\Http\Request;
use FuquIo\Play\Models\Order;
use FuquIo\Play\Events\OrderCreated;
use FuquIo\Play\Requests\OrderRequest;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function create(OrderRequest $request)
    {
        $order = Order::create([
            'description' => $request->input('description'),
            'price' => $request->input('price')
        ]);

        event(new OrderCreated($order));
    }
}
