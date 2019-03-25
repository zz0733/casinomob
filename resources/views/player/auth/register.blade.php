@extends('player.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">注册</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('player.register.post') }}">
                            {{ csrf_field() }}
                            {{--<input type="hidden" name="invite_code" value="{{ $i_code }}">--}}
                            <div class="form-group">
                                <label for="username" class="col-md-4 control-label">用户名</label>

                                <div class="col-md-6">
                                    <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>
                                </div>
                            </div>

                            {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
                            {{--<label for="email" class="col-md-4 control-label">邮箱</label>--}}

                            {{--<div class="col-md-6">--}}
                            {{--<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>--}}
                            {{--</div>--}}
                            {{--</div>--}}

                            <div class="form-group">
                                <label for="password" class="col-md-4 control-label">密码</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">确认密码</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">邮箱</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="mobile" class="col-md-4 control-label">手机</label>

                                <div class="col-md-6">
                                    <input id="mobile" type="mobile" class="form-control" name="mobile" value="{{ old('mobile') }}" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="withdraw_pwd" class="col-md-4 control-label">取款密码</label>

                                <div class="col-md-6">
                                    <input id="withdraw_pwd" type="password" class="form-control" name="withdraw_pwd">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary submit-form-sync">
                                        注册
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('after.js')
    <script src="{{ asset('/vendor/layer/layer.js') }}"></script>
    <script src="{{ asset('/js/submitformsync.js') }}"></script>
    <script src="{{ asset('/backstage/js/form_v.js') }}"></script>
@endsection
