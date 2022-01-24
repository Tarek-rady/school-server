@extends('layouts.backend.master')

@section('title')
قائمه الاقسام
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
        <li class="breadcrumb-item active">الاقسام</li>
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
            <button type="button" class="button x-small" data-toggle="modal" data-target="#AddSection">
                اضافه قسم
                </button>
        @include('backend.sections.create')

        </div>


        <div class="card card-statistics h-100">
            <div class="card-body">
                <div class="accordion gray plus-icon round">

                    @foreach ($Grades as $Grade)

                        <div class="acd-group">
                            <a href="#" class="acd-heading"> {{ $Grade->name }}</a>
                            <div class="acd-des">

                                <div class="row">
                                    <div class="col-xl-12 mb-30">
                                        <div class="card card-statistics h-100">
                                            <div class="card-body">
                                                <div class="d-block d-md-flex justify-content-between">
                                                    <div class="d-block">
                                                    </div>
                                                </div>
                                                <div class="table-responsive mt-15">
                                                    <table class="table center-aligned-table mb-0">
                                                        <thead>
                                                        <tr class="text-dark">
                                                            <th>#</th>
                                                            <th>اسم القسم</th>
                                                            <th>اسم المرحله</th>
                                                            <th>اسم الصف</th>
                                                            <th>الحاله</th>
                                                            <th>العمليات</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>

                                                        @foreach ($Grade->Sections as $Section)
                                                            <tr>

                                                                <td>{{ $loop->index +1 }}</td>
                                                                <td>{{ $Section->Section_name }}</td>
                                                                <td>{{ $Section->Grade->name}}</td>
                                                                <td>{{ $Section->Classes->name}}</td>
                                                                <td>

                                                                    @if( $Section->status == 1 )

                                                                    <label class="badge badge-success">نشط</label>


                                                                    @elseif ($Section->status ==  2)

                                                                    <label class="badge badge-danger">غير نشط</label>

                                                                    @endif


                                                                </td>

                                                                <td>

                                                                    <a href="#" class="btn btn-outline-info btn-sm" data-toggle="modal" data-target="#Edit{{ $Section->id }}">تعديل</a>
                                                                    <button class="btn btn-outline-danger btn-sm" title="حذف" data-toggle="modal"
                                                                    data-target="#Delete{{ $Section->id }}"><i class="fa fa-trash"></i>
                                                                    </button>
                                                                </td>

                                                            </tr>



                                                         @include('backend.sections.edit')
                                                         @include('backend.sections.delete')

                                                        @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                </div>
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

@endsection
