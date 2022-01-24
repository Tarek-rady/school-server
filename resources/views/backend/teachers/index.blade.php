@extends('layouts.backend.master')

@section('title')
قائمه المدرسين
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
          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}efault-color">الرئيسيه</a></li>
          <li class="breadcrumb-item active">المدرسين</li>
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
                <div class="col-xl-12 mb-30">
                    <div class="card card-statistics h-100">
                        <div class="card-body">
                            <a href="{{ route('teachers.create') }}" class="btn btn-success btn-md" role="button" aria-pressed="true">اضافه مدرس</a><br><br>

                            <div class="table-responsive">
                                <table id="datatable" class="table  table-hover table-sm table-bordered p-0"  data-page-length="50" style="text-align: center">


                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>الاسم</th>
                                        <th>الايميل</th>
                                        <th>التخصص</th>
                                        <th>النوع</th>
                                        <th>العنوان</th>
                                        <th>تاريخ العمل</th>
                                        <th>العمليات</th>
                                    </tr>

                                    </thead>


                                    <tbody>

                                    @foreach($Teachers as $Teacher)
                                        <tr>

                                        <td>{{ $loop->index +1 }}</td>
                                        <td>{{ $Teacher->name }}</td>
                                        <td>{{ $Teacher->Email }}</td>
                                        <td>{{ $Teacher->specializations->name }}</td>
                                        <td>{{ $Teacher->Genders->name }}</td>
                                        <td>{{ $Teacher->Joining_Date }}</td>
                                        <td>{{ $Teacher->Adress }}</td>

                                            <td>
                                                <a href="{{ route('teachers.edit' , $Teacher->id) }}" class="btn btn-info btn-sm" role="button" aria-pressed="true"><i class="fa fa-edit"></i></a>
                                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#Delete{{ $Teacher->id }}" title="حذف"><i class="fa fa-trash"></i></button>
                                            </td>
                                        </tr>
                                    @include('backend.teachers.delete')
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
@section('js')
@endsection
