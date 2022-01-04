@include('back.layout.header')
@include('back.layout.navbar')
@include('back.layout.sidbar')
<!-- @include('back.message')
 -->@include('back.modal')
{{------------------------------------}}
 @yield('content')
{{------------------------------------}}
@include('back.layout.footer')
<style>
    .sidebar{
        min-height: 200px!important;
    }
</style>