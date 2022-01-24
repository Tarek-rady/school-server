<?php

namespace App\Http\Controllers;

use App\Models\Section;
use App\Models\Grade;
use App\Models\Classroom;
use App\Models\Teacher;
use Illuminate\Http\Request;

class SectionController extends Controller
{

    public function index()
    {

        $list_Grades = Grade::all();
        $Grades = Grade::with(['Sections'])->get();
        $Teachers = Teacher::all();
       return view('backend.sections.index' , compact('Grades' , 'list_Grades' , 'Teachers'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
     $Section = Section::create([

        'Section_name'=>['ar'=>$request->Section_name , 'en'=>$request->Section_name_en] ,
        'grade_id' => $request->grade_id ,
        'classroom_id'=>$request->classroom_id,
        'status' =>$request->status
      ]);
      $Section->teachers()->attach($request->teacher_id);

      session()->flash('Add', 'تمت عمليه الاضافه بنجاح');
      return redirect('sections');
    }


    public function show(Section $section)
    {
        //
    }


    public function edit(Section $section)
    {
        //
    }


    public function update(Request $request, $id)
    {
        $Section = Section::find($id);
        $Section->update([

        'Section_name'=>['ar'=>$request->Section_name , 'en'=>$request->Section_name_en] ,
        'grade_id' => $request->grade_id ,
        'classroom_id'=>$request->classroom_id,
        'status' =>$request->status

        ]);

        session()->flash('Edit', 'تمت عمليه التعديل بنجاح');
      return redirect('sections');
    }


    public function destroy($id)
    {
        Section::destroy($id);

        session()->flash('Deleted', 'تمت عمليه الحذف بنجاح');
        return redirect('sections');
    }

    public function getclass($id)
    {
       $Classroom = Classroom::where('grade_id' , $id)->pluck('name' , 'id');
       return $Classroom ;
    }
}
