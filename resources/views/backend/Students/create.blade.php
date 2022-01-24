@extends('layouts.backend.master')

@section('title')
اضافه طالب
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

<!-- row -->
<div class="row">
    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">


                <form method="post"  action="{{ route('students.store') }}" autocomplete="off" enctype="multipart/form-data">
                    @csrf

                    <h6 style="font-family: 'Cairo', sans-serif;color: blue">معلومات الطالب</h6><br>
                        <div class="row">



                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>اسم الطالب باللغه العربيه  <span class="text-danger">*</span></label>
                                    <input  type="text" name="name"  class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>اسم الطالب باللغه الانجليزيه <span class="text-danger">*</span></label>
                                    <input  class="form-control" name="name_en" type="text" >
                                </div>
                            </div>


                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>الايميل </label>
                                    <input type="email"  name="Email" class="form-control" >
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>كلمه السر</label>
                                    <input  type="password" name="password" class="form-control" >
                                </div>
                            </div>


                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="gender">النوع <span class="text-danger">*</span></label>

                                    <select class="custom-select mr-sm-2" name="gender_id">
                                        <option selected disabled>اختر من القائمه...</option>
                                        @foreach($Genders as $Gender)
                                            <option  value="{{ $Gender->id }}">{{ $Gender->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="nationalite_id">الديانه <span class="text-danger">*</span></label>
                                    <select class="custom-select mr-sm-2" name="nationalite_id">

                                        <option selected disabled>اختر من القائمه...</option>
                                        @foreach($nationalites as $nationalit)
                                            <option  value="{{ $nationalit->id }}">{{ $nationalit->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>


                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="blood">فصيله الدم </label>
                                    <select class="custom-select mr-sm-2" name="blood_id">
                                        <option selected disabled>اختر من القائمه...</option>
                                        @foreach($bloods as $blood)
                                            <option value="{{ $blood->id }}">{{ $blood->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>تاريخ الميلاد</label>
                                    <input class="form-control" type="text"  id="datepicker-action" name="Date_birth" data-date-format="yyyy-mm-dd">
                                </div>
                            </div>

                        </div>

                    <h6 style="font-family: 'Cairo', sans-serif;color: blue">معلومات الطالب</h6><br>
                    <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="grade">اسم المرحله <span class="text-danger">*</span></label>
                                    <select class="custom-select mr-sm-2" name="grade_id">
                                        <option selected disabled>اختر من القائمه...</option>
                                        @foreach($Grades as $Grade)
                                            <option  value="{{ $Grade->id }}">{{ $Grade->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="classroom_id">اسم الصف <span class="text-danger">*</span></label>
                                    <select class="custom-select mr-sm-2" name="classroom_id">

                                    </select>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="section_id">اسم القسم </label>
                                    <select class="custom-select mr-sm-2" name="section_id">

                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="parent_id">اسم ولي الامر <span class="text-danger">*</span></label>
                                    <select class="custom-select mr-sm-2" name="parent_id">
                                        <option selected disabled>اختر من القائمه...</option>
                                       @foreach($My_parents as $My_parent)
                                            <option value="{{ $My_parent->id }}">{{ $My_parent->name_father }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="academic_year"> السنه الدراسيه <span class="text-danger">*</span></label>
                                <select class="custom-select mr-sm-2" name="academic_year">
                                    <option selected disabled>اختر من القائمه</option>
                                    @php
                                        $current_year = date("Y");
                                    @endphp
                                    @for($year=$current_year; $year<=$current_year +1 ;$year++)
                                        <option value="{{ $year}}">{{ $year }}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                        </div><br>


                    <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" type="submit">حفظ البيانات</button>
                </form>

            </div>
        </div>
    </div>
</div>
<!-- row closed -->


@endsection
@section('js')

{{-- get classes --}}
<script>
    $(document).ready(function () {
        $('select[name="grade_id"]').on('change', function () {
            var grade_id = $(this).val();
            if (grade_id) {
                $.ajax({
                    url: "{{ URL::to('classes') }}/" + grade_id
                    , type: "GET"
                    , dataType: "json"
                    , success: function (data) {
                        $('select[name="classroom_id"]').empty();
                        $('select[name="section_id"]').val('');
                        $('select[name="classroom_id"]').append('<option selected disabled > -- اختر من القائمه --</option>');

                        $.each(data, function (key, value) {
                            $('select[name="classroom_id"]').append('<option value="' + key + '">' + value + '</option>');
                        });
                    }
                    ,
                });
            } else {
                console.log('AJAX load did not work');
            }
        });
    });
</script>



{{-- get sections --}}
<script>
    $(document).ready(function () {
        $('select[name="classroom_id"]').on('change', function () {
            var classroom_id = $(this).val();
            if (classroom_id) {
                $.ajax({
                    url: "{{ URL::to('getsections') }}/" + classroom_id
                    , type: "GET"
                    , dataType: "json"
                    , success: function (data) {
                        $('select[name="section_id"]').empty();
                        $.each(data, function (key, value) {
                            $('select[name="section_id"]').append('<option value="' + key + '">' + value + '</option>');
                        });
                    }
                    ,
                });
            } else {
                console.log('AJAX load did not work');
            }
        });
    });
</script>




@endsection
