<?php if (!defined('THINK_PATH')) exit();?><script type="text/javascript">$(document).ready(function () {
	$('#ajax-indicator').fadeIn(500);
	$('.sub-column').load('<?php echo U(GROUP_NAME . "/Add/data");?>');
	choose_one_time(1);
	$('#ajax-indicator').fadeOut(500);
});
function choose_one_time(k){
    choose_food();
    $("#food_record > .record-panel").removeClass("current");
    $("#sport_record_panel").removeClass("current");
	$(".classTab").attr("class", "classTab");
	$('#tab'+k).attr("class", "classTab current");
    $("#h"+k).addClass("current");  
	$('#tabletab'+k).load('<?php echo U(GROUP_NAME . "/Index/lists");?>?idc='+k,function() {
		$('.can-menu .tabTable').hide();
        $('.can-menu #tabletab'+k).show();
		$('.green1 span').load('<?php echo U(GROUP_NAME . "/Add/bmrview");?>');
	});
    return false;
}
function choose_food(){
    $("#sport_record_wrap").removeClass("upper");
    $("#food_record_wrap").addClass("upper");
    $("#sport_tab").removeClass("current");
    $("#food_tab").addClass("current");
}
function choose_sport(k){
	$(".classTab").attr("class", "classTab");
	$('#tab'+k).attr("class", "classTab current");
	$('#tabletab'+k).load('<?php echo U(GROUP_NAME . "/Index/lists");?>?idc='+k,function() {
		$('.tabTable').hide();
		$('#tabletab'+k).show();
		$('.green1 span').load('<?php echo U(GROUP_NAME . "/Add/bmrview");?>');
	});
    $("#sport_record_wrap").addClass("upper");
    $("#food_record_wrap").removeClass("upper");
    $("#food_tab").removeClass("current");
    $("#sport_tab").addClass("current");
	return false;
}
function choose_to_food(date){
    choose_food();
	choose_one_time(date);
}
function choose_to_sport(date){
    choose_sport(4);
	
}
function add(id,idc){
	$('#h'+idc).load('<?php echo U(GROUP_NAME . "/Add/add");?>?idc='+idc+'&id='+id,function() {
	$('.l .y span').load('<?php echo U(GROUP_NAME . "/Add/totales");?>?action=1');
	});
}
function del(id,idc){
	$('#h'+idc).load('<?php echo U(GROUP_NAME . "/Add/del");?>?idc='+idc+'&id='+id,function() {
	$('.l .y span').load('<?php echo U(GROUP_NAME . "/Add/totales");?>?action=1');
	});
    return false;
}
function update(id,num,price,idc){	
	var rels = $('.fl_'+idc+'_'+id+' input').attr("value");
	var rel = parseInt(trim(rels));
	if(rel<1){
		alert('输入错误，其值不能小于1!');
		return false;
	}
	$('#h'+idc).load('<?php echo U(GROUP_NAME . "/Add/update");?>?idc='+idc+'&id='+id+'&num='+rel+'&price'+price,function() {
	$('.l .y span').load('<?php echo U(GROUP_NAME . "/Add/totales");?>?action=1');
	});
    return false;
}
function updates(id,num,price,idc){	
	var rels = $('.fl_'+idc+'_'+id+' input').attr("value");
	var rel = parseInt(trim(rels));
	if(rel<1){
		alert('输入错误，其值不能小于1!');
		return false;
	}
	$('#sport_record_wrap').load('<?php echo U(GROUP_NAME . "/Add/update");?>?idc='+idc+'&id='+id+'&num='+rel+'&price'+price,function() {
	$('.l .x span').load('<?php echo U(GROUP_NAME . "/Add/totales");?>?action=4');
	//choose_sport(4);
	});
    return false;
}
function adds(id,idc,s){
	$('#sport_record_wrap').load('<?php echo U(GROUP_NAME . "/Add/add");?>?idc='+idc+'&id='+id+'&num='+s,function() {
	$('.l .x span').load('<?php echo U(GROUP_NAME . "/Add/totales");?>?action=4');
	//choose_sport(4);
	});
    return false;
}
function dels(id,idc){
	$('#sport_record_wrap').load('<?php echo U(GROUP_NAME . "/Add/del");?>?idc='+idc+'&id='+id,function() {
	$('.l .x span').load('<?php echo U(GROUP_NAME . "/Add/totales");?>?action=4');
	//choose_sport(4);
	});
    return false;
}

function resets(d){
	$(".arrowDown").hide();
}
function empty(){
	$('#can_record').load('<?php echo U(GROUP_NAME . "/Add/emptys");?>',function() {
		$('.conclusion').load('<?php echo U(GROUP_NAME . "/Add/emptyy");?>');
		choose_one_time(1);
	});
    return false;
}
function search_can(m){	
	var rel = $('#search_'+m+' input').attr("value");
	var res = trim(rel);
	$('#sun'+m).load('<?php echo U(GROUP_NAME . "/Index/search");?>?idc='+m+'&search='+res,function() {
	});
    return false;
}
function sbumit_bmr(){	
	var sex = trim($('#sex input').attr("value"));
	var age = trim($('#age input').attr("value"));
	var height = trim($('#height input').attr("value"));
	var weight = trim($('#weight input').attr("value"));
	$('.green1 span').load('<?php echo U(GROUP_NAME . "/Add/bmr");?>?age='+age+'&weight='+weight+'&height='+height+'&sex='+sex);
	//choose_sport(4);
	onClose();
    return false;
}
function trim(str){
	return str.replace(/[ ]/g,"");
}
</script><div id="ajax-indicator"><span>正在加载...</span></div><div class="content"><div id="can"><div class="can-wrap"><div class="can"><div id="left_md_menu" class="all-record main-column caloriesLeft"><div id="menu" class="menu_panel "><ul class="can-tab center size13 intorMenu"><li class="meal1"><a href="javascript:void(0);" id="tab1" onclick="choose_one_time(1);" class=" classTab current">早餐</a></li><li class="meal6"><a href="javascript:void(0);" id="tab6" onclick="choose_one_time(6);" class="classTab">午餐</a></li><li class="meal2"><a href="javascript:void(0);" id="tab2" onclick="choose_one_time(2);" class="classTab">晚餐</a></li><li class="meal7"><a href="javascript:void(0);" id="tab7" onclick="choose_one_time(7);" class="classTab">零食</a></li><li class="sport"><a href="javascript:void(0);" id="tab4" onclick="choose_sport(4);" class="classTab">消耗</a></li></ul><div class="can-menu-wrap"><div id="can_md_food"><div class="can-menu"><div class="tabTable" id="tabletab1"></div><div class="tabTable" id="tabletab6"></div><div class="tabTable" id="tabletab2"></div><div class="tabTable" id="tabletab7"></div><div class="tabTable" id="tabletab4"></div></div></div></div></div></div><div id="md_record" class="sub-column"><div class="consumptionBox"><ul class="can-record-tab"><li class="float-left"><a id="food_tab" class="food-tab current" href="javascript:void(0);" onclick="choose_to_food(1)">饮食摄入量</a></li><li class="float-right"><a id="sport_tab" class="sport-tab" href="javascript:void(0);" onclick="choose_to_sport(4)">运动消耗量</a></li></ul ><div class="can-record" id="can_record"><div id="food_record_wrap" class="food-record-wrap upper"><div id="food_record" class="food-record"><div id="h1" class="record-panel current"><h2 class="record-title meal1" id="ab1" onclick="choose_one_time(1,'2013-09-02')">											早餐<span> (0大卡)</span></h2><div class="record-body"><p>请从左边选择食物，然后点击"添加"。</p></div></div><div id="h6" class="record-panel"><h2 class="record-title meal6"  id="ab6" onclick="choose_one_time(6,'2013-09-02')">											午餐餐<span> (0大卡)</span></h2><div class="record-body"><p>请从左边选择食物，然后点击"添加"。</p></div></div><div id="h2" class="record-panel"><h2 class="record-title meal2"  id="ab2" onclick="choose_one_time(2,'2013-09-02')">											晚餐<span> (0大卡)</span></span></h2><div class="record-body"><p>请从左边选择食物，然后点击"添加"。</p></div></div><div id="h7" class="record-panel"><h2 class="record-title meal7"  id="ab7" onclick="choose_one_time(7,'2013-09-02')">											零食<span> (0大卡)</span></h2><div class="record-body"><p>请从左边选择食物，然后点击"添加"。</p></div></div></div></div><div id="sport_record_wrap" class="sport-record-wrap"><div id="sport_record" class="sport-record"><div id="sport_record_panel" class="record-panel sport-current"><h2 class="record-title">活动</h2><div class="record-body" style="height:230px;"><p>请从左边选择活动消耗方式，然后点击"添加"。</p><p>消耗值计算需结合您的体重、身高、年龄、性别等，为避免较大误差，请您先<a href="#" target="_blank">登录</a></p></div></div><div style="border-top:1px solid #CCC;padding-top:10px;margin:0 5px;">									*总消耗=活动消耗+<a href="javascript:void(0);" onclick="showqDiv();"><span class="green1">基础代谢率<font color="red">( <span>0</span>大卡 )</font></span></a></div></div></div></div></div><div class="conclusion"><div class="l"><p>饮食摄入：<span class="y"><span style="font-size:14px;"> 0 </span>大卡</span></p><p>活动消耗：<span class="x"><span style="font-size:14px;"> 0 </span>大卡</span></p></div><div class="r"><a href="javascript:void(0);" onclick="insert();" class="b">保存记录</a><a href="javascript:void(0);" onclick="if(confirm('您确定清空饮食运动记录吗？')){empty(8);return false;}">清空</a></div></div></div></div></div></div></div></div><div class="warpper"><div id ="showqDiv" class="popContent"><div class="poptitle"><span class="l">基础代谢计算器</span><span class="r"  style="cursor: pointer;" onclick="onClose();"></span></div><div class="popCon"><div class="pozznew"><p>基础代谢率（BMR）是指人体在清醒而又极端安静的状态下，不受肌肉活动、环境温度、食物及精神紧张等影响时的能量代谢率。</p><p> 基础代谢率对减肥有非常大的影响，每天适量的运动有助于提高身体的基础代谢率，而节食(极端是绝食)会降低人的基础代谢率。通过性别，年龄，身高和体重能粗略计算基础代谢率。</p><p>* 本基础代谢计算工具仅适用于一般情况，如需得到个人实际基础代谢情况请完善个人信息。</p></div><div class="calculations"><b>请输入您的性别、年龄、身高和体重：</b><dl><dd id="sex">性别：<input type="radio" name="sex" value="1" />男<input type="radio" name="sex" value="0" checked="checked" />女</dd><dd id="age">年龄：<input type="text" name="age"  class="tx" onkeyup="value=value.replace(/[^\d]/g,'') " />岁</dd><dd id="height">身高：<input type="text" name="height"  class="tx" onkeyup="value=value.replace(/[^\d]/g,'') "/>cm</dd><dd id="weight">体重：<input type="text" name="weight"  class="tx" onkeyup="value=value.replace(/[^\d]/g,'') "/>kg</dd></dl><div class="determine"><a href="javascript:void(0);" onclick="sbumit_bmr();">确定</a></div></div></div></div></div><script type="text/javascript">function showqDiv() 
{ 
document.getElementById("showqDiv").style.display = "block";
choose_sport(4); 
} 
function onClose() 
{ 
document.getElementById("showqDiv").style.display = "none"; 
} 
_ww = 509;
_hh = 356;
_id = 'showqDiv';
$(document).ready(function(){
	findDimensions(); 
window.onresize=findDimensions; 
});
function findDimensions() { 
	var pleft = 0;
	var ptop = 0;
	var winWidth = 0; 
	var winHeight = 0; 
	var _obj = document.getElementById(_id);
	if (window.innerWidth) 
		winWidth = window.innerWidth; 
	else if ((document.body) && (document.body.clientWidth)) 
			winWidth = document.body.clientWidth; 
	if (window.innerHeight) 
			winHeight = window.innerHeight; 
	else if ((document.body) && (document.body.clientHeight)) 
		winHeight = document.body.clientHeight; 
	if (document.documentElement && document.documentElement.clientHeight && document.documentElement.clientWidth) { 
		winHeight = document.documentElement.clientHeight; 
		winWidth = document.documentElement.clientWidth; 
	} 
	ptop = (winHeight-_hh)/2;
	pleft = (winWidth-_ww)/2;
	_obj.style.top=ptop+"px";
	_obj.style.left=pleft+"px";
} 
</script>