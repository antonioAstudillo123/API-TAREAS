<?php

namespace App\Services\Tasks;

use App\Models\User;
use App\Models\Company;
use App\Repositories\Tasks\TaskRepository;

class TaskService{
    private $repository;

    public function __construct(TaskRepository $repository)
    {
        $this->repository = $repository;
    }

    public function store(array $data)
    {
        $user = User::find($data['user_id']);

        if($user->tasks()->where('is_completed', false)->count() >=5)
        {
            return [
                'message' => 'Este usuario tiene un límite de 5 tareas pendientes. Por lo tanto, no es posible asignarle más tareas en este momento.',
            ];
        }

        $task = $this->repository->store($data);

        return [
            'id' => $task->id,
            'name' => $task->name,
            'descripcion' => $task->description,
            'user' => User::find($task->user_id)->name,
            'company' => [
                'id' => $task->company_id,
                'name' => Company::find($task->company_id)->name,
            ],
        ];

    }
}
