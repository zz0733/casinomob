@extends('wap.layouts.main')
@section('after.css')

    <link type="text/css" rel="stylesheet" href="{{ asset('/wap/css/main.css') }}">
@endsection
@section('content')

    @include('wap.layouts.header')
    <style>
        .m_header{
            z-index:100;
        }
        .m_wrapper .m_box.m_box-half{
            float: left;
            width: 25%;
            margin-bottom: 18px;
        }
        .m_wrapper .m_box .m_box-link{
            position: relative;
            display: block;
            color: #FFF;
            font-size: 13px;
            text-align: center;
            text-decoration: none;
        }
        .m_wrapper .m_box img{
            display: block;
            margin: 0 auto;
            width:49px;
        }
        .m_wrapper .m_box .m_box-name_new{
            margin-top: 5px;
            display:block;

        }
        .m_wrapper .m_box .m_box-link{
            background-color:#373332;
            border:0
        }
        .m_notice{
            margin-top:0
        }
        .category-wrap-placeholder_3S0wB {
            height: 38px;
        }
        .category-wrap_d3wny {
            position: relative;
            height: 38px;
            background-color: #111;
            box-sizing: border-box;
            border-top: solid 1px #2B2825;
            border-bottom: solid 1px #2B2825;
            /*padding-right: 36px;*/
        }
        .category-wrap-placeholder_3S0wB.fixed_24GUJ .category-wrap_d3wny {
            position: fixed;
            top: 46px;
            left: 0;
            z-index: 1000;
            width: 100%;
        }
        .category-wrap_d3wny .category-outer-inner_17KJ5 {
            width: 100%;
            height: 36px;
            overflow-x: scroll;
            -webkit-overflow-scrolling: touch;
        }
        .category-wrap_d3wny .category-name_2VWaa {
            position: relative;
            color: #FFF;
            float: left;
            width: 20%;
            /*height: 36px;*/
            line-height: 36px;
            font-size: 13px;
            text-align: center;
            user-select: none;
            -webkit-user-select: none;
            box-sizing: border-box;
            padding: 0 10px;
        }
        .category-wrap_d3wny .category-name_2VWaa.current_2-Ch8 {
            color: #C72620;
        }
        .category-wrap_d3wny .category-toggle-icon_2RR3B {
            position: absolute;
            top: 0;
            right: 0;
            width: 16px;
            height: 16px;
            background-color: #373332;
            padding: 10px;
        }
        .fixed_24GUJ .category-wrap_d3wny .category-name_2VWaa{
            line-height:36px;
        }
        .category-wrap_d3wny .category-name_2VWaa a{
            color:#fff;
        }
        .category-wrap_d3wny .category-name_2VWaa a.active{
            color:#C72620;
        }
        .m_wrapper .m_box{
            padding:0;
        }
        .m_category{
            margin-bottom:18px;
        }
    </style>
    <section id="content">

        <section id="home" ng-controller="HomeCtrl">
            <div class="m_container">
                <div class="m_body">
                    <div class="m_banner">
                        <div id="slide" class="container-fluid slide">
                            <ul class="bd">
                                    <li><a href="#"><img class="carousel-inner" src="{{ asset('/wap/images/m_banner2.jpg') }}"></a>
                                    </li>
                                    <li><a href="#"><img class="carousel-inner" src="{{ asset('/wap/images/m_banner3.jpg') }}"></a>
                                    </li>
                                    <li><a href="#"><img class="carousel-inner" src="{{ asset('/wap/images/m_banner4.jpg') }}"></a>
                                    </li>
                            </ul>
                            <ul class="hd"></ul>
                        </div>
                    </div>
                </div>

                {{--<div class="m_notice">--}}
                    {{--<span class="notice_logo"></span>--}}
                    {{--<div class="pull-left notice_title">--}}
                        {{--系统公告:--}}
                    {{--</div>--}}
                    {{--<div class="pull-left notice_content">--}}
                        {{--<marquee id="mar0" behavior="scroll" direction="left" scrollamount="4">--}}
                            {{--@foreach($_system_notices as $v)--}}
                                {{--<div class="module" style="display: inline;word-break: keep-all;white-space: nowrap;">--}}
                                    {{--<span>~{{ $v->title }}~</span>--}}
                                    {{--<span>{{ $v->content }}</span>--}}
                                {{--</div>--}}
                            {{--@endforeach--}}
                        {{--</marquee>--}}
                    {{--</div>--}}
                {{--</div>--}}

                <div class="category-wrap-placeholder_3S0wB">
                    <div class="category-wrap_d3wny">
                        {{--<div class="category-outer-inner_17KJ5">--}}
                            {{--<div class="category-inner_ZydHv " style="width: 100%; height: 36px;">--}}
                                {{--<div class="category-name_2VWaa category-name-card_3hsqT current_2-Ch8"><a href="javascript:void(0)">棋牌</a></div>--}}
                                {{--<div class="category-name_2VWaa category-name-live_cYRVv "><a href="javascript:void(0)">视讯</a></div>--}}
                                {{--<div class="category-name_2VWaa category-name-slot_3g1gp "><a href="javascript:void(0)">电子</a></div>--}}
                                {{--<div class="category-name_2VWaa category-name-lottery_1w8UO "><a href="javascript:void(0)">彩票</a></div>--}}
                                {{--<div class="category-name_2VWaa category-name-sport_J-CBk "><a href="javascript:void(0)">体育</a></div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        <div class="m_wrapper clear">
                            <div class="m_wrapper clear">
                                <div class="m_category" id="card">
                                    棋牌娱乐
                                </div>
                                @foreach ($_api_list as $provider)
                                    @if(in_array('card',$provider))
                                        <div class="m_box m_box-half">
                                            <a class="m_box-link" id="{{$provider['api_name']}}"
                                               @if($_member) onClick="game_open(this)"
                                               @else onClick="location.href = '{{ route('wap.login') }}'" @endif
                                            >
                                                <img src="{{ asset('/wap/images/100percent/btn_icon_'.$provider['api_name'].'.png') }}" alt="">
                                                <span class="m_box-name_new">
                                                {{ $provider['api_name'] }}
                                          </span>
                                            </a>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                            <div class="m_category" id="live">
                                视讯直播
                            </div>
                            @foreach ($_api_list as $provider)
                                @if(in_array('live',$provider))
                                    <div class="m_box m_box-half">
                                        <a class="m_box-link" id="{{$provider['api_name']}}"
                                           @if($_member) onClick="game_open(this)"
                                           @else onclick="location.href = '{{ route('wap.login') }}'" @endif
                                        >
                                            <img src="{{ asset('/wap/images/100percent/btn_icon_'.$provider['api_name'].'.png') }}" alt="">
                                            <span class="m_box-name_new">
                                                {{ $provider['api_name'] }}
                                          </span>
                                        </a>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <div class="m_wrapper clear">
                            <div class="m_category" id="slot">
                                电子游戏
                            </div>
                            @foreach ($_api_list as $provider)
                                @if(in_array('slot',$provider))
                                    <div class="m_box m_box-half">
                                        <a class="m_box-link" id="{{$provider['api_name']}}"
                                        @if($_member) onClick="game_open(this)"
                                           @else onclick="location.href = '{{ route('wap.login') }}'" @endif
                                        >
                                            <img src="{{ asset('/wap/images/100percent/btn_icon_'.$provider['api_name'].'.png') }}" alt="">
                                            <span class="m_box-name_new">
                                                {{ $provider['api_name'] }}
                                          </span>
                                        </a>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <div class="m_wrapper clear">
                            <div class="m_category" id="lotto">
                                彩票娱乐
                            </div>
                            @foreach ($_api_list as $provider)
                                @if(in_array('lotto',$provider))
                                    <div class="m_box m_box-half">
                                        <a class="m_box-link" id="{{$provider['api_name']}}"
                                        @if($_member) onClick="game_open(this)"
                                           @else onclick="location.href = '{{ route('wap.login') }}'" @endif
                                        >
                                            <img src="{{ asset('/wap/images/100percent/btn_icon_'.$provider['api_name'].'.png') }}" alt="">
                                            <span class="m_box-name_new">
                                                {{ $provider['api_name'] }}
                                          </span>
                                        </a>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <div class="m_wrapper clear">
                            <div class="m_category" id="sport">
                                体育竞技
                            </div>
                            @foreach ($_api_list as $provider)
                                @if(in_array('sport',$provider))
                                    <div class="m_box m_box-half">
                                        <a class="m_box-link" id="{{$provider['api_name']}}"
                                            @if($_member) onClick="game_open(this)"
                                           @else onclick="location.href = '{{ route('wap.login') }}'" @endif
                                        >
                                            <img src="{{ asset('/wap/images/100percent/btn_icon_'.$provider['api_name'].'.png') }}" alt="">
                                            <span class="m_box-name_new">
                                                {{ $provider['api_name'] }}
                                          </span>
                                        </a>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

        

        <script>
            function game_open(obj){
                var o = $(obj);
                console.log(o.attr("id"));
                var param = {
                    provider:o.attr("id"),
                };
                send_ajax(game_open_blank,"GET",'/m/playGame',param);
            }

            function game_open_blank(message)
            {
                window.open(message);
            }

        </script>
@endsection
