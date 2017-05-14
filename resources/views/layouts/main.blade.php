<!DOCTYPE html>
<html lang="en">

@include('component.head')
<body class="sidebar-color-grey font-source-sans-pro"><!--Modal Default-->
@include('component.sidebar_collapse')
    <!--END TEMPLATE SETTING--><!--BEGIN TOPBAR-->
 @include('component.topbar')
  
    <!--END TOPBAR--><!--BEGIN HORIZONTAL MENU-->
@include('component.horizontal')
 <div id="wrapper"><!--BEGIN PAGE WRAPPER-->
  <div id="page-wrapper"><!--BEGIN SIDEBAR MAIN-->
  		@include('component.sidebar')<!--END SIDEBAR MAIN-->
  		<!--BEGIN CHAT FORM-->
  		@include('component.chat')
    @yield('content')
  </div> <!--END PAGE CONTENT-->
  </div> <!--END PAGE WRAPPER-->
 	<!--BEGIN FOOTER-->
    @include('component.footer')
    <!--END FOOTER--></div>
@include('component.script')
</body>

</html>