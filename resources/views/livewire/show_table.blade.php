<button class="btn btn-success btn-sm btn-lg pull-right" wire:click="showformadd" type="button">اضافه ولي امر</button><br><br>
<div class="table-responsive">
    <table id="datatable" class="table  table-hover table-sm table-bordered p-0" data-page-length="50"
           style="text-align: center">
        <thead>
        <tr class="table-success">
            <th>#</th>
            <th>الايميل</th>
            <th>اسم الاب</th>
            <th>رقم الهويه</th>
            <th>رقم الباسبور </th>
            <th>رقم التليفون</th>
            <th> وظيفه الاب</th>
            <th>فصيله الدم</th>
            <th> الجنسيه  </th>
            <th>الديانه</th>
            <th>العمليات</th>



        </tr>
        </thead>
        <tbody>

        @foreach ($My_parents as $My_parent)
            <tr>
                 <td>{{ $loop->index +1 }}</td>
                <td>{{ $My_parent->Email }}</td>
                <td>{{ $My_parent->name_father }}</td>
                <td>{{ $My_parent->National_ID_Father }}</td>
                <td>{{ $My_parent->Passport_ID_Father }}</td>
                <td>{{ $My_parent->Phone_number }}</td>
                <td>{{ $My_parent->Job_father }}</td>
                <td>{{ $My_parent->blood->name }}</td>
                <td>{{ $My_parent->nationalite->name }}</td>
                <td>{{ $My_parent->religion->name }}</td>

                <td>
                    <button wire:click="edit({{ $My_parent->id }})" title="تعديل"
                            class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button>
                    <button type="button" class="btn btn-danger btn-sm" wire:click="delete({{ $My_parent->id }})" title="حذف"><i class="fa fa-trash"></i></button>

                </td>
            </tr>

        @endforeach

    </table>
</div>
