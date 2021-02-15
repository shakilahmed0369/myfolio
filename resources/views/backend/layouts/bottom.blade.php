
    <script src="{{ asset('backend/lib/jquery/jquery.js') }}"></script>
    <script src="{{ asset('backend/lib/popper.js/popper.js') }}"></script>
    <script src="{{ asset('backend/lib/bootstrap/bootstrap.js') }}"></script>
    <script src="{{ asset('backend/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js') }}"></script>
    <script src="{{ asset('backend/lib/moment/moment.js') }}"></script>
    <script src="{{ asset('backend/lib/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ asset('backend/lib/jquery-switchbutton/jquery.switchButton.js') }}"></script>
    <script src="{{ asset('backend/lib/peity/jquery.peity.js') }}"></script>
    <script src="{{ asset('backend/lib/chartist/chartist.js') }}"></script>
    <script src="{{ asset('backend/lib/jquery.sparkline.bower/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('backend/lib/d3/d3.js') }}"></script>
    <script src="{{ asset('backend/lib/rickshaw/rickshaw.min.js') }}"></script>

    <script src="{{ asset('backend/lib/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('backend/lib/datatables-responsive/dataTables.responsive.js') }}"></script>
    
    {{-- CK Editor js --}}
    <script src="{{ asset('ckeditor/ckeditor.js')}}"></script>
    <script>CKEDITOR.replace('ckeditor');</script>
    {{-- CK Editor js End--}}

    <script src="{{ asset('backend/js/bracket.js') }}"></script>
    <script src="{{ asset('backend/js/ResizeSensor.js') }}"></script>
    <script src="{{ asset('backend/js/dashboard.js') }}"></script>
    <script src="{{ asset('backend/lib/imageupload/image-uploader.min.js') }}"></script>
    <script>
      $('.input-images').imageUploader();
    </script>
    <script>
      $(function(){
        'use strict'

        // FOR DEMO ONLY
        // menu collapsed by default during first page load or refresh with screen
        // having a size between 992px and 1299px. This is intended on this page only
        // for better viewing of widgets demo.
        $(window).resize(function(){
          minimizeMenu();
        });

        minimizeMenu();

        functionminimizeMenu() {
          if(window.matchMedia('(min-width: 992px)').matches && window.matchMedia('(max-width: 1299px)').matches) {
            // show only the icons and hide left menu label by default
            $('.menu-item-label,.menu-item-arrow').addClass('op-lg-0-force d-lg-none');
            $('body').addClass('collapsed-menu');
            $('.show-sub + .br-menu-sub').slideUp();
          } else if(window.matchMedia('(min-width: 1300px)').matches && !$('body').hasClass('collapsed-menu')) {
            $('.menu-item-label,.menu-item-arrow').removeClass('op-lg-0-force d-lg-none');
            $('body').removeClass('collapsed-menu');
            $('.show-sub + .br-menu-sub').slideDown();
          }
        }
      });
    </script>

<script>
  $('#datatable-work').DataTable({
  responsive: true,
  language: {
  searchPlaceholder: 'Search...',
  sSearch: '',
  lengthMenu:,
    }
  });
</script>

<script>
  $('#datatable1').DataTable({
  responsive: true,
  language: {
  searchPlaceholder: 'Search...',
  sSearch: '',
  lengthMenu: '_MENU_ items/page',
    }
  });
</script>


