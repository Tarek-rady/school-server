<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use App\Http\Resources\ClassesReourse;
use Illuminate\Http\Request;
use App\Models\Classroom;
use Illuminate\Support\Facades\Validator;

class ClasessController extends Controller
{
    use ApiResponseTrait;
      public function index()
      {
          $classes = ClassesReourse::collection(Classroom::all());
          return $this->apiResponse($classes , 'ok' , 200);
      }

      public function show($id)
      {
          $class = Classroom::find($id);
          if($class){
              return $this->apiResponse($class , 'class has view sucess' , 200);
          }else{
            return $this->apiResponse(null , 'class not found' , 404);
          }
      }

      public function store(Request $request)
      {
        $validator = Validator::make($request->all(), [
            'name'     => 'required|unique:classrooms|max:100',
            'grade_id' => 'required|max:5',
        ]);
        if ($validator->fails()) {
            return $this->apiResponse(null , $validator->errors() , 404 );
        }
         $classes = Classroom::create($request->all());
         if($classes){
            return $this->apiResponse($classes , 'class has created sucessfully' , 200);
        }else{
          return $this->apiResponse(null , 'class not save' , 404);
        }
      }

      public function update(Request $request , $id)
      {

         $class = Classroom::find($id);
         $class->update($request->all());
         if($class){
            return $this->apiResponse($class , 'class has update sucessfully' , 200);
        }else{
          return $this->apiResponse(null , 'class not found' , 404);
        }

      }

      public function destroy($id)
      {
         $class = Classroom::find($id);
        if(!$class){
            return $this->apiResponse($class , 'class not found' , 404);
        }else{
           $class->delete($id);
          return $this->apiResponse(null , 'class deleted sucessfully' , 201);
        }
      }
}
