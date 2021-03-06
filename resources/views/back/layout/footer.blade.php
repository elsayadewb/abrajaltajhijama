
<footer class="main-footer  {{ setting()->d_footer}}">
    <div class="container">
        <strong >Copyright elsayadweb &copy; 2020-2021 <a href="dana.com">dana</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Elsayad Web </b> 2020
        </div>
    </div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{url('design/adminlte')}}/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{url('design/adminlte')}}/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{url('design/adminlte')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="{{url('design/adminlte')}}/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="{{url('design/adminlte')}}/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="{{url('design/adminlte')}}/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="{{url('design/adminlte')}}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{url('design/adminlte')}}/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{url('design/adminlte')}}/plugins/moment/moment.min.js"></script>
<script src="{{url('design/adminlte')}}/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{url('design/adminlte')}}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="{{url('design/adminlte')}}/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<!-- <script src="{{url('design/adminlte')}}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script> -->

<!-- start  jstree -------------->
     <script src="{{url('design/adminlte')}}/jstree/dist/jstree.min.js"></script>

<!-- End   jstree --------------->


<!-- start  locationpicker- -------------->
{{-- in server    maps_google_libraries <script type="text/javascript" src='https://maps.google.com/maps/api/js?sensor=false&libraries=places'></script>--}}
<!-- in localhost maps_google_libraries--><script src="{{url('design/adminlte')}}/dist/cdn/maps_google_libraries.js"></script>
<script src="{{url('design/adminlte')}}/dist/plugins/locationpicker/locationpicker.jquery.min.js"></script>
 <!-- End   locationpicker- --------------->


<!-- AdminLTE App -->
<script src="{{url('design/adminlte')}}/dist/js/adminlte.js"></script>
<script src="{{url('design/adminlte')}}/dist/js/my-function.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{url('design/adminlte')}}/dist/js/pages/dashboard.js"></script>
<!-- <script src="https://cdn.rtlcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-B4D+9otHJ5PJZQbqWyDHJc6z6st5fX3r680CYa0Em9AUG6jqu5t473Y+1CTZQWZv" crossorigin="anonymous"></script> -->
     <script src="{{url('design/adminlte')}}/dist/cdn/bootstrap.min.js"></script>



 <!-- ---------------------------------------- start  trash ------------- -->
 <!-- AdminLTE for demo purposes -->
<!-- start datatables -->
<!--  <script src="{{url('')}}/vendor/datatables/buttons.server-side.js"></script>--}}

 <script src="https://cdn.datatables.net/buttons/1.0.1/js/dataTables.buttons.min.js"></script>

<script src="{{url('design/adminlte')}}/plugins/datatables/jquery.dataTables.js"></script>
<script src="{{url('design/adminlte')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>--}}



 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4-4.1.1/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-colvis-1.6.1/b-html5-1.6.1/b-print-1.6.1/cr-1.5.2/fc-3.3.0/fh-3.1.6/kt-2.5.1/r-2.2.3/rg-1.1.1/rr-1.2.6/sc-2.0.1/sl-1.3.1/datatables.min.css"/>--}}
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4-4.1.1/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-colvis-1.6.1/b-html5-1.6.1/b-print-1.6.1/cr-1.5.2/fc-3.3.0/fh-3.1.6/kt-2.5.1/r-2.2.3/rg-1.1.1/rr-1.2.6/sc-2.0.1/sl-1.3.1/datatables.min.js"></script>
 -->



 <!-- ---------------------------------------- End trash ------------- -->
{{----------- start not found   net  in local  --------------}}
    <script src="{{url('design/adminlte')}}/dist/cdn/pdfmake.min.js"></script>
     <script src="{{url('design/adminlte')}}/dist/cdn/vfs_fonts.js"></script>
    <script src="{{url('design/adminlte')}}/dist/cdn/datatables.min.js"></script>
    <script src="{{url('design/adminlte')}}/dist/cdn/datatables.min.js"></script>
{{----------- End  not found   net  in local --------------}}
{{----------- start in  net server   --------------}}

{{--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>--}}
{{--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>--}}
{{--<script type="text/javascript" src="https://cdn.datatables.net/v/bs4-4.1.1/jszip-2.5.0/dt-1.10.20/af-2.3.4/b-1.6.1/b-colvis-1.6.1/b-flash-1.6.1/b-html5-1.6.1/b-print-1.6.1/cr-1.5.2/fc-3.3.0/fh-3.1.6/kt-2.5.1/r-2.2.3/rg-1.1.1/rr-1.2.6/sc-2.0.1/sp-1.0.1/sl-1.3.1/datatables.min.js"></script>--}}

{{----------- End  in  net server   --------------}}

<!-- datatables -->
<!-- -----------start datepicker ----------------------------- -->
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/locales/bootstrap-datepicker.ar.min.js"></script>
<script type="text/javascript">
$('.datepicker').datepicker({
rtl:'{{ session('lang')=='ar'?true:false}}',
language:'{{ session('lang')}}',
format:'yyyy-mm-dd',
autoclose:false,
todayBtn:true,
todayHighlight:true,
clearBtn:true
});
 </script>
 
<!-- -----------end  datepicker ----------------------------- -->

<!-- End datatables -->

    {{--------------------- start live image ----------------}}

    <script>
        function showMyImage(fileInput) {
            var files = fileInput.files;
            for (var i = 0; i < files.length; i++) {
                var file = files[i];
                var imageType = /image.*/;
                if (!file.type.match(imageType)) {
                    continue;
                }
                var img=document.getElementById("thumbnil");
                img.file = file;
                var reader = new FileReader();
                reader.onload = (function(aImg) {
                    return function(e) {
                        aImg.src = e.target.result;
                    };
                })(img);
                reader.readAsDataURL(file);
            }
        }
    </script>
    {{--------------------- End   live image ----------------}}
    {{--------------------- start    disabled ----------------}}


    {{--------------------- start    showMyImage ----------------}}
<script>
    function showMyImage(fileInput) {
        var files = fileInput.files;
        for (var i = 0; i < files.length; i++) {
            var file = files[i];
            var imageType = /image.*/;
            if (!file.type.match(imageType)) {
                continue;
            }
            var img=document.getElementById("thumbnil");
            img.file = file;
            var reader = new FileReader();
            reader.onload = (function(aImg) {
                return function(e) {
                    aImg.src = e.target.result;
                };
            })(img);
            reader.readAsDataURL(file);
        }
    }
</script>
    {{--------------------- start      jquery-image-upload-preview ----------------}}

<style>
    .thumbnil{
    width: 100%;
        height: auto;
    }
</style>
    {{--------------------- End        jquery-image-upload-preview ----------------}}

{{--<script>--}}
{{--    $(document).ready(function() {--}}

{{--            $(".form-control").prop("disabled", true);--}}


{{--    });--}}

{{-- </script>--}}


 @push('js')

@endpush
@stack('js')
@stack('css')
</body>
</html>
