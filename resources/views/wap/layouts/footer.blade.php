
<footer id="footer">
    <ul class="menu-bottom" ng-class="{'menu-entire': hasATDDiscount}">
        <li class="home">
            <i class="fa fa-home" aria-hidden="true"></i>
            <a href="{{ route('wap.index') }}">回首页</a>
        </li>
        <li class="promotion">
            <i class="fa fa-gift" aria-hidden="true"></i>
            <a href="{{ route('wap.activity_list') }}">优惠专区</a>
        </li>

        <li class="financial">
            <i class="fas fa-money-bill-alt" aria-hidden="true"></i>
            <a @if(Auth::guard('player')->guest()) onclick="location.href = '{{ route('wap.login') }}'" @else onclick="location.href= '{{ route('wap.nav') }}'" @endif>个人中心</a>
        </li>
        <li class="chat">
            <i class="fa fa-whatsapp" aria-hidden="true"></i>
            @if (Auth::guard('player')->guest())
                <a class="btn01" href="{{ route('wap.login') }}">登入 </a>
            @else
                <a href="javascript:;" class="m_logout" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">登出</a>
                <form id="logout-form" action="{{ route('wap.logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            @endif

        </li>
    </ul>
</footer>

