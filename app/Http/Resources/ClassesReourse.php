<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ClassesReourse extends JsonResource
{

    public function toArray($request)
    {
        return [
          'id'       => $this->id       ,
          'name'     => $this->name     ,
          'grade_id' => $this->grade_id
        ];
        
    }
}
