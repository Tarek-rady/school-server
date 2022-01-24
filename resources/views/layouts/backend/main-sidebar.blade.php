<div class="side-menu-fixed">
    <div class="scrollbar side-menu-bg">
     <ul class="nav navbar-nav side-menu" id="sidebarnav">
       <!-- menu item Dashboard-->
       <li>
         <a href="javascript:void(0);" data-toggle="collapse" data-target="#dashboard">
           <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text">الرئيسيه</span></div>
           <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
         </a>
         <ul id="dashboard" class="collapse" data-parent="#sidebarnav">
           <li> <a href="{{ route('dashboard') }}">Dashboard 01</a> </li>

         </ul>
       </li>

       {{-- قائمه المراحل --}}

       <li>
         <a href="javascript:void(0);" data-toggle="collapse" data-target="#elements">
           <div class="pull-left"><i class="ti-palette"></i><span class="right-nav-text">المراحل</span></div>
           <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
         </a>
         <ul id="elements" class="collapse" data-parent="#sidebarnav">
           <li><a href="{{ route('grades.index') }}">قائمه المراحل</a></li>
         </ul>
       </li>




       <!-- قائمه الصفوف -->
       <li>
         <a href="javascript:void(0);" data-toggle="collapse" data-target="#calendar-menu">
           <div class="pull-left"><i class="ti-calendar"></i><span class="right-nav-text">الصفوف الدراسيه </span></div>
           <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
         </a>
         <ul id="calendar-menu" class="collapse" data-parent="#sidebarnav">
           <li> <a href="{{ route('classroom.index') }}"> قائمه الصفوف </a> </li>
         </ul>
       </li>



       <!--  الاقسام -->
       <li>
         <a href="javascript:void(0);" data-toggle="collapse" data-target="#chart">
           <div class="pull-left"><i class="ti-pie-chart"></i><span class="right-nav-text"> الاقسام</span></div>
           <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
         </a>
         <ul id="chart" class="collapse" data-parent="#sidebarnav">
           <li> <a href="{{ route('sections.index') }}">قائمه الاقسام</a> </li>
         </ul>
       </li>



       <!-- اولياء الامور-->
        <li>
         <a href="javascript:void(0);" data-toggle="collapse" data-target="#font-icon">
           <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text"> اولياء الامور </span></div>
           <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
         </a>
         <ul id="font-icon" class="collapse" data-parent="#sidebarnav">
           <li> <a href="{{ URL('add-parent') }}"> قائمه اولياء الامور </a> </li>

         </ul>
       </li>



       <!--  قائمه المدرسين -->

       <li>
         <a href="javascript:void(0);" data-toggle="collapse" data-target="#table">
           <div class="pull-left"><i class="ti-layout-tab-window"></i><span class="right-nav-text"> المدرسين</span></div>
           <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
         </a>
         <ul id="table" class="collapse" data-parent="#sidebarnav">
            <li> <a href="{{ route('teachers.index') }}">قائمه المدرسين</a> </li>
         </ul>
       </li>


       <!-- قائمه الطلاب-->
       <li>
         <a href="javascript:void(0);" data-toggle="collapse" data-target="#custom-page">
           <div class="pull-left"><i class="ti-layout-tab-window"></i><span class="right-nav-text"> الطلاب </span></div>
           <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
         </a>


         <ul id="custom-page" class="collapse" data-parent="#sidebarnav">
           <li> <a href="{{ route('students.index') }}">قائمه الطلاب</a> </li>
         </ul>
       </li>




{{--
       <!-- menu item Authentication-->
       <li>
         <a href="javascript:void(0);" data-toggle="collapse" data-target="#authentication">
           <div class="pull-left"><i class="ti-id-badge"></i><span class="right-nav-text">Authentication</span></div>
           <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
         </a>
         <ul id="authentication" class="collapse" data-parent="#sidebarnav">
           <li> <a href="login.html">login</a> </li>
           <li> <a href="register.html">register</a> </li>
           <li> <a href="lockscreen.html">Lock screen</a> </li>
         </ul>
       </li>
       <!-- menu item maps-->
       <li>
         <a href="maps.html"><i class="ti-location-pin"></i><span class="right-nav-text">maps</span> <span class="badge badge-pill badge-success float-right mt-1">06</span></a>
       </li>
       <!-- menu item timeline-->
       <li>
         <a href="timeline.html"><i class="ti-panel"></i><span class="right-nav-text">timeline</span> </a>
       </li>
       <!-- menu item Multi level-->
       <li>
         <a href="javascript:void(0);" data-toggle="collapse" data-target="#multi-level"><div class="pull-left"><i class="ti-layers"></i><span class="right-nav-text">Multi level Menu</span></div><div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div></a>
         <ul id="multi-level" class="collapse" data-parent="#sidebarnav">
         <li>
           <a href="javascript:void(0);" data-toggle="collapse" data-target="#auth">Level item 1<div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div></a>
           <ul id="auth" class="collapse">
             <li>
               <a href="javascript:void(0);" data-toggle="collapse" data-target="#login">Level item 1.1<div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div></a>
                 <ul id="login" class="collapse">
                   <li>
                   <a href="javascript:void(0);" data-toggle="collapse" data-target="#invoice">level item 1.1.1<div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div></a>
                   <ul id="invoice" class="collapse">
                     <li> <a href="#">level item 1.1.1.1</a> </li>
                     <li> <a href="#">level item 1.1.1.2</a> </li>
                   </ul>
                 </li>
               </ul>
             </li>
             <li> <a href="#">level item 1.2</a> </li>
           </ul>
         </li>
         <li>
           <a href="javascript:void(0);" data-toggle="collapse" data-target="#error">level item 2<div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div></a>
           <ul id="error" class="collapse" >
             <li> <a href="#">level item 2.1</a> </li>
             <li> <a href="#">level item 2.2</a> </li>
           </ul>
         </li> --}}
       </ul>
     </li>
   </ul>
 </div>
</div>
