<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\nationalite;
use App\Models\blood;
use App\Models\religion;
use App\Models\My_parent;


class AddParent extends Component
{

   public $successMessage = '' ;
   public $currentStep =1 ;
   public $show_table = true ;
   public $updateMode = false ;
   public $parent_id;

 // بيانات الااب
 public $Email , $password , $name_father , $name_father_en ,  $National_ID_Father , $Passport_ID_Father ,
 $Phone_number , $Job_father , $blood_father_id , $nationalite_father_id , $religion_father_id ;


//  بيانات الام
public $name_mother ,$name_mother_en , $National_ID_mother , $Passport_ID_mother , $Phone_number_mother ,
 $Job_mother , $blood_mother_id , $nationalite_mother_id , $religion_mother_id ;



    //Real Time validation
     public function updated($propertyName)
     {
        $this->validateOnly($propertyName  , [

            'Email' => 'required|email',
            'National_ID_Father' => 'required|string|min:10|max:10|regex:/[0-9]{9}/',
            'Passport_ID_Father' => 'min:10|max:10',
            'Phone_number' => 'regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'National_ID_mother' => 'required|string|min:10|max:10|regex:/[0-9]{9}/',
            'Passport_ID_mother' => 'min:10|max:10',
            'Phone_number_mother' => 'regex:/^([0-9\s\-\+\(\)]*)$/|min:10'

        ]);
     }


    public function render()
    {
        return view('livewire.add-parent' , [
            'nationalites'=>nationalite::all(),
            'bloods' => blood::all(),
            'religions' => religion::all(),
            'My_parents' => My_parent::all(),
        ]);
    }


    public function firstStepSubmit()
    {

        $this->validate([
            'Email' => 'required|unique:my_parents,Email,'.$this->id,
            'password' => 'required',
            'name_father' => 'required',
            'name_father_en' => 'required',
            'Job_father' => 'required',
            'National_ID_Father' => 'required|unique:my_parents,National_ID_Father,' . $this->id,
            'Passport_ID_Father' => 'required|unique:my_parents,Passport_ID_Father,' . $this->id,
            'Phone_number' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'nationalite_father_id' => 'required',
            'blood_father_id' => 'required',
            'religion_father_id' => 'required',

        ]);

       $this->currentStep = 2;
    }




    public function secondStepSubmit()
    {
        $this->validate([

            'name_mother' => 'required',
            'name_mother_en' => 'required',
            'Job_mother' => 'required',
            'National_ID_mother' => 'required|unique:my_parents,National_ID_mother,' . $this->id,
            'Passport_ID_mother' => 'required|unique:my_parents,Passport_ID_mother,' . $this->id,
            'Phone_number_mother' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'nationalite_mother_id' => 'required',
            'blood_mother_id' => 'required',
            'religion_mother_id' => 'required',

        ]);

        $this->currentStep = 3 ;
    }

    public function back($step)
    {
    $this->currentStep = $step;
    }


    public function submitForm()

    {

        My_parent::create([

            'Email' => $this->Email ,
            'password' => $this->password ,
            'name_father' => ['ar'=>$this->name_father , 'en'=>$this->name_father_en]  ,
            'National_ID_Father' => $this->National_ID_Father ,
            'Passport_ID_Father' => $this->Passport_ID_Father ,
            'Phone_number' => $this->Phone_number ,
            'Job_father' => $this->Job_father ,
            'blood_father_id' => $this->blood_father_id ,
            'nationalite_father_id' => $this->nationalite_father_id ,
            'religion_father_id' => $this->religion_father_id ,

            'name_mother' => ['ar'=>$this->name_mother , 'en'=>$this->name_mother_en] ,
            'National_ID_mother' => $this->National_ID_mother ,
            'Passport_ID_mother' => $this->Passport_ID_mother ,
            'Phone_number_mother' => $this->Phone_number_mother ,
            'Job_mother' => $this->Job_mother ,
            'blood_mother_id' => $this->blood_mother_id ,
            'nationalite_mother_id'=> $this->nationalite_mother_id ,
            'religion_mother_id' => $this->religion_mother_id

        ]);

        $this->currentStep = 1;

        $this->successMessage = 'تمت عمليه الحفظ بنجاح ' ;

        $this->clearform();

    }




public function clearform()
{
  $this->Email = '';
  $this->password = '';
  $this->name_father = '' ;
  $this->name_father_en = '' ;
  $this->National_ID_Father = '' ;
  $this->Passport_ID_Father = '' ;
  $this->Phone_number = '' ;
  $this->Job_father = '' ;
  $this->blood_father_id = '' ;
  $this->nationalite_father_id = '';
  $this->religion_father_id = '' ;
  $this->name_mother = '' ;
  $this->name_mother_en = '' ;
  $this->National_ID_mother = '' ;
  $this->Phone_number_mother = '' ;
  $this->Passport_ID_mother='';
  $this->Job_mother = '' ;
  $this->blood_mother_id = '' ;
  $this->nationalite_mother_id = '';
  $this->religion_mother_id ='' ;


}

public function showformadd()
{
     $this->show_table = false ;
}

public function showform()
{
    $this->show_table = true ;
}

public function edit($id)
{
  $this->show_table = false ;
  $this->updateMode = true ;
  $My_parent = My_parent::where('id' , $id)->first();
   $this->parent_id = $id;
  $this->Email = $My_parent->Email  ;
  $this->password = $My_parent->password  ;
  $this->name_father = $My_parent->getTranslation('name_father' , 'ar')  ;
  $this->name_father_en = $My_parent->getTranslation('name_father' , 'en')  ;
  $this->National_ID_Father = $My_parent->National_ID_Father  ;
  $this->Passport_ID_Father = $My_parent->Passport_ID_Father  ;
  $this->Phone_number = $My_parent->Phone_number  ;
  $this->Job_father = $My_parent->Job_father  ;
  $this->blood_father_id  = $My_parent->blood_father_id   ;
  $this->nationalite_father_id = $My_parent->nationalite_father_id  ;
  $this->religion_father_id = $My_parent->religion_father_id  ;
  $this->name_mother = $My_parent->getTranslation('name_mother' , 'ar')  ;
  $this->name_mother_en = $My_parent->getTranslation('name_mother' , 'en')  ;
  $this->National_ID_mother = $My_parent->National_ID_mother  ;
  $this->Passport_ID_mother = $My_parent->Passport_ID_mother  ;
  $this->Phone_number_mother = $My_parent->Phone_number_mother  ;
  $this->Job_mother = $My_parent->Job_mother  ;
  $this->blood_mother_id  = $My_parent->blood_mother_id   ;
  $this->nationalite_mother_id = $My_parent->nationalite_mother_id  ;
  $this->religion_mother_id = $My_parent->religion_mother_id  ;

}

public function firstStepSubmit_edit()
{
    $this->updateMode = true ;
    $this->currentStep = 2;
}

public function secondSteptepSubmit_edit()
{
    $this->updateMode = true ;
    $this->currentStep = 3;
}

public function editForm()
{
    if ($this->parent_id) {

        $My_parent = My_parent::find($this->parent_id);
        $My_parent->update([

            'Email' => $this->Email ,
            'password' => $this->password ,
            'name_father' => ['ar'=>$this->name_father , 'en'=>$this->name_father_en]  ,
            'National_ID_Father' => $this->National_ID_Father ,
            'Passport_ID_Father' => $this->Passport_ID_Father ,
            'Phone_number' => $this->Phone_number ,
            'Job_father' => $this->Job_father ,
            'blood_father_id' => $this->blood_father_id ,
            'nationalite_father_id' => $this->nationalite_father_id ,
            'religion_father_id' => $this->religion_father_id ,

            'name_mother' => ['ar'=>$this->name_mother , 'en'=>$this->name_mother_en] ,
            'National_ID_mother' => $this->National_ID_mother ,
            'Passport_ID_mother' => $this->Passport_ID_mother ,
            'Phone_number_mother' => $this->Phone_number_mother ,
            'Job_mother' => $this->Job_mother ,
            'blood_mother_id' => $this->blood_mother_id ,
            'nationalite_mother_id'=> $this->nationalite_mother_id ,
            'religion_mother_id' => $this->religion_mother_id

        ]);
        $this->currentStep = 1;
        $this->successMessage = 'تمت عمليه التعديل بنجاح ' ;
        $this->clearform();

    } else {

         return 'exeotion' ;
    }


}

public function delete($id)
{
    My_parent::find($id)->delete();;
    $this->currentStep = 1;
}








}

