<?php

namespace App\Http\Resources\Grade;

use Illuminate\Http\Resources\Json\JsonResource;

class GradeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'course' => [
                'code' => $this->course->code,
                'name' => $this->course->name,
                'fullname' => $this->course->fullname,
            ],
            'term' => [
                'name' => $this->term->name,
            ],
            'grade' => $this->grade,
        ];
    }
}
