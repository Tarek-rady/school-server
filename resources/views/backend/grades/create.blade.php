
<!-- add_modal_Grade -->
<div class="modal fade" id="AddGrade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">
                    اضافه مرحله
                </h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>

            <div class="modal-body">
                <!-- add_form -->
                <form action="{{ route('grades.store') }}" method="POST">
                    @csrf

                    <div class="row">
                        <div class="col">
                            <label for="Name" class="mr-sm-2"> اسم المرحله باللغه العربيه </label>
                            <input id="Name" type="text" name="name" class="form-control">

                        </div>

                        <div class="col">
                            <label for="Name_en" class="mr-sm-2"> اسم المرحله باللغه الانجليزيه </label>

                            <input type="text" class="form-control" name="name_en">
                        </div>

                    </div>


                    <div class="form-group">
                        <label for="exampleFormControlTextarea1"> الملاحظات </label>

                        <textarea class="form-control" name="notes" id="exampleFormControlTextarea1"
                            rows="3"></textarea>
                    </div>
                    <br><br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"
                    data-dismiss="modal">اغلاق</button>
                <button type="submit" class="btn btn-success">اضافه</button>
            </div>
            </form>

        </div>
    </div>
</div>

