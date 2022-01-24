<?php

namespace App\Http\Controllers\Api;

trait ApiResponseTrait
{
   public function apiResponse($data , $msg , $status){

    $array = [

        'data'    => $data ,
        'msg'     => $msg   ,
        'status'  => $status
    ];

    return response($array);

   }
}
