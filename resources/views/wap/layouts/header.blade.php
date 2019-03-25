<div class="m_header"style="margin-top:-10px">
    <header id="header">
        <div class="logo">
            <a href="/">
                <img src="{{ $_system_config->m_site_logo }}" />
            </a>
        </div>
        <div class="header-right">

            @if (Auth::guard('player')->guest())
                <div class="btn-group" style="margin-top:-10px">
                    <a class="btn01" href="{{ route('wap.login') }}">登入 </a>
                    <a class="btn02" href="{{ route('player.register') }}">免费开户</a>
                </div>
            @else
                <div class="btn-group" style="margin-top:-10px">
                    <a class="btn01" href="#">{{ $_member->username }}</a>
                    <a class="btn02" href="#"><strong class="money">￥ {{ $_member->money }}</strong></a>

                </div>
            @endif
        </div>
    </header>
</div>

