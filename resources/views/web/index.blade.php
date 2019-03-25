@extends('web.layouts.main')
@section('after.js')
    <link href="/bundles/home.css?v=kEJfj5m3p32HDyN-DPIJd3Namr0MZwylZT3l0yoYBLk1" rel="stylesheet"/>
    @if($_system_config->is_alert_on == 0)
        <div id="modal-tit" class="modal modal-login">
            <div class="modal-content" style="width: 650px;height: 414px;padding: 0">
                <a href="" class="close bg-icon" style="top: 0;right: -20px;opacity: 1;background-color: #ccc"></a>
                <a href="javascript:;">
                    <img src="{{ $_system_config->alert_img }}" alt="">
                </a>
            </div>
        </div>
        <script>
            (function($){
                $(function(){
                    $('#modal-tit').modal();
                })
            })(jQuery);
        </script>
    @endif
@endsection
@section('content')


    <div id="banner">
        <div class="nivoSlider" id="Sliderbanner">
            <ul id="au" class="mianbanner">
                {{--@foreach($banners as $item)--}}
                {{--<li><a><img src="{{ $item->path }}"/></a></li>--}}
                {{--@endforeach--}}
                <li><a id="img1"><img src="{{ asset('/bundles/images/1.jpg') }}"/></a></li>
                <li style="display: none;"><a><img
                            src="{{ asset('/bundles/images/2.jpg') }}"/></a></li>
                <li style="display: none;"><a><img
                            src="{{ asset('/bundles/images/3.jpg') }}"/></a></li>
                <li style="display: none;"><a><img
                            src="{{ asset('/bundles/images/4.jpg') }}"/></a></li>
                <li style="display: none;"><a><img
                            src="{{ asset('/bundles/images/5.jpg') }}"/></a></li>
                <li style="display: none;"><a><img
                            src="{{ asset('/bundles/images/6.jpg') }}"/></a></li>
                <li style="display: none;"><a><img
                            src="{{ asset('/bundles/images/7.jpg') }}"/></a></li>
                <li style="display: none;"><a><img
                            src="{{ asset('/bundles/images/8.jpg') }}"/></a></li>
            </ul>


            <div class="sidecenter" id="middle-pic">


                <ul class="lunbo">
                    <li class="active" id="t0"></li>
                    <li class="bg" id="t1"></li>
                    <li class="bg" id="t2"></li>
                    <li class="bg" id="t3"></li>
                    <li class="bg" id="t4"></li>
                    <li class="bg" id="t5"></li>
                    <li class="bg" id="t6"></li>
                    <li class="bg" id="t7"></li>
                </ul>
            </div>


            <!-- <a class="nivo-prevNav">左</a>
             <a class="nivo-nextNav">右</a>-->
        </div>


    </div>



    <div id="news">
        <div class="wrapper">
            <marquee onmouseover="this.stop()" onmouseout="this.start()" style="float:left; color:#fff; font-size:14px; line-height:30px;position:relative;left:10px;margin-top:4px;" scrollAmount=5 width=700>
                @foreach($_system_notices as $v)
                    <ul class="news-list" ng-click="newsClick()">
                        ~{{ $v->title }}~{{ $v->content }}

                    </ul>
                @endforeach
            </marquee>
        </div>
    </div>




    <div id="content">


        <div id="home">
            <section class="slot-game" ng-controller="LobbiesCtrl">
                <div class="wrapper">
                    <div class="slider-left"
                         carousel-slider
                         super-vis="8"
                         super-play="false"
                         super-effect="leftLoop"
                         ng-cloak>
                        <span class="prev"></span>
                        <span class="next"></span>
                        <div class="main-cell">
                            <ul class="game-list" ng-init="show='mg'">
                                <li game-box="mg" ng-click="toMgFlash()" ng-mouseover="show='mg'" ng-class="{'active': show=='mg'}">MG电子</li>
                                <li game-box="cq9" ng-click="toCq9Html()" ng-mouseover="show='cq9'" ng-class="{'active': show=='cq9'}">传奇电子</li>
                                <li game-box="pt" ng-click="toPtFlash()" ng-mouseover="show='pt'" ng-class="{'active': show=='pt'}">PT电子</li>
                                <li game-box="bb" ng-click="toBbGame()" ng-mouseover="show='bb'" ng-class="{'active': show=='bb'}">BBIN电子</li>
                                <li game-box="ag" ng-click="toAgHtml()" ng-mouseover="show='ag'" ng-class="{'active': show=='ag'}">AG电子</li>
                                <li game-box="sg" ng-click="toSgFlash()" ng-mouseover="show='sg'" ng-class="{'active': show=='sg'}">新霸电子</li>
                                <li game-box="mw" ng-click="toMwHtml()" ng-mouseover="show='mw'" ng-class="{'active': show=='mw'}">MW电子</li>
                                <li game-box="pts" ng-click="toPtsHtml()" ng-mouseover="show='pts'" ng-class="{'active': show=='pts'}">天风电子</li>
                                <li game-box="rt" ng-click="toRedTigerHtml()" ng-mouseover="show='rt'" ng-class="{'active': show=='rt'}">红虎电子</li>
                                <li game-box="png" ng-click="toPngHtml()" ng-mouseover="show='png'" ng-class="{'active': show=='png'}">PNG电子</li>
                                <li game-box="jdb" ng-click="toJdbHtml()" ng-mouseover="show='jdb'" ng-class="{'active': show=='jdb'}">夺宝电子</li>

                                <li game-box="pp" ng-click="toPrgFlash()" ng-mouseover="show='pp'" ng-class="{'active': show=='pp'}">PP电子</li>

                                <li game-box="hb" ng-click="toHabaHtml()" ng-mouseover="show='hb'" ng-class="{'active': show=='hb'}">HB电子</li>
                                <li game-box="gpi" ng-click="toGpiFlash()" ng-mouseover="show='gpi'" ng-class="{'active': show=='gpi'}">GPI电子</li>

                            </ul>
                        </div>
                    </div>
                    <div class="winner">
                        <div class="winner-title"><span>客户ID</span><span>游戏名称</span><span>金额</span></div>
                        <div class="winner-list">
                            <ul>
                                <li><span class="user">db***s4</span><span>MG电子</span><span class="num">82800.98</span></li>
                                <li><span class="user">chia***i</span><span>MG电子</span><span class="num">229058.25</span></li>
                                <li><span class="user">lid***78</span><span>传奇电子</span><span class="num">195134.34</span></li>
                                <li><span class="user">a6***15</span><span>PT电子</span><span class="num">142301.12</span></li>
                                <li><span class="user">zhi***2</span><span>MW电子</span><span class="num">292916.3</span></li>
                                <li><span class="user">di***un</span><span>PNG电子</span><span class="num">24222.83</span></li>
                                <li><span class="user">hu1***5</span><span>LG赛马游戏</span><span class="num">254690.35</span></li>
                                <li><span class="user">am***314</span><span>PG电子</span><span class="num">104053.5</span></li>
                                <li><span class="user">ni***29</span><span>GA电子</span><span class="num">250827.95</span></li>
                                <li><span class="user">lia***88</span><span>ISB电子</span><span class="num">238539.57</span></li>
                                <li><span class="user">jun***g5</span><span>GPI电子</span><span class="num">241416.35</span></li>
                                <li><span class="user">zgy5***3</span><span>NE电子</span><span class="num">170452.58</span></li>
                                <li><span class="user">qiu***10</span><span>HB电子</span><span class="num">112372.86</span></li>
                                <li><span class="user">yl8***6</span><span>GPK糖果</span><span class="num">133324.15</span></li>
                                <li><span class="user">lds***25</span><span>PP电子</span><span class="num">120855.35</span></li>
                                <li><span class="user">ab1***32</span><span>夺宝电子</span><span class="num">218046.67</span></li>
                                <li><span class="user">jj1***27</span><span>GNS电子</span><span class="num">242827.26</span></li>
                                <li><span class="user">Zhw***uf</span><span>RT电子</span><span class="num">30063.68</span></li>
                                <li><span class="user">fei***22</span><span>PNG电子</span><span class="num">13541.92</span></li>
                                <li><span class="user">ba***mei</span><span>MW电子</span><span class="num">213411.1</span></li>
                                <li><span class="user">li***93</span><span>天风电子</span><span class="num">279860.57</span></li>
                                <li><span class="user">qq1***11</span><span>BBIN电子</span><span class="num">111201.05</span></li>
                                <li><span class="user">zdy***46</span><span>AG电子</span><span class="num">155124.95</span></li>
                                <li><span class="user">Qim***08</span><span>新霸电子</span><span class="num">39664.09</span></li>
                                <li><span class="user">ya***n00</span><span>PT电子</span><span class="num">171983.88</span></li>
                                <li><span class="user">wan***91</span><span>AG电子</span><span class="num">237711.65</span></li>
                                <li><span class="user">vv***27</span><span>GNS电子</span><span class="num">114689.28</span></li>
                                <li><span class="user">xio***34</span><span>PT电子</span><span class="num">90579.05</span></li>
                                <li><span class="user">cp1***79</span><span>新霸电子</span><span class="num">256232.62</span></li>
                                <li><span class="user">y***99</span><span>RT电子</span><span class="num">123702.82</span></li>
                                <li><span class="user">zds***5</span><span>MG电子</span><span class="num">123435.36</span></li>
                                <li><span class="user">yy***17</span><span>PT电子</span><span class="num">87990.69</span></li>
                                <li><span class="user">hy***ete</span><span>MG电子</span><span class="num">112800.28</span></li>
                                <li><span class="user">rrf***34</span><span>PT电子</span><span class="num">329058.15</span></li>
                                <li><span class="user">yfe***86</span><span>传奇电子</span><span class="num">495134.38</span></li>
                                <li><span class="user">hhh***3r</span><span>新霸电子</span><span class="num">742301.12</span></li>
                                <li><span class="user">egr***66</span><span>AG电子</span><span class="num">492916.13</span></li>
                                <li><span class="user">dgx***3g</span><span>BBIN电子</span><span class="num">24222.83</span></li>
                                <li><span class="user">jnk***55</span><span>MW电子</span><span class="num">654690.35</span></li>
                                <li><span class="user">lop***04</span><span>天风电子</span><span class="num">904053.5</span></li>
                                <li><span class="user">fvd***21</span><span>RT电子</span><span class="num">350827.95</span></li>
                                <li><span class="user">fdg***88</span><span>PNG电子</span><span class="num">138539.57</span></li>
                                <li><span class="user">h436***lp</span><span>夺宝电子</span><span class="num">441416.35</span></li>
                                <li><span class="user">grg***d</span><span>GNS电子</span><span class="num">370452.58</span></li>
                                <li><span class="user">znd***ety</span><span>PP电子</span><span class="num">712372.86</span></li>
                                <li><span class="user">iou***tt</span><span>GPK糖果</span><span class="num">33324.15</span></li>
                                <li><span class="user">eges***ht</span><span>NE电子</span><span class="num">620855.35</span></li>
                                <li><span class="user">gdb***97</span><span>HB电子</span><span class="num">318046.67</span></li>
                                <li><span class="user">htvd***u</span><span>ISB电子</span><span class="num">142827.26</span></li>
                                <li><span class="user">flm***ryg</span><span>GPI电子</span><span class="num">90063.68</span></li>
                                <li><span class="user">mhh***ef</span><span>GA电子</span><span class="num">63541.92</span></li>
                                <li><span class="user">nfb***h</span><span>PG电子</span><span class="num">413411.1</span></li>
                                <li><span class="user">tt4***09</span><span>PNG电子</span><span class="num">311201.05</span></li>
                                <li><span class="user">jf5***34</span><span>PP电子</span><span class="num">255124.95</span></li>
                                <li><span class="user">gdd***j6</span><span>AG电子</span><span class="num">59664.09</span></li>
                                <li><span class="user">l7p***8ug</span><span>传奇电子</span><span class="num">571983.88</span></li>
                                <li><span class="user">lij***7u</span><span>PT电子</span><span class="num">737711.65</span></li>
                                <li><span class="user">tst***dg</span><span>MG电子</span><span class="num">214689.28</span></li>
                                <li><span class="user">thr***teh</span><span>MG电子</span><span class="num">100579.05</span></li>
                                <li><span class="user">jg5***53</span><span>夺宝电子</span><span class="num">156232.62</span></li>
                                <li><span class="user">yu2***yg</span><span>RT电子</span><span class="num">183702.82</span></li>
                                <li><span class="user">t53g***68</span><span>PP电子</span><span class="num">133435.36</span></li>
                                <li><span class="user">teg5***53</span><span>AG电子</span><span class="num">187990.69</span></li>
                            </ul>
                        </div>
                    </div>

                    <ul class="game-show sg" ng-show="show=='sg'" ng-cloak>
                        <li data-img="01" ng-click="toSgFlash()"><span>旺旺公主</span></li>
                        <li data-img="02" ng-click="toSgFlash()"><span>斧头帮</span></li>
                        <li data-img="03" ng-click="toSgFlash()"><span>发发发2</span></li>
                        <li data-img="04" ng-click="toSgFlash()"><span>汪旺财</span></li>
                        <li data-img="05" ng-click="toSgFlash()"><span>森林之王</span></li>
                        <li data-img="06" ng-click="toSgFlash()"><span>大明帝国</span></li>
                        <li data-img="07" ng-click="toSgFlash()"><span>齐天大胜</span></li>
                        <li data-img="08" ng-click="toSgFlash()"><span>潘精灵</span></li>
                    </ul>

                    <ul class="game-show fish" ng-show="show=='fish'" ng-cloak>
                        <li data-img="01" ng-click="toAgFish()"><span>捕鱼王2代</span></li>
                        <li data-img="02" ng-click="toMwFish()"><span>千炮捕鱼</span></li>
                        <li data-img="03" ng-click="toJdbFish()"><span>龙王捕鱼</span></li>
                        <li data-img="04" ng-click="toGnsFish()"><span>寻宝捕鱼王</span></li>
                        <li data-img="05" ng-click="toPtFish()"><span>深海大赢家</span></li>
                        <li data-img="06" ng-click="toPgFish()"><span>鱼王争霸</span></li>
                        <li data-img="07" ng-click="toBbFish()"><span>捕鱼达人</span></li>
                        <li data-img="08" ng-click="toPgFish2()"><span>全民捕鱼</span></li>
                    </ul>

                    <ul class="game-show cq9" ng-show="show=='cq9'" ng-cloak>
                        <li data-img="01" ng-click="toCq9Html()"><span>金玉满堂</span></li>
                        <li data-img="02" ng-click="toCq9Html()"><span>金鸡报喜</span></li>
                        <li data-img="03" ng-click="toCq9Html()"><span>甜蜜蜜</span></li>
                        <li data-img="04" ng-click="toCq9Html()"><span>跳起来</span></li>
                        <li data-img="05" ng-click="toCq9Html()"><span>钟馗运财</span></li>
                        <li data-img="06" ng-click="toCq9Html()"><span>钻石水果王</span></li>
                        <li data-img="07" ng-click="toCq9Html()"><span>水世界</span></li>
                        <li data-img="08" ng-click="toCq9Html()"><span>火烧连环船</span></li>
                    </ul>

                    <ul class="game-show mg" ng-show="show=='mg'" ng-cloak>
                        <li data-img="01" ng-click="toMgFlash()"><span>摆脱</span></li>
                        <li data-img="02" ng-click="toMgFlash()"><span>不朽的浪漫</span></li>
                        <li data-img="03" ng-click="toMgFlash()"><span>银行抢匪2</span></li>
                        <li data-img="04" ng-click="toMgFlash()"><span>阿瓦隆</span></li>
                        <li data-img="05" ng-click="toMgFlash()"><span>燃烧的欲望</span></li>
                        <li data-img="06" ng-click="toMgFlash()"><span>宝石之轮</span></li>
                        <li data-img="07" ng-click="toMgFlash()"><span>淑女之夜</span></li>
                        <li data-img="08" ng-click="toMgFlash()"><span>狂欢节</span></li>
                    </ul>

                    <ul class="game-show ag" ng-show="show=='ag'" ng-cloak>
                        <li data-img="01" ng-click="toAgHtml()"><span>XIN哥来了</span></li>
                        <li data-img="02" ng-click="toAgHtml()"><span>阿里巴巴</span></li>
                        <li data-img="03" ng-click="toAgHtml()"><span>神奇宝石</span></li>
                        <li data-img="04" ng-click="toAgHtml()"><span>金拉霸</span></li>
                        <li data-img="05" ng-click="toAgHtml()"><span>性感女仆</span></li>
                        <li data-img="06" ng-click="toAgHtml()"><span>水果拉霸</span></li>
                        <li data-img="07" ng-click="toAgHtml()"><span>金龙珠</span></li>
                        <li data-img="08" ng-click="toAgHtml()"><span>灵猴献瑞</span></li>
                    </ul>

                    <ul class="game-show pt" ng-show="show=='pt'" ng-cloak>
                        <li data-img="01" ng-click="toPtFish()"><span>深海大赢家</span></li>
                        <li data-img="02" ng-click="toPtFlash()"><span>古怪猴子</span></li>
                        <li data-img="03" ng-click="toPtFlash()"><span>湛蓝深海</span></li>
                        <li data-img="04" ng-click="toPtFlash()"><span>招财童子</span></li>
                        <li data-img="05" ng-click="toPtFlash()"><span>龙龙龙</span></li>
                        <li data-img="06" ng-click="toPtFlash()"><span>疯狂麻将</span></li>
                        <li data-img="07" ng-click="toPtFlash()"><span>熊之舞</span></li>
                        <li data-img="08" ng-click="toPtFlash()"><span>宝石女王</span></li>
                    </ul>

                    <ul class="game-show gns" ng-show="show=='gns'" ng-cloak>
                        <li data-img="01" ng-click="toGnsHtml()"><span>名车排名赛</span></li>
                        <li data-img="02" ng-click="toGnsHtml()"><span>祥狮夺宝</span></li>
                        <li data-img="03" ng-click="toGnsHtml()"><span>招福钱龟</span></li>
                        <li data-img="04" ng-click="toGnsHtml()"><span>草原争霸战</span></li>
                        <li data-img="05" ng-click="toGnsHtml()"><span>古埃及之神</span></li>
                        <li data-img="06" ng-click="toGnsHtml()"><span>金龙卷</span></li>
                        <li data-img="07" ng-click="toGnsHtml()"><span>大红包</span></li>
                        <li data-img="08" ng-click="toGnsHtml()"><span>金虎殿</span></li>
                    </ul>

                    <ul class="game-show gpi" ng-show="show=='gpi'" ng-cloak>
                        <li data-img="01" ng-click="toGpiFlash()"><span>甜蜜相待</span></li>
                        <li data-img="02" ng-click="toGpiFlash()"><span>埃及艳后</span></li>
                        <li data-img="03" ng-click="toGpiFlash()"><span>哪吒闹海</span></li>
                        <li data-img="04" ng-click="toGpiFlash()"><span>摇钱树</span></li>
                        <li data-img="05" ng-click="toGpiFlash()"><span>赌神</span></li>
                        <li data-img="06" ng-click="toGpiFlash()"><span>海盗寻宝</span></li>
                        <li data-img="07" ng-click="toGpiFlash()"><span>幸运骰子</span></li>
                        <li data-img="08" ng-click="toGpiFlash()"><span>招财猫</span></li>
                    </ul>

                    <ul class="game-show pp" ng-show="show=='pp'" ng-cloak>
                        <li data-img="01" ng-click="toPrgFlash()"><span>8条龙</span></li>
                        <li data-img="02" ng-click="toPrgFlash()"><span>法力无边</span></li>
                        <li data-img="03" ng-click="toPrgFlash()"><span>5雄狮</span></li>
                        <li data-img="04" ng-click="toPrgFlash()"><span>猴子疯狂</span></li>
                        <li data-img="05" ng-click="toPrgFlash()"><span>黄金野狼</span></li>
                        <li data-img="06" ng-click="toPrgFlash()"><span>幸运新年</span></li>
                        <li data-img="07" ng-click="toPrgFlash()"><span>矮人黄金2</span></li>
                        <li data-img="08" ng-click="toPrgFlash()"><span>财源滚滚</span></li>
                    </ul>

                    <ul class="game-show mw" ng-show="show=='mw'" ng-cloak>
                        <li data-img="01" ng-click="toMwHtml()"><span>超级斗地主</span></li>
                        <li data-img="02" ng-click="toMwHtml()"><span>森林舞会</span></li>
                        <li data-img="03" ng-click="toMwHtml()"><span>五龙争霸</span></li>
                        <li data-img="04" ng-click="toMwHtml()"><span>水浒传</span></li>
                        <li data-img="05" ng-click="toMwHtml()"><span>黄金777</span></li>
                        <li data-img="06" ng-click="toMwHtml()"><span>经典水果机</span></li>
                        <li data-img="07" ng-click="toMwHtml()"><span>太极</span></li>
                        <li data-img="08" ng-click="toMwHtml()"><span>好运5扑克</span></li>
                    </ul>

                    <ul class="game-show hb" ng-show="show=='hb'" ng-cloak>
                        <li data-img="01" ng-click="toHabaHtml()"><span>四大神兽</span></li>
                        <li data-img="02" ng-click="toHabaHtml()"><span>街头乐队</span></li>
                        <li data-img="03" ng-click="toHabaHtml()"><span>炸弹追击</span></li>
                        <li data-img="04" ng-click="toHabaHtml()"><span>发财神</span></li>
                        <li data-img="05" ng-click="toHabaHtml()"><span>鲤鱼门</span></li>
                        <li data-img="06" ng-click="toHabaHtml()"><span>十二生肖</span></li>
                        <li data-img="07" ng-click="toHabaHtml()"><span>海洋之音</span></li>
                        <li data-img="08" ng-click="toHabaHtml()"><span>凤凰</span></li>
                    </ul>

                    <ul class="game-show jdb" ng-show="show=='jdb'" ng-cloak>
                        <li data-img="01" ng-click="toJdbHtml()"><span>直播变脸</span></li>
                        <li data-img="02" ng-click="toJdbHtml()"><span>变脸</span></li>
                        <li data-img="03" ng-click="toJdbHtml()"><span>金鸡报囍</span></li>
                        <li data-img="04" ng-click="toJdbHtml()"><span>麻雀无双</span></li>
                        <li data-img="05" ng-click="toJdbHtml()"><span>王牌特工</span></li>
                        <li data-img="06" ng-click="toJdbHtml()"><span>亿万富翁</span></li>
                        <li data-img="07" ng-click="toJdbHtml()"><span>月光秘宝</span></li>
                        <li data-img="08" ng-click="toJdbHtml()"><span>幸运赛车</span></li>
                    </ul>

                    <ul class="game-show ne" ng-show="show=='ne'" ng-cloak>
                        <li data-img="01" ng-click="toNetentHtml()"><span>星爆</span></li>
                        <li data-img="02" ng-click="toNetentHtml()"><span>翻转卷轴</span></li>
                        <li data-img="03" ng-click="toNetentHtml()"><span>贡多的冒险</span></li>
                        <li data-img="04" ng-click="toNetentHtml()"><span>极速驱动</span></li>
                        <li data-img="05" ng-click="toNetentHtml()"><span>杰克哈姆斯</span></li>
                        <li data-img="06" ng-click="toNetentHtml()"><span>圣诞惊喜</span></li>
                        <li data-img="07" ng-click="toNetentHtml()"><span>小野狼</span></li>
                        <li data-img="08" ng-click="toNetentHtml()"><span>芬恩的炫涡</span></li>
                    </ul>

                    <ul class="game-show rt" ng-show="show=='rt'" ng-cloak>
                        <li data-img="01" ng-click="toRedTigerHtml()"><span>矿洞奇遇</span></li>
                        <li data-img="02" ng-click="toRedTigerHtml()"><span>神秘水果</span></li>
                        <li data-img="03" ng-click="toRedTigerHtml()"><span>龙之谕</span></li>
                        <li data-img="04" ng-click="toRedTigerHtml()"><span>财富满屋</span></li>
                        <li data-img="05" ng-click="toRedTigerHtml()"><span>麒麟送宝</span></li>
                        <li data-img="06" ng-click="toRedTigerHtml()"><span>深海宝藏</span></li>
                        <li data-img="07" ng-click="toRedTigerHtml()"><span>水果大爆炸</span></li>
                        <li data-img="08" ng-click="toRedTigerHtml()"><span>宝石暴走</span></li>
                    </ul>

                    <ul class="game-show ga" ng-show="show=='ga'" ng-cloak>
                        <li data-img="01" ng-click="toGameArtHtml()"><span>种钱得钱2</span></li>
                        <li data-img="02" ng-click="toGameArtHtml()"><span>财源滚滚</span></li>
                        <li data-img="03" ng-click="toGameArtHtml()"><span>寻金之旅</span></li>
                        <li data-img="04" ng-click="toGameArtHtml()"><span>海之女王</span></li>
                        <li data-img="05" ng-click="toGameArtHtml()"><span>三王</span></li>
                        <li data-img="06" ng-click="toGameArtHtml()"><span>雷声鸟</span></li>
                        <li data-img="07" ng-click="toGameArtHtml()"><span>国王的财富</span></li>
                        <li data-img="08" ng-click="toGameArtHtml()"><span>皇帝財富</span></li>
                    </ul>

                    <ul class="game-show pg" ng-show="show=='pg'" ng-cloak>
                        <li data-img="01" ng-click="toPgHtml()"><span>小玛莉</span></li>
                        <li data-img="02" ng-click="toPgHtml()"><span>奔驰宝马</span></li>
                        <li data-img="03" ng-click="toPgHtml()"><span>猴子爬树</span></li>
                        <li data-img="04" ng-click="toPgFish2()"><span>全民捕鱼</span></li>
                        <li data-img="05" ng-click="toPgHtml()"><span>西游争霸</span></li>
                        <li data-img="06" ng-click="toPgHtml()"><span>动物星球</span></li>
                        <li data-img="07" ng-click="toPgFish()"><span>鱼王争霸</span></li>
                        <li data-img="08"><span>查看更多</span></li>
                    </ul>

                    <ul class="game-show isb" ng-show="show=='isb'" ng-cloak>
                        <li data-img="01" ng-click="toIsbHtml()"><span>百万分</span></li>
                        <li data-img="02" ng-click="toIsbHtml()"><span>财富树</span></li>
                        <li data-img="03" ng-click="toIsbHtml()"><span>重赏百万</span></li>
                        <li data-img="04" ng-click="toIsbHtml()"><span>皇家现金</span></li>
                        <li data-img="05" ng-click="toIsbHtml()"><span>幸运3</span></li>
                        <li data-img="06" ng-click="toIsbHtml()"><span>守护之眼</span></li>
                        <li data-img="07" ng-click="toIsbHtml()"><span>旋转卷轴</span></li>
                        <li data-img="08" ng-click="toIsbHtml()"><span>少林旋转</span></li>
                    </ul>

                    <ul class="game-show bb" ng-show="show=='bb'" ng-cloak>
                        <li data-img="01" ng-click="toBbGame()"><span>糖果派对</span></li>
                        <li data-img="02" ng-click="toBbGame()"><span>连环夺宝</span></li>
                        <li data-img="03" ng-click="toBbGame()"><span>糖果派对2</span></li>
                        <li data-img="04" ng-click="toBbGame()"><span>连环夺宝2</span></li>
                        <li data-img="05" ng-click="toBbGame()"><span>开心消消乐</span></li>
                        <li data-img="06" ng-click="toBbGame()"><span>趣味台球</span></li>
                        <li data-img="07" ng-click="toBbGame()"><span>明星97</span></li>
                        <li data-img="08" ng-click="toBbGame()"><span>发大财</span></li>
                    </ul>

                    <ul class="game-show png" ng-show="show=='png'" ng-cloak>
                        <li data-img="01" ng-click="toPngHtml()"><span>宝石巫师</span></li>
                        <li data-img="02" ng-click="toPngHtml()"><span>富二代</span></li>
                        <li data-img="03" ng-click="toPngHtml()"><span>火焰小丑</span></li>
                        <li data-img="04" ng-click="toPngHtml()"><span>神秘小丑</span></li>
                        <li data-img="05" ng-click="toPngHtml()"><span>五彩宝石</span></li>
                        <li data-img="06" ng-click="toPngHtml()"><span>月亮守护者</span></li>
                        <li data-img="07" ng-click="toPngHtml()"><span>维京人世界</span></li>
                        <li data-img="08" ng-click="toPngHtml()"><span>好运招财猫</span></li>
                    </ul>

                    <ul class="game-show pts" ng-show="show=='pts'" ng-cloak>
                        <li data-img="01" ng-click="toPtsHtml()"><span>百搭雄狮</span></li>
                        <li data-img="02" ng-click="toPtsFish()"><span>捕鱼多福</span></li>
                        <li data-img="03" ng-click="toPtsHtml()"><span>财神爷</span></li>
                        <li data-img="04" ng-click="toPtsHtml()"><span>送财童子</span></li>
                        <li data-img="05" ng-click="toPtsHtml()"><span>幸运金蟾</span></li>
                        <li data-img="06" ng-click="toPtsHtml()"><span>招财蟾蜍</span></li>
                        <li data-img="07" ng-click="toPtsHtml()"><span>奥兹的魔法</span></li>
                        <li data-img="08" ng-click="toPtsHtml()"><span>东风之战</span></li>
                    </ul>
                </div>
            </section>
            <section class="casino-link">
                <div class="wrapper">
                    <ul class="casino-tab" ng-init="tab='live'">
                        <li class="live" ng-mouseover="tab='live'" ng-class="{'active': tab=='live'}">
                            <a href="/Lobby/Live">
                                真人视讯
                                <span>LIVE CASINO</span>
                                <div class="arrow"></div>
                            </a>
                        </li>
                        <li class="sport" ng-mouseover="tab='sport'" ng-class="{'active': tab=='sport'}">
                            <a href="/Lobby/Sport">
                                体育赛事
                                <span>SPORT BET</span>
                                <div class="arrow"></div>
                            </a>
                        </li>
                        <li class="lottery" ng-mouseover="tab='lottery'" ng-class="{'active': tab=='lottery'}">
                            <a href="/Lobby/Lottery">
                                彩票游戏
                                <span>LOTTERYS</span>
                                <div class="arrow"></div>
                            </a>
                        </li>
                    </ul>
                    <div class="mid-img" ng-class="tab"></div>
                    <div class="right-area">
                        <p>
                            <span>太阳城集团</span>手机APP完美上线，汇聚全球顶级平台额度无需转换。提供近万款电子游艺、真人视讯、时时彩、棋牌对战、捕鱼达人、体育投注。支持手机一键存/取款，方便快捷，财富尽在掌握！
                        </p>
                        <div class="mobile-qr">
                            <div><img src="https://cdn.igsttech.com/Web.Portal/LC001-01.Portal/Content/Views/Home/images/casino/qr.png" /></div>
                            <img src="https://cdn.igsttech.com/Web.Portal/LC001-01.Portal/Content/Views/Home/images/casino/mobile.png" />
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="wrapper">



        </div>
    </div>


@endsection
