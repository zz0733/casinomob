
/**
 * 2017/08/22  公共注册JS
 * @param {Object} d
 */
var PARENT_WORDS    =  {WORD:"介绍人",WORDSREQ:{REQ1:"请填写介绍人！"},WORDSERROR:"介绍人输入错误！",WORDSCORRECT:"",WORDSWARN:""};
var ACCOUNT_WORDS   =  {WORD:"账号",WORDSREQ:{REQ1:"请输入您的账号！",REQ2:"字母开头，6-12位的字母与数字！",REQ3:"test开头的是试玩会员，不允许作为正式账号！"},WORDSERROR:"账号输入错误！",WORDSCORRECT:"帐号为字母开头，6-12位的字母与数字！",WORDSWARN:""};
var PASSWORD_WORDS  =  {WORD:"密码",WORDSREQ:{REQ1:"请输入您的密码！",REQ2:"密码不能与账号相同！",REQ3:"密码长度不能少于6个字符！",REQ4:"密码必须是6-12位字母与数字！"},WORDSERROR:"确认密码错误！请重新输入！",WORDSCORRECT:"密码为6-12位字母与数字的组合！",WORDSWARN:""};
var REALNAME_WORDS  =  {WORD:"真实姓名",WORDSREQ:{REQ1:"请输入真实姓名！",REQ2:"真实姓名只能1-12位！",REQ3:"姓名已注册, 请洽客服人员！"},WORDSERROR:"真实姓名输入错误！",WORDSCORRECT:"必须与银行账户名称相同",WORDSWARN:""};
var ENGLISH_WORDS   =  {WORD:"英文姓名",WORDSREQ:{REQ1:"请输入英文姓名！"},WORDSERROR:"英文姓名输入错误！",WORDSCORRECT:"",WORDSWARN:""};
var NICKNAME_WORDS  =  {WORD:"昵称",WORDSREQ:{REQ1:"请输入昵称！"},WORDSERROR:"昵称输入错误！",WORDSCORRECT:"",WORDSWARN:""};
var BIRTHDAY_WORDS  =  {WORD:"生日",WORDSREQ:{REQ1:"请输入您的生日！"},WORDSERROR:"生日输入错误！",WORDSCORRECT:"",WORDSWARN:""};
var COUNTRY_WORDS   =  {WORD:"国家",WORDSREQ:{REQ1:"请输入国家！"},WORDSERROR:"国家格式输入错误！",WORDSCORRECT:"",WORDSWARN:""};
var PAPSSPORT_WORDS =  {WORD:"身份证或护照号",WORDSREQ:{REQ1:"请输入",REQ2:"输入格式不正确！",REQ3:"号已注册, 请洽客服人员！"},WORDSERROR:"输入格式不正确！",WORDSCORRECT:"",WORDSWARN:""};
var PHONE_WORDS     =  {WORD:"手机",WORDSREQ:{REQ1:"请输入手机号！",REQ2:"手机号格式输入错误！",REQ3:"此手机已经有人使用了！"},WORDSERROR:"手机号码输入错误！",WORDSCORRECT:"取回登入密码的唯一途径，请务必真实！",WORDSWARN:""};
var QKPASS_WORDS    =  {WORD:"密码",WORDSREQ:{REQ1:"请输入您的取款密码！",REQ2:"请输入4位取款密码！"},WORDSERROR:"密码输入错误！",WORDSCORRECT:"非常重要，请务必牢记！",WORDSWARN:""};
var QQ_WORDS        =  {WORD:"QQ",WORDSREQ:{REQ1:"请输入QQ！"},WORDSERROR:"您输入的QQ格式不正确！",WORDSCORRECT:"",WORDSWARN:""};
var EMAIL_WORDS     =  {WORD:"邮箱",WORDSREQ:{REQ1:"请输入邮箱地址！",REQ2:"您输入的邮箱格式不正确！",REQ3:"此邮箱已经有人使用了！"},WORDSERROR:"邮箱输入错误！",WORDSCORRECT:"",WORDSWARN:""};
var CODE_WORDS      =  {WORD:"验证码",WORDSREQ:{REQ1:"请输入验证码！"},WORDSERROR:"您的验证码格式错误！",WORDSCORRECT:"",WORDSWARN:""};
var VALIDATE_WORDS  =  {WORD:"",WORDSREQ:{REQ1:"验证失败！"},WORDSERROR:"",WORDSCORRECT:"",WORDSWARN:""};
function check_parentname(d) {
	if(!d){return true;}
	cleanMsg(d);
	var value = d.value.trim();
	if(!value ||value==PARENT_WORDS.WORD)
		value="";
	if((pset[0].valid&2)==2 && !value){
			doError(d,PARENT_WORDS.WORDSREQ.REQ1);
			pset[0].result=1;
			return false;
	}
	if(value && (value.length <6 || value.length >15)){
		doError(d,PARENT_WORDS.WORDSERROR);
		pset[0].result=1;
		return false;
	}
	var r = true;
	var checkParentNameType = "parentNameValidate";
	if((pset[0].valid&4)==4 && (pset[0].valid&2)==2){
		checkParentNameType = "parentName";
	}
	/*$.ajax({
        'url'     : ctx+'/member/member?type='+checkParentNameType+'&parentName='+encodeURI(encodeURI(d.value)),
        'type'    : 'post',
        'contentType':'application/x-www-form-urlencoded; charset=UTF-8',
        'cache'   : false,
        'async'   : true,
        'dataType':'json',
        'success' : function(data){
            redata = data.success;
            if (data.success){
            	r = true;
            	$("#parentName2").val(data.msg?data.msg:"");
            	doSuccess(d);
            	pset[0].result=2;
            }else{
            	r = false;
            	doError(d,data.msg?data.msg:"");
            	pset[0].result=1;
            }
       }
    });*/
    return r;
    
}

function check_password(d){
	cleanMsg(d);
	var v = d.value.trim();
	if(v){
    	if($.trim(v) == $.trim($("#account2").val())){
    		doError(d,PASSWORD_WORDS.WORDSREQ.REQ2);
    	}else if(/^(?![0-9]+$)(?![a-zA-Z]+$)[0-9A-Za-z]{6,12}$/.test(v)){
    		doSuccess(d,PASSWORD_WORDS.WORDSCORRECT);
    		return true;
    	}else{
    		doError(d,v.length<6?PASSWORD_WORDS.WORDSREQ.REQ3:PASSWORD_WORDS.WORDSREQ.REQ4);
    		return false;
    	}
	}else{
		doError(d,PASSWORD_WORDS.WORDSREQ.REQ3);
	}
	return false;
}
function check_qurenPasswrod(d){
	cleanMsg(d);
	if(d && d.value && d.value == $("#password2").val()){
		doSuccess(d);
		return true;
	}else{
		doError(d,PASSWORD_WORDS.WORDSERROR);
		return false;
	}
}

/**
 * 公共后台验证
 * @param {Object} i
 * @param {Object} nocheck
 * @param {Object} words
 * @param {Object} params
 */
var params="";//URL
var datas= "";//对应参数
function commomCheckAndValidate(d,i,word,wordsReq,wordsReq1,correct,nocheck){

	if(nocheck){
		if(pset[i].result==0){
			if((pset[i].valid&2)!=2){
				return commomCheckAndValidate(d,i,word,wordsReq,wordsReq1,correct);
			}
			commomCheckAndValidate(d,i,word,wordsReq,wordsReq1,correct);
			return false;
		}
		return pset[i].result==2;
	}
	cleanMsg(d);
	var value = d.value.trim();
	if(!value ||value==word)
		value="";
	if((pset[i].valid&2)==2 && !value){
			doError(d,wordsReq);
			pset[i].result=1;
			return false;
	}
	if(!commomCheck(d,value,i)) return false;
		
	if((pset[i].valid&4)==4){
	if(value==""){
		doSuccess(d,correct);
		pset[i].result=2;
		return true;
	}
	/*$.ajax({
	    'url'     : ctx+'/member/member?type='+params,
	    'data'    :datas?datas:'',
	    'type'    : 'post',
	    'dataType':"json",
	    'contentType' :'application/x-www-form-urlencoded; charset=UTF-8',
	    'cache'   : false,
	    'async'   : !nocheck,
	    'success' : function(data){
	        if (data == true|| data.success == true) {
	        	doSuccess(d,correct);
	        	pset[i].result=2;
	        	return true;        	
	        } else {
	        	doError(d,data.msg||wordsReq1);
	        	pset[i].result=1;
	        	return false ;
	        }
	   },
	   error:function(){
		   doError(d,VALIDATE_WORDS.WORDSREQ.REQ1);
		   pset[i].result=1;
       	   return false ;
	   }
	});*/
    }else{
	 doSuccess(d,correct);
	 pset[i].result=2;
	 return true;
    }
}
/**
 * 
 * @param {Object} d
 * @param {Object} value
 * @param {Object} i
 */
function commomCheck(d,value,i){
	var tips = "";
	var checkFlag = false;
	if(value != ""){
		if(i == 1){
			
		}else if(i == 2){
			
			if(value.length <1 || value.length >12){					
			tips = REALNAME_WORDS.WORDSREQ.REQ2;
			}else{
			params='parentName&check=realName';
	        datas= 'realName='+value;
	        checkFlag = true;
			}	
			
		}else if(i == 3){
			tips = '';
		}else if(i == 4){
			tips = '';
		}else if(i == 5){
			tips = '';
		}else if(i == 6){
			tips = '';
		}else if(i == 7){
			
			if(($('input[name=idPassportNoType]:checked').val() == 0 && !/(^\d{14,17}[Xx0-9]$)/.test(value))
	                             || $('input[name=idPassportNoType]:checked').val() == 1 && !/^[\w]{6,12}$/.test(value)){					
			tips = PAPSSPORT_WORDS.WORDSREQ.REQ2;
			}else{
			params='parentName&check=cardIdOrIdNumber&idNumber='+value;
	        datas= 'selectType='+$("input[name='idPassportNoType']:checked").val()+'&cardId='+value;
	        checkFlag = true;
			}
			
		}else if(i == 8){
						
			if(!/1[0-9]{10}/.test(value)){					
			tips = PHONE_WORDS.WORDSREQ.REQ2;
			}else{
			params='parentName&check=phone&phone=' + value;
	        datas= '';
	        checkFlag = true;
			}
			
		}else if(i == 9 && value.length != 6 ){
			tips = QKPASS_WORDS.WORDSREQ.REQ2;
		}else if(i == 10){
			tips = '';
		}else if(i == 11){			
			if(!/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/.test(value)){					
			tips = EMAIL_WORDS.WORDSREQ.REQ2;
			}else{
			params='parentName&check=email';
	        datas= 'email='+value;
	        checkFlag = true;
			}
		}else if(i == 12){
			tips = '';
		}else if(i == 13){			
			if(value.length>=6&&value.length<=12 
				&&/^[a-zA-Z][a-zA-Z0-9]+$/.test(value)){					
			if(value.substring(0,4).toLowerCase() == "test"){
				d.value="";
				alert(ACCOUNT_WORDS.WORDSREQ.REQ3);
	    	    tips = ACCOUNT_WORDS.WORDSREQ.REQ1;
	    	    
			}else{
				d.value = value.toLowerCase();
				params='account&account='+value.toLowerCase();
                datas= "";
                checkFlag = true;
			}
			}else{
				tips = ACCOUNT_WORDS.WORDSREQ.REQ2;
			}	
		}else if(i == 14){
			tips = '';
		}else if(i == 15){
			tips = '';
		}
		if(!checkFlag){
	    doError(d,tips);
		pset[i].result=1;
		return false;	
		}
		return true;
    }
	return true;
	
}


var REGULAR_1 = /^[A-Za-z0-9]{4}$/;  //验证码表达式
var REGULAR_3 = /^[\sa-zA-Z0-9\u4e00-\u9fa5]+$/;  //昵称表达式
var REGULAR_4 = /^[A-Za-z0-9_\-\.]+(\s*[A-Za-z0-9_\-\.]+)*$/; //英语表达式
var REGULAR_5 = /^[0-9]{4}\/[0-9]{2}\/[0-9]{2}$/;  //生日表达式
var REGULAR_6 = /^[\u4e00-\u9fa5]+$/;  //国家表达式
var REGULAR_9 = /^[0-9]{4}$/;  //密码表达式
var REGULAR_10 = /^[1-9][0-9]{4,}$/;  //QQ表达式

/**
 * 公共检查
 * @param {Object} d
 * @param {Object} i
 * @param {Object} word
 * @param {Object} wordsReq
 * @param {Object} wordsError
 * @param {Object} correct
 */
function commonCheckName(d,i,word,wordsReq,wordsError,correct){
	cleanMsg(d);
	var value = d.value;
	if(!value ||value== word)
		value="";
	if((pset[i].valid&2)==2 && !value){
			doError(d,wordsReq);
			return false;
	}
	if(value && !eval('REGULAR_'+i).test(value)){
		doError(d,wordsError);
		return false;
	}
	if(d.id !="zhuceYm"){
	  doSuccess(d,correct);
	}
	return true;
}

/**
 * 增加此方法的目的是解决浏览器内存溢出
 * @param {Object} d
 * @param {Object} i
 * @param {Object} word
 * @param {Object} wordsReq
 * @param {Object} wordsError
 * @param {Object} correct
 */
function checkCode(d,i,word,wordsReq,wordsError,correct){
	cleanMsg(d);
	var value = d.value;
	if(!value ||value== word)
		value="";
	if((pset[i].valid&2)==2 && !value){
			doError(d,wordsReq);
			return false;
	}
	if(value && !eval('REGULAR_'+i).test(value)){
		doError(d,wordsError);
		return false;
	}
	//doSuccess(d,correct);
	if(d && d.id == 'zhuceYm' && checkForm()){
		$("#submitInfo").addClass('active');
	}
	return true;
}

/**
 * 提交信息方法
 */
function submitInfo(){
	if($("#check1").is(':checked')){
		if(checkForm()){
			//submitHandler();
			document.getElementById('myFORM').submit();
		}else{
			iskeyboard = false;
			//reloadCode2();
			//$("#zhuceYm").val('');
			$("#check1").attr("checked",true);
			alert("请填写合法信息!");
			return;
		}
	}else{
		iskeyboard = false;
		alert("请勾选接受相关条款和隐私协议!");
		return;
	}
}

/**
 * 提交之前，页面统一校验。
 */
function checkForm(){
	var r=true;
	if($("#account2").val()==''||$("#password2").val()==''||$("#qurenPasswrod").val()==''||$("#realName").val()==''||$("#phone").val()==''||$("#HiddenInput").val()==''){
		r = false;
	}
	//check_user($("#account2")[0],true);
	/*if($("#account2").val()==ACCOUNT_WORDS.WORD){
		$("#account2").val("");
	}
	r = commomCheckAndValidate($("#account2")[0],13,ACCOUNT_WORDS.WORD,ACCOUNT_WORDS.WORDSREQ.REQ2,ACCOUNT_WORDS.WORDSREQ.REQ2,ACCOUNT_WORDS.WORDSCORRECT,true);
	r =  check_password($("#password2")[0])&&r;
	r =  check_qurenPasswrod($("#qurenPasswrod")[0])&&r;
	if(pset[0].valid>0){
		if($.trim($("#parentName").val())==PARENT_WORDS.WORD)$("#parentName2").val("");
		r =  check_parentname($("#parentName")[0])&&r;
	}
	if(pset[2].valid>0){
		if($.trim($("#realName").val())==REALNAME_WORDS.WORD)$("#realName").val("");
		r =  commomCheckAndValidate($("#realName")[0],2,REALNAME_WORDS.WORD,REALNAME_WORDS.WORDSREQ.REQ1,REALNAME_WORDS.WORDSREQ.REQ3,REALNAME_WORDS.WORDSCORRECT,true)&&r;
	}
	if(pset[3].valid>0){
		if($.trim($("#nickname").val())==NICKNAME_WORDS.WORD)$("#nickname").val("");
		r =  commonCheckName($("#nickname")[0],3,NICKNAME_WORDS.WORD,NICKNAME_WORDS.WORDSREQ.REQ1,NICKNAME_WORDS.WORDSERROR)&&r;
	}		
	if(pset[4].valid>0){
		if($.trim($("#englishName").val())==ENGLISH_WORDS.WORD)$("#englishName").val("");
		r =  commonCheckName($("#englishName")[0],4,ENGLISH_WORDS.WORD,ENGLISH_WORDS.WORDSREQ.REQ1,ENGLISH_WORDS.WORDSERROR)&&r;
	}
	if(pset[5].valid>0){
		r =  commonCheckName($("#birthday")[0],5,BIRTHDAY_WORDS.WORD,BIRTHDAY_WORDS.WORDSREQ.REQ1,BIRTHDAY_WORDS.WORDSERROR)&&r;
	}
	if(pset[6].valid>0){
		if($.trim($("#country").val())==COUNTRY_WORDS.WORD)$("#country").val("");
		r =  commonCheckName($("#country")[0],6,COUNTRY_WORDS.WORD,COUNTRY_WORDS.WORDSREQ.REQ1,COUNTRY_WORDS.WORDSERROR)&&r;
	}
	if(pset[7].valid>0){
		if($.trim($("#idPassportNo").val())==PAPSSPORT_WORDS.WORD)$("#idPassportNo").val("");
		r =  commomCheckAndValidate($("#idPassportNo")[0],7,PAPSSPORT_WORDS.WORD,PAPSSPORT_WORDS.WORDSREQ.REQ1,PAPSSPORT_WORDS.WORDSREQ.REQ3,PAPSSPORT_WORDS.WORDSCORRECT,true)&&r;
	}
	if(pset[8].valid>0){
		if($.trim($("#phone").val())==PHONE_WORDS.WORD)$("#phone").val("");
		r =  commomCheckAndValidate($("#phone")[0],8,PHONE_WORDS.WORD,PHONE_WORDS.WORDSREQ.REQ1,PHONE_WORDS.WORDSREQ.REQ3,PHONE_WORDS.WORDSCORRECT,true)&&r;
	}
	if(pset[9].valid>0){
		r =  commonCheckName($("#HiddenInput")[0],9,QKPASS_WORDS.WORD,QKPASS_WORDS.WORDSREQ.REQ2,QKPASS_WORDS.WORDSERROR,QKPASS_WORDS.WORDSCORRECT)&&r;
	}
	if(pset[10].valid>0){
		if($.trim($("#qq").val())==QQ_WORDS.WORD)$("#qq").val("");
		r =  commonCheckName($("#qq")[0],10,QQ_WORDS.WORD,QQ_WORDS.WORDSREQ.REQ1,QQ_WORDS.WORDSERROR)&&r;
	}
	if(pset[11].valid>0){
		if($.trim($("#email").val())==EMAIL_WORDS.WORD)$("#email").val("");
		r =  commomCheckAndValidate($("#email")[0],11,EMAIL_WORDS.WORD,EMAIL_WORDS.WORDSREQ.REQ1,EMAIL_WORDS.WORDSREQ.REQ3,EMAIL_WORDS.WORDSCORRECT,true)&&r;
	}
	if(pset[1].valid>0){
		if($.trim($("#zhuceYm").val())==CODE_WORDS.WORD)$("#zhuceYm").val("");
		r =  commonCheckName($("#zhuceYm")[0],1,CODE_WORDS.WORD,CODE_WORDS.WORDSREQ.REQ1,CODE_WORDS.WORDSERROR)&&r;
	}*/
	return r;
}



/**
 * 清除信息
 * @param {Object} d
 */
function cleanMsg(d){
	$("p.t-tipmsg",checkParent(d)).removeClass("y-error-msg y-correct-msg y-warn-msg").html("");

}
/**
 * 校验成功，提示信息
 * @param {Object} d
 * @param {Object} msg
 */
function doSuccess(d,msg){
	$("p.t-tipmsg",checkParent(d)).removeClass("y-error-msg y-warn-msg").addClass("y-correct-msg").html(msg?msg:"");
}
/**
 * 校验失败，提示信息
 * @param {Object} d
 * @param {Object} msg
 */
function doError(d,msg){
	if(d.id=="idPassportNo"){
		if(d.value == ""){
			msg = msg+($('input[name=idPassportNoType]:checked').val()=="1"?"护照号！":"身份证号！");
		}else{
			msg = ($('input[name=idPassportNoType]:checked').val()=="1"?"护照":"身份证")+msg;
		}
	}
	$("p.t-tipmsg",checkParent(d)).removeClass("y-correct-msg y-warn-msg").addClass("y-error-msg").html(msg);
}
/**
 * 获取.reg-box父级元素
 * @param {Object} d
 */
function checkParent(d){
	if($(d).parent("div.reg-box").length != 0){
		return $(d).parent("div.reg-box");
	}else{
		return $(d).parent().parent("div.reg-box");
	}
}

/**
 * 页面校验成功，调用此方法。
 */
function submitHandler(){
	if(!checkForm()) return;
    if(confirm("是否确定写入?")) {
        // $('form input:submit').attr('disabled','disabled');
         //document.myFORM.submit();
         if($("#HiddenInput").val()){
         	var arr = $("#HiddenInput").val().split("");
         	$("#drawMoneyPwd1").val(arr[0]);
         	$("#drawMoneyPwd2").val(arr[1]);
         	$("#drawMoneyPwd3").val(arr[2]);
         	$("#drawMoneyPwd4").val(arr[3]);
         }
 		$.ajax({
 			type: "post",
 		    url: ctx+'/member/member?type=saveAccount',
 		    data:$("#myFORM").serialize(),
 		    dataType: "json",
 		    success: function(data){
 		    	if(data){
 		    	if(data.success){
 		    		if(data.msg=="0"){
 		    			alert("请您先登录邮箱激活账号，激活后请耐心等待审核！");
 		    			location.href=ctx+"/";
 		    		}else if(data.msg=="1"){
 		    			alert("请登录您的注册邮箱，激活您的账号！");
 		    			if(ctx == ""){
 		    				location.href="/";
 		    			}else{
     		    			location.href=ctx;
 		    			}
 		    		}else if(data.msg=="2"){
 		    			alert("您已完成注册，还需审核，请您耐心等待！");
 		    			if(ctx == ""){
 		    				location.href="/";
 		    			}else{
     		    			location.href=ctx;
 		    			}
 		    		}else{
 		    			alert("您已注册成功!");

 		    			if(ctx == ""){
 		    				location.href="/";
 		    			}else{
     		    			location.href=ctx;
 		    			}

 		    		}
 		    		addCookie("login_alert","true",null);
 		    	}
 		    	else{
 		    		if (data.msg == "验证码输入错误!!") {
 		    			$("#password2").val('');
 		    			$("#qurenPasswrod").val('');
 		    			cleanMsg($("#password2")[0]);
 		    			cleanMsg($("#qurenPasswrod")[0]);
 		    			cleanMsg($("#zhuceYm")[0]);
 		    			$("#submitInfo").removeClass("active");
 		    			alert(data.msg);
 		    		}else{
 		    			//alert("系统报错！");
 		    			alert(data.msg);
 		    		}
 		    	}
 		    	}
 		    },
  		    complete:function(){
  		    	$("#zhuceYm").val("");		    	
  		    	$("#check1").attr("checked",false);
  		    	reloadCode2();
  		    }
 		});
     }
 }

/**
 * 发送邮件
 */
function resendConfirmEmail(){
	if(confirm("是否确定重发确认邮件?")) {
		var account = $("#emailAccount").val();
		var password = $("#emailPassWord").val();
		var email = $("#resendEmail").val();
  		$.ajax({
  			type: "post",
  			'cache'   : false,
            'async'   : false,
  		    url: ctx+"/member/member",
  		    data:{
  		    	type:"resendConfirmEmail",
  		    	account:account,
  		    	password:password,
  		    	email:email
  		    },
  		    dataType: "json",
  		    success: function(data){
  		    	if(data.success){
  		    		if(data.msg=="0"){
  		    			alert("重发确认邮件成功！");
  		    			if(ctx == ""){
		    				location.href="/";
		    			}else{
    		    			location.href=ctx;
		    			}
  		    		}else if(data.msg=="1"){
  		    			alert("您输入的邮箱不正确！");
  		    		}else if(data.msg=="2"){
  		    			alert("您输入的账号或密码错误！");
  		    		}else if(data.msg=="3"){
  		    			alert("该账号已激活，无需重复发送确认邮件！");
  		    		}
  		    	}
  		    	else{
  		    		
  		    	}
  		    },
  		    complete:function(){
  		    	$("#zhuceYm").val("");
  		    	reloadCode2();
  		    }
  		});
	}
}

/**
 * 点击刷新验证码
 */
function reloadCode2() {
	if(document.getElementById("vImg")){
		document.getElementById("vImg").style.display = "";
		document.getElementById("vImg").src = ctx+"/validCode?t="	+ Math.random();
	}
}
/**
 * 打开重发确认邮件的函数
 */
function showResendConfirmEmail() {
	$("#toShowResendEmailDialog").dialog({
		autoOpen : false,
		width : 350,
		height : 230,
		draggable : false,
		resizable : false,
		modal : false,
		buttons : {
			"关闭" : function() {
				$(this).dialog("close");
			}
		}
	});
	$("#toShowResendEmailDialog").dialog("open");
}
function check_agree(d){
	/*if(!d){return true;}
	cleanMsg(d);
	if(d.checked && checkForm()){
		d.checked=true;
		$('#OK').removeClass("submit");
		$('#OK').addClass("submit_select");
		$('#OK').css("cursor","pointer");
		$("#OK").bind("click",function(d,e){
			submitHandler();
		});
	}else{
		d.checked=false;
		$("#OK").unbind("click");
		$('#OK').css("cursor","auto");
		$('#OK').removeClass("submit_select");
		$('#OK').addClass("submit");
	}*/
	//check_zhuceYm($("#zhuceYm")[0]);
}
