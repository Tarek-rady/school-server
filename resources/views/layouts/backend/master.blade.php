<!DOCTYPE html>
<html lang="en" dir="{{ App::getLocale() == 'en' ? '' : 'rtl' }}">
<head>

 @include('layouts.backend.head')

</head>

<body>

<div class="wrapper">


    <!-- Loader -->
      <div id="pre-loader">
          <img src="{{asset('backend/assets/images/pre-loader/loader-01.svg')}}" alt="">
      </div>
    <!-- /Loader -->

    @include('layouts.backend.main-sidebar')


<!--Main content -->
<div class="main-content app-content">

@include('layouts.backend.main-header')


<!--container-->
<div class="container-fluid">

    <div class="row">


         <div class="content-wrapper">
                   @yield('page-title')
                   @yield('content')
                   @include('layouts.backend.footer')


          </div><!-- main content wrapper end-->
       </div><!-- row end-->
     </div><!-- container-fluid end-->
   </div><!--main-content end-->
</div><!-- wrapper end-->


@include('layouts.backend.script')


</body>
</html>
