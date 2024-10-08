<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Task\CreateRequest;
use App\Http\Resources\TaskResource;
use App\Models\Task;
use App\Services\TaskService;
use Illuminate\Http\Request;
use App\Http\Requests\Api\Task\UpdateRequest;

class TaskController extends Controller
{
    protected $taskService;

    public function __construct(TaskService $taskService){
        $this->taskService = $taskService;
    }

    public function index()
    {
        return $this->taskService->all();
    }

    public function store(CreateRequest $createRequest)
    {  
        $request = $createRequest->validated();
        $result = $this->taskService->create($request);

        if ($result) {
            return new TaskResource($result);
        }

        return response()->json([
            'message' => 'error'

        ]);
    }

    public function show(Task $task)
    {
        return new TaskResource($task);
    }

    public function update(int $id, UpdateRequest $task) {
        $updated = $this->taskService->update($id, $task->all());
        if (!$updated) {
            return response(status: 404);
        }
        return response(status: 200);
    }

    public function delete(int $id) {
        $deleted = $this->taskService->remove($id);
        if ($deleted != NULL)
            return response(status: 200);
        return response(status: 404);
    }
}
