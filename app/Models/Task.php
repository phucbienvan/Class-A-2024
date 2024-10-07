<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
  // Sử dụng trait HasFactory để hỗ trợ tính năng factory cho mô hình này
  use HasFactory;

  // Thuộc tính chứa danh sách các trường có thể gán giá trị hàng loạt
  protected $fillable = [
      'name',        
      'description', 
      'status'       
  ];
}
