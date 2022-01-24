<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GradeReourse extends JsonResource
{

    public function toArray($request)
    {
        return [
            'id' => $this->id ,
            'name' =>$this->name ,
            'notes' => $this->notes
        ];
    }
}
