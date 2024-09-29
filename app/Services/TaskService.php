<?php
namespace App\Services;

use App\Models\Task;
use Illuminate\Support\Facades\Log;
use Exception;
use Illuminate\Support\Facades\DB;

class TaskService {

    protected $model;
    public function __construct(Task $task)
    {
        $this->model = $task;
    }

    public function create($params)
    {
        try {
            $params['status'] = 1;
            
            return $this->model->create($params);
        } catch (Exception $exception) {
            Log::error($exception);

            return false;
        }
    }

    public function all() {
        $result = Task::all();
        return $result;
    }

    public function update(int $id, $params) : bool {
        $task = $this->model->find($id);
        if ($task == null)
            return false;
        $task->update($params);
        return true;
    }
}
