
<!-- add_modal_Grade -->
<div class="modal fade" id="Edit{{ $Grade->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">
                    تعديل المرحله
                </h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>

            <div class="modal-body">

                <!-- add_form -->
                <form action="{{ route('grades.update' , $Grade->id ) }}" method="POST">
                    @method('PUT')
                    @csrf

                    <div class="row">
                        <div class="col">
                            <label for="name" class="mr-sm-2"> اسم المرحله باللغه العربيه </label>
                            <input id="name" type="text" name="name" value="{{$Grade->getTranslation('name','ar')}}" class="form-control">
                        </div>

                        <div class="col">
                            <label for="name_em" class="mr-sm-2"> اسم المرحله باللغه الانجليزيه </label>
                            <input type="text" class="form-control" value="{{$Grade->getTranslation('name','en')}}" name="name_en">
                        </div>

                    </div>


                    <div class="form-group">
                        <label for="exampleFormControlTextarea1"> الملاحظات </label>

                        <textarea class="form-control" name="notes" id="exampleFormControlTextarea1"
                            rows="3">{{$Grade->notes }}</textarea>
                    </div>
                    <br><br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"
                    data-dismiss="modal">اغلاق</button>
                <button type="submit" class="btn btn-success">تعديل</button>
            </div>
            </form>

        </div>
    </div>
</div>

