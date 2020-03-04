<?php

namespace App\Http\Controllers\Province;

use App\Province;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class ProvinceController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $provinces = Province::all();
        return $this->showAll($provinces);
    }

        /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $province = Province::findOrFail($id);
        return $this->showOne($province);
    }
}
