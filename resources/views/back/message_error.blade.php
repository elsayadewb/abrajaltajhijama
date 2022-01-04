@if( setting()->alert_error == 'alert' OR setting()->alert_error == '' )
 @if(count($errors->all()) > 0)

    <div class="btn btn-danger message_error  message_alert_error text-left message content_alert_eroor pos_r" >
                    <button class="w_28px_h_28px_custom button_close_alert_eroor btn-danger  "   > <i class="fa fa-times"></i> </button>

        <ol >
            <img class="w_28px_h_28px_custom   "src="{{url('default')}}/sad7.png"   >
            @foreach($errors->all() as $error)
                <div class=" "> <img class="w_18px_h_18px "src="{{url('default')}}/d_like6.png" > {{$error}}
                <img class="w_20px_h_20px_custom "src="{{url('default')}}/pont.png" >  </div>
            @endforeach
        </ol>
    </div>
@endif
@endif
@if( setting()->alert_error == 'modal' )

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

@if(count($errors->all()) > 0)

    <script>


        swal("{{trans('admin.errors')}}",
            "@foreach($errors->all() as $error) {{$error}}  @endforeach",
            "success",
            {


                icon: "error",

            });
    </script>
<style>
    .swal2-container.swal2-center.swal2-fade.swal2-shown{
        display: none!important;
        opacity: 0!important;
        background: transparent;
    }
</style>
    @endif
@endif
