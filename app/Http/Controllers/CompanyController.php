<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Services\Companies\CompanyService;

class CompanyController extends Controller
{

    private $service;


    public function __construct(CompanyService $service)
    {
        $this->service = $service;
    }

    public function index($search = '')
    {
        return $this->service->all($search);
    }
}
