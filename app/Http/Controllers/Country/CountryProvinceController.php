<?php

namespace App\Http\Controllers\Country;

use App\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ApiController;

class CountryProvinceController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Country $country)
    {
        $provinces = $country->provinces;
        return $this->showAll($provinces);
    }
}
