@extends('wap.layouts.main')
@section('content')
    <link href="/wap/bundles/login.css?v=szh8TvWWY042R_eMKSkiSuv8SvqLIABjgI-wUtqNhwI1" rel="stylesheet"/>
    <div id="account-box" class="login-page">
        <img class="profile" src="https://cdn.igsttech.com/Web.Mobile/DR004-01.Mobile/Content/Views/Shared/images/profile.png" />
        <img class="profile-special" src="https://cdn.igsttech.com/Web.Mobile/_Common/Content/Views/Shared/images/special/common/profile.png" />
        <form id="loginForm"  action="{{ route('wap.login.post') }}" method="post">
            @csrf
            <input type="text" placeholder="账号"  id="username" name="username">
            <input type="password" placeholder="密码"  id="password" name="password">

            <button type="submit">登入</button>
        </form>
        <ul class="link">
            <li ng-click="lineChatClick()">忘记密码</li>
            <li onclick="javascript:window.location.href = '';">免费开户</li>
        </ul>
        <p class="copyright">Copyright ©古天乐集团  Reserved</p>
        <a class="closed" href="{{ route('wap.index') }}">X</a>

    </div>

@endsection
