@extends('wap.layouts.main')
@section('content')
    @include('wap.layouts.header')
    <div class="m_container">
        <div class="m_body">
            <div class="m_userCenter">
                <div class="m_userCenter-title">会员中心</div>
                <div class="m_userCenter-line"></div>
                <ul class="m_userCenter-list">
                    @foreach($player_providers as $provider)
                        <li>
                            <img class="trade-icon" src="{{ asset('/wap/images/m_userCenter-icon1.png') }}" alt="">
                            {{  $provider['name'] }}
                            @if($provider['active'] == 'yes')
                                <button id="{{$provider['id']}}" value="{{$provider['name']}}" class="btn btn-success pull-right" onClick="balance(this)">Balance</button>
                            @else
                                <button id="{{$provider['id']}}" value="{{$provider['name']}}" class="btn btn-info pull-right" onClick="activate(this)">Activate</button>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <script>
        function balance(obj){
            var o = $(obj);
            var param = {
                provider:o.val(),
            };
            send_ajax(parse_data,"GET",'/m/balance',param);
        }

        function activate(obj){
            var o = $(obj);
            var param = {
                provider:o.val(),
            };
            send_ajax("Activate successfully!","GET",'/m/activate-provider',param);
        }

        function parse_data(message)
        {
            var balance = message.balance;
            swal({
                    title: "Success",
                    text: "Your balance is : "+ balance,
                    icon: "success"
                });
        }
    </script>
@endsection
