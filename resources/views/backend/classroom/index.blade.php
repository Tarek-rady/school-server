@extends('layouts.backend.master')

@section('title')
قائمه الصفوف
@endsection

@section('css')
@endsection

@section('page-title')

<div class="page-title">

    <div class="row">
      <div class="col-sm-4">
          <h4 class="mb-0"> الرئيسيه</h4>
      </div>

      <div class="col-sm-8">
        <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="default-color">الرئيسيه</a></li>
          <li class="breadcrumb-item active">الصفوف</li>
        </ol>
      </div>
    </div>

  </div>

@endsection

@section('content')
@include('backend.massage')


<!-- row -->
<div class="row">
    <div class="col-md-12 mb-30">
               <div class="card card-statistics h-100">
                   <div class="card-body">

                       {{-- button Add new Class --}}
                       <button type="button" class="button x-small" data-toggle="modal" data-target="#AddClass">
                        اضافه صف
                       </button>

                       <button type="button" class="btn btn-danger btn-md" id="btn_delete_all" data-toggle="modal" data-target="#DeleteCheckbox">
                        حذف الصفوف المختاره
                       </button>

                       <br>



                       @include('backend.classroom.create')
                       @include('backend.classroom.delete_all')


                       <div class="table-responsive">
                           <table id="datatable" class="table table-striped table-bordered p-0 text-center table-hover">
                               <thead>
                               <tr>
                                <th><input name="select_all" id="example-select-all" type="checkbox" onclick="CheckAll('box1', this)" /></th>
                                   <th>#</th>
                                   <th> اسم الصف </th>
                                   <th> اسم المرحله</th>
                                   <th>العمليات</th>
                               </tr>
                               </thead>
                               <tbody>


                               @foreach($Classrooms as $Classroom)
                                   <tr>
                                    <td><input type="checkbox"  value="{{ $Classroom->id }}" class="box1" ></td>

                                    <td>{{ $loop->index +1 }}</td>
                                    <td>{{ $Classroom->name  }}</td>
                                    <td>{{ $Classroom->Grades->name }}</td>

                                       <td>
                                            <button class="btn btn-info btn-sm" title="تعديل" data-toggle="modal"
                                                data-target="#Edit{{ $Classroom->id  }}"><i class="fa fa-edit"></i>
                                            </button>

                                            <button class="btn btn-danger btn-sm" title="حذف" data-toggle="modal"
                                                   data-target="#Delete{{ $Classroom->id }}"><i class="fa fa-trash"></i>
                                           </button>



                                       </td>
                                   </tr>

                                   @include('backend.classroom.edit')
                                   @include('backend.classroom.delete')


                               @endforeach
                               </tbody>
                           </table>
                       </div>
                   </div>

               </div>
           </div>

       </div>
       <!-- row closed -->






@endsection
@section('js')

<script>
    function CheckAll(className, elem) {
        var elements = document.getElementsByClassName(className);
        var l = elements.length;
        if (elem.checked) {
            for (var i = 0; i < l; i++) {
                elements[i].checked = true;
            }
        } else {
            for (var i = 0; i < l; i++) {
                elements[i].checked = false;
            }
        }
    }
</script>


<script type="text/javascript">
    $(function() {
        $("#btn_delete_all").click(function() {
            var selected = new Array();
            $("#datatable input[type=checkbox]:checked").each(function() {
                selected.push(this.value);
            });
            if (selected.length > 0) {
                $('#delete_all').modal('show')
                $('input[id="delete_all_id"]').val(selected);
            }
        });
    });
</script>



@endsection
