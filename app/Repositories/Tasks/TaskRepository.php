<?php

namespace App\Repositories\Tasks;

use App\Models\Task;
use Illuminate\Support\Carbon;

class TaskRepository{

    public function store(array $data)
    {
        $task = new Task();

        $task->company_id = $data['company_id'];
        $task->user_id = $data['user_id'];
        $task->name = $data['name'];
        $task->description = $data['description'];
        $task->is_completed = 0;
        $task->start_at = Carbon::now();
        $task->expired_at = Carbon::now()->addDays(7);

        $task->save();

        return $task;
    }
}
