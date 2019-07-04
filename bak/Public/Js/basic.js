$(function(){
	$( '.sbmits' ).click( function () {
		var name = $( 'input[name=name]' );
		var mail = $( 'input[name=mail]' );
		var qqs = $( 'input[name=qqs]' );
		var telp = $( 'input[name=telp]' );
		var codes = $( 'input[name=codes]' );
		var areas = $( 'select[name=areas]' );
		var citys = $( 'select[name=citys]' );
		var addresses = $( 'input[name=addresses]' );
		var signs = $( 'textarea[name=signs]' );
		var biogs = $( 'textarea[name=biogs]' );
		if(!mail.val().match(/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/)){
			var msg = '<div class="img_w"></div> <span>邮箱格式不正确!</span>';
			showDiv(msg);
			mail.focus();
			return false;
		}
		$.post(basicUrl, {name : name.val(),mail : mail.val(),qqs : qqs.val(),telp : telp.val(),codes : codes.val(),areas : areas.val(),citys : citys.val(),addresses : addresses.val(),signs : signs.val(),biogs : biogs.val()}, 
			function (data){
				if(data.status){
						showDiv('<div class="img_r"></div><span>' + data.info + '</span>');
						closeDivs(data.url);
				}else{
					showDiv('<div class="img_w"></div><span>' + data.info + '</span>');
				}
		}, 'json');
	});
	$( '.soso' ).click( function () {
		var startdates = $( 'input[name=startdates]' );
		var stratweights = $( 'input[name=stratweights]' );
		var mweights = $( 'input[name=mweights]' );
		var sexs = $( 'input[name=sexs]:checked' );
		var birthdays = $( 'input[name=birthdays]' );
		var heights = $( 'input[name=heights]' );
		var xwms = $( 'input[name=xwms]' );
		var ywms = $( 'input[name=ywms]' );
		var dwms = $( 'input[name=dwms]' );
		var sbwms = $( 'input[name=sbwms]' );
		var dtwms = $( 'input[name=dtwms]' );
		var xtwms = $( 'input[name=xtwms]' );
		var positions = [];
		$('.positions input:checkbox:checked').each(function() {
            positions.push($(this).val());
        });
		var styles = [];
		$('.styles input:checkbox:checked').each(function() {
            styles.push($(this).val());
        });
		var opens = $("#opens").attr("checked");
		var eatloves = $( 'textarea[name=eatloves]' );
		var sportloves = $( 'textarea[name=sportloves]' );
		if(startdates.val()==''){
			var msg = '<div class="img_w"></div> <span>瘦身起始日期不能为空!</span>';
			showDiv(msg);
			startdates.focus();
			return false;
		}
		if(stratweights.val()==''){
			var msg = '<div class="img_w"></div> <span>起始体重不能为空!</span>';
			showDiv(msg);
			stratweights.focus();
			return false;
		}
		if(mweights.val()==''){
			var msg = '<div class="img_w"></div> <span>目标体重不能为空!</span>';
			showDiv(msg);
			mweights.focus();
			return false;
		}
		if(birthdays.val()==''){
			var msg = '<div class="img_w"></div> <span>出生日期不能为空!</span>';
			showDiv(msg);
			birthdays.focus();
			return false;
		}
		if(sexs.val()==''){
			var msg = '<div class="img_w"></div> <span>性别不能为空!</span>';
			showDiv(msg);
			sexs.focus();
			return false;
		}
		if(heights.val()==''){
			var msg = '<div class="img_w"></div> <span>身高不能为空!</span>';
			showDiv(msg);
			heights.focus();
			return false;
		}
		if(opens){
			opens = 1;
		}else{
			opens = 0;
		}
		$.post(soUrl, {startdates : startdates.val(),stratweights : stratweights.val(),mweights : mweights.val(),sexs : sexs.val(),birthdays : birthdays.val(),heights : heights.val(),xwms : xwms.val(),ywms : ywms.val(),dwms : dwms.val(),sbwms : sbwms.val(),dtwms : dtwms.val(),xtwms : xtwms.val(),positions : positions,styles : styles,opens : opens,eatloves : eatloves.val(),sportloves : sportloves.val()}, 
			function (data){
				if(data.status){
						showDiv('<div class="img_r"></div><span>' + data.info + '</span>');
						closeDivs(data.url);
				}else{
					showDiv('<div class="img_w"></div><span>' + data.info + '</span>');
				}
		}, 'json');
	});
	$( '.user' ).click( function () {
		var password = $( 'input[name=password]' );
		var newpwd = $( 'input[name=newpwd]' );
		var newpwds = $( 'input[name=newpwds]' );
		if(password.val()==''){
			var msg = '<div class="img_w"></div> <span>原密码不能为空!</span>';
			showDiv(msg);
			password.focus();
			return false;
		}
		if(newpwd.val()==''){
			var msg = '<div class="img_w"></div> <span>新密码不能为空!</span>';
			showDiv(msg);
			newpwd.focus();
			return false;
		}
		if(newpwds.val() != newpwd.val()){
			var msg = '<div class="img_w"></div> <span>两次密码不一致!</span>';
			showDiv(msg);
			newpwds.focus();
			return false;
		}
		$.post(pwdUrl, {password : password.val(),newpwd : newpwd.val(),newpwds : newpwds.val()}, 
			function (data){
				if(data.status){
						showDiv('<div class="img_r"></div><span>' + data.info + '</span>');
						closeDivs(data.url);
				}else{
					showDiv('<div class="img_w"></div><span>' + data.info + '</span>');
				}
		}, 'json');
	});
	$( '.bg' ).click( function () {
		var img = $( 'input[name=img]:checked' );
		var imgs = $( 'input[name=imgs]:checked' );
		$.post(bgUrl, {img : img.val(),imgs : imgs.val()}, 
			function (data){
				if(data.status){
						showDiv('<div class="img_r"></div><span>' + data.info + '</span>');
						closeDivs(data.url);
				}else{
					showDiv('<div class="img_w"></div><span>' + data.info + '</span>');
				}
		}, 'json');
	});
	$( '.dela' ).click( function () {
		var id = $(this).attr("rel");
		$.post('/dela', {id : id}, 
			function (data){
				if(data.status){
						showDiv('<div class="img_r"></div><span>' + data.info + '</span>');
						closeDivs(data.url);
				}else{
					showDiv('<div class="img_w"></div><span>' + data.info + '</span>');
				}
		}, 'json');
	});
	$( '.newweight' ).click( function () {
		var ttime = $( 'input[name=ttime]' );
		var newweight = $( 'input[name=newweight]' );
		if(ttime.val()==''){
			var msg = '<div class="img_w"></div> <span>日期不能为空!</span>';
			showDiv(msg);
			ttime.focus();
			return false;
		}
		if(newweight.val()==''){
			var msg = '<div class="img_w"></div> <span>体重不能为空!</span>';
			showDiv(msg);
			newweight.focus();
			return false;
		}
		$.post(newweightUrl, {ttime : ttime.val(),newweight : newweight.val()}, 
			function (data){
				if(data.status){
						showDiv('<div class="img_r"></div><span>' + data.info + '</span>');
						closeDivs(data.url);
				}else{
					showDiv('<div class="img_w"></div><span>' + data.info + '</span>');
				}
		}, 'json');
	});
	$( '.newwd' ).click( function () {
		var wdtime = $( 'input[name=wdtime]' );
		var xw = $( 'input[name=xw]' );
		var yw = $( 'input[name=yw]' );
		var dw = $( 'input[name=dw]' );
		var sbw = $( 'input[name=sbw]' );
		var dtw = $( 'input[name=dtw]' );
		var xtw = $( 'input[name=xtw]' );
		if(wdtime.val()==''){
			var msg = '<div class="img_w"></div> <span>日期不能为空!</span>';
			showDiv(msg);
			wdtime.focus();
			return false;
		}
		if(xw.val()==''){
			var msg = '<div class="img_w"></div> <span>胸围不能为空!</span>';
			showDiv(msg);
			xw.focus();
			return false;
		}
		if(yw.val()==''){
			var msg = '<div class="img_w"></div> <span>腰围不能为空!</span>';
			showDiv(msg);
			yw.focus();
			return false;
		}
		if(dw.val()==''){
			var msg = '<div class="img_w"></div> <span>臀围不能为空!</span>';
			showDiv(msg);
			dw.focus();
			return false;
		}
		$.post(newwdUrl, {wdtime : wdtime.val(),xw : xw.val(),yw : yw.val(),dw : dw.val(),sbw : sbw.val(),dtw : dtw.val(),xtw : xtw.val()}, 
			function (data){
				if(data.status){
						showDiv('<div class="img_r"></div><span>' + data.info + '</span>');
						closeDivs(data.url);
				}else{
					showDiv('<div class="img_w"></div><span>' + data.info + '</span>');
				}
		}, 'json');
	});
	$( '.send' ).click( function () {
		var toname = $( 'input[name=toname]' );
		var title = $( 'input[name=title]' );
		var content = $( 'textarea[name=content]' );
		if(toname.val()==''){
			var msg = '<div class="img_w"></div> <span>收件人不能为空!</span>';
			showDiv(msg);
			toname.focus();
			return false;
		}
		if(title.val()==''){
			var msg = '<div class="img_w"></div> <span>消息标题不能为空!</span>';
			showDiv(msg);
			title.focus();
			return false;
		}
		if(content.val()==''){
			var msg = '<div class="img_w"></div> <span>消息内容不能为空!</span>';
			showDiv(msg);
			content.focus();
			return false;
		}
		$.post(sendUrl, {toname : toname.val(),title : title.val(),content : content.val()}, 
			function (data){
				if(data.status){
						showDiv('<div class="img_r"></div><span>' + data.info + '</span>');
						closeDivs(data.url);
				}else{
					showDiv('<div class="img_w"></div><span>' + data.info + '</span>');
				}
		}, 'json');
	});
	//删除消息
	$( 'a.delm' ).click( function () {
		var id = $(this).attr("rel");
		$.post(delmUrl, {id : id}, 
			function (data){
				if(data.status){
						showDiv('<div class="img_r"></div><span>' + data.info + '</span>');
						closeDivs(data.url);
				}else{
					showDiv('<div class="img_w"></div><span>' + data.info + '</span>');
				}
		}, 'json');
	});
	//批量删除消息
	$( '.ids' ).click( function () {
		var checkbox = [];
		$('input:checkbox:checked').each(function() {
            checkbox.push($(this).val());
        });
		$.post(delmUrl, {checkbox : checkbox}, 
			function (data){
				if(data.status){
						showDiv('<div class="img_r"></div><span>' + data.info + '</span>');
						closeDivs(data.url);
				}else{
					showDiv('<div class="img_w"></div><span>' + data.info + '</span>');
				}
		}, 'json');
	});
	//回复消息
	$( '.sendhf' ).click( function () {
		var toname = $( 'input[name=toname]' );							
		var title = $( 'input[name=title]' );
		var content = $( 'textarea[name=content]' );
		var to_user_id = $( 'input[name=to_user_id]' );
		var id = $( 'input[name=id]' );
		if(toname.val() == ''){
			var msg = '<div class="img_w"></div> <span>回复收件人名称不能为空!</span>';
			showDiv(msg);
			toname.focus();
			return;
		}
		if(title.val() == ''){
			var msg = '<div class="img_w"></div> <span>标题不能为空!</span>';
			showDiv(msg);
			title.focus();
			return;
		}
		if(content.val() == ''){
			var msg = '<div class="img_w"></div> <span>内容不能为空!</span>';
			showDiv(msg);
			content.focus();
			return;
		}
		if(to_user_id.val() == ''){
			var msg = '<div class="img_w"></div> <span>请输入收件人名称!</span>';
			showDiv(msg);
			to_name.focus();
			return;
		}
		$.post(sendhfUser, {title : title.val(),content : content.val(),to_user_id : to_user_id.val(),toname : toname.val(),id : id.val()}, 
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
function insert(){
	$(function () {
		$.post('/adddiary', 
			function (data){
				if(data.status){
					alert(data.info);
					top.window.location.href=data.url;
				}else{
					alert(data.info);
				}
		}, 'json');
	});
}

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