

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $(".message.alert_success").animate({right: '19px'},1900);
        $(".message.alert_success").stop().delay("2720").animate({right: '-331px'},400);

         $(".message.alert_change").animate({right: '19px'}),400;
        $(".message.alert_change").stop().delay("3220").animate({right: '-331px'},400);


        $(".message.alert_success_home").animate({right: '19px'},3500);
        $(".message.alert_success_home").stop().delay("2720").animate({right: '-331px'},400);

    });
</script>
@if(session()->has('success'))
    <div class="alert btn-success  alert_success message "> <img class="w_22px_h_22px "src="{{url('default')}}/like7.png" > {{ session()->get('success') }} <img class="w_25px_h_25px m_b_6px"src="{{url('default')}}/clap.png" ></div>
@endif

@if(session()->has('successhome'))
    <div class="alert btn-success  alert_success_home message    "> <img class="w_22px_h_22px "src="{{url('default')}}/like7.png" > {{ session()->get('successhome') }} <img class="w_25px_h_25px m_b_6px"src="{{url('default')}}/clap.png" ></div>
@endif

@if(session()->has('change'))
    <div class="alert  btn-info  alert_change message "> <img class="w_22px_h_22px "src="{{url('default')}}/like7.png" > {{ session()->get('change') }} <img class="w_25px_h_25px m_b_6px"src="{{url('default')}}/clap.png" ></div>
@endif

@if(session()->has('error'))

    <div class="alert btn-danger message ">  {{ session()->get('error') }} </div>

@endif
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<style>
    .modal_massage  .w_20px_h_20px_custom {

        left: 60% !important;
    }
    .w_20px_h_20px_custom{
        width: 20px;
        height: 20px;
        border-radius: 50%;
        position: absolute;
        left: 74%;
        /*display: none;*/
    }


    .message.btn-danger{
        width: 100%;
    }






   .alerts_home .message {
        right: 274px;
        z-index: 99;
        position: absolute;
       width: auto;
     }

    .message.alert_success_home{
        right: 719px;
        width: auto;
        position: absolute;
        z-index: 99;
        top: 64px;
     }
       .message.alert_success{
     right: 19px;
        width: auto;
        position: absolute;
        z-index: 99;
        top: 64px;
    }
          .message.alert_change{
     right: 19px;
        width: auto;
        position: absolute;
        z-index: 99;
        top: 64px;
    }

    .message.alert_change{
            top: 124px;
    z-index: 9;
    padding: 10px;
    }

    .w_22px_h_22px{

        width: 22px;
        height: 22px;
        border-radius: 50%;
    }
    .w_28px_h_28px{

        width: 28px;
        height: 28px;
        border-radius: 50%;
    }
    .w_18px_h_18px{
        width: 18px;
        height: 18px;
        border-radius: 50%;
    }  .w_28px_h_28px_custom{
           width: 28px;
           height: 28px;
           border-radius: 50%;
           margin-bottom: 10px;
           margin-top: 5px;
       }
    .m_b_6px{
        margin-bottom: 6px;
    }
    .w_25px_h_25px{

        width: 25px;
        height: 25px;
        border-radius: 50%;
    }
</style>