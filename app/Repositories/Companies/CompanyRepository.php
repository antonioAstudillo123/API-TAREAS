<?php

namespace App\Repositories\Companies;

use App\Models\User;
use App\Models\Company;


class CompanyRepository{


    /*
        Obtenemos todos las compañias con sus respectivas tareas
    */
    public function all()
    {
        $companies = Company::with('tasks')->get();

        return $this->resetResult($companies);

    }

    public function allWithSearch($search)
    {
        $companies = Company::with('tasks')->where('name', 'like', "%$search%")->get();

        return $this->resetResult($companies);

    }

    private function resetResult($companies)
    {
        return $companies->map(function ($company) {
            return [
                'id' => $company->id,
                'name' => $company->name,
                'tasks' => $company->tasks->map(function ($task) {
                    return [
                        'id' => $task->id,
                        'name' => $task->name,
                        'description' => $task->description,
                        'user' => User::find($task->user_id)->name,
                        'is_completed' => $task->is_completed,
                        'start_at' => $task->start_at,
                        'expired_at' => $task->expired_at,
                    ];
                }),
            ];
        });
    }

}
