<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TaskResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */

    //được sử dụng để chuyển đổi các mô hình Eloquent thành định dạng JSON để trả về trong API.
    public function toArray($request)
    {
        return [
            "name" => $this->name,
            "dec" => $this->description
        ];
    }
}
