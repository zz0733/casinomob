<!-- <aside class="services service-left" scrollfollow>
        <ul>
            <li class="slot"><a href="/Promotion"></a></li>
            <li class="mobile"><a href="/Mobile"></a></li>
            <li class="deposit"><a ng-href="" target="_blank"></a></li>
            <li class="app">
			 <img src="{{ $_system_config->wap_qrcode }}" width=94px; height=94px;/>
			</li>

            <li class="closed" service-closed title="关闭"></li>
        </ul>
    </aside>

    <aside class="services service-right" scrollfollow>
        <ul>
            <li class="chat" ng-click=""onclick="javascript:window.open('{{ $_system_config->service_link }}','','width=1024,height=768')" title="在线客服"></li>
            <li class="qq" ng-click=""onclick="javascript:window.open('http://wpa.qq.com/msgrd?V=3&uin={{ $_system_config->qq}}&Site=QQ客服&Menu=yes','','width=1024,height=768')" title="{{ $_system_config->qq }}" ng-bind="{{ $_system_config->qq }}"></li>
            <li class="tel" title="{{ $_system_config->phone1 }}" ng-bind="{{ $_system_config->phone1 }}"></li>
            <li class="qr" title="微信客服">
                <img src="{{ $_system_config->wx_pic }}" width=94px; height=94px;/>
            </li>
            <li class="closed" service-closed title="关闭"></li>
        </ul>
    </aside>
-->

<aside class="services service-left" scrollfollow>
    <ul>
        <li class="closed" service-closed></li>
        <li class="atd"><a href="/Promotion"></a></li>
        <li class="join">
            <a href="/Register"></a>
        </li>
        <li class="activity">
            {{--<a ng-href="{{ route('web.dating') }}" target="_blank"></a>--}}
        </li>
        <li class="join2">
            <a href="/Register"></a>
        </li>
        <li class="qr"></li>
    </ul>
</aside>
<aside class="services service-right" scrollfollow>
    <ul>
        <li class="closed" service-closed></li>
        <li class="chat" title="在线客服"><a href="javascript:;" onclick="javascript:window.open('{{ $_system_config->service_link }}','','width=1024,height=768')"></a></li>
        <li class="qq" ng-click="" title="{{ $_system_config->qq}}" ng-bind="{{ $_system_config->qq}}"></li>
        <li class="tel" title="{{ $_system_config->phone1 }}" ng-bind="{{ $_system_config->phone1 }}"></li>
        <li class="deposit"></li>
    </ul>
</aside>


<aside class="service-lefttop" ng-controller="LobbiesCtrl">
    <ul>
        <li class="kg" ></li>
        <li class="nw"></li>
        <li class="gpk"></li>
        <li class="fg"></li>
        <li class="ap"></li>
        <li class="js"></li>
        <li class="jdb" ></li>
        <li class="fish"></li>
    </ul>
</aside>


<aside class="service-leftbottom cycle-slideshow" ng-controller="LobbiesCtrl" ng-cloak
       data-cycle-slides="> a">
    <a class="pro06" ng-href="" target="_blank" title="手机APP下载"></a>
    <a class="envelope" ng-href="" target="_blank" title="亿万红包雨"></a>
    <a class="slot" ng-href="" target="_blank" title="升级模式"></a>
    <a class="pro01" href="/Promotion" title="300倍超级彩金"></a>
    <a class="game" href="/Lobby/Game" title="返水1.7％起"></a>
    <a class="vip" ng-href="" target="_blank" title="VIP天天晋级"></a>
    <a class="pro02" href="/Promotion" title="乐玩棋牌"></a>
    <a class="pro03" href="/Promotion" title="畅玩CQ9"></a>
    <a class="pro04" href="/" title="彩金无限领取" target="_blank"></a>
    <a class="pro05" href="/Promotion" title="玩转电子"></a>
    <span class="closed" service-closed title="关闭"></span>
    <div class="cycle-pager"></div>
</aside>


<div id="service-luckywheel" class="open-luckywheel" open-luckywheel></div>


<div id="review-list" ng-init="reviewOpen='close'" ng-class="{'open': reviewOpen=='open'}">
    <div class="wrapper">
        <span class="up" ng-click="reviewOpen='open'" ng-show="reviewOpen=='close'">浏览记录</span>
        <span class="down" ng-click="reviewOpen='close'" ng-show="reviewOpen=='open'">收起</span>
        <div id="review-box" review-game game-length="12"></div>
    </div>
</div>




<div id="marquee-wrapper" ng-class="{show: isMarqueeShowClass}" ng-init="isMarqueeShowClass = false">
    <aside id="marquee">
        <header>
            <h2>最新消息</h2>
        </header>
        @foreach($_system_notices as $v)
            <ul id="newsBags">
                <li class="ng-scope">{{ $v->title }}
                    {{ $v->content }}</li>
            </ul>
        @endforeach
        <footer>
            <span ng-click="closeMarquee()">关闭</span>
        </footer>
    </aside>
</div>



<div id="popup-dialog" popup-dialog ng-cloak></div>


<div id="announcement-dialog" announcement-dialog></div>


<div style="display:none"></div>




