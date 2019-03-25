
<!DOCTYPE html>
<html  id="ng-app" ng-app="portalApp" meidon-time="2018"  moment-lang="zh-CN"  ng-init="'{{ $_system_config->site_title or 'motoo' }}'">
<head>
    <title>{{ $_system_config->site_title or 'motoo' }}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link rel="shortcut icon" href="/favicon.ico" />
    <link href="https://cdn.igsttech.com/Web.Portal/_Common/Content/jquery-ui/v1.11.3/jquery-ui.min.css" rel="stylesheet"/>
    <link href="https://cdn.igsttech.com/Web.Portal/_Common/Content/jquery-ui/v1.11.3/jquery-ui.theme.min.css" rel="stylesheet"/>
    <link href="https://cdn.igsttech.com/Web.Portal/_Common/Content/normalize/v3.0.1/normalize.min.css" rel="stylesheet"/>
    <link href="https://cdn.igsttech.com/Web.Portal/_Common/Content/font-awesome5.min.css" rel="stylesheet"/>
    <link href="/bundles/custom.css?v=5Wa8nqZwlBGzu1Pp_QLNPIWNPw7nHF_nimfxfdWB2fE1" rel="stylesheet"/>
    <link href="/bundles/custom-modal.css?v=OoJMx9HYbSSX_kAkQy-IAdtYhsAf8mb55menPwEb4kQ1" rel="stylesheet"/>
    <link href="/bundles/site.css?v=drWz4fFjK9_TATLc3DgGG6yMUt7I4vN86k08xDIUvug1" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('/web/css/qqq5595.css') }}">
    @if($web_route == 'web.index')
        <link href="/bundles/home.css?v=Z0I1MnqVfQ2Gxw7Nrs0FZ-E7HyV84bcUupfFjChrVWE1" rel="stylesheet"/>
    @else
    @endif
    <link href="/Content/Views/Shared/zh-CN.css?version=20150116" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('/web/css/dl.css') }}">
    <link href="/Content/Views/Home/zh-CN.css?version=201404141731" rel="stylesheet" />
    <link href="/Content/each-site/animate.css" rel="stylesheet" />
    <script src="https://cdn.igsttech.com/Web.Portal/_Common/Scripts/jquery/v1.12.4/jquery.min.js"></script>
    <script src="https://cdn.igsttech.com/Web.Portal/_Common/Scripts/jquery-marquee/jquery.marquee.min.js"></script>
    <script src="https://cdn.igsttech.com/Web.Portal/_Common/Scripts/jquery-ui/v1.11.3/jquery-ui.min.js"></script>
    <script src="/bundles/common.js?v=HNgwom0Dzrx_ZWnmf34LgV_TQUJqznH90A6VSugf2eM1"></script>
    <script src="https://cdn.igsttech.com/Web.Portal/_Common/Scripts/angularjs/v1.2.14/angular.min.js"></script>
    <script src="https://cdn.igsttech.com/Web.Portal/_Common/Scripts/moment/v2.9.0/moment-with-locales.min.js"></script>
    <script src="https://cdn.igsttech.com/Web.Portal/_Common/Scripts/moment/v2.9.0/moment-timezone-with-data.min.js"></script>
    <script src="https://cdn.igsttech.com/Web.Portal/_Common/Scripts/jquery-signalR/v2.2.0/jquery.signalR-2.2.0.min.js"></script>
</head>
<body class="layout" ng-controller="LayoutCtrl">

@include('web.layouts.header')

@yield('content')
@include('web.layouts.aside')
@include('web.layouts.footer')
<script src="https://cdn.igsttech.com/Web.Portal/_Common/Scripts/angular-animate/v1.2.14/angular-animate.min.js"></script>

<script src="https://cdn.igsttech.com/Web.Portal/_Common/Scripts/angular-ui-bootstrap/v0.10.0/ui-bootstrap-custom-tpls-0.10.0.min.js"></script>

<script src="/Scripts/_site.js?version=20170803"></script>
<script src="/bundles/environment.js?v=Sre_8bGZaXimeK2YCmr6RnY-uXP9_R8xIoUe5rN9spE1"></script>

<script src="/Scripts/_config.js?version=20180117"></script>
<script src="/Scripts/i18n/labels_zh-CN.js"></script>
<script src="/angular-services.js?v=xyS-EheotkV8v-wdjby6bg-IWjEt_QrwXtAziZJAbBg1"></script>

<script src="/angular-controllers.js?v=GjlNbpztu87jUS-Hv4d-WGODPxxT3eeYi2dzmiOKFXc1"></script>

<script src="/angular-directives.js?v=agA_5MsASKuCuZnnudjzArmMB0Hg9A0aIc_PlABHIFY1"></script>

<script src="/angular-filters.js?v=MeeQJovOHWNSkHRSyl6Jkj407IAV6G2P3C98wCBb83I1"></script>

<script src="/bundles/portal-shared.js?v=1Qym7_7BFPaXQLvJzrHwUYSZT9__RyZpz431AkFTpQQ1"></script>



<script src="https://cdn.igsttech.com/Web.Portal/_Common/Scripts/Custom/common.min.js"></script>
<script src="https://cdn.igsttech.com/Web.Portal/_Common/Scripts/jquery.cycle2.js"></script>

<script>
    $('.winner').slide({
        mainCell: '.winner-list ul',
        autoPlay: true,
        effect: 'topMarquee',
        vis: 7,
        interTime: 50,
        trigger: 'click'
    });
    $(function () {
        $(window).on("scroll", function () {
            if ($(this).scrollTop() > 420) {
                $("#account-box").removeClass("home");
            } else {
                $("#account-box").addClass("home");
            }
        });
    });
</script>





<script src="{{ asset('/web/js/jquery.flexslider.js') }}"></script>
<script src="{{ asset('/web/js/index1.js') }}"></script>
<script src="{{ asset('/web/js/yk_modal.js') }}"></script>
<script src="{{ asset('/web/layer/layer.js') }}"></script>
<script src="{{ asset('/web/js/ajax-submit-form.js') }}"></script>
<script src="{{ asset('/web/js/jquery.lazyload.min.js') }}"></script>
<script src="{{ asset('/web/js/jquery.fly.min.js') }}"></script>
<script src="{{ asset('/web/js/common.js') }}"></script>
@yield('after.js')
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function AddFavorite(sURL, sTitle) {
        try {
            window.external.addFavorite(sURL, sTitle);
        } catch (e) {
            try {
                window.sidebar.addPanel(sTitle, sURL, "");
            } catch (e) {
                alert("加入收藏失败，请使用Ctrl+D进行添加");
            }
        }
    }
    function Alert(){

        layer.alert('您好！请登录后在点我进入游戏哦!',{icon:7});
    };

</script>
</body>
</html>
