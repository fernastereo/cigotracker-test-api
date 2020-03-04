<?php

namespace App\Http\Controllers\Statusorder;

use App\Statusorder;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class StatusorderController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $statusorders = Statusorder::all();
        return response()->json(['data' => $statusorders], 200);
    }

        /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $statusorder = Statusorder::findOrFail($id);
        return response()->json(['data' => $statusorder], 200);
    }
}
