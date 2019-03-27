@extends('wap.layouts.main')
@section('content')
    @include('wap.layouts.header')
	        <link href="/wap/bundles/register.css?v=szh8TvWWY042R_eMKSkiSuv8SvqLIABjgI-wUtqNhwI1" rel="stylesheet"/>
 <div class="m_container">
        <div class="m_body"style="background:#373332;">
            <div class="m_login m_register"style="background:#373332;">
 <div class="m_login-form"style="background:#373332;">
    <form id="form1" name="form1">
                        
                        <div class="m_login-field">
                            <label class="m_need" for="">*账号</label>
                            <input id="username" name="username" type="text" placeholder="用户名(6-8位字符)" minlength="6" maxlength="20"style="background:#373332;">
                        </div>
                        <div class="m_login-field">
                            <label class="m_need" for="">*密码</label>
                            <input id="password" name="password" type="password" placeholder="密码" minlength="6" maxlength="20"style="background:#373332;">
                        </div>
                        <div class="m_login-field">
                            <label class="m_need" for="">*再次输入密码</label>
                            <input id="passwdse" name="password_confirmation" type="password" placeholder="再次输入密码" minlength="6" maxlength="12"style="background:#373332;">
                        </div>
                        <div class="m_login-field">
                            <label class="m_need" for="">*Email</label>
                            <input id="email" name="email" type="email" placeholder="Email" maxlength="20"style="background:#373332;">
                        </div>
                        <div class="m_login-field">
                            <label class="m_need" for="">*手机</label>
                            <input id="mobile" name="mobile" type="text" placeholder="mobile" maxlength="20"style="background:#373332;">
                        </div>
                        <div class="m_login-field">
                            <label class="m_need" for="">*取款密码</label>
                            <input id="withdraw_pwd" name="withdraw_pwd" type="password" placeholder="提款密码(6位纯数字)" maxlength="6"style="background:#373332;">
                        </div>

                        <div class="m_login-field textRight">
                            <a href="{{ route('wap.login') }}" class="m_forget-pwd">已有账号?立即登录</a>
                        </div>
                        <div class="m_login-field">
                            <button class="m_login-submit ajax-submit-btn" onClick="register()">立即注册</button>
                        </div>
                        <!--<div class="m_addUs">-->
                        <!--<a href="javascript:;" class="m_btn-join">免费加入</a>-->
                        <!--</div>-->

                        <div class="m_register-tips">
                            <h2>备注：</h2>
                            <p>1.标记有 * 者为必填项目。</p>
                            <p>2.提款密码必须为6位数的数字；</p>
                            <p>3.姓名必须与你用于提款的银行户口名字一致，否则无法提款。</p>
                        </div>
                    </form>
					 </div> 
                    </div> 
                </div> 
            </div>
<script type="text/javascript">
    function register(){
        var data = {};
        data['username'] = $('#username').val();
        data['password'] = $('#password').val();
        data['password_confirmation'] = $('#passwdse').val();
        data['email'] = $('#email').val();
        data['mobile'] = $('#mobile').val();
        data['withdraw_pwd'] = $('#withdraw_pwd').val();
        console.log(data);
        // send_ajax('register successfully',"GET",'/postrRegister',data);
        $.ajax({
            url: '/postrRegister',
            method: 'GET',
            data: data,
            success: function(message) {
            
                    swal({
                        title: "Success",
                        text: "Register successfully!",
                        icon: "success"
                    }).then(function(){
                        window.location.href = '/';
                    });
                
            },
            error: function(message) {
                var msg = JSON.stringify(JSON.parse(message.responseText).errors);
                if(!msg)
                    msg = JSON.stringify(JSON.parse(message.responseText).message);
                swal({
                    title: "Failed.",
                    text: msg,
                    icon: "error",
                    dangerMode:true,
                    confirmButtonText: 'Got it!'
                }).then(function(){
                        window.location.reload();
                    });
            }
        });
    }
</script>





@endsection
