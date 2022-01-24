<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\GradeReourse;
use Illuminate\Http\Request;
use App\Models\Grade;
use Illuminate\Support\Facades\Validator;

class GradeController extends Controller
{
    use ApiResponseTrait;

    public function index()
    {
        $grades = GradeReourse::collection(Grade::all()) ;
        return $this->apiResponse($grades , 'ok' , 200);
    }

    public function show($id)
    {
        $grade = Grade::find($id);

        if($grade){
            return $this->apiResponse(new GradeReourse($grade) , 'grade has sucess' , 200);
        }else{
            return $this->apiResponse(null , 'grade not found' , 404);
        }
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
        ]);
        if ($validator->fails()) {
            return $this->apiResponce(null , $validator->errors() , 404 );
        }

        $grade = Grade::create($request->all());
        if($grade){
             return $this->apiResponse(new GradeReourse($grade) , 'grade created sucessfully' , 201);
        }else{
            return $this->apiResponse(null , 'grade not save' , 201);
        }
    }


    public function update(Request $request , $id)
    {
        $grade = Grade::find($id);
        $grade->update($request->all());

        if($grade){
           return $this->apiResponse(new GradeReourse($grade) , 'grade has update Sucessfully' , 201);
        }else{
            return $this->apiResponse(null , 'grade not found' , 404);
        }
    }

    public function destroy($id)
    {
        $grade = Grade::find($id);
        if(!$grade){
            return $this->apiResponse(null , 'grade not found' , 404);
        }else{

            $grade->delete($id);
            return $this->apiResponse(new GradeReourse($grade) , 'grade deleted sucessfully' , 200);
        }
    }
}
