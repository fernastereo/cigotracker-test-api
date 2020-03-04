<?php

namespace App\Http\Controllers\City;

use App\City;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class CityController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities = City::all();
        return $this->showAll($cities);
    }

        /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $city = City::findOrFail($id);
        return $this->showOne($city);
    }
}
