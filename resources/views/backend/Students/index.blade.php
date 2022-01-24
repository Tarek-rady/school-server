@extends('layouts.backend.master')

@section('title')
قائمه الطلاب
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
          <li class="breadcrumb-item active">الطلاب</li>
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

                            <a href="{{ route('students.create') }}" class="btn btn-success btn-sm" role="button"
                               aria-pressed="true">اضافه طالب</a><br><br>
                            <div class="table-responsive">


                                <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                       data-page-length="50"
                                       style="text-align: center">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>اسم الطالب</th>
                                        <th>الايميل</th>
                                        <th>النوع</th>
                                        <th>الجنسيه</th>
                                        <th>فصيله الدم</th>
                                        <th>تاريخ الميلاد</th>
                                        <th>اسم المرحله</th>
                                        <th>اسم الصف</th>
                                        <th>اسم القسم</th>
                                        <th>اسم الاب</th>
                                        <th>السنه الدراسيه</th>
                                        <th>العمليات</th>


                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($Students as $Student)
                                        <tr>
                                        <td>{{ $loop->index +1 }}</td>
                                        <td>{{ $Student->name }}</td>
                                        <td>{{ $Student->Email }}</td>
                                        <td>{{ $Student->gender->name }}</td>
                                        <td>{{ $Student->nationalite->name }}</td>
                                        <td>{{ $Student->blood->name }}</td>
                                        <td>{{ $Student->Date_birth }}</td>
                                        <td>{{ $Student->Grade->name }}</td>
                                        <td>{{ $Student->Classroom->name }}</td>
                                        <td>{{ $Student->Sections->Section_name }}</td>
                                        <td>{{ $Student->My_parent->name_father }}</td>
                                        <td>{{ $Student->academic_year }}</td>





                                            <td>
                                                <a href="{{ route('students.edit' , $Student->id) }}" class="btn btn-info btn-sm" role="button" aria-pressed="true"><i class="fa fa-edit"></i></a>
                                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#Delete_Student{{ $Student->id }}" title="حذف"><i class="fa fa-trash"></i></button>
                                                {{-- <a href="" class="btn btn-warning btn-sm" role="button" aria-pressed="true"><i class="far fa-eye"></i></a> --}}
                                            </td>
                                        </tr>
                                        @include('backend.Students.delete')
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
<!-- row closed -->


@endsection
@section('js')
@endsection
