<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;
use App\Http\Requests\StoreGradeRequest;

class GradeController extends Controller
{

    public function index()
    {
        $Grades = Grade::all();
        return view('backend.grades.index' , compact('Grades'));
    }

    public function create()
    {
       return view('backend.grades.create');
    }


    public function store(StoreGradeRequest $request)
    {
      $validated = $request->validated();
       Grade::create([
        'name'=>['ar'=>$request->name , 'en'=>$request->name_en] ,
        'notes'=>$request->notes,

       ]);

       session()->flash('Add', 'تمت عمليه الاضافه بنجاح');
       return redirect('grades');

    }


    public function show(Grade $grade)
    {
        //
    }

    public function edit(Grade $grade)
    {
        //
    }


    public function update(Request $request, $id)
    {



       $Grades = Grade::find($id);
       $Grades->update([

       'name'=>['ar'=>$request->name , 'en'=>$request->name_en],
       'notes'=>$request->notes,
       ]);

       session()->flash('Edit', 'تمت عمليه التعديل بنجاح');
       return redirect('grades');
    }

    public function destroy($id)
    {

        Grade::destroy($id);

        session()->flash('Deleted', 'تمت عمليه الحذف بنجاح');
       return redirect('grades');

    }
}
