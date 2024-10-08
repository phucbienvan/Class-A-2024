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
<<<<<<< HEAD

    //được sử dụng để chuyển đổi các mô hình Eloquent thành định dạng JSON để trả về trong API.
    public function toArray($request)
    {
        return [
            "name" => $this->name,
            "dec" => $this->description
=======
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'desc' => $this->description
>>>>>>> 7fbd055b94355a4e66eeaae25932488a9754a3f5
        ];
    }
}
