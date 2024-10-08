<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
<<<<<<< HEAD
  // Sử dụng trait HasFactory để hỗ trợ tính năng factory cho mô hình này
  use HasFactory;

  // Thuộc tính chứa danh sách các trường có thể gán giá trị hàng loạt
  protected $fillable = [
      'name',        
      'description', 
      'status'       
  ];
=======
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'status'
    ];
>>>>>>> 7fbd055b94355a4e66eeaae25932488a9754a3f5
}
