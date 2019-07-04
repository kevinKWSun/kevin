<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /><title>1分钟彻底了解自己的标准体重,健康体重范围,BMI身体质量指数,BMR基础代谢率和燃脂运动计算,<?php echo (C("WEB_NAME")); ?></title><meta name="keywords" content="1分钟彻底了解自己的标准体重,健康体重范围,BMI身体质量指数,基础代谢率和燃脂运动计算" /><meta name="description" content="1分钟彻底了解自己的标准体重、健康体重范围、BMI指数（即身体质量指数）、基础代谢率和燃脂运动中低强度运动心率，看看自己是否需要减肥了。身体质量指数(BMI)：评估体重与身高比例的常用工具，适用范围：18至65岁的人士。儿童、发育中的青少年、孕妇、乳母、老人及身型健硕的运动员除外..." /><link href="__PUBLIC__/Slim/Css/sunny.css" rel="stylesheet" media="screen" type="text/css" /><script src="__PUBLIC__/Js/iepng.js" type="text/javascript"></script><script src="__PUBLIC__/Js/jquery-1.7.2.min.js" type="text/javascript"></script><script>$(function(){
	$( '.submit' ).click( function () {
		var sex = $( "input[name='sex']:checked" ).val();
		var age = $( 'input[name=age]' ).val();
		var height = $( 'input[name=height]' ).val();
		var weight = $( 'input[name=weight]' ).val();
		if(sex==''){
			alert('请选择性别!');
			return;
		}
		if(age==''){
			alert('请填写年龄!');
			return;
		}
		if(height==''){
			alert('请填写身高!');
			return;
		}
		if(weight==''){
			alert('请填写体重!');
			return;
		}
		
		$('#bwh').load('<?php echo U("/list-bwhs");?>?height='+height+'&version=0&sex='+sex,function() {
		});
		
		$('#bmi').load('<?php echo U("/list-bmis");?>?height='+height+'&weight='+weight,function() {
		});
		
		$('#sw').load('<?php echo U("/list-sws");?>?age='+age+'&height='+height+'&sex='+sex,function() {
		});

		$('#hwr').load('<?php echo U("/list-hwr");?>?height='+height,function() {
		});

		$('#bmr').load('<?php echo U("/list-abmr");?>?age='+age+'&weight='+weight+'&height='+height+'&sex='+sex,function() {
		});

		$('#fat').load('<?php echo U("/list-fat");?>?age='+age,function() {
			
		});
		$('.test-result').slideDown('slow');
		return false;
	});
	$('#bmr').load('<?php echo U("/list-bmrview");?>');
});
</script></head><body><div class="header_top"><div id="top"><div id="tj"><li><a href="<?php echo U('/list-' . '27');?>">儿童生长</a></li><li><a href="<?php echo U('/list-' . '24');?>">丰胸</a></li><li><a href="<?php echo U('/list-' . '25');?>">产后</a></li><li><a href="<?php echo U('/list-' . '26');?>">显瘦搭配</a></li><li><a href="<?php echo U('/list-' . '28');?>">局部塑身</a></li><li><a target="_blank" href="http://shang.qq.com/wpa/qunwpa?idkey=72654b7776387de9a4f9975de6db174b3d7f58b888cf7c3be6767d38ce8425a3"><img src="http://pub.idqqimg.com/wpa/images/group.png" alt="诗诗瘦身交流群" title="诗诗瘦身交流群" border="0"></a></li><li><a href="javascript:void(0);" onClick="addFavorite(this.href, '<?php echo (C("WEB_NAME")); ?>');return false;" class="nav_c">加入收藏</a></li><li><div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a title="分享到QQ空间" href="#" class="bds_qzone" data-cmd="qzone"></a><a title="分享到新浪微博" href="#" class="bds_tsina" data-cmd="tsina"></a><a title="分享到腾讯微博" href="#" class="bds_tqq" data-cmd="tqq"></a><a title="分享到人人网" href="#" class="bds_renren" data-cmd="renren"></a><a title="分享到微信" href="#" class="bds_weixin" data-cmd="weixin"></a></div><script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"1","bdMiniList":false,"bdPic":"","bdStyle":"1","bdSize":"16"},"share":{},"image":{"viewList":["qzone","tsina","tqq","renren","weixin"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script></li></div><div id="gy"><?php if(isset($_SESSION['ss_username'])){ echo '您好 <a href="/oneself.html">',$_SESSION["ss_username"],'</a>，欢迎关注诗诗瘦身网!　<a href="/logout.html">[ 退出 ]</a>'; }else{ echo "您好，欢迎关注诗诗瘦身网!<span>　[<a href='/login.html'>登录</a>]　[<a href='/reg.html'>注册</a>]</span>"; } ?></div></div></div><!--/header_top--><div id="header"><div id="header_logo"><div id="logo"><h1><a href="<?php echo (C("WEB_ADDRESS")); ?>"><img src="/img/logo.jpg" alt="<?php echo (C("WEB_NAME")); ?>"></a></h1></div><div id="banner"><a href="<?php echo U('/list-kll');?>"><img src="/img/banner.jpg" alt="<?php echo (C("WEB_NAMES")); ?>"></a></div></div><div id="menus"><div id="nav_ind"><div id="nav_list"><a class="nav_b" title="减肥常识">减肥</a>　|　

				<a href="<?php echo U('/list-class');?>" title="瘦身课堂">瘦身课堂</a>　|　

				<a href="<?php echo U('/list-' . '3');?>" title="瘦身课程">瘦身课程</a><br><a class="nav_b" title="减肥常识">常识</a>　|　

				<a href="<?php echo U('/list-' . '4');?>" title="瘦身问答">瘦身问答</a>　|　

				<a href="<?php echo U('/list-' . '5');?>" title="瘦身资讯">瘦身资讯</a></div><div id="nav_list"><a class="nav_b" title="减肥方案">减肥</a>　|　

				<a href="<?php echo U('/list-' . '9');?>" title="瘦身分享">瘦身分享</a>　|　

				<a href="<?php echo U('/list-' . '10');?>" title="常见问题">常见问题</a><br /><a class="nav_b" title="减肥方案">方案</a>　|　

				<a href="<?php echo U('/list-nssc');?>" title="瘦身原理">瘦身原理</a>　|　

				<a href="<?php echo U('/list-' . '12');?>" title="瘦身CLUB">瘦身club</a></div><div id="nav_list"><a class="nav_b" title="减肥工具">减肥</a>　|　

				<a href="<?php echo U('/list-kll');?>" title="卡路里计算器" style="letter-spacing:4px;">卡路里</a>　|　

				<a href="<?php echo U('/list-bmi');?>" title="身体质量指数(BMI)">身体质量</a>　|　

				<a href="<?php echo U('/list-bmr');?>" title="(BMR)基础代谢计算器">基础代谢</a>　|　

				<a href="<?php echo U('/list-hw');?>" title="健康体重范围计算器">健康体重</a>　|　

				<a href="<?php echo U('/list-s');?>" title="一分钟了解自己">了解自己</a>　|　
				
				<a href="<?php echo U('/Taob');?>" title="总有你喜欢的款式">淘宝</a><br><a class="nav_b" title="减肥工具">工具</a>　|　

				<a href="<?php echo U('/list-sw');?>" title="标准体重计算器">标准体重</a>　|　

				<a href="<?php echo U('/list-hr');?>" title="燃脂运动计算器">燃脂运动</a>　|　

				<a href="<?php echo U('/list-bwh');?>" title="三围标准计算公式">三围标准</a>　|　

				<a href="<?php echo U('/list-kll');?>" title="运动消耗">运动消耗</a>　|　

				<a href="<?php echo U('/list-' . '23');?>" title="健康瘦身餐" style="letter-spacing:4px;">瘦身餐</a></div></div></div></div><div class="g970"><?php echo (C("g97090")); ?></div><div id="main"><div class="location border_bottom"><a href="<?php echo (C("WEB_ADDRESS")); ?>">诗诗瘦身网</a> >> 一分钟了解自己</div><div id="list_left"><p class="guidetitle"><span>一分钟了解自己</span></p><div class="guidecont bat"><p>			1分钟彻底了解自己的标准体重、健康体重范围、BMI指数（即身体质量指数）、基础代谢率和燃脂运动中低强度运动心率，看看自己是否需要减肥了。
			</p><p>			身体质量指数(BMI)：评估体重与身高比例的常用工具，适用范围：18至65岁的人士。儿童、发育中的青少年、孕妇、乳母、老人及身型健硕的运动员除外。
			</p></div><div class="divs"><p class="fonts">请输入您的性别、年龄、身高和体重：</p><p class="clear">				性别：<input name="sex" value="1" type="radio"> 男　
				<input name="sex" value="0" type="radio" checked="checked"> 女　
				年龄：<input class="form-text" name="age" size="6" type="text" onkeyup="value=value.replace(/[^\d]/g,'') " /> 岁　
				身高：<input class="form-text" name="height" size="6" type="text" onkeyup="value=value.replace(/[^\d.]/g,'') " /> CM（厘米）　
				体重：<input class="form-text" name="weight" size="6" type="text" onkeyup="value=value.replace(/[^\d.]/g,'') " /> KG(1KG=2斤)<br /><br /></p><p class="clear mt1">　
				<input type="submit" value="计算" class="js submit" />　
			</p></div><div class="test-result mt1"><p class="stress mt1">• <a href="<?php echo U('/list-bwh');?>">标准三围 ( BWH ) </a></p><p class="mt1"><span id="bwh"></span></p><p class="stress mt1">• <span id="bmi"></span></p><table class="table mt1" cellpadding="0" cellspacing="0"><tbody><tr class="thead"><th colspan="4" class="stress">成年人身体质量指数</th></tr><tr><td width="25%"><b>轻体重BMI</b></td><td width="25%"><b>健康体重BMI</b></td><td width="25%"><b>超重BMI</b></td><td width="25%"><b>肥胖BMI</b></td></tr><tr><td>BMI&lt;18.5</td><td>18.5≤BMI&lt;24</td><td>24≤BMI&lt;28</td><td>28≤BMI</td></tr></tbody></table><p class="stress mt1">• <span id="hwr"></span></p><p class="stress mt1">• <span id="sw"></span></p><p class="stress mt1">• 目前您的基础代谢率（BMR）:<font color="red"><span id="bmr"></span></font>大卡</p><p class="mt1">基础代谢率(BMR)：在安静状态下(通常为静卧状态)消耗的最低热量。</p><p class="stress mt1">• <span id="fat"></span></p><p class="mt1">人体要燃烧脂肪，需要满足三个必要条件：</p><p class="mt1">1、该运动要达到中低强度的运动心率；</p><p class="mt1">2、这种中低强度运动心率的运动要持续20分钟以上；</p><p class="mt1">3、这种运动必须是大肌肉群的运动，如慢跑、游泳、健身操等。</p><p class="mt1">低于或高于这个范围，都不算中低强度运动心率，燃烧的也就不是脂肪了~</p></div><div class="g728"><?php echo (C("g72890")); ?></div></div><div id="list_right"><div class="right_1l"><div class="right_1l g300"><center><?php echo (C("g300250")); ?></center></div><div id="right_soso"><form action="<?php echo U('/searcher');?>" method="get"><input type="text" name="title" placeholder="请输入要搜索的关键字..." /><button type="submit">搜 索</button></form></div><b class="mt1">卡路里计算器</b><ul class="kll_tool"><a href="<?php echo U('/list-kll');?>"><img src="__PUBLIC__/Img/can-icon.gif" alt="卡路里计算器" /></a><li>天天瘦身一点点,每天几分钟让你拥有麻豆体型,不要太瘦哦...<br /><a href="<?php echo U('/list-kll');?>">>> 马上体验 <<</a></li></ul><b>瘦身工具推荐</b><ul class="side-nav"><li><a href="<?php echo U('/list-food');?>" class="nav9">食物热量查询</a></li><li><a href="<?php echo U('/list-s');?>" class="nav2">一分钟了解自己</a></li><li><a href="<?php echo U('/list-bwh');?>" class="nav10">三围标准计算(BWH)</a></li><li><a href="<?php echo U('/list-sw');?>" class="nav5">标准体重计算</a></li><li><a href="<?php echo U('/list-hw');?>" class="nav7">健康体重范围</a></li><li><a href="<?php echo U('/list-hr');?>" class="nav6">燃脂运动计算</a></li><li><a href="<?php echo U('/list-bmr');?>" class="nav8">基础代谢计算(BMR)</a></li><li><a href="<?php echo U('/list-kll');?>" class="nav4">运动卡路里计算器</a></li><li><a href="<?php echo U('/list-bmi');?>" class="nav3">身体质量指数(BMI)</a></li></ul><b>热点推荐</b><ul class="hot_tool"><?php echo W('New',array('limitstart' => '0,15'));?></ul></div></div></div><div id="footer1"><div id="bottomBar"><a href="/29.html" target="_blank">关于我们</a> 　|　
		<a href="/31.html" target="_blank">合作媒体</a> 　|　
		<a href="/30.html" target="_blank">网站地图</a> 　|　
		<a href="/32.html" target="_blank">广告客户</a> 　|　
		<a href="/28.html" target="_blank">联系我们</a></div><div id="copyBottom"><div id="yqlj2"><strong>友情链接</strong><br><a href="<?php echo (C("WEB_ADDRESS")); ?>" target="_blank">女性网</a><a href="<?php echo (C("WEB_ADDRESS")); ?>" target="_blank">减肥网</a><a href="<?php echo (C("WEB_ADDRESS")); ?>" target="_blank">瘦身网</a></div><div id="yqlj3"><strong>战略合作品牌</strong><br><a href="http://www.aisuny.com" target="_blank">上海SUNNY科技</a></div><div id="copyBottom-right2">			诗诗瘦身网 &nbsp;&nbsp;Copyright &copy; <?php echo date('Y',time());?> . 版权所有&nbsp;&nbsp;
			( All Right Reserved ) 技术支持 : <a href="http://www.aisuny.com" target="_blank">上海SUNNY科技</a><br><a href="http://www.zx110.org/" target="_blank" rel="nofollow"><img src="/img/gs-img_01.jpg"></a><a href="http://sh.cyberpolice.cn/" target="_blank" rel="nofollow"><img src="/img/gs-img_02.jpg"></a></div></div></div><script src="__PUBLIC__/Js/js.js"></script></body></html>