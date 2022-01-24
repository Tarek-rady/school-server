<!-- edit_modal_Grade -->
<div class="modal fade" id="Edit{{ $Classroom->id  }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
       <div class="modal-content">
           <div class="modal-header">
               <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"  id="exampleModalLabel">
                   تعديل الصف
               </h5>

               <button type="button" class="close" data-dismiss="modal"  aria-label="Close">
                   <span aria-hidden="true">&times;</span>
               </button>
           </div>



           <div class="modal-body">
               <!-- edit_form -->

               <form action="{{ route('classroom.update' ,$Classroom->id ) }}" method="post">
                   @method('PUT')
                   @csrf

                   <div class="row">
                       <div class="col">

                           <label for="Name" class="mr-sm-2">اسم الصف باللغه العربيه </label>
                           <input id="Name" type="text" value="{{$Classroom->getTranslation('name','ar')}}" name="name" class="form-control" required>

                       </div>

                       <div class="col">
                        <label for="Name_en" class="mr-sm-2">اسم الصف باللغه الانجليزيه :</label>
                        <input  class="form-control" type="text" value="{{$Classroom->getTranslation('name','en')}}" name="Class_name_en"/>

                    </div>

                   </div><br>



                   <div class="form-group">
                       <label for="exampleFormControlTextarea1"> اسم المرحله</label>
                       <select class="form-control form-control-lg"
                               id="exampleFormControlSelect1" name="grade_id">

                               <option value="{{ $Classroom->id }}"> {{ $Classroom->grade_id }} </option>

                               @foreach ($Grades as $Grade)
                               <option value="{{ $Grade->id }}">{{ $Grade->name }}</option>

                           @endforeach
                       </select>

                   </div>
                   <br><br>

                   <div class="modal-footer">
                       <button type="button" class="btn btn-secondary"
                               data-dismiss="modal">اغلاق</button>
                       <button type="submit"
                               class="btn btn-success">تعديل</button>
                   </div>
               </form>

           </div>
       </div>
   </div>
</div>
