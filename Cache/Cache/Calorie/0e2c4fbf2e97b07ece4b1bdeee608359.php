<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /><title>卡路里计算器_<?php echo (C("WEB_NAME")); ?></title><meta property="qc:admins" content="15463362515630111163757314721560454" /><meta name="keywords" content="卡路里计算器,卡路里热量计算,诗诗瘦身" /><meta name="description" content="卡路里计算器,卡路里热量计算,诗诗瘦身,成人每天至少需要1500大卡的能量来维持身体机能，这是因为即使你躺着不动，你的身体仍需能来保持体温，心肺功能和大脑运作。基础代谢消耗会因个体间身高、体重、年龄、性别的差异而有所不同。人类生存需要能量，并从食物中获取该能量。食物中的卡路里含量是该食品产生多少潜在能量的量度标准。1克碳水化合物含4千卡路里，1克蛋白质含4千卡路里，1克脂肪含9千卡路里。食物一般由这三种物质组成。因此只要知道食物中这三种物质的含量，就可以知道食物含多少卡路里或多少能量。" /><link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/public.css" /><link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/d.css" /><script type="text/javascript" src="__PUBLIC__/Js/jquery-1.7.2.min.js"></script><script type="text/javascript" src="__PUBLIC__/Js/iepng.js"></script><script type="text/javascript">	$(document).ready(function(){

		$('#calories').load("<?php echo U(GROUP_NAME . '/Index/view/');?>");

	});
	function insert(){
		window.open('/list-kll.html');
	}
</script><script type="text/javascript" charset="utf-8" src="http://fusion.qq.com/fusion_loader?appid=1101080861&platform=qzone"></script></head><body><div class="header_top"><div id="top"><div id="tj"><li><a href="<?php echo U('/list-' . '27');?>" target="_blank">儿童生长</a></li><li><a href="<?php echo U('/list-' . '24');?>" target="_blank">丰胸</a></li><li><a href="<?php echo U('/list-' . '25');?>" target="_blank">产后</a></li><li><a href="<?php echo U('/list-' . '26');?>" target="_blank">显瘦搭配</a></li><li><a href="<?php echo U('/list-' . '28');?>" target="_blank">局部塑身</a></li><li><a target="_blank" href="http://shang.qq.com/wpa/qunwpa?idkey=72654b7776387de9a4f9975de6db174b3d7f58b888cf7c3be6767d38ce8425a3"><img src="http://pub.idqqimg.com/wpa/images/group.png" alt="诗诗瘦身交流群" title="诗诗瘦身交流群" border="0"></a></li><li><a href="/28.html" class="nav_c" target="_blank">联系我们</a></li></div><div id="gy"><?php if(isset($_SESSION['ss_username'])){ echo '您好 <a href="/oneself.html" target="_blank">',$_SESSION["ss_username"],'</a>，欢迎关注诗诗瘦身网!　<a href="/logout.html" target="_blank">[ 退出 ]</a>'; }else{ echo "您好，欢迎关注诗诗瘦身网!<span>　[<a href='/login.html' target='_blank'>登录</a>]　[<a href='/reg.html' target='_blank'>注册</a>]</span>"; } ?></div></div></div><!--/header_top--><div id="header"><div id="menus"><div id="nav_ind"><div id="nav_list"><img src="/img/logocal.png" /></div><div id="nav_list"><a class="nav_b" title="减肥工具">减肥</a>　|　

				<a href="<?php echo U('/list-kll');?>" title="卡路里计算器" style="letter-spacing:4px;" target="_blank">卡路里</a>　|　

				<a href="<?php echo U('/list-bmi');?>" title="身体质量指数(BMI)" target="_blank">身体质量</a>　|　

				<a href="<?php echo U('/list-bmr');?>" title="(BMR)基础代谢计算器" target="_blank">基础代谢</a>　|　

				<a href="<?php echo U('/list-hw');?>" title="健康体重范围计算器" target="_blank">健康体重</a>　|　

				<a href="<?php echo U('/list-s');?>" title="一分钟了解自己" target="_blank">了解自己</a>　|　

				<a href="<?php echo U('/list-food');?>" title="食物热量查询" target="_blank">食物热量</a><br><a class="nav_b" title="减肥工具">工具</a>　|　

				<a href="<?php echo U('/list-sw');?>" title="标准体重计算器" target="_blank">标准体重</a>　|　

				<a href="<?php echo U('/list-hr');?>" title="燃脂运动计算器" target="_blank">燃脂运动</a>　|　

				<a href="<?php echo U('/list-bwh');?>" title="三围标准计算公式" target="_blank">三围标准</a>　|　

				<a href="<?php echo U('/list-kll');?>" title="运动消耗" target="_blank">运动消耗</a>　|　

				<a href="<?php echo U('/list-' . '23');?>" title="健康瘦身餐" style="letter-spacing:4px;">瘦身餐</a>　|　
				
				<a href="javascript:void(0);" onclick="javascript:useFriend();">推荐好友</a></div></div></div></div><script>function useFriend(){fusion.dialog.inviteFriend({appid:1101080861});}function invite(){fusion2.dialog.sendStory({title :"健康瘦身,绿色减肥,免费瘦身?卡路里瘦身应用！",img:"http://api.open.qq.com/tfs/show_img.php?appid=1101080861&uuid=100.png%7C1048576%7C1389677979",summary :"健康瘦身,绿色减肥,免费瘦身?尽在卡路里瘦身...",msg:"中国最温馨的免费瘦身网站哦！随时随地与瘦身相伴！现在就开始你在诗诗的快乐瘦身之旅吧，期待一个更完美的自己！"});}function clickIE4(){if (event.button==2){return false;}}function clickNS4(e){if (document.layers||document.getElementById&&!document.all){if (e.which==2||e.which==3){return false;}}}function OnDeny(){if(event.ctrlKey || event.keyCode==78 && event.ctrlKey || event.altKey || event.altKey && event.keyCode==115){return false;}}if (document.layers){document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS4;document.onkeydown=OnDeny();}else if (document.all&&!document.getElementById){document.onmousedown=clickIE4;document.onkeydown=OnDeny();}document.oncontextmenu=new Function("return false");</script><div class="warpper"><div id="calories"></div><div class="cl"></div></div><div class="warpper" style="line-height:35px;"><center>	声明：卡路里瘦身是上海SUNNY科技信息有限公司提供的一款免费绿色瘦身应用平台，指导意见仅供参考，不做减肥依据。卡路里瘦身 － 版权所有 Copyright © 2012-<?php echo date('Y',time());?> 未经授权请勿转载 客服QQ：910614119 
</center></div><script src="__PUBLIC__/Js/js.js"></script></body></html>