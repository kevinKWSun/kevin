<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>标准体重计算,<?php echo (C("WEB_NAME")); ?></title>
<meta name="keywords" content="标准体重计算,标准体重" />
<meta name="description" content="您的体重符合标准吗？使用标准体重计算器，请在下面选择您的性别，输入年龄和身高，最后计算得出标准体重。计算适用范围：女性：19岁到69岁，身高在152cm到176cm。男性：19岁到69岁，身高在152cm到188cm..." />
<link href="__PUBLIC__/Slim/Css/sunny.css" rel="stylesheet" media="screen" type="text/css" />
<script src="__PUBLIC__/Js/iepng.js" type="text/javascript"></script>
<script src="__PUBLIC__/Js/jquery-1.7.2.min.js" type="text/javascript"></script>
<script>
$(function(){
	$( '.submit' ).click( function () {
		var sex = $( "input[name='sex']:checked" ).val();
		var age = $( 'input[name=age]' ).val();
		var height = $( 'input[name=height]' ).val();
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
		$('#sw').load('<?php echo U("/list-sws");?>?age='+age+'&height='+height+'&sex='+sex);
		return false;
	});
});
</script>
</head>
<body>
<div class="header_top">

	<div id="top">

		<div id="tj">

			<li><a href="<?php echo U('/list-' . '27');?>">儿童生长</a></li>

			<li><a href="<?php echo U('/list-' . '24');?>">丰胸</a></li>

			<li><a href="<?php echo U('/list-' . '25');?>">产后</a></li>

			<li><a href="<?php echo U('/list-' . '26');?>">显瘦搭配</a></li>

			<li><a href="<?php echo U('/list-' . '28');?>">局部塑身</a></li>

			<li><a target="_blank" href="http://shang.qq.com/wpa/qunwpa?idkey=72654b7776387de9a4f9975de6db174b3d7f58b888cf7c3be6767d38ce8425a3"><img src="http://pub.idqqimg.com/wpa/images/group.png" alt="诗诗瘦身交流群" title="诗诗瘦身交流群" border="0"></a></li>

			<li><a href="javascript:void(0);" onClick="addFavorite(this.href, '<?php echo (C("WEB_NAME")); ?>');return false;" class="nav_c">加入收藏</a></li>

			<li>

			<div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a title="分享到QQ空间" href="#" class="bds_qzone" data-cmd="qzone"></a><a title="分享到新浪微博" href="#" class="bds_tsina" data-cmd="tsina"></a><a title="分享到腾讯微博" href="#" class="bds_tqq" data-cmd="tqq"></a><a title="分享到人人网" href="#" class="bds_renren" data-cmd="renren"></a><a title="分享到微信" href="#" class="bds_weixin" data-cmd="weixin"></a></div>

<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"1","bdMiniList":false,"bdPic":"","bdStyle":"1","bdSize":"16"},"share":{},"image":{"viewList":["qzone","tsina","tqq","renren","weixin"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>

			</li>

		</div>

		<div id="gy">

			<?php if(isset($_SESSION['ss_username'])){ echo '您好 <a href="/oneself.html">',$_SESSION["ss_username"],'</a>，欢迎关注诗诗瘦身网!　<a href="/logout.html">[ 退出 ]</a>'; }else{ echo "您好，欢迎关注诗诗瘦身网!<span>　[<a href='/login.html'>登录</a>]　[<a href='/reg.html'>注册</a>]</span>"; } ?>

		</div>

	</div>

</div>

<!--/header_top-->

<div id="header">

	<div id="header_logo">

		<div id="logo">

			<h1>

				<a href="<?php echo (C("WEB_ADDRESS")); ?>"><img src="/img/logo.jpg" alt="<?php echo (C("WEB_NAME")); ?>"></a>

			</h1>

		</div>

		<div id="banner">

			<a href="<?php echo U('/list-kll');?>"><img src="/img/banner.jpg" alt="<?php echo (C("WEB_NAMES")); ?>"></a>

		</div>

	</div>



	<div id="menus">

		<div id="nav_ind">

			<div id="nav_list"> 

				<a class="nav_b" title="减肥常识">减肥</a>　|　

				<a href="<?php echo U('/list-class');?>" title="瘦身课堂">瘦身课堂</a>　|　

				<a href="<?php echo U('/list-' . '3');?>" title="瘦身课程">瘦身课程</a><br>

				<a class="nav_b" title="减肥常识">常识</a>　|　

				<a href="<?php echo U('/list-' . '4');?>" title="瘦身问答">瘦身问答</a>　|　

				<a href="<?php echo U('/list-' . '5');?>" title="瘦身资讯">瘦身资讯</a>

			</div>

			<div id="nav_list"> 

				<a class="nav_b" title="减肥方案">减肥</a>　|　

				<a href="<?php echo U('/list-' . '9');?>" title="瘦身分享">瘦身分享</a>　|　

				<a href="<?php echo U('/list-' . '10');?>" title="常见问题">常见问题</a><br />

				<a class="nav_b" title="减肥方案">方案</a>　|　

				<a href="<?php echo U('/list-nssc');?>" title="瘦身原理">瘦身原理</a>　|　

				<a href="<?php echo U('/list-' . '12');?>" title="瘦身CLUB">瘦身club</a> 

			</div>

			<div id="nav_list"> 

				<a class="nav_b" title="减肥工具">减肥</a>　|　

				<a href="<?php echo U('/list-kll');?>" title="卡路里计算器" style="letter-spacing:4px;">卡路里</a>　|　

				<a href="<?php echo U('/list-bmi');?>" title="身体质量指数(BMI)">身体质量</a>　|　

				<a href="<?php echo U('/list-bmr');?>" title="(BMR)基础代谢计算器">基础代谢</a>　|　

				<a href="<?php echo U('/list-hw');?>" title="健康体重范围计算器">健康体重</a>　|　

				<a href="<?php echo U('/list-s');?>" title="一分钟了解自己">了解自己</a>　|　
				
				<a href="<?php echo U('/Taob');?>" title="总有你喜欢的款式">淘宝</a><br>

				<a class="nav_b" title="减肥工具">工具</a>　|　

				<a href="<?php echo U('/list-sw');?>" title="标准体重计算器">标准体重</a>　|　

				<a href="<?php echo U('/list-hr');?>" title="燃脂运动计算器">燃脂运动</a>　|　

				<a href="<?php echo U('/list-bwh');?>" title="三围标准计算公式">三围标准</a>　|　

				<a href="<?php echo U('/list-kll');?>" title="运动消耗">运动消耗</a>　|　

				<a href="<?php echo U('/list-' . '23');?>" title="健康瘦身餐" style="letter-spacing:4px;">瘦身餐</a>

			</div> 

		</div>

	</div>

	

</div>

<div class="g970"><?php echo (C("g97090")); ?></div>
<div id="main">
	<div class="location border_bottom"><a href="<?php echo (C("WEB_ADDRESS")); ?>">诗诗瘦身网</a> >> 标准体重计算器</div> 
	<div id="list_left">
		<p class="guidetitle"><span>标准体重计算器</span></p>
		<div class="guidecont sw">
			<p>
			您的体重符合标准吗？使用<span class="stress">标准体重计算器</span>，请在下面选择您的性别，输入年龄和身高，最后计算得出标准体重。<font color="red"><strong>计算适用范围</strong>：</font>
			</p><p>女性：19岁到69岁，身高在152cm到176cm。</p><p>
			男性：19岁到69岁，身高在152cm到188cm。
			</p>
		</div>
		<div class="divs">
			<p class="fonts">请输入您的性别、身高和年龄：</p>
			<p class="clear">　
				性别：<input name="sex" value="1" type="radio"> 男　
				<input name="sex" value="0" type="radio" checked="checked"> 女　
				年龄：<input class="form-text" name="age" size="6" type="text" onkeyup="value=value.replace(/[^\d]/g,'') " /> 岁　
				身高：<input class="form-text" name="height" size="6" type="text" onkeyup="value=value.replace(/[^\d.]/g,'') " /> CM（厘米）
			</p>
			<p class="clear mt1">　　　
				<input type="submit" value="计算" class="js submit" />　
				<span id="sw" class="stress"></span>　
			</p>
		</div>
		
		<p class="stress mt1">资料参考：</p>
		<p class="liheight">
		　　一、标准体重（kg）<br />
		　　① 身高&gt;165cm：身高(cm)-100<br />
		　　身高&lt;165cm：身高(cm)-105（男）<br />
		　　身高（cm）-100（女）<br />
		　　② 北方人=（身高cm-150）×0.6+50<br />
		　　南方人=（身高cm-150）×0.6+48<br />
		　　正常体重：=SW±SW×0.10<br />
		　　超 重：=SW+SW×（0.11～0.20）<br />
		　　轻度：=SW+SW×(0.21～0.30)<br />
		　　肥胖 中度：= SW+SW×（0.31～0.30）<br />
		　　重度：= SW+SW×（0.31～0.50）<br />
		　　瘦 弱：=SW-SW×(0.11～0.20)<br />
		　　严重瘦弱：= SW-SW×0.20（及其0.21以上）<br />
		
		　　男性之标准体重（千克）＝身长（厘米）－100<br />
		
		　　女性之标准体重（千克）＝身长（厘米）－102<br />
		
		　　二、国际上常用的人的体重计算公式，以及身材比例计算（比较适合东方人）<br />
		　　标准体重=(身高cm-100)x0.9(kg)<br />
		
		　　标准体重(女)=(身高cm-100)x0.9(kg)-2.5(kg)<br />
		
		　　正常体重：标准体重＋-(多少）10％．<br />
		
		　　超  重：大于标准体重10％小于标准体重20％．<br />
		
		　　轻度肥胖：大于标准体重20％小于标准体重30％．<br />
		
		　　中度肥胖：大于标准体重30％小于标准体重50％．<br />
		
		　　重度肥胖：大于标准体重50％以上<br />
		
		　　标准体脂肪：体重指数BMI=体重（kg）/{身高*身高（m）}<br />
		
		　　三、各种身高的理想体重和身材比例表<br />
		
		　　身高 148cm 150cm 155cm 160cm 165cm 169cm<br />
		
		　　体重 48.2kg 49.5kg 52.9kg 56.3kg 59.9kg 62.8kg<br />
		
		　　胸围 80cm 82cm 84cm 86cm 89cm 91cm<br />
		
		　　腰围 58cm 59cm 61cm 63cm 64cm 64cm<br />
		
		　　臀围 82cm 83cm 85cm 87cm 91cm 93cm<br />
		
		　　大腿 45cm 46cm 46cm 47cm 49cm 51cm<br />
		
		　　小腿 31cm 31cm 32cm 33cm 34cm 34cm<br />
		
		　　脚踝 19cm 19cm 20cm 21cm 21cm 21cm
		</p>
		
		<div class="g728"><?php echo (C("g72890")); ?></div>
	</div>
	<div id="list_right">
		<div class="right_1l">
			<div class="right_1l g300">
	<center><?php echo (C("g300250")); ?></center>
</div>
<div id="right_soso">
	<form action="<?php echo U('/searcher');?>" method="get">
		<input type="text" name="title" placeholder="请输入要搜索的关键字..." />
		<button type="submit">搜 索</button>
	</form>
</div>
<b class="mt1">卡路里计算器</b>
<ul class="kll_tool">
	<a href="<?php echo U('/list-kll');?>"><img src="__PUBLIC__/Img/can-icon.gif" alt="卡路里计算器" /></a>
	<li>天天瘦身一点点,每天几分钟让你拥有麻豆体型,不要太瘦哦...<br /><a href="<?php echo U('/list-kll');?>">>> 马上体验 <<</a></li>
</ul>
<b>瘦身工具推荐</b>
<ul class="side-nav">
	<li><a href="<?php echo U('/list-food');?>" class="nav9">食物热量查询</a></li>	
	<li><a href="<?php echo U('/list-s');?>" class="nav2">一分钟了解自己</a></li>
	<li><a href="<?php echo U('/list-bwh');?>" class="nav10">三围标准计算(BWH)</a></li>
	<li><a href="<?php echo U('/list-sw');?>" class="nav5">标准体重计算</a></li>
	<li><a href="<?php echo U('/list-hw');?>" class="nav7">健康体重范围</a></li>
	<li><a href="<?php echo U('/list-hr');?>" class="nav6">燃脂运动计算</a></li>
	<li><a href="<?php echo U('/list-bmr');?>" class="nav8">基础代谢计算(BMR)</a></li>
	<li><a href="<?php echo U('/list-kll');?>" class="nav4">运动卡路里计算器</a></li>
	<li><a href="<?php echo U('/list-bmi');?>" class="nav3">身体质量指数(BMI)</a></li> 
</ul>
<b>热点推荐</b>
<ul class="hot_tool">
	<?php echo W('New',array('limitstart' => '0,15'));?>
</ul>
		</div>
	</div>
</div>
<div id="footer1">
	<div id="bottomBar">
		<a href="/29.html" target="_blank">关于我们</a> 　|　
		<a href="/31.html" target="_blank">合作媒体</a> 　|　
		<a href="/30.html" target="_blank">网站地图</a> 　|　
		<a href="/32.html" target="_blank">广告客户</a> 　|　
		<a href="/28.html" target="_blank">联系我们</a>
	</div>
	<div id="copyBottom">
		<div id="yqlj2"> 
			<strong>友情链接</strong><br>
			<a href="<?php echo (C("WEB_ADDRESS")); ?>" target="_blank">女性网</a>
			<a href="<?php echo (C("WEB_ADDRESS")); ?>" target="_blank">减肥网</a>
			<a href="<?php echo (C("WEB_ADDRESS")); ?>" target="_blank">瘦身网</a>
		</div>
		<div id="yqlj3">
		<strong>战略合作品牌</strong><br>
			 <a href="http://www.aisuny.com" target="_blank">上海SUNNY科技</a>
		</div>
		<div id="copyBottom-right2"> 
			诗诗瘦身网 &nbsp;&nbsp;Copyright &copy; <?php echo date('Y',time());?> . 版权所有&nbsp;&nbsp;
			( All Right Reserved ) 技术支持 : <a href="http://www.aisuny.com" target="_blank">上海SUNNY科技</a><br>
			<a href="http://www.zx110.org/" target="_blank" rel="nofollow"><img src="/img/gs-img_01.jpg"></a>
			<a href="http://sh.cyberpolice.cn/" target="_blank" rel="nofollow"><img src="/img/gs-img_02.jpg"></a>

		</div>
	</div>
</div>
<script src="__PUBLIC__/Js/js.js"></script>
</body>
</html>