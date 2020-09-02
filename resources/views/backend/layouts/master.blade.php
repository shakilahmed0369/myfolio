<!DOCTYPE html>
<html lang="en">

  @include('backend.layouts.top')

  <body>

    <!-- ########## START: LEFT PANEL ########## -->
    @include('backend.layouts.sidebar')
    <!-- ########## END: LEFT PANEL ########## -->


    <!-- ########## START: HEAD PANEL ########## -->
    <!-- ####HEADER PANEL IS INCLUDED IN SIDEBAR #### -->
    <!-- ########## END: HEAD PANEL ########## -->


    <!-- ########## START: RIGHT PANEL ########## -->
    @include('backend.layouts.right-side-bar')
    <!-- ########## END: RIGHT PANEL ########## --->

    <!-- ########## START: MAIN PANEL ########## -->
    @yield('content')
    <!-- ########## END: MAIN PANEL ########## -->
    
    <!-- ########## START: JS links ########## -->
    @jquery
    @toastr_js
    @toastr_render
    @include('backend.layouts.bottom')
    <!-- ########## END: JS links ########## -->
  </body>
</html>
