<div class="header-top">
    <div class="wrapper">
        <ul class="left-nav">
            <li class="language">
                <ul id="select-language" select-language>
                    <li data-language="zh-CN" title="简体中文" class="ng-scope">简体中文<i class="fa fa-caret-down" aria-hidden="true"></i></li>
                    <li data-language="zh-TW" title="繁体中文" class="ng-scope">繁体中文</li>
                    <li data-language="en-US" title="English" class="ng-scope">English</li>
                </ul>
            </li>
            <li class="slot-butler"><a ng-href="" ng-click="AgentLoginClick()">代理登录</a></li>
            {{--<li><a ng-href="{{ route('web.red') }}" target="_blank">抢红包</a></li>--}}
            <li><a ng-href="{{ $_system_config->kscz}}" target="_blank">快速充值</a></li>
            <li><a ng-href="{{ $_system_config->app_link }}" target="_blank">手机APP下载</a></li>
        </ul>
        <ul class="right-nav" ng-controller="LobbiesCtrl">
            <li class="pt" ng-click="toPtFlash()">PT电子</li>
            <li class="time"><a href="/Promotion">时时返水</a></li>
            <li class="kg" ng-click="toKgHtml()">KG棋牌</li>
            <li class="lottery"><a href="/Lobby/Lottery">时时彩</a></li>
            <li class="mobile"><a href="/m">手机投注</a></li>
            <li><a ng-href="{{ $_system_config->bywz }}" target="_blank">备用网址</a></li>
            <li class="wechat"><a href="javascript:void(0)" onclick="javascript:window.open('{{ $_system_config->service_link }}','','width=1024,height=768')">在线客服</a></li>
        </ul>
    </div>
</div>
<header id="header" scrolltop-fixed="46">
    <div class="wrapper">

        <div id="logo-bg">
            <a href="/"></a>
        </div>

        <nav id="nav">
            <ul ng-controller="LobbiesCtrl">
                <li>
                    <a href="/">首页<span>HOME</span></a>
                </li>
                <li class="slot hot">
                    <a href="/Lobby/Game">电子游艺<span>SLOTS</span></a>
                    <div class="subnav">
                        <div class="discount">天天返水3.0%</div>
                        <ol>
                            <li class="hot" game-box="mg" ng-click="toMgFlash()">MG电子</li>
                            <li class="hot" game-box="pt" ng-click="toPtFlash()">PT电子</li>
                            <li class="hot" game-box="bb" ng-click="toBbGame()">BBIN电子</li>
                            <li game-box="ag" ng-click="toAgHtml()">AG电子</li>
                            <li game-box="pp" ng-click="toPrgFlash()">PP电子</li>
                            <li game-box="gns" ng-click="toGnsHtml()">SA电子</li>
                            <li game-box="hb" ng-click="toHabaHtml()">QT电子</li>
                            <li game-box="rt" ng-click="toRedTigerHtml()">SW电子</li>
                        </ol>
                        <ol>
                            <li class="hot" game-box="cq9" ng-click="toCq9Html()">传奇电子</li>
                            <li class="hot" game-box="jdb" ng-click="toJdbHtml()">夺宝电子</li>
                            <li game-box="mw" ng-click="toMwHtml()">MW电子</li>
                            <li game-box="sg" ng-click="toSgFlash()">新霸电子</li>
                            <li game-box="gpi" ng-click="toGpiFlash()">GPI电子</li>
                            <li game-box="ne" ng-click="toNetentHtml()">FG电子</li>
                            <li game-box="isb" ng-click="toIsbHtml()">BNG电子</li>
                        </ol>
                    </div>
                </li>
                <li class="mg-slot hot">
                    <a href="/Lobby/Lottery">彩票游戏<span>LOTTERY</span></a>
                    <div class="subnav">
                        <div class="discount">天天返水3.0%</div>
                        <ol>
                        <!--li class="hot" @if($_member) ng-click="toLxLottery()"@else onclick="Alert();"@endif><span>富赢信用彩票</span></li>
                    <li class="hot" @if($_member) ng-click="toRgLottery()"@else onclick="Alert();"@endif><span>富赢传统彩票</span></li-->
                            <li class="hot" @if($_member) ng-click="toBbLottery()"@else onclick="Alert();"@endif><span>BBIN彩票</span></li>
                            <li class="hot" @if($_member) ng-click="toIgLottery()"@else onclick="Alert();"@endif><span>IG彩票</span></li>
                            <li class="hot" @if($_member) ng-click="toIgMarkSix()"@else onclick="Alert();"@endif><span>IG六合彩</span></li>
                        </ol>
                        <ol>
                            <li class="hot" @if($_member) ng-click="toVrLottery()"@else onclick="Alert();"@endif><span>VR竞速彩票</span></li>
                            <li class="hot" @if($_member) ng-click="toIg1MarkSix()"@else onclick="Alert();"@endif><span>EG彩票</span></li>
                            <li class="hot" @if($_member) ng-click="toVr1Lottery()"@else onclick="Alert();"@endif><span>BG彩票</span></li>
                        </ol>
                    </div>
                </li>

                <li class="board hot">
                    <a href="/Lobby/Board">棋牌对战<span>CARD GAMES</span></a>
                    <div class="subnav one-col">
                        <div class="discount">天天返水2.0%</div>
                        <ol>
                            <li class="hot" ng-click="toKgHtml()">开元棋牌</li>
                            <li class="hot" ng-click="toGpkBoard()">美天棋牌</li>
                            <li class="hot" ng-click="toNwBoard()">VG棋牌</li>
                            <li class="hot" ng-click="toGpk2Html()">FG棋牌</li>
                            <li game-box="fg" ng-click="toFsBoard()">乐游棋牌</li>
                        </ol>
                    </div>
                </li>
                <li>
                    {{--<a href="{{ route('web.catchFish') }}">捕鱼达人<span>FISH</span></a>--}}
                    <div class="subnav fish">
                        <div class="discount">天天返水2.0%</div>
                        <ol>
                            <li class="hot" game-box="fs-beauty" @if($_member) ng-click="toFsFishBeauty()"@else onclick="Alert();"@endif>FG美人捕鱼</li>
                            <li class="hot" game-box="fs-bird" @if($_member) ng-click="toFsFishBird()"@else onclick="Alert();"@endif>FG捕鸟达人</li>
                            <li class="hot" game-box="fs-everyday" @if($_member) ng-click="toFsFishEveryDay()"@else onclick="Alert();"@endif>FG天天捕鱼</li>
                            <li class="hot" game-box="rg-king" @if($_member) ng-click="toRgFish2()"@else onclick="Alert();"@endif>JDB财神捕鱼</li>
                            <li class="hot" game-box="jdb-dragon" @if($_member) ng-click="toJdbFish()"@else onclick="Alert();"@endif>JDB龙王捕鱼</li>
                            <li class="hot" game-box="ag" @if($_member) ng-click="toAgFish()"@else onclick="Alert();"@endif>AG捕鱼王</li>
                            <li game-box="bb-expert" @if($_member) ng-click="toBbFish()"@else onclick="Alert();"@endif>BBIN捕鱼达人</li>
                            <li game-box="pts" @if($_member) ng-click="toPtsFish()"@else onclick="Alert();"@endif>SW捕鱼多福</li>
                            <li game-box="pts" @if($_member) ng-click="toPts2Fish()"@else onclick="Alert();"@endif>SW福气水果</li>
                            <li game-box="pt" @if($_member) ng-click="toPtFish()"@else onclick="Alert();"@endif>PT深海大赢家</li>
                            <li game-box="pg-fishking" @if($_member) ng-click="toPgFish()"@else onclick="Alert();"@endif>SA鱼乐无穷</li>
                        </ol>
                        <ol>
                            <li class="hot" game-box="fs-happy" @if($_member) ng-click="toFsFishHappy()"@else onclick="Alert();"@endif>FG欢乐捕鱼</li>
                            <li class="hot" game-box="fs-thunder" @if($_member) ng-click="toFsFishThunder()"@else onclick="Alert();"@endif>FG雷霆战警</li>
                            <li class="hot" game-box="fs-thunder" @if($_member) ng-click="toFs2FishThunder()"@else onclick="Alert();"@endif>FG捕鱼嘉年华</li>
                            <li class="hot" game-box="cq9" @if($_member) ng-click="toCq9Fish()"@else onclick="Alert();"@endif>CQ9皇金渔场</li>
                            <li class="hot" game-box="gpk-tycoon" @if($_member) ng-click="toRgFish()"@else onclick="Alert();"@endif>CQ9捕鱼去喽</li>
                            <li class="hot" game-box="jdb-dragon2" @if($_member) ng-click="toJdbFish2()"@else onclick="Alert();"@endif>JDB龙王捕鱼2</li>
                            <li class="hot" game-box="bb-master" @if($_member) ng-click="toBbFish2()"@else onclick="Alert();"@endif>BBIN捕鱼大师</li>
                            <li game-box="mw" @if($_member) ng-click="toMwFish()"@else onclick="Alert();"@endif>MW千炮捕鱼</li>
                            <li game-box="gns" @if($_member) ng-click="toGnsFish()"@else onclick="Alert();"@endif>MT李逵捕鱼</li>
                            <li game-box="pg-all" @if($_member) ng-click="toPgFish2()"@else onclick="Alert();"@endif>MT金蟾捕鱼</li>
                        </ol>
                    </div>
                </li>
                <li>
                    <a href="/Lobby/Live">真人视讯<span>CASINO</span></a>
                    <div class="subnav">
                        <div class="discount">天天返水0.8%</div>
                        <ol>
                            @if(in_array('AG', $_api_list))
                                <li class="hot" game-box="ag" @if($_member) ng-click="toAgLive()" @else onclick="Alert();"@endif>AG寰亚厅</li>
                            @endif
                            @if(in_array('BG', $_api_list))
                                <li game-box="bg" @if($_member) ng-click="toBgLive()" @else onclick="Alert();"@endif>BG尊娱厅</li>
                            @endif
                            @if(in_array('ALLBET', $_api_list))
                                <li game-box="ab" @if($_member) ng-click="toAbLive()" @else onclick="Alert();"@endif>AB尊爵厅</li>
                            @endif
                            @if(in_array('GPI', $_api_list))
                                <li game-box="gpi" @if($_member) ng-click="toGpiLive()" @else onclick="Alert();"@endif>GPI贵宾厅</li>
                            @endif
                            @if(in_array('GD', $_api_list))
                                <li game-box="gd" @if($_member) ng-click="toGdLive()" @else onclick="Alert();"@endif>GD奢华厅</li>
                            @endif
                            @if(in_array('SA', $_api_list))
                                <li game-box="sa" @if($_member) ng-click="toSaLive()" @else onclick="Alert();"@endif>沙龙荣耀厅</li>
                            @endif
                        </ol>
                        <ol>
                            @if(in_array('BBIN', $_api_list))
                                <li class="hot" game-box="bb" @if($_member) ng-click="toBbLive()" @else onclick="Alert();"@endif>BBIN旗舰厅</li>
                            @endif
                            @if(in_array('MG', $_api_list))
                                <li game-box="mg" @if($_member) ng-click="toMgLive()" @else onclick="Alert();"@endif>MG欧美厅</li>
                            @endif
                            @if(in_array('PT', $_api_list))
                                <li game-box="pt" @if($_member) ng-click="toPtLive()" @else onclick="Alert();"@endif>PT国际厅</li>
                            @endif
                            @if(in_array('DG', $_api_list))
                                <li game-box="evo" @if($_member) ng-click="toEvoLive()" @else onclick="Alert();"@endif>DG尊爵会</li>
                            @endif
                            @if(in_array('SUNBET', $_api_list))
                                <li game-box="sb" @if($_member) ng-click="toSunbetLive()" @else onclick="Alert();"@endif>申博梦幻厅</li>
                            @endif
                            @if(in_array('OG', $_api_list))
                                <li game-box="og" @if($_member) ng-click="toOgLive()" @else onclick="Alert();"@endif>OG如意厅</li>
                            @endif
                        </ol>
                    </div>
                </li>
                <li>
                    <a href="/Lobby/Sport">体育投注<span>SPORT</span></a>
                    <div class="subnav">
                        <div class="discount">天天返水1.2%</div>
                        <ol>
                            <li class="hot" game-box="3sing" @if($_member) ng-click="toSingSport()"@else onclick="Alert();"@endif><span>三昇体育</span></li>
                            <li class="hot" game-box="cr188" @if($_member) ng-click="toIboSport()"@else onclick="Alert();"@endif><span>皇冠体育</span></li>
                            <li class="hot" game-box="saba" @if($_member) ng-click="toSabaGame()"@else onclick="Alert();"@endif><span>沙巴体育</span></li>
                            <li class="hot" game-box="bb" @if($_member) ng-click="toBbSport()"@else onclick="Alert();"@endif><span>BBIN体育</span></li>
                            <li game-box="im" @if($_member) ng-click="toImsSport()"@else onclick="Alert();"@endif><span>NEWBB体育</span></li>

                        </ol>
                        <ol>

                            <li game-box="cmd" @if($_member) ng-click="toCmdSport()"@else onclick="Alert();"@endif><span>AG体育</span></li>
                            <li game-box="esb" @if($_member) ng-click="toImSport()"@else onclick="Alert();"@endif><span>ESB电竞</span></li>
                            <li game-box="cr188" @if($_member) ng-click="toIbo1Sport()"@else onclick="Alert();"@endif><span>泛亚电竞</span></li>
                            <li game-box="cr188" @if($_member) ng-click="toIbo2Sport()"@else onclick="Alert();"@endif><span>皇朝电竞</span></li>
                        </ol>
                    </div>
                </li>
                <li class="promo hot">
                    <a href="/Promotion">优惠活动<span>ACTIVITY</span></a>
                    <div class="subnav one-col">
                        <ol>
                            <li><a ng-href="" target="_blank">活动大厅</a></li>
                            <li><a ng-href="" target="_blank">VIP贵宾会</a></li>
                            <li><a ng-href="" target="_blank">抢红包</a></li>
                            <li><a ng-href="" target="_blank">升级模式</a></li>
                        </ol>
                    </div>
                </li>
                <li class="cq9-slot hot">
                    <a href="javascript:void(0)" onclick="javascript:window.open('{{ $_system_config->service_link }}','','width=1024,height=768')">在线客服<span>SERVICE</span></a>

                </li>
            </ul>
        </nav>
    </div>
</header>

@if (Auth::guard('player')->guest())
    <div id="account-box" class="home" scrolltop-fixed="46">
        <div class="wrapper">
            <form name="LoginForm" id="LoginForm" action="{{ route('player.login.post') }}" method="POST">
                <input id="login_account" type="text" placeholder="帐号" name="name" maxlength="16"
                       tabindex="1" pattern="[a-zA-Z0-9]{4,15}" required autofocus />
                <input id="login_password" type="password" placeholder="密码" name="password" maxlength="13" tabindex="2" pattern="[a-zA-Z0-9]{6,13}" required />
                <span class="forget-btn" ng-click="lineChatClick()">忘记?</span>

                <div id="check-code-wrapper">
                    <input name="captcha" type="text" id="rmNum" size="7" maxlength="4"
                           title="( 点选此处产生新验证码 )"
                           class="yzm" onfocus="javascript:re_captcha();"  tabindex="3" pattern="\d{4}" required="" placeholder="验证码"  required />
                    <img id="captcha"  style="background-color: burlywood;"
                    />
                    <script>
                        function re_captcha() {
                            $url = "{{ URL('kit/captcha') }}";
                            $url = $url + "/" + Math.random();
                            document.getElementById('captcha').src = $url;
                        }
                    </script>
                </div>
                <button id="login-box" ng-disabled="isProcessing" ng-bind="isProcessing ? '登录...' : '登录'" class="login-btn ng-binding ng-binding  modal-login_submit ajax-submit-btn">登录</button>

                <button id="reg-box" class="login-btn" type="button" ng-click=""onclick="javascript:window.location.href = '{{ route('web.register_one') }}';">免费开户</button>
                <span class="trial-btn"ng-click=""onclick="return layer.alert('您好！请联系客服索取试玩帐号!',{icon:7});">免费试玩</span>
                <span class="forget-btn" ng-click=""onclick="return layer.alert('您好！忘记密码请联系客服!',{icon:7});">忘记?</span>

                <div id="agree" ng-show="loginOver" ng-cloak>
                    点击登入表示同意<a ng-click="agreement()">用户协议</a>
                </div>
            </form>
        </div>
    </div>
@else

    <div id="account-box" class="home is-login" scrolltop-fixed="46" ng-controller="AccountCtrl" ng-init="$root.user.isLogin=true">
        <div class="wrapper">
            <ul id="account-info">
                <li class="info-account">
                    帐号 :
                    <span class="account" title="{{ $_member->name }}">{{ $_member->name }}</span>
                    <a id="mailbox" ng-controller="SiteMailCountCtrl" href="/member/FYcenter/12#12" title="站内信">
                        <span ng-hide="!(MailIsReadCount.Count > 0)" ng-cloak></span>
                    </a>
                </li>
                <li class="info-balance">
                    账户余额 :
                    <span class="money" title="$ {{ $_member->money }}">{{ $_member->money }}</span>

                    <div id="callBackAllWallet" ng-click="callBackAllWallet()"></div>
                </li>
            </ul>

            <div id="account-nav">
                <ul>
                    <li class="deposit" title="线上存款">
                        <a href="/member/FYcenter/5#2">
                            线上存款
                        </a>
                    </li>
                    <li class="withdraw" title="线上取款">
                        <a href="/member/FYcenter/3#3">
                            线上取款
                        </a>
                    </li>
                    <li class="transaction" title="投注记录">
                        <a href="/member/FYcenter/7#game">
                            投注记录
                        </a>
                    </li>
                    <li class="bet-record" title="游戏额度">
                        <a href="/member/FYcenter/1#1">
                            游戏额度
                        </a>
                    </li>
                    <li class="change-pw" title="修改密码">
                        <a href="/member/FYcenter/2#5">
                            修改密码
                        </a>
                    </li>
                    <li class="change-money" title="修改取款密码">
                        <a href="/member/FYcenter/6#6">
                            修改取款密码
                        </a>
                    </li>
                </ul>
            </div>
            <div id="action-box">
                <a href="{{ route('player.logout') }}"
                   onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="login-btn">登出</a>
                <form id="logout-form" action="{{ route('player.logout') }}" method="POST"
                      style="display: none;">
                {{ csrf_field() }}

            </div>
        </div>
    </div>
    <script>
        @if (!Auth::guard('player')->guest())
        $(function () {
            $.ajax({
                type:'post',
                url : "",
                dataType : 'json',
                success : function (data) {
                    //console.log(data);
                    if(data.statusCode == '01'){
                        var all = Number($('.money').text()) + Number(data.data);
                        $('.money').text('');
                        $('.money').text(parseInt(all.toFixed(2)));
                    }
                }
            })
        })
        @endif
    </script>
@endif
