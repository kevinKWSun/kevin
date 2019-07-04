<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>三围标准计算公式,<?php echo (C("WEB_NAME")); ?></title>
<meta name="keywords" content="三围标准计算公式,三围标准计算,bwhs" />
<meta name="description" content="三围标准计算公式,三围标准计算,bwhs,三围(BWH分别是英文单词Bust(胸)，Waist/waistline(腰/腰围)，Hip(臀)的缩写，在丈量身体和服装标示中分别代表胸围，腰围和臀围。S则是英文small of the back(腰)的缩写，代表腰，腰围。)每一个女性都渴望有一副完满的身材，但什么样的身材才完美呢？你知道标准的三围是什么样的吗？如果不知道，那么你就看下面的公式，那就是你努力的目标..." />
<link href="__PUBLIC__/Slim/Css/sunny.css" rel="stylesheet" media="screen" type="text/css" />
<script src="__PUBLIC__/Js/iepng.js" type="text/javascript"></script>
<script src="__PUBLIC__/Js/jquery-1.7.2.min.js" type="text/javascript"></script>
<script>
$(function(){
	$( '.submit' ).click( function () {
		var version = $( "input[name='version']:checked" ).val();
		var sex = $( "input[name='sex']:checked" ).val();
		var height = $( 'input[name=height]' ).val();
		if(version==''){
			alert('请选择版本号!');
			return;
		}
		if(sex==''){
			alert('请选择性别!');
			return;
		}
		if(height==''){
			alert('请填写身高!');
			return;
		}
		$('#bwh').load('<?php echo U("/list-bwhs");?>?height='+height+'&version='+version+'&sex='+sex,function() {
		});
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
	<div class="location border_bottom"><a href="<?php echo (C("WEB_ADDRESS")); ?>">诗诗瘦身网</a> >> 三围标准计算公式</div> 
	<div id="list_left">
		<p class="guidetitle"><span>三围标准计算公式</span></p>
		<div class="guidecont bwh">
			<p><span class="stress">三围</span> ( BWH 分别是英文单词 Bust ( 胸 )，Waist / waistline ( 腰 / 腰围 ) ，Hip ( 臀 ) 的缩写，在丈量身体和服装标示中分别代表胸围，腰围和臀围。S则是英文small of the back ( 腰 ) 的缩写，代表腰，腰围。) 每一个女性都渴望有一副完满的身材，但什么样的身材才完美呢？你知道标准的三围是什么样的吗？如果不知道，那么你就看下面的公式，那就是你努力的目标！</p>
		</div>
		<div class="divs">
			<p class="fonts">请输入您的身高：</p>
			<p class="clear">　
				计算版本：<input name="version" value="1" type="radio"> 旧版本　
				<input name="version" value="0" type="radio" checked="checked"> 新版本　
				性别：<input name="sex" value="1" type="radio"> 男　
				<input name="sex" value="0" type="radio" checked="checked"> 女　
				身高：<input class="form-text" name="height" size="6" type="text" onkeyup="value=value.replace(/[^\d.]/g,'') " /> CM(厘米)　
				<input type="submit" value="计算" class="js submit" />
			</p>
			<p class="clear">　
				<span id="bwh" class="stress"></span>　
			</p>
		</div>
		
		<p class="stress mt1">资料参考：</p>
		<p class="liheight">&#8226; 除了计算三围标准，你也可以使用<a href="<?php echo U('/list-bmi');?>">BMI 身体质量指数</a> 和 <a href="<?php echo U('/list-sw');?>">标准体重计算</a></p>
		<p class="liheight">
		　　每一个女性都渴望有一副完满的身材，但什么样的身材才完美呢？你知道标准的三围是什么样的吗？如果不知道，那么你就看下面的公式，那就是你努力的目标！
		</p>
		<p class="liheight">
		　　胸围 = 身高 * 0.51 ( 如:身高160cm的标准胸围 = 160cm * 0.51 = 81.6cm )
		</p>
		<p class="liheight">
		　　腰围 = 身高 * 0.34 ( 如:身高160cm的标准腰围 = 160cm * 0.34 = 54.4cm )
		</p>
		<p class="liheight">
		　　臀围 = 身高 * 0.542 ( 如:身高160cm的标准臀围 = 160cm * 0.542 = 86.72cm )
		</p>
		<p class="liheight">
		　　美丽的身体人人都有，只是巧妙之处各有不同，所以所谓的标准身材并不是只强调高与瘦。简单地说，如果从头到脚是匀称的，不管多高，只要头部太大，就会造成整体上的不谐调；而如果你的身高只有150cm，但脸形大小合适、身材匀称，那就算是个比例标准的模特哦！</p>
		<p class="stress liheight">
		　　依据下列步骤可以检测自己的身材。
		</p>
		<p class="stress liheight">
		　　一、身材比例的计算步骤
		</p>
		<p class="liheight">
		　　1． 判断脸形、头长：把头发全部往后梳起，抓起马尾，让脸部的轮廓线露出来，判定自己的脸形，再拿尺子由头顶到下巴(以光头的比例为准)测量一下脸的长度。
		</p>
		<p class="liheight">
		　　2． 测量身高：量身高，要把头发压平、身体挺直才够准确。
		</p>
		<p class="liheight">
		　　3． 计算比例：身高 / 头长 = 头身(这就是所谓的身高比例标准)。
		</p>
		<p class="liheight">
		　　例如：你身高159cm，头长20cm，那么159(身高)/ 20(头长)=7.59(头身)，四舍五入后，你可是标准的8头身哦！
		</p>
		<p class="stress liheight">
		　　二、 标准三围的参考尺寸
		</p>
		<p class="stress liheight">
		　　标准三围的尺寸可参考下表：
		</p>
		<p class="liheight">
		　　身高 170cm 164cm 158cm 152cm
		</p>
		<p class="liheight">
		　　胸围 88cm 86cm 84cm 80cm
		</p>
		<p class="liheight">
		　　腰围 68cm 66cm 64cm 62cm
		</p>
		<p class="liheight">
		　　臀围 94cm 90cm 86cm 82cm
		</p>
		<p class="liheight">
		　　(注：1英寸=2.54cm)
		</p>
		<p class="stress liheight">
		　　三、新时尚公式
		</p>
		<p class="liheight">
		　　<a href="<?php echo U('/list-sw');?>">标准体重</a>
		</p>
		<p class="liheight">
		　　标准胸围(cm)= 身高(cm)* 0.53
		</p>
		<p class="liheight">
		　　标准腰围(cm)= 身高(cm)* 0.37
		</p>
		<p class="liheight">
		　　标准臀围(cm)= 身高(cm)* 0.54
		</p>
		<p class="liheight">
		　　标准大腿长(cm)= 身高(cm)* 0.3
		</p>
		<p class="liheight">
		　　标准小腿长(cm)= 身高(cm)* 0.26
		</p>
		<p class="stress liheight">
		　　四、男性标准三围计算方法
		</p>
		<p class="liheight">
		　　胸围 = 身高 * 0.48  ( 如:身高175cm的标准胸围 = 175cm * 0.48 = 84cm )
		</p> 
		<p class = "liheight">
		　　腰围 = 身高 * 0.47  ( 如:身高175cm的标准腰围 = 175cm * 0.47 = 82.25cm )
		</p>
		<p class = "liheight"> 
		　　臀围 = 身高 * 0.51( 如:身高175cm的标准臀围 = 175cm * 0.51 = 89.25cm ) 
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