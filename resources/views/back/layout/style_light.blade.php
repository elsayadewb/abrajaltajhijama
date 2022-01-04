<style>

    /*---------------start  public style---------------- */

    .modal-body,.modal-content,.head_title,.content-wrapper{
        background: {{setting()->bg_main_light}}!important;
        color: #000!important;

    }


    .modal-body,.modal-content,.content_wrapper_datatable{
        background: #bcc1cb!important;
        /*background: {{setting()->bg_main_light}}!important;*/
        color: #000!important;
    }

    .modal-body, .modal-content, .content_wrapper_datatable {
        background: {{setting()->bg_main_light}}!important;
        color: #000!important;
    }

    .card-title {
        color: {{setting()->bg_main_light}} !important;
    }

    .table-bordered th, .table-bordered td {
        border: 1px solid #dee2e6;
        color: {{setting()->bg_main_light}};
    }

    .form_light{
        background-color:{{setting()->bg_main_light}};
    }
    [class*=sidebar-light-] {
        background-color: {{setting()->bg_two_light}};
    }
    .wrapper {
        background-color: {{setting()->bg_two_light}};
        background-image: url(../../../../my-images/home.png);
    }
    .navbar-white{
        background-color: {{setting()->bg_two_light}};
        color: #000!important;
    }
    .navbar-light .navbar-nav .nav-link {
        color: #000!important;
    }
    .main-header.navbar.navbar-expand  {
        border: none;
    }


    .main-footer {
        background: {{setting()->bg_two_light}};
        border-top: navy;
        color: #939393;
    }


    .dropdown-menu {

        color: #000;

        background-color: #bcc1cb;
    }


    /*---------------End   public style---------------- */
    /*---------------start style page create Admin ---------------- */
    .head_title{
        border-color:  #000;

    }
    .alerts_home.message_success.message{
        display: none!important;
        opacity: 0!important;
        width: auto;
    }

    .text-light,.breadcrumb-item.active {
        color: #000 !important;
    }
    .breadcrumb-item {
        color: #000 !important;
    }
    .text-light {
        color: #000 !important!important;
    }
    .text-light {
        color: #d9dfe5 !important;
    }


</style>