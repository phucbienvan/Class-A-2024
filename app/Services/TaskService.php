<?php
<<<<<<< HEAD

namespace App\Services;

use App\Models\Task;
use PhpParser\Node\Stmt\TryCatch;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
use Spatie\LaravelIgnition\Http\Requests\UpdateConfigRequest;

class TaskService{

   // Biến chứa mô hình Task
    protected $model;

    // Constructor để khởi tạo đối tượng Task
    public function __construct(Task $task)
    {
        // Gán mô hình Task vào biến $model
        $this->model = $task;
    }

    // Phương thức tạo nhiệm vụ mới
    public function create($params): bool|Model|Task
    {
        // Bắt đầu khối try-catch để xử lý ngoại lệ
        try {      
            $params['status']=1;
            
            
            // Tạo mới một bản ghi trong cơ sở dữ liệu bằng mô hình Task
            // return $this->model->create($params);
            $task = $this->model->create($params);
            dd($task);
        } catch (\Exception $exception) {
            // Ghi log lỗi nếu có ngoại lệ xảy ra
            Log::error(message: $exception);
            
            // Trả về false nếu có lỗi xảy ra trong quá trình tạo
            return false;
        }
    }

}
=======
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
}
>>>>>>> 7fbd055b94355a4e66eeaae25932488a9754a3f5
