<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Task\CreateRequest;
use App\Http\Resources\TaskResource;
use App\Models\Task;
use App\Services\TaskService;
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
=======
use Illuminate\Http\Request;
>>>>>>> 7fbd055b94355a4e66eeaae25932488a9754a3f5

class TaskController extends Controller
{
    protected $taskService;

<<<<<<< HEAD
    public function __construct(TaskService $taskService)
    {
=======
    public function __construct(TaskService $taskService){
>>>>>>> 7fbd055b94355a4e66eeaae25932488a9754a3f5
        $this->taskService = $taskService;
    }

    public function index()
    {
<<<<<<< HEAD
       return response()->json(data:['massage'=>'hello would']);
    }

    public function store(CreateRequest $createRequest): JsonResource|JsonResponse
    {
        // Xác thực và lấy dữ liệu đã xác thực
        $request = $createRequest->validated();

        // Tạo nhiệm vụ mới thông qua TaskService
        $result = $this->taskService->create($request);

        // Kiểm tra kết quả trả về
        if ($result) {
            return new TaskResource($result);
            
        }

        // Trả về phản hồi lỗi nếu không thể tạo nhiệm vụ
        return response()->json([
            'message' => 'Đã xảy ra lỗi khi tạo nhiệm vụ',
        ]);
    }
    
    //Task $task đoạn này laravel xử lý yêu tìm đối tượng Task có ID trong csdl gán vào $task
=======
        return response()->json(['message' => 'Hello World!']);
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

>>>>>>> 7fbd055b94355a4e66eeaae25932488a9754a3f5
    public function show(Task $task)
    {
        return new TaskResource($task);
    }
<<<<<<< HEAD

    
    //BTVN function update and delete

    public function update(CreateRequest $createRequest, $idtask)
    {
        $task = Task::find($idtask);

        if ($task) {
        // Xác thực và lấy dữ liệu đã xác thực
        $request = $createRequest->validated();
        $task->update($request);
        return new TaskResource($task);
        }

        return response()->json([
            'message' => 'Không tồn tại task này',
        ]);
    }

    public function delete($idtask): JsonResource|JsonResponse
    {
    
        $task = Task::find($idtask);
        if ($task) {
            $task->delete();
            return response()->json(['message' => 'Đã xóa thành công']);
        }
        return response()->json([
            'message' => 'Không tồn tại task này',
        ]);

    }
}
=======
}
>>>>>>> 7fbd055b94355a4e66eeaae25932488a9754a3f5
