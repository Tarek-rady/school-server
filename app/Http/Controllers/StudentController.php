<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\blood;
use App\Models\nationalite;
use App\Models\Section;
use App\Models\My_parent;
use App\Models\Classroom;
use App\Models\Grade;
use App\Models\religion;
use App\Models\Gender;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreStudentsRequest;

class StudentController extends Controller
{

    public function index()
    {
        $Students = Student::all();
        return view('backend.Students.index' , compact('Students'));
    }


    public function create()
    {
        $bloods = blood::all();
        $nationalites = nationalite::all();
        $Sections = Section::all();
        $My_parents = My_parent::all();
        $Classrooms = Classroom::all();
        $Grades = Grade::all();
        $religions = religion::all();
        $Genders = Gender::all();



         return view('backend.Students.create', compact('bloods' , 'nationalites' , 'Sections'
         , 'My_parents' , 'Classrooms' , 'Grades' , 'religions' , 'Genders'));
    }


    public function store(Request $request)
    {

        Student::create([

            'name' => ['ar'=>$request->name , 'en'=>$request->name_en],
            'Email'=>$request->Email,
            'password'=>Hash::make($request->password),
            'gender_id'=>$request->gender_id ,
            'nationalite_id'=>$request->nationalite_id ,
            'blood_id'=>$request->blood_id,
            'Date_birth'=>$request->Date_birth ,
            'grade_id'=>$request->grade_id ,
            'classroom_id'=>$request->classroom_id ,
            'section_id'=>$request->section_id,
            'parent_id'=>$request->parent_id ,
            'academic_year'=>$request->academic_year

        ]);

        session()->flash('Add', 'تمت عمليه الاضافه بنجاح');
        return redirect('students');



    }


    public function show(Student $student)
    {
        //
    }


    public function edit($id)
    {
        $bloods = blood::all();
        $nationalites = nationalite::all();
        $Sections = Section::all();
        $My_parents = My_parent::all();
        $Classrooms = Classroom::all();
        $Grades = Grade::all();
        $religions = religion::all();
        $Genders = Gender::all();
        $Student = Student::find($id);

         return view('backend.Students.edit', compact('bloods' , 'nationalites' , 'Sections'
         , 'My_parents' , 'Classrooms' , 'Grades' , 'religions' , 'Genders' , 'Student'));
    }


    public function update(Request $request, $id)
    {
        $Student = Student::find($id);

        $Student->update([
            'name' => ['ar'=>$request->name , 'en'=>$request->name_en],
            'Email'=>$request->Email,
            'password'=>Hash::make($request->password),
            'gender_id'=>$request->gender_id ,
            'nationalite_id'=>$request->nationalite_id ,
            'blood_id'=>$request->blood_id,
            'Date_birth'=>$request->Date_birth ,
            'grade_id'=>$request->grade_id ,
            'classroom_id'=>$request->classroom_id ,
            'section_id'=>$request->section_id,
            'parent_id'=>$request->parent_id ,
            'academic_year'=>$request->academic_year
        ]);

        session()->flash('Edit', 'تمت عمليه التعديل بنجاح');
        return redirect('students');
    }


    public function destroy($id)
    {
      Student::destroy($id);

      session()->flash('Deleted', 'تمت عمليه الحذف بنجاح');
      return redirect('students');
    }

    public function getclasses($id)
    {
      $Classroom = Classroom::where('grade_id' , $id)->pluck('name' , 'id');

      return $Classroom;
    }

    public function getsections($id)
    {
        $Sections = Section::where('classroom_id' , $id)->pluck('Section_name' , 'id');
        return $Sections;
    }
}

