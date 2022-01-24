@extends('layouts.backend.master')

@section('title')
تعديل بيانات المدرس
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
          <li class="breadcrumb-item active">تعديل البيانات</li>
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


                    <div class="col-xs-12">
                        <div class="col-md-12">
                            <br>
                            <form action="{{ route('teachers.update' , $Teacher->id) }}" method="post">
                                @method('PUT')
                             @csrf

                            <div class="form-row">
                                <div class="col">
                                    <label for="title">الايميل</label>
                                    <input type="email" name="Email" value="{{ $Teacher->Email }}" class="form-control">
                                    @error('Email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>


                                <div class="col">
                                    <label for="title">كلمه السر</label>
                                    <input type="password" name="password" value="{{ $Teacher->password }}" class="form-control">
                                    @error('password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <br>


                            <div class="form-row">
                                <div class="col">
                                    <label for="title">اسم المدرس باللغه العربيه</label>
                                    <input type="text" name="name" value="{{$Teacher->getTranslation('name','ar')}}" class="form-control">
                                    @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col">
                                    <label for="title">اسم المدرس باللغه الانجليزيه</label>
                                    <input type="text" name="name_en" value="{{$Teacher->getTranslation('name','en')}}" class="form-control">
                                    @error('name_en')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>


                            </div> <br>


                            <div class="form-row">
                                <div class="form-group col">
                                    <label for="inputCity">التخصص</label>
                                    <select class="custom-select my-1 mr-sm-2" name="specialization_id">

                                        <option selected value="{{ $Teacher->id }}"> {{ $Teacher->specialization_id }} </option>
                                        @foreach($specializations as $specialization)
                                            <option value="{{ $specialization->id }}">{{ $specialization->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('specialization_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>




                                <div class="form-group col">
                                    <label for="inputState">النوع</label>
                                    <select class="custom-select my-1 mr-sm-2" name="gender_id">
                                        <option selected value="{{ $Teacher->id }}"> {{ $Teacher->gender_id }} </option>
                                        @foreach($Genders as $Gender)
                                            <option value="{{ $Gender->id }}">{{ $Gender->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('gender_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <br>

                            <div class="form-row">
                                <div class="col">
                                    <label for="title">تاريخ العمل</label>
                                    <div class='input-group date'>
                                        <input class="form-control" type="text" value="{{ $Teacher->Joining_Date }}" id="datepicker-action" name="Joining_Date" data-date-format="yyyy-mm-dd"  required>
                                    </div>
                                    @error('Joining_Date')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <br>

                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">العنوان</label>
                                <textarea class="form-control" name="Adress"
                                          id="exampleFormControlTextarea1" rows="4">{{ $Teacher->Adress }}</textarea>
                                @error('Adress')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" type="submit">تعديل البيانات</button>
                    </form>
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
