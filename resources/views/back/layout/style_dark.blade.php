<style>

    /*---------------start  public style---------------- */

    .modal-body,.modal-content,.head_title,.content-wrapper{
        background: {{setting()->bg_main_dark}}!important;
        color: #fff!important;

    }


    .modal-body,.modal-content,.content_wrapper_datatable{
        background: #bcc1cb!important;
        /*background: {{setting()->bg_main_dark}}!important;*/
        color: #fff!important;
    }

    .modal-body, .modal-content, .content_wrapper_datatable {
        background: {{setting()->bg_main_dark}}!important;
        color: #fff!important;
    }

    .text-dark.m-0 {
        color: #fff !important;
    }
    .card-title {
        color: {{setting()->bg_main_dark}} !important;
    }
    /*.content-wrapper
    {
        min-height: all!important;
    }*/
    /*.card_light{
        background: #bcc1cb!important;
        color: #fff!important;
    }*/

    .table-bordered th, .table-bordered td {
        border: 1px solid #dee2e6;
        color: {{setting()->bg_main_dark}};
    }

    .form_dark{
        background-color:{{setting()->bg_main_dark}};
    }
    [class*=sidebar-dark-] {
        background-color: {{setting()->bg_two_dark}};
    }
    .wrapper {
        background-color: {{setting()->bg_two_dark}};
        background-image: url(../../../../my-images/home.png);
    }
    .navbar-white{
        background-color: {{setting()->bg_two_dark}};
        color: #fff!important;
    }
    .navbar-light .navbar-nav .nav-link {
        color: #fff!important;
    }
    .main-header.navbar.navbar-expand  {
        border: none;
    }


    .main-footer {
        background: {{setting()->bg_two_dark}};
        border-top: navy;
        color: #939393;
    }


    .dropdown-menu {

        color: #fff;

        background-color: #bcc1cb;
    }
    /*#bcc1cb*/
    /*#889fcc*/

    /*---------------End   public style---------------- */
    /*---------------start style page create Admin ---------------- */
    .head_title{
        border-color:  #fff;

    }
    .alerts_home.message_success.message{
        display: none!important;
        opacity: 0!important;
        width: auto;
    }

    .text-dark,.breadcrumb-item.active {
        color: #fff !important;
    }
    .breadcrumb-item {
        color: #fff !important;
    }
    .text-dark {
        color: #fff !important!important;
    }
    .text-dark {
        color: #d9dfe5 !important;
    }


    /*---------------End  style page create Admin ---------------- */
    /*---------------start   style page  Department -------------- */
    /*.jstree-default-dark-large .jstree-wholerow {*/
    /*    height: 32px;*/
    /*    background: {{setting()->bg_main_dark}}!important;*/
    /*}*/
    /*.jstree-anchor.jstree-clicked:hover{*/
    /*    background: red!important;*/
    /*}*/
    /*.jstree-default:hover{*/
    /*    background: #beebff;*/
    /*    background: -webkit-linear-gradient(top, #beebff 0, #a8e4ff 100%);*/
    /*    background: linear-gradient(to bottom, {{setting()->bg_two_dark}} 0, #a8e4ff 100%);*/
    /*}.jstree-default {*/
    /*    background: #beebff;*/
    /*    background: -webkit-linear-gradient(top, #beebff 0, #a8e4ff 100%);*/
    /*    background: linear-gradient(to bottom, {{setting()->bg_two_dark}} 0, #a8e4ff 100%);*/
    /*}*/
    /*---------------End   style page  Department ---------------- */


</style>