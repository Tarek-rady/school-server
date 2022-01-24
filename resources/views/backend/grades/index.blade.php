@extends('layouts.backend.master')

@section('title')
قائمه المراحل
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
          <li class="breadcrumb-item active">المراحل</li>
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

                       {{-- button Add new Product --}}
                       <div class="row">
                            <button type="button" class="button x-small" data-toggle="modal" data-target="#AddGrade">
                            اضافه مرحله
                           </button>

                           @include('backend.grades.create')

                       </div><br>

                       <div class="table-responsive">
                           <table id="datatable" class="table table-striped table-bordered p-0 text-center table-hover">
                               <thead>
                               <tr>
                                   <th>#</th>
                                   <th> اسم المرحله </th>
                                   <th>الملاحظات</th>
                                   <th>العمليات</th>
                               </tr>
                               </thead>
                               <tbody>
                               @foreach($Grades as $Grade)
                                   <tr>
                                       <td>{{ $loop->index +1 }}</td>
                                       <td>{{ $Grade->name }}</td>
                                       <td>{{ $Grade->notes == true ? $Grade->notes : 'لا توجد ملاحظات'}} </td>

                                       <td>


                                        <button class="btn btn-success btn-sm" title="تعديل" data-toggle="modal"
                                                data-target="#Edit{{ $Grade->id }}"><i class="fa fa-edit"></i>
                                        </button>


                                        <button class="btn btn-danger btn-sm" title="حذف" data-toggle="modal"
                                                data-target="#Deleted{{ $Grade->id  }}"><i class="fa fa-trash"></i>
                                        </button>

                                       </td>
                                   </tr>

                               @include('backend.grades.edit')
                               @include('backend.grades.delete')

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
@endsection
