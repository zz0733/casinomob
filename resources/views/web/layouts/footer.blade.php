<footer id="footer">
    <div class="wrapper">
        <ul id="footer-info">
            <li class="help">
                <div class="title">新手帮助</div>
                <ul>
                    {{--<li><a href="{{ route('web.AboutUS') }}">关于我们</a></li>--}}
                    {{--<li><a href="{{ route('web.Contact') }}">联系我们</a></li>--}}

                    {{--<li><a href="{{ route('web.Deposit') }}">存款帮助</a></li>--}}
                    {{--<li><a href="{{ route('web.Withdrawal') }}">取款帮助</a></li>--}}
                    {{--<li><a href="{{ route('web.FAQ') }}">常见问题</a></li>--}}
                </ul>
            </li>
            <li class="map">
                <div class="title">站内链接</div>
                <ul>
                    <li><a href="/Register">立即注册</a></li>
                    {{--<li><a href="{{ route('web.Partner') }}">合作伙伴</a></li>--}}
                    <li><a href="/Mobile">手机投注</a></li>
                    <li><a ng-href="" target="_blank">上网导航</a></li>
                    <li><a href="http://gpk-client.com/" target="_blank">客戶端</a></li>
                </ul>
                <ul>
                    <li><a ng-href="" target="_blank">手机APP下载</a></li>
                    <li><a ng-href="" target="_blank">VIP贵宾会</a></li>
                    <li><a ng-href="" target="_blank">活动大厅</a></li>
                    <li><a ng-href="" target="_blank">升级模式</a></li>
                    <li><a ng-href="" target="_blank">抢红包</a></li>
                </ul>
            </li>

            <li class="contact">
                <div class="title">联系我们</div>
                <div class="chat" ng-click="lineChatClick()"></div>
                <ul>
                    <li>澳门热线：<span ng-bind="{{ $_system_config->phone1 }}"></span></li>
                    <li>菲律宾热线：<span ng-bind="{{ $_system_config->phone1 }}"></span></li>
                    <li>客服QQ：<span ng-bind="{{ $_system_config->qq }}"></span></li>
                    <li>E-mail：<span ng-bind="{{ $_system_config->agent_qq }}">{{ $_system_config->agent_qq }}</span></li>
                </ul>
            </li>
            <li class="browser">
                <div class="title">浏览器推荐</div>
                <ul>
                    <li class="browser01"><a href="https://www.ub66.com/" target="_blank">寰宇</a></li>
                    <li class="browser02"><a href="http://www.maxthon.cn/" target="_blank">遨游</a></li>
                    <li class="browser03"><a href="http://www.firefox.com.cn/" target="_blank">火狐</a></li>
                    <li class="browser04"><a href="https://www.google.cn/chrome/" target="_blank">谷歌</a></li>
                    <li class="browser05"><a href="https://liulanqi.baidu.com/" target="_blank">百度</a></li>
                    <li class="browser06"><a href="https://ie.sogou.com/" target="_blank">搜狗</a></li>
                </ul>
            </li>
        </ul>
        <div id="footer-logo"></div>
        <p id="footer-suggest">
            Copyright &#169; {{ $_system_config->site_title or 'motoo' }} Reserved
        </p>
    </div>
</footer>

