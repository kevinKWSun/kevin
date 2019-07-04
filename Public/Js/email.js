$(function(){
	$( '.mails' ).click( function () {
		var email = $( 'input[name=mail]' );
		if(email.val() == ''){
			var msg = '<div class="img_w"></div> <span>邮箱不能为空!</span>';
			showDiv(msg);
			email.focus();
			return;
		}
		if(!email.val().match(/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/)){
			var msg = '<div class="img_w"></div> <span>格式不正确！请重新输入!</span>';
			showDiv(msg);
			email.focus();
			return;
		
		}
		$.post(mailUrl, {email : email.val()}, 
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