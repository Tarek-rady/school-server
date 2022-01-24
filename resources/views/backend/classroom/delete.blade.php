
  <!-- delete -->

  <div class="modal" id="Delete{{ $Classroom->id }}">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">حذف المرحله </h6><button aria-label="Close" class="close" data-dismiss="modal"
                        type="button"><span aria-hidden="true">&times;</span></button>
            </div>

            <form action="{{ route('classroom.destroy', $Classroom->id) }}" method="post">
            @method('DELETE')
            @csrf

                <div class="modal-body">
                    <p>هل انت متاكد من عملية الحذف ؟</p><br>
                    <input class="form-control" name="name" id="name" value="{{ $Classroom->name }}" type="text" readonly>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>
                    <button type="submit" class="btn btn-danger">حذف</button>
                </div>
        </div>
        </form>
    </div>
</div>

{{-- End modal delete  --}}
