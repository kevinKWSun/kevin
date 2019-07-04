$(function(){
	$( '.submit' ).click( function () {
		var keyword = $( 'input[name=mail]' );
		if(keyword.val() == ''){
			var msg = '<div class="img_w"></div> <span>食物名称不能为空!</span>';
			showDiv(msg);
			keyword.focus();
			return;
		}
		$.post(foodUrl, {keyword : trim(keyword.val())}, 
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
function trim(str){
	return str.replace(/[ ]/g,"");
}
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