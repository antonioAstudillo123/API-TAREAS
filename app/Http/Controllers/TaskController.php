<?php

namespace App\Http\Controllers;


use App\Services\Tasks\TaskService;
use App\Http\Requests\CreatePostRequest;

class TaskController extends Controller
{
    private $service;

    public function __construct(TaskService $service)
    {
        $this->service = $service;
    }

    public function store(CreatePostRequest $request)
    {
        $data = $request->all();

        return $this->service->store($data);

        return response()->json(['data' => $this->service->store($data)] , 200);
    }
}
