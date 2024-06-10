<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Users\UserService;

class UserController extends Controller
{

    private $service;

    public function __construct(UserService $service)
    {
        $this->service = $service;
    }

    public function index($id){
        return $this->service->all($id);
    }
}
