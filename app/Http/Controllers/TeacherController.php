<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Models\specialization;
use App\Models\Gender;
use Illuminate\Support\Facades\Hash;

class TeacherController extends Controller
{

    public function index()
    {
        $Teachers = Teacher::all();
        return view('backend.teachers.index' , compact('Teachers'));
    }


    public function create()
    {

        $specializations = specialization::all();
        $Genders = Gender::all();

        return view('backend.teachers.create' , compact('specializations' , 'Genders'));
    }


    public function store(Request $request)
    {
        Teacher::create([

         'name'=>['ar'=>$request->name , 'en'=>$request->name_en],
         'Email'=>$request->Email,
         'password'=>Hash::make($request->password),
         'specialization_id'=>$request->specialization_id,
         'gender_id'=>$request->gender_id,
         'Joining_Date'=>$request->Joining_Date,
         'Adress'=>$request->Adress

        ]);
        session()->flash('Add', 'تمت عمليه الاضافه بنجاح');
        return redirect('teachers');
    }


    public function show(Teacher $teacher)
    {
        //
    }


    public function edit($id)
    {
        $specializations = specialization::all();
        $Genders = Gender::all();
        $Teacher = Teacher::find($id);

        return view('backend.teachers.edit',compact('specializations' , 'Genders' , 'Teacher'));
    }


    public function update(Request $request, $id)
    {

        $Teacher = Teacher::find($id);

        $Teacher->update([

            'name'=>['ar'=>$request->name , 'en'=>$request->name_en],
            'Email'=>$request->Email,
            'password'=>$request->password,
            'specialization_id'=>$request->specialization_id,
            'gender_id'=>$request->gender_id,
            'Joining_Date'=>$request->Joining_Date,
            'Adress'=>$request->Adress

        ]);
        session()->flash('Edit', 'تمت عمليه التعديل بنجاح');
        return redirect('teachers');

    }


    public function destroy($id)
    {
        Teacher::destroy($id);

        session()->flash('Deleted', 'تمت عمليه الحذف بنجاح');
        return redirect('teachers');
    }
}
