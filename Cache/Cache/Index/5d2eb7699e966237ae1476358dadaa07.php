<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>BMI身体质量指数,<?php echo (C("WEB_NAME")); ?></title>
<meta name="keywords" content="BMI身体质量指数,身体质量指数,bmi" />
<meta name="description" content="BMI身体质量指数,BMI [Body Mass Index] 即BMI指数，也叫身体质量指数，是衡量是否肥胖和标准体重的重要指标。适用范围：18至65岁的人士。儿童、发育中的青少年、孕妇、乳母、老人及身型健硕的运动员除外。世界卫生组织认为BMI指数保持在 22 左右是比较理想的..." />
<link href="__PUBLIC__/Slim/Css/sunny.css" rel="stylesheet" media="screen" type="text/css" />
<script src="__PUBLIC__/Js/iepng.js" type="text/javascript"></script>
<script src="__PUBLIC__/Js/jquery-1.7.2.min.js" type="text/javascript"></script>
<script>
$(function(){
	$( '.submit' ).click( function () {
		var height = $( 'input[name=height]' ).val();
		var weight = $( 'input[name=weight]' ).val();
		if(height==''){
			alert('请填写身高!');
			return;
		}
		if(weight==''){
			alert('请填写体重!');
			return;
		}
		$('#bmi').load('<?php echo U("/list-bmis");?>?height='+height+'&weight='+weight,function() {
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
	<div class="location border_bottom"><a href="<?php echo (C("WEB_ADDRESS")); ?>">诗诗瘦身网</a> >> BMI身体质量指数</div> 
	<div id="list_left">
		<p class="guidetitle"><span>BMI身体质量指数</span></p>
		<p class="guidecont">
BMI [Body Mass Index] 即BMI指数，也叫身体质量指数，是衡量是否肥胖和标准体重的重要指标。适用范围：18至65岁的人士。儿童、发育中的青少年、孕妇、乳母、老人及身型健硕的运动员除外。世界卫生组织认为BMI指数保持在<font color="#6633FF"><strong> 22 </strong></font>左右是比较理想的。<font color="red"><strong>特别要强调的是</strong>：</font>不是每个人都适用BMI 的，如果你属于有以下的情况，那么BMI指数对你不适用：1. 未满18岁。2. 是运动员。3. 正在做重量训练。4. 怀孕或哺乳中。5. 身体虚弱或久坐不动的老人。 
		</p>
		<div class="divs">
			<p class="fonts">请输入您的身高和体重：</p>
			<p>
			  身高：<input class="form-text" onkeyup="value=value.replace(/[^\d.]/g,'') " name="height" size="6" type="text" value="" /> CM（厘米）<span class="gap"></span>
			  体重：<input class="form-text" onkeyup="value=value.replace(/[^\d.]/g,'') " name="weight" size="6" type="text" value="" /> KG（1KG=2斤）<span class="gap"></span>
			  <input type="submit" value="计算" class="js submit" /><span class="gap"></span><span id="bmi" class="stress"></span>
			</p>
		</div>
		<table cellpadding="0" cellspacing="0"  class="table">
			<tr class="thead">
			  <th colspan="4">成年人身体质量指数</th>
			</tr>
			<tr>
			  <td width="25%"><b>轻体重BMI</b></td>
			  <td width="25%"><b>健康体重BMI</b></td>
			  <td width="25%"><b>超重BMI</b></td> 
			  <td width="25%"><b>肥胖BMI</b></td>
			</tr>
			<tr>
			  <td>BMI<18.5</td>
			  <td>18.5≤BMI<24</td>
			  <td>24≤BMI<28</td>
			  <td>28≤BMI</td>
			</tr>
		</table>
		<p class="stress">资料来源：</p>
		<p class="liheight">&#8226; 《中国居民膳食指南》（2007）P72——中国营养学会</p>
		<p class="liheight">&#8226; 《中国成年人超重和肥胖症预防控制指南》（2003年）卫生部疾病控制司</p>
		<table cellpadding="0" cellspacing="0"  class="table">
			<tr class="thead">
			  <th colspan="4">7~17岁儿童青少年超重肥胖判断标准（BMI切点，kg/m2）</th>
			</tr>
			<tr>
			  <td width="15%" class="center"><b>性别</b></td>
			  <td width="15%"><b>年龄</b></td>
			  <td width="35%"><b>超重</b></td>
			  <td width="35%"><b>肥胖</b></td>
			</tr>
			<tr>
			  <td rowspan="11" class="center"><b>女</b></td>
			  <td>7</td>
			  <td>18.9&gt;BMI&gt;=17.2</td>
			  <td>BMI&gt;=18.9</td>
			</tr>
			<tr>
			  <td>8</td>
			  <td>19.9&gt;BMI&gt;=18.1</td>
			  <td>BMI&gt;=19.9</td>
			</tr>
			<tr>
			  <td>9</td>
			  <td>21.0&gt;BMI&gt;=19.0</td>
			  <td>BMI&gt;=21.0</td>
			</tr>
			<tr>
			  <td>10</td>
			  <td>22.1&gt;BMI&gt;=20.0</td>
			  <td>BMI&gt;=22.1</td>
			</tr>
			<tr>
			  <td>11</td>
			  <td>23.3&gt;BMI&gt;=21.1</td>
			  <td>BMI&gt;=23.3</td>
			</tr>
			<tr>
			  <td>12</td>
			  <td>24.5&gt;BMI&gt;=21.9</td>
			  <td>BMI&gt;=24.5</td>
			</tr>
			<tr>
			  <td>13</td>
			  <td>25.6&gt;BMI&gt;=22.6</td>
			  <td>BMI&gt;=25.6</td>
			</tr>
			<tr>
			  <td>14</td>
			  <td>26.3&gt;BMI&gt;=23.0</td>
			  <td>BMI&gt;=26.3</td>
			</tr>
			<tr>
			  <td>15</td>
			  <td>26.9&gt;BMI&gt;=23.4</td>
			  <td>BMI&gt;=26.9</td>
			</tr>
			<tr>
			  <td>16</td>
			  <td>27.4&gt;BMI&gt;=23.7</td>
			  <td>BMI&gt;=27.4</td>
			</tr>
			<tr>
			  <td>17</td>
			  <td>27.7&gt;BMI&gt;=23.8</td>
			  <td>BMI&gt;=27.7</td>
			</tr>
			<tr>
			  <td rowspan="11" class="center"><b>男</b></td>
			  <td>7</td>
			  <td>19.2&gt;BMI&gt;=17.4</td>
			  <td>BMI&gt;=19.2</td>
			</tr>
			<tr>
			  <td>8</td>
			  <td>20.3&gt;BMI&gt;=18.1</td>
			  <td>BMI&gt;=20.3</td>
			</tr>
			<tr>
			  <td>9</td>
			  <td>21.4&gt;BMI&gt;=18.9</td>
			  <td>BMI&gt;=21.4</td>
			</tr>
			<tr>
			  <td>10</td>
			  <td>22.5&gt;BMI&gt;=19.6</td>
			  <td>BMI&gt;=22.5</td>
			</tr>
			<tr>
			  <td>11</td>
			  <td>23.6&gt;BMI&gt;=20.3</td>
			  <td>BMI&gt;=23.6</td>
			</tr>
			<tr>
			  <td>12</td>
			  <td>24.7&gt;BMI&gt;=21.0</td>
			  <td>BMI&gt;=24.7</td>
			</tr>
			<tr>
			  <td>13</td>
			  <td>25.7&gt;BMI&gt;=21.9</td>
			  <td>BMI&gt;=25.7</td>
			</tr>
			<tr>
			  <td>14</td>
			  <td>26.4&gt;BMI&gt;=22.6</td>
			  <td>BMI&gt;=26.4</td>
			</tr>
			<tr>
			  <td>15</td>
			  <td>26.9&gt;BMI&gt;=23.1</td>
			  <td>BMI&gt;=26.9</td>
			</tr>
			<tr>
			  <td>16</td>
			  <td>27.4&gt;BMI&gt;=23.5</td>
			  <td>BMI&gt;=27.4</td>
			</tr>
			<tr>
			  <td>17</td>
			  <td>27.8&gt;BMI&gt;=23.8</td>
			  <td>BMI&gt;=27.8</td>
			</tr>
		</table>
		<p class="stress">资料来源：</p>
		<p class="liheight">&#8226; 《中国居民膳食指南》（2007）P71——中国营养学会</p> 
		<p class="liheight">&#8226; WGOC（中国肥胖工作组）</p>
		
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