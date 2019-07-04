<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>瘦身原理,<?php echo (C("WEB_NAME")); ?></title>
<meta name="keywords" content="瘦身原理,<?php echo (C("WEB_KEYWORD")); ?>" />
<meta name="description" content="瘦身原理,<?php echo (C("WEB_DESCRIPTION")); ?>..." />
<link href="__PUBLIC__/Slim/Css/sunny.css" type="text/css" rel="stylesheet" />
<link href="__PUBLIC__/Css/nssc.css" type="text/css" rel="stylesheet" />
<script src="__PUBLIC__/Js/iepng.js" type="text/javascript"></script>
<script type="text/javascript">
	document.createElement('section');
	document.createElement('article');
	document.createElement('figure');
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
	<div class="location"><a href="<?php echo (C("WEB_ADDRESS")); ?>">诗诗瘦身网</a> >> 瘦身原理</div> 
	<section class="main" id="nssc">
		<div id="content" class="principle">
		  <div class="banner justify">
			<div class="principle-show">
			  <h2 class="module-title"><span>NSSC减重公式</span></h2>
			  <dl>
				<dt><span class="red">NSSC</span> = <span class="red">N</span>utrition + <span class="red">S</span>elf + <span class="red">S</span>ports + <span class="red">C</span>alorise</dt>
				<dd>健康瘦身 = 营　养 + 自　身 + 运　动 + 热　量</dd>
			  </dl>
			  <p>NSSC减肥法是诗诗提出的一种科学、健康、持续有效的减肥方法。目前，由于能量摄入超过能量消耗而引起肥胖的人占肥胖人群的95%以上，而能量过剩通常是由于生活习惯不佳造成的。所以NSSC主张，通过改善自己不良的生活习惯来促使能量消耗大于摄入，最终实现体重下降。</p>
			</div>
			<p>饮食习惯决定每日的热量摄入和营养补充，也就是N与C两部分。好的饮食习惯，应该是让饮食既能够满足身体日常营养所需，还能轻松把热量控制
		在合理范围内。运动习惯，也就是“Sports”，好的运动习惯，不仅能帮助你很好地瘦下来，更能让你的健康受益无穷。最后就是情绪调节，自我管理，也就是“Self”。
		面对减肥这项女人的终身事业，我们更需要用积极正确地心态来看待这个事情。</p>
		  </div>
		  <div class="margin40"><img src="__PUBLIC__/Img/intro-illus1.jpg" alt="不吃药、不手术、不节食"></div>
		  <h2 class="module-title"><span id="title2">热量预算体系</span></h2>
		  <article class="row margin20 justify">
			<div class="span12">
			  <section>
				<p>超重和肥胖的根本原因就是能量摄入多于能量消耗。因此，减重的本质就是饮食供给的能量必须低于机体实际消耗的能量，从而形成能量的
		负平衡，促进身体代谢过多的能量，直至体重恢复到正常水平。诗诗以美国USDA的权威研究和结论为基础，结合中国减肥人群的特点和需求，独家研发了<span class="red">热量预算体系</span>。</p>
				<p>最佳热量预算是NSSC为您制定的每日饮食摄入的最佳热量值。减重过程中，只要参考相应的食谱和运动计划，就能保证体内达到能量负平衡，从而顺利实现每周减去1~2斤的健康减肥目标。</p>
			  </section>
			</div>
			<div class="span12">
			  <section>
				<p>最佳热量预算需要了解您的身高、体重、年龄、性别以及近期减肥经历，再考虑您日常活动和我们推荐的运动消耗热量总和以及诗诗减重因子的影响，通过科学公式的计算后就得到属于您个人的最佳热量预算。</p>
				<ul>
				  <li>　　每个人的最佳热量预算都不一样，所以，对别人有效的减肥计划对你未必合适。</li>
				  <li>　　在减肥过程中，热量预算会随身体变化而变化，所以如果是一成不变的减肥计划就会渐渐失效。</li>
				</ul>
			  </section>
			</div>
		  </article>
		
		  <h2 class="module-title"><span>与其他减肥方法的比较</span></h2>
		
		  <div class="compare">
			<div class="row">
			  <div class="span12">
				<div class="our">
				  <h3>NSSC减肥方法</h3>
				  <dl>
					<dt>安全健康</dt>
					<dd>合理饮食和有效运动相结合，注重营养，健康安全不伤害身体</dd>
					<dt>效果长久</dt>
					<dd>真正学会如何健康减肥，将健康的习惯融入日常生活，效果长久，不易反弹</dd>
					<dt>因人而异</dt>
					<dd>每个人可以根据自己的生活、习惯，选择不同的食物和运动，易执行，能坚持</dd>
					<dt>内容全面</dt>
					<dd>强调从饮食、运动、生活习惯等方面，进行全面调整</dd>
				  </dl>
				</div>
			  </div>
		
			  <div class="span12">
				<div class="other">
				  <h3>一般减肥方法</h3>
				  <dl>
					<dt>不健康</dt>
					<dd>难以保证不伤身体，容易引起暴食、脱发、月经不规律等情况</dd>
					<dt>易反弹</dt>
					<dd>过度追求快速减轻体重，难以形成易瘦体质；效果难以保持，容易反弹</dd>
					<dt>千篇一律</dt>
					<dd>没有考虑不同人的不同情况，千人一方，不具针对性，难以坚持且效果不佳</dd>
					<dt>片面</dt>
					<dd>片面强调饮食或药物、手术的作用</dd>
				  </dl>
				</div>
			  </div>
			</div>
		  </div>
		</div>
	</section>
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