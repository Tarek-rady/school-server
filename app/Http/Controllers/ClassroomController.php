<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\Grade;
use App\Http\Requests\StoreClassroomRequest;

use Illuminate\Http\Request;

class ClassroomController extends Controller
{

    public function index()
    {
         $Classrooms = Classroom::all();
         $Grades = Grade::all();

         return view('backend.classroom.index' , compact('Classrooms' , 'Grades'));

    }


    public function create()
    {
        //
    }


    public function store(StoreClassroomRequest $request)
    {
        $list_classes = $request->list_Classes;


        foreach ($list_classes as $list_class) {

           Classroom::create([

            'name' => ['ar'=>$list_class['name'] , 'en'=>$list_class['Class_name_en'] ],
            'grade_id'=>$list_class['grade_id'],

           ]);

        }
        session()->flash('Add', 'تمت عمليه الاضافه بنجاح');
        return redirect('classroom');
    }


    public function show(Classroom $classroom)
    {
        //
    }


    public function edit(Classroom $classroom)
    {
        //
    }


    public function update(Request $request, $id)
    {
        $Classrooms = Classroom::find($id);

        $Classrooms->update([

            'name'=> ['ar'=>$request->name , 'en'=>$request->Class_name_en] ,
            'grade_id'=>$request->grade_id,
        ]);

        session()->flash('Edit', 'تمت عمليه التعديل بنجاح');
        return redirect('classroom');

    }


    public function destroy($id)
    {
        Classroom::destroy($id);
        session()->flash('Deleted', 'تمت عمليه الحذف بنجاح');
        return redirect('classroom');
    }

    public function delete_all(Request $request)
    {

     $delete_all_id = explode("," , $request->delete_all_id) ;

     Classroom::whereIn('id' , $delete_all_id )->delete();
     session()->flash('Deleted', 'تمت عمليه الحذف بنجاح');
     return redirect('classroom');

    }
}
