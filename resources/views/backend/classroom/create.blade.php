
<!-- add_modal_class -->
<div class="modal fade" id="AddClass" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">
                    اضافه صف
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form class=" row mb-30" action="{{ route('classroom.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="repeater">
                            <div data-repeater-list="list_Classes">
                                <div data-repeater-item>
                                    <div class="row">

                                        <div class="col">
                                            <label for="Name"class="mr-sm-2">اسم الصف باللغه العربيه </label>
                                            <input class="form-control" type="text" name="name" required/>
                                        </div>


                                        <div class="col">
                                            <label for="Name_en" class="mr-sm-2">اسم الصف باللغه الانجليزيه </label>
                                            <input class="form-control" type="text" name="Class_name_en" required />
                                        </div>


                                        <div class="col"> <label for="Name_en"  class="mr-sm-2">اسم المرحله </label>
                                            <div class="box">
                                                <select class="fancyselect" name="grade_id">
                                                    @foreach ($Grades as $Grade)
                                                        <option value="{{ $Grade->id }}">{{ $Grade->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                        </div>

                                        <div class="col">
                                            <label for="Name_en" class="mr-sm-2">العمليات </label>
                                            <input class="btn btn-danger btn-block" data-repeater-delete
                                                type="button" value="حذف" />
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row mt-20">
                                <div class="col-12">
                                    <input class="button" data-repeater-create type="button" value="ادرج سجل"/>
                                </div>

                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-dismiss="modal">اغلاق</button>
                                <button type="submit"
                                    class="btn btn-success">حفظ البيانات</button>
                            </div>


                        </div>
                    </div>
                </form>
            </div>


        </div>

    </div>

</div>
</div>

