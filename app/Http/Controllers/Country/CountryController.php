<?php

namespace App\Http\Controllers\Country;

use App\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class CountryController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::with('provinces', 'provinces.cities')->get();
        return $this->showAll($countries);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $country = Country::findOrFail($id);
        return $this->showOne($country);
    }
}
