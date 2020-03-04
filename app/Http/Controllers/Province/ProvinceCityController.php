<?php

namespace App\Http\Controllers\Province;

use App\Province;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class ProvinceCityController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Province $province)
    {
        $cities = $province->cities;
        return $this->showAll($cities);
    }
}
