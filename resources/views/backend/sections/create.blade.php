    <!--اضافة قسم جديد -->
    <div class="modal fade" id="AddSection" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true">
   <div class="modal-dialog" role="document">
       <div class="modal-content">

           <div class="modal-header">
               <h5 class="modal-title" style="font-family: 'Cairo', sans-serif;"
                   id="exampleModalLabel">
                   اضافه القسم
                   </h5>

               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
               </button>

           </div>


           <div class="modal-body">

               <form action="{{ route('sections.store') }}" method="POST">
                   @csrf
                   <div class="row">
                       <div class="col">
                           <label for="Section_name"> اسم الصف باللفه العربيه </label>
                           <input type="text" name="Section_name" class="form-control" >
                       </div>

                       <div class="col">
                           <label for="Section_name_en"> اسم الصف باللفه الانجليزيه </label>
                           <input type="text" name="Section_name_en" class="form-control" >
                       </div>

                   </div>
                   <br>


                   <div class="col">
                       <label for="inputName" class="control-label">اسم المرحله</label>
                       <select name="grade_id" class="custom-select">
                           <!--placeholder-->
                           <option value="" selected  disabled> -- اختر اسم المرحله --</option>
                           @foreach ($Grades as $Grade)
                               <option value="{{ $Grade->id }}"> {{ $Grade->name }} </option>

                           @endforeach

                       </select>
                   </div>


                   <br>

                   <div class="col">

                    <label for="inputName"  class="control-label"> اسم الصف </label>
                       <select name="classroom_id" class="custom-select">   </select>
                   </div><br>


                   <div class="col">
                    <label for="inputName" class="control-label">اسم المدرس</label>
                    <select multiple name="teacher_id[]" class="form-control" id="exampleFormControlSelect2">
                        @foreach($Teachers as $Teacher)
                            <option value="{{$Teacher->id}}">{{$Teacher->name}}</option>
                        @endforeach
                    </select>
                  </div>


                   <div class="col">
                       <label> الحاله </label>
                       <select name="status" class="custom-select">
                         <option value="">-- اختار من بين القائمه --</option>
                        <option value="1"> نشط  </option>
                        <option value="2"> غير نشط </option>

                       </select>


                   </div>
           </div>



           <div class="modal-footer">
               <button type="button" class="btn btn-secondary"
                       data-dismiss="modal">اغلاق</button>
               <button type="submit"
                       class="btn btn-danger">حفظ البيانات</button>
           </div>
           </form>
       </div>
   </div>
</div>




