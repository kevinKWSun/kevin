function change_code(obj){
	$("#code").attr("src",verfiyUrl+'/'+Math.random());
	return false;
}
$(function(){
	$( '.submit' ).click( function () {
		var username = $( 'input[name=username]' );
		var password = $( 'input[name=password]' );
		var code = $( 'input[name=code]' );
		if(username.val() == ''){
			var msg = '<div class="img_w"></div> <span>用户名不能为空!</span>';
			showDiv(msg);
			username.focus();
			return;
		}
		if(password.val() == ''){
			var msg = '<div class="img_w"></div> <span>密码不能为空!</span>';
			showDiv(msg);
			password.focus();
			return;
		}
		if(code.val() == ''){
			var msg = '<div class="img_w"></div> <span>验证码不能为空!</span>';
			showDiv(msg);
			code.focus();
			return;
		}
		$.post(loginUrl, {username : username.val(),password : password.val(),code : code.val()}, 
			function (data){
				if(data.status){
						showDiv('<div class="img_r"></div><span>' + data.info + '</span>');
						closeDivs(data.url);
				}else{
					showDiv('<div class="img_w"></div><span>' + data.info + '</span>');
				}
		}, 'json');
	});
});
function showDiv(msg){
	$(".tipsCon p").html(msg);
	$("#popDiv").fadeIn(1000);
	$("#bgdiv").fadeIn(1000);
}
function closeDiv(){
	$("#popDiv").fadeOut(1000);
	$("#bgdiv").fadeOut(1000);
}
function closeDivs(msg){
	$("#popDiv").fadeOut(1000);
	$("#bgdiv").fadeOut(1000);
	if(msg){
		setTimeout(function(){
			top.window.location.href=msg;
		},2000);
	}
}
document.write('<div id="popDiv" class="mydiv">');
	document.write('<div class="tipsTit"> 操作提示 <span class="img" onclick="closeDiv();"> </span> </div>');
	document.write('<div class="tipsCon">');
		document.write('<p></p>');
	document.write('</div>');
	document.write('<div><button onclick="closeDivs();" class="closeBtn"></button></div>');
document.write('</div>');
document.write('<div id="bgdiv" class="bgdiv"></div>');
/*//登录验证  1为空   2为错误
var validate={username:1,password:1,code:1}
$(function(){
	$("#login").submit(function(){
		if(validate.username==0 && validate.password==0 && validate.code==0){
			return true;
		}
		//验证用户名
		$("input[name='username']").trigger("blur");
		//验证密码
		$("input[name='password']").trigger("blur");
		//验证验证码
		$("input[name='code']").trigger("blur");
		return false;
	})
})
$(function(){
	//验证用户名
	$("input[name='username']").blur(function(){
		var username = $("input[name='username']");
		if(username.val().trim()==''){
			username.parent().find("span").remove().end().append("<span class='error'>用户名不能为空</span>");
			return ;
		}else{
			validate.username=0;
			username.parent().find("span").remove();	
		}
		$.post(CONTROL+"/checkusername",{username:username.val().trim()},function(stat){
			if(stat==1){
				validate.username=0;
				username.parent().find("span").remove();
			}else{
				username.parent().find("span").remove().end().append("<span class='error'>用户不存在</span>");
				return ;
			}

		})
	})
	//验证密码
	$("input[name='password']").blur(function(){
		var password = $("input[name='password']");
		if(password.val().trim()==''){
			password.parent().find("span").remove().end().append("<span class='error'>密码不能为空</span>");
			return ;
		}else{
			validate.password=0;
			password.parent().find("span").remove();
		}
		$.post(CONTROL+"/checkpassword",{password:password.val().trim(),username:username.val().trim()},function(stat){
			if(stat==1){
				validate.password=0;
				password.parent().find("span").remove();
			}else{
				password.parent().find("span").remove().end().append("<span class='error'>密码错误</span>");
				return ;
			}

		})
	})
	//验证验证码
	$("input[name='code']").blur(function(){
		var code = $("input[name='code']");
		if(code.val().trim()==''){
			code.parent().find("span").remove().end().append("<span class='error'>验证码不能为空</span>");
			return ;
		}else{
			validate.code=0;
			code.parent().find("span").remove();
		}
		$.post(CONTROL+"/checkcode",{code:code.val().trim()},function(stat){
			if(stat==1){
				validate.code=0;
				code.parent().find("span").remove();
			}else{
				code.parent().find("span").remove().end().append("<span class='error'>验证码错误</span>");
				return ;
			}

		})
	})
})*/
