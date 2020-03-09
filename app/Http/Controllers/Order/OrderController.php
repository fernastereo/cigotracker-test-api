<?php

namespace App\Http\Controllers\Order;

use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;
use App\Order;

class OrderController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();
        return $this->showAll($orders);
        //return response()->json($orders);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation rules
        $rules = [
            'firstname' => 'required',
            'phonenumber' => 'required',
            'scheduleddate' => 'required',
            'streetaddress' => 'required',
            'email' => 'email',
        ];
        $this->validate($request, $rules);

        $fields = $request->all(); 
        $fields['statusorder_id'] = Order::PENDING_ORDER;

        $order = Order::create($fields);

        return $this->showOne($order, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::findOrFail($id);
        return $this->showOne($order);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        if ($request->has('statusorder_id')) {
            $order->statusorder_id = $request->statusorder_id;
        }

        if (!$order->isDirty()) {  
            return $this->errorResponse('Set a new status for the order', 422);
        }

        $order->save();

        return $this->showOne($order);
    }

    public function destroy(Order $order){
        $order->delete();

        return $this->showOne($order);
    }
}
