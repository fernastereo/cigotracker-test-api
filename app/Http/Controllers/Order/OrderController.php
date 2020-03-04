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
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Reglas de validacion:
        $rules = [
            'firstname' => 'required',
            'phonenumber' => 'required',
            'scheduleddate' => 'required',
            'streetaddress' => 'required',
            'email' => 'email',
        ];
        //Esto ejecuta las regleas de validacion contra los datos
        //si no pasan se genera una escepcion sino sigue el curso del codigo
        $this->validate($request, $rules);

        $fields = $request->all(); //Asignamos todo el request a una variable campos
        //Luego sobreescribimos los campos que no deben ser manipulados por el usuario sino internamente
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
}
