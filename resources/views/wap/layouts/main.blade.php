<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>{{ $_system_config->site_name }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('/wap/css/bootstrap.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('/wap/css/main.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('/wap/css/font-awesome.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('/wap/css/member.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('/wap/css/ssc.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('/wap/css/mmenu.all.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('/wap/css/commonCss.css') }}">
    <script type="text/javascript" src="{{ asset('/wap/js/jquery.js') }}"></script>
    <link href="https://cdn.igsttech.com/Web.Mobile/_Common/Content/normalize.css" rel="stylesheet"/>

    <link href="https://cdn.igsttech.com/Web.Mobile/_Common/Content/jquery-ui/v1.11.3/jquery-ui.min.css" rel="stylesheet"/>

    <link href="https://cdn.igsttech.com/Web.Mobile/_Common/Content/jquery-ui/v1.11.3/jquery-ui.theme.min.css" rel="stylesheet"/>

    <link href="https://cdn.igsttech.com/Web.Mobile/_Common/Content/font-awesome5.min.css" rel="stylesheet"/>

    <link href="https://cdn.igsttech.com/Web.Mobile/_Common/Content/bootstrap/v3.3.6/bootstrap.min.css" rel="stylesheet"/>

    <link href="/wap/bundles/custom.css?v=BdJ4dm8B5DhhLC1t-7d0ULs9cdHl7HCBL_nm9Pvl3ko1" rel="stylesheet"/>

    <link href="/wap/bundles/body.css?v=Y1PajW9an3VwN2lTRJVNOyJuY8sMCkAqBxSXJIMJgpA1" rel="stylesheet"/>

    <link href="/wap/bundles/custom-modal.css?v=rBa1gpXaDjanoBvw8cNQgEHIQSDnAyQ-M79hsXjGqDI1" rel="stylesheet"/>
    <link href="/wap/bundles/home.css?v=HnkYH7LOuy2-g0fJ-ShO6CInvVp1921VkuTYSEzlRRU1" rel="stylesheet"/>

    <link rel="stylesheet" href="/wap/bundles/slick.css" />
    <link rel="stylesheet" href="/wap/bundles/slick-theme.css" />

    <style id="base-css"></style>
    <link href="/wap/bundles/site.css?v=vTISgzSPjwOJPT-QYiNaCCo91t8s9_tHtp9q5Z3zsHA1" rel="stylesheet"/>



    @yield('after.css')
</head>
<body ng-controller="LayoutCtrl">
@yield('content')
@include('wap.layouts.footer')
@yield('before.js')

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript" src="{{ asset('/wap/js/touchslide.js') }}"></script>
<script type="text/javascript" src="{{ asset('/wap/js/marquee.js') }}"></script>
<script type="text/javascript" src="{{ asset('/wap/js/layer.js') }}"></script>
<script type="text/javascript" src="{{ asset('/wap/js/base.js') }}"></script>
<script type="text/javascript" src="{{ asset('/wap/js/wap_ajax-submit-form.js') }}"></script>
<script type="text/javascript">
    TouchSlide({
        slideCell: "#slide",
        mainCell: ".bd",
        titCell: ".hd",
        effect: "leftLoop",
        autoPage: true,
        autoPlay: true
    });
    $("#news").marquee({duration: 10000});
    var info = function () {
        lay_msg('请登录后操作！', null);
    };
    var g_login = function () {
        var e = function () {
            location.replace("/guest.php");
        };
        lay_msg('试玩账号，登录成功！', e);
    };
    var onUrl = function (t) {
        t = Number(t) > 0 ? Number(t) : 1;
        location.replace('/route.php?t=' + t);
    };
</script>
@yield('after.js')
<script src="{{asset('js/uti.js')}}"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>

</body>
</html>
