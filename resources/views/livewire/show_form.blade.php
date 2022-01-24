@extends('layouts.backend.master')

@section('title')
قائمه اولياء الامور
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
          <li class="breadcrumb-item active">اولياء الامور</li>
        </ol>
      </div>
    </div>

  </div>

@endsection

@section('content')
@livewire('add-parent')
@endsection


@section('js')
@livewireScripts
@endsection
