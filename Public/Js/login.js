function change_code(obj){
	$("#code").attr("src",verfiyUrl+'/'+Math.random());
	return false;
}
$(function(){
	$( '.submit' ).click( function () {
		var username = $( 'input[name=ss_username]' );
		var password = $( 'input[name=ss_password]' );
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

$(function(){
	$( '.reg' ).click( function () {
		var username = $( 'input[name=ss_username]' );
		var password = $( 'input[name=ss_password]' );
		var password2 = $( 'input[name=ss_passwords]' );
		var sex = $( 'input[name=sexs]:checked' );
		var email = $( 'input[name=ss_email]' );
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
		if(password2.val() == ''){
			var msg = '<div class="img_w"></div> <span>确认密码不能为空!</span>';
			showDiv(msg);
			password2.focus();
			return;
		}
		if(password2.val() != password.val()){
			var msg = '<div class="img_w"></div> <span>两次密码不一致!</span>';
			showDiv(msg);
			password2.focus();
			return;
		}
		if(!email.val().match(/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/)){
			var msg = '<div class="img_w"></div> <span>邮箱格式不正确!</span>';
			showDiv(msg);
			email.focus();
			return;
		
		}
		if(!sex.val()){
			var msg = '<div class="img_w"></div> <span>请选择性别!</span>';
			showDiv(msg);
			sex.focus();
			return;
		}
		if(code.val() == ''){
			var msg = '<div class="img_w"></div> <span>验证码不能为空!</span>';
			showDiv(msg);
			code.focus();
			return;
		}
		$.post(regUrl, {username : username.val(),password : password.val(),password2 : password2.val(),email : email.val(),sex : sex.val(),code : code.val()}, 
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
	//$("#popDiv").slideDown(2000);
	//$("#bgdiv").slideDown(2000);
	$("#popDiv").fadeIn(1000);
	$("#bgdiv").fadeIn(1000);
}
function closeDiv(){
	$("#popDiv").fadeOut(1500);
	$("#bgdiv").fadeOut(1500);
}
function closeDivs(msg){
	$("#popDiv").fadeOut(2000);
	$("#bgdiv").fadeOut(2000);
	if(msg){
		setTimeout(function(){
			top.window.location.href=msg;
		},1000);
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