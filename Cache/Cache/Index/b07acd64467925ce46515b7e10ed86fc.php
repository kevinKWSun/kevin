<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>瘦身课堂,<?php echo (C("WEB_NAME")); ?></title>
<meta name="keywords" content="<?php echo (C("WEB_KEYWORD")); ?>" />
<meta name="description" content="<?php echo (C("WEB_DESCRIPTION")); ?>..." />
<link href="__PUBLIC__/Slim/Css/sunny.css" rel="stylesheet" media="screen" type="text/css" />
<link href="__PUBLIC__/Css/carousel.css" rel="stylesheet" media="screen" type="text/css" />
<link href="__PUBLIC__/Css/courses.css" rel="stylesheet" media="screen" type="text/css" />
<script language='javascript' src="__PUBLIC__/Js/lib_lite.js"></script>
<script src="__PUBLIC__/Js/email.js" type="text/javascript"></script>
<script type="text/javascript">
	var mailUrl = "<?php echo U('/list-email','','');?>";
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
	<div class="location"><a href="<?php echo (C("WEB_ADDRESS")); ?>">诗诗瘦身网</a> >> 瘦身课堂</div> 
	<section id="nice_courses" style='padding-left:8px;'> 
	  <div id="content">
		<article> 
		  <div style="width: 950px;" class="carousel">
			<div style="height: 600px;" class="container">
			  <section rel="#page1" style="height: 600px; display: none; opacity: 0;" class="cover">
				<div align="center"><a href="#"><img src="__PUBLIC__/Img/cover.jpg"></a></div>
			  </section>
	
			  <section rel="#page2" style="height: 600px; display: none; left: -30px; opacity: 0;" class="catalog">
				<div class="title">目录</div>
				<div class="l-column">
				  <dl>
					<dd class="index" style="background:#d1c1b3;">1</dd>
					<dt><a href="#page12">NSSC减肥法综述</a></dt>
					<dd><a href="#">1 NSSC减肥原理</a></dd>
					<dd><a href="#">2 NSSC与健康</a></dd>
					<dd><a href="#">3 NSSC与美丽</a></dd>
				  </dl>
	
				  <dl>
					<dd class="index" style="background:#89c584;">2</dd>
					<dt><a href="#">NSSC减肥法之营养均衡(Nutrition)</a></dt>
					<dd><a href="#">1 营养均衡的重要性</a></dd>
					<dd><a href="#">2 怎样达到营养均衡</a></dd>
				  </dl>
	
				  <dl>
					<dd class="index" style="background:#ffcc66;">3</dd>
					<dt><a href="#">NSSC减肥法之自我管理(Self)</a></dt>
					<dd><a href="#">1 设定合理的目标</a></dd>
					<dd><a href="#">2 将减肥当成快乐的事</a></dd>
					<dd><a href="#">3 营造良好的减肥氛围</a></dd>
				  </dl>
	
				  
				</div>
				<div class="r-column">
				  <dl>
					<dd class="index" style="background:#66ccff;">4</dd>
					<dt><a href="#">NSSC减肥法之科学运动(Sports)</a></dt>
					<dd><a href="#">1 运动对减肥的好处</a></dd>
					<dd><a href="#">2 减肥时的运动安排</a></dd>
					<dd><a href="#">3 减肥时运动的注意事项</a></dd>
				  </dl>
				  <dl>
					<dd class="index" style="background:#ff80aa;">5</dd>
					<dt><a href="#">NSSC减肥法之热量控制(Calorie)</a></dt>
					<dd><a href="#">1 热量平衡原理</a></dd>
					<dd><a href="#">2 NSSC最佳热量预算</a></dd>
					<dd><a href="#">3 热量的摄取与消耗</a></dd>
				  </dl>
				</div>
			  </section>
	
			  <section rel="#page3" style="height: 600px; display: none; left: -30px; opacity: 0;">
				<div class="l-column">
				  <figure>
					<img src="__PUBLIC__/Img/1_003.png">
				  </figure>
				  <div class="hang-foot">
					<h2>NSSC减肥法综述</h2>
					<p class="clear-margin">NSSC减肥法是诗诗提出的一种科学、健康、持续绿色有效的减肥方法。目前，由于能量摄入超过能量消耗而引起肥胖的人占肥胖人群的95%以上，而能量过剩通常是由于生活习惯不佳造成的。所以NSSC主张，通过改善自己不良的生活习惯来促使能量消耗大于摄入，最终实现体重下降。</p>
				  </div>
				</div>
				<div class="r-column">
				  <h3>1 NSSC减肥原理</h3>
				  <p>NSSC减肥法公式：</p><p>
				  </p><div class="center media" style="height:75px;line-height:37px;padding:15px 0;background:#edfaff;">
					<p class="size20 clear-margin"><span  style="color:red;">NSSC</span> = <span  style="color:red;">N</span>utrition + <span  style="color:red;">S</span>elf + <span  style="color:red;">S</span>ports + <span style="color:red;">C</span>alorise</p>
					<p class="clear-margin">健康瘦身 = 营　养 + 自　身 + 运　动 + 热　量</p>
				  </div>
				  <p>我们认为，大部分的肥胖都是由于不良的生活习惯造成的，生活习惯包括饮食习惯、运动习惯、作息习惯、情绪调节等。</p>
				  <p>饮食习惯决定每日的热量摄入和营养补充，也就是N与C两部分。NSSC减肥法首先需要根据你的个人情况，计算出你的最佳热量预算<sup>[1]</sup>，确保每日饮食中摄入热量控制在健康减肥的最佳状态，同时设计合理的饮食结构，即我们所吃食物的搭配结构，保证身体营养摄入的均衡。好的饮食习惯，应该是让饮食既能够满足身体日常营养所需，还能轻松把热量控制在合理范围内。</p>
				  
				  <div class="note hang-foot">
					<p class="clear-margin">备注[1]：最佳热量预算会在课程中详细介绍。</p>
				  </div>
				</div>
			  </section>
	
			  <section rel="#page4" style="height: 600px; display: none; left: -30px; opacity: 0;">
				<div class="l-column">
				  <p>运动习惯，也就是“Sports”，很多人一听到可能就觉得很头大。但我们需要有规律的运动来消耗脂肪，同时身体也需要运动来维持身体肌肉量，稳定基础代谢率，促进脂肪燃烧。好的运动习惯，不仅能帮助你很好地瘦下来，更能让你的健康受益无穷。</p>
				  <p>最后就是情绪调节，自我管理，也就是“Self”。面对减肥这项女人的终身事业，我们更需要用积极正确地心态来看待这个事情。</p>
				  <p class="last-margin">NSSC减肥法中每一点的具体做法，我们在接下来几节课程中会详细介绍，所以要耐心把课程看完哦！</p>
	
				  <h3>2 NSSC与健康</h3>
				  <p>我们总在强调说，NSSC是一种健康地减肥方法，它的健康如何体现呢？让我们与一些市面上泛滥的减肥法来做比较你就明白了。</p>
				  <p>首先我们来说说大家最常用的“节食减肥法”。节食减肥法比较常见的有三日苹果餐、过午不食法，最明显的特征是少吃或不
	吃。节食减肥最大的问题是无法供给身体必须的热量和营养，想让马跑又不让马儿吃草，久而久之身体就会抗议，出现月经失调，甚至闭经、脱发等问题。另外，节
	食瘦下来之后再恢复正常饮食，是很容易导致报复性反弹的。</p>
				  
				  
				</div>
				<div class="r-column">
				  <figure style="height:300px;">
					<img src="__PUBLIC__/Img/2_004.jpg">
				  </figure>
				  <p>再说说减肥药减肥，市面上比较常见的减肥药，一种是抑制食欲的，一种是大量排泄的。抑制食欲的减肥药中通常含有神经抑
	制成分，若长期服用，可能导致血管和心脏异常，部分还会出现消化系统受损。而让我们排泄的药物，可能短期内会让我们的体重下降，但这多是因为生理性水分的
	流失，过后体重还是会慢慢恢复。</p>
				  <p>还有比较常见的是运动减肥法，也就是不控制饮食，只是一味地大量运动。运动量过大不仅会让身体过于疲劳，还会导致经期紊乱、出现运动性贫血、引发运动损伤等问题。同时，如果饮食不</p>
	
				  
				</div>
			  </section>
	
			  <section rel="#page5" style="height: 600px; display: none; left: -30px; opacity: 0;">
				<div class="l-column">
				  <p>做控制，哪怕不停地运动，很多人还是会出现饮食摄入热量高于运动消耗热量，结果怎么都瘦不下来的问题。</p>
				  <p class="last-margin">而NSSC减肥法，是在保证身体必须的热量和营养的前提下，通过科学的运动来消耗热量，从而达到瘦身的目的，不会对身体健康造成任何影响。将健康的习惯融入日常生活，养成了好的生活习惯，健康地瘦下来，你还怕反弹吗？</p>
				  <h3>3 NSSC与美丽</h3>
				  <figure>
					<img src="__PUBLIC__/Img/3_002.jpg">
				  </figure>
				</div>
				<div class="r-column">
				  <p>NSSC减肥法作为一种健康可持续的减肥方法，不仅仅能带给你下降的体重，更会让你在无意识间变得越来越美，这些都得益于NSSC的健康。减肥过程中营养摄入不足，就会出现脸色差、掉发、皮肤松弛等问题，很多尝试过吃减肥药或者节食减肥的人，或多或少有过这种经历。</p>
				  <p>而如果我们用NSSC的方法来健康减肥，充足的营养不仅不会给身体造成损失，更能让我们神采奕奕，甚至皮肤都变得细
	腻。养成良好的运动习惯，会让身体变得紧实，不仅拥有迷人的身体曲线，还会让皮肤紧绷有弹性。这些都是作为女人由内而外的保养，连护肤品都不一定能让你变
	得如此之美。</p>
				  <p class="divide20">想变美的你还在等什么呢？赶紧开始你的NSSC健康减肥之旅吧！</p>
				  <div class="size20">
					<p><a href="#page6" class="goto">» 进入下一章</a></p>
				  </div>
				</div>
			  </section>
	
			  <section rel="#page6" style="height: 600px; display: none; left: -30px; opacity: 0;">
				<div class="l-column">
				  <figure>
					<img src="__PUBLIC__/Img/1.png">
				  </figure>
				  <div class="hang-foot">
					<h2>NSSC减肥法之营养均衡(Nutrition)</h2>
					<p class="clear-margin">营养均衡就是指：身体需要的营养 = 饮食摄入的营养。单从营养的角度看，如果我们摄入的营养比需要的多，那么就会营养过剩，最直接的后果就是身体变胖。而如果我们摄入的营养比需要少，则又会让我们营养不良，抵抗力下降。</p>
				  </div>
				</div>
				<div class="r-column">
				  <h3>1 营养均衡的重要性</h3>
				  <p>减肥期间，合理的饮食保证身体营养均衡很重要。很多以为减肥就是要不断地节制饮食，忽略了营养的重要性，导致虽然瘦了
	一圈，但是开始出现月经失调、脱发、皮肤变差、贫血等健康问题以及脾气暴躁的情绪问题；也有人因为严厉节食，缺乏减肥时身体所需的必要营养素，反而导致怎
	么都减不下来。</p>
				  <p>具体的说，营养不均衡会给我们带来两方面的危害。</p>
				  <p>一是营养不良会导致身体健康出现问题，让原本就艰难的减肥事业雪上加霜。减肥的时候，我们往往容易心急，恨不得每天什
	么都不吃，尽快把身上的赘肉甩掉。然而过了一段时间，很多问题就会渐渐浮出水面了——减肥速度大幅变慢、一吃就会变胖、身体素质变差、免疫力变差、女士月
	经不调等等。这个时候，我们就不得不停下来先去改善健康问题，减肥更加变得遥遥无期。</p>
				  <p>二是如果饮食中缺少必要的营养素，会阻碍我们减肥的进程。热量的消耗，脂肪的分解，是在身体摄入的各种营养物质提供支
	援的基础下进行的。比如不吃肉类，那么身体就没有了足够的动物蛋白摄入，而在减肥过程中又需要蛋白质才能维持肌肉，否则就会导致肌肉分解，全身松垮，代谢
	率下降，我们身体的内分泌也</p>
	
				</div>
			  </section>
	
			  <section rel="#page7" style="height: 600px; display: none; left: -30px; opacity: 0;">
				<div class="l-column">
				  <p>会跟着出现问题。又或者不吃主食，主食中不仅富含膳食纤维还含有维生素B族，是有利于提升新陈代谢，促进身体代谢消耗的，所以饮食中维生素B族长期摄入不足，就会导致身体每天消耗的热量减少，不利于减肥。</p>
				  <p>所以我们必须要清楚减肥与营养并不冲突，减肥期间需要节制的，是多余的油脂与热量，并非杜绝所有的人体必需的营养。同时，从饮食上来说，减肥只需改善暴饮暴食的习惯，以及调整饮食的内容，而不是拒绝饮食，拒绝营养摄入。</p>
				  <figure>
					<img src="__PUBLIC__/Img/2_002.jpg">
				  </figure>
				</div>
				<div class="r-column">
				  <h3>2 怎样达到营养均衡</h3>
				  <figure>
					<img src="__PUBLIC__/Img/3.jpg">
				  </figure>
				  <p>我们要怎么做才能达到营养均衡呢？也有很多资料告诉大家每天补充多少蛋白质，多少维生素。但是看完这样的资料，我们通常都只有一个很大体的概念，对于具体的做法还是很模棱两可，而且就算很努力地去照着做，好像对自己的减肥也没有很实际的帮助。</p>
				  
				</div>
			  </section>
			  <section rel="#page8" style="height: 600px; display: none; left: -30px; opacity: 0;">
				<div class="l-column">
				  
				  <p>这是因为每个人的情况不同，在减肥时所需要的营养搭配也会很不一样。从每个人不同的情况得到各自的健康饮食搭配，是一个非常严谨复杂的过程，这个过程可以用下图表示：</p>
				  <figure>
					<img src="__PUBLIC__/Img/4.png">
				  </figure>
				  <p class="size12">注：最佳热量预算是减肥时每日饮食摄入的最佳热量值，具体阐述详见下一章。</p>
				  <p class="divide20">因此，我们需要有专业的瘦身顾问来根据个人的情况，定制健康减肥的饮食方案。我们建议选择NSSC瘦身服务，其中顾问为我们定制的饮食方案，会明确告诉我们每餐的饮食结构是怎样的，也就是我们每天需要的谷物、蔬菜、水果、奶制品、肉类及豆类等各是几份，从而在控制热量摄入的同时保证每天的营养摄入。</p>
	
				  <div class="size20">
					<p><a href="#page9" class="goto">» 进入下一章</a></p>
				  </div>
				  
				</div>
				<div class="r-column">
				  
				</div>
			  </section>
	
			  <section rel="#page9" style="height: 600px; display: none; left: -30px; opacity: 0;">
				<div class="l-column">
				  <figure>
					<img src="__PUBLIC__/Img/1_005.png">
				  </figure>
				  <div class="hang-foot">
					<h2>NSSC减肥法之自我管理(Self)</h2>
					<p class="clear-margin">对于瘦身者来说，正确的减肥方法和理念固然重要，但在减肥的过程中会遇到各种各样的情况和阶段，不同阶段该用什么样的心态面对，如何调适自己的心理状况，如何胜利跨越减肥中的各种障碍最后取得成功等，选择正确的心理干预对能否持续减肥有重要的意义。</p>
				  </div>
				</div>
				<div class="r-column">
				  <h3>1 设定合理的目标</h3>
				  <p>给自己设置一个不可能完成的任务，只会增加挫败感，而我们需要的是自信和动力。</p>
				  <p>贪婪永远是人性难以攻克的弱点，在减肥中的我们也是如此。我们的目光总会被各式各样诱人的快速减肥法吸引，为的就是那个一周减五斤，甚至是十斤的美梦。这也是为什么我们总觉得减肥很难成功的原因之一，因为那简直是让你过非人的生活。</p>
				  <p>为了让你对减肥不再失去信心，也不再始乱终弃，你需要给自己设定一个合理的减肥目标。</p>
				  <p>从身体健康角度来看，首先要将我们的体重控制在健康范围内，也就是说，需要将身体质量指数BMI控制在24以下。接下
	来，我们可以追求适合我们身高的标准体重，通常BMI在19～20的范围内，这时候我们的体型看起来应该是非常匀称的。最最重要的一点是，我们需要把体重
	保持在健康体重下限以上。体重长期低于健康体重，很容易出现内分泌失调、闭经等现象。</p>
				  <p>确定了斤数目标，第二步要学会设置速度目标。健康的减肥速度是每周1kg以内，配合科学的减肥方法能使我们减少脂肪的比例</p>
	
				</div>
			  </section>
	
			  <section rel="#page10" style="height: 600px; display: none; left: -30px; opacity: 0;">
				<div class="l-column">
				  <p class="last-margin">最大化。减肥速度若达一周2斤以上，则不可避免的减掉了较多的肌肉。只有少数特别情况例外，比如超重和肥胖人群在减肥时，初期的瘦身速度可能或必须超过每周2斤；还有减肥的最初3周，减肥效果可以略高于每周2斤。</p>
				  
				  <h3>2 将减肥当成快乐的事</h3>
				  <figure>
					<img src="__PUBLIC__/Img/2_005.jpg">
				  </figure>
				  <p>很多人把节食等同于减肥，不健康的问题我们也不多说了，但是这样的减肥真心给我们带来的只是忍耐的痛苦，很难坚持。健康</p>
				</div>
				<div class="r-column">
				  <p>减肥，应该是让我们原本混乱的生活状态回到正轨，将减肥作为一件让我们更加健康、更加美丽的事，也是一种让人身心愉悦的事。</p>
				  <p>科学膳食让我们远离营养不良和营养过剩。均衡的饮食结构、三餐规律八分饱的饮食习惯让我们“面色红润有光泽”，“白里透红”、“散发由内而外的光彩”。</p>
				  <p>适量运动让我们提高身体免疫力，远离慢性病，稳定肌肉量和激素分泌水平，延缓衰老。规律的运动习惯让我们每天都精力充沛、“年轻无极限”，“腰不酸、腿不疼，一口气上六楼都不喘”。</p>
				  <p>这些都是为了减肥而吃得苦、受的罪吗？</p>
				  <p>所以别再给减肥套上枷锁，让我们快乐的改变，每天进步一点点，用心见证自己的美丽蜕变。这是件快乐的事情！</p>
				</div>
			  </section>
	
			  <section rel="#page11" style="height: 600px; display: none; left: -30px; opacity: 0;">
				<div class="l-column">
				  <h3>3 营造良好的减肥氛围</h3>
				  <p>《新英格兰医学杂志》(New England Journal of 
	Medicine)2007年7月下旬的一项研究发现，社交圈对于发胖的作用比遗传基因更甚 。许多社会团体已开始利用社会网络的力量来抵制肥胖 
	。在北卡罗来纳州吉尔福德郡，62%的居民都偏胖，今年春天当地卫生官员面向全郡开展了一项减肥运动──“吉尔福德郡市长挑战赛”。该活动将一些市民召集
	起来，争取在10周内每人瘦掉10磅。 </p>
				  <p>这些人在网上谈论交流，互相鼓励。10周后，150人总共减掉了1,450磅(约等于1315斤)。</p>
				  <p>上文的例子中我们可以看到，如果有一个积极向上的减肥社交圈对减肥是十分有帮助的。这个社交圈可以是像在诗诗网一样，
	找一群姐妹相互鼓励着减肥，也可以找能够指导监督你减肥的伙伴，比如专业的瘦身顾问，在减肥期间不断从专业角度为你提供指导和建议，可以让自己少走很多弯
	路。</p>
				  <p>请专业瘦身顾问陪你减肥，可以选择NSSC瘦身服务。</p>
				</div>
				<div class="r-column">
				  <div class="size20">
					<p><a href="#page12" class="goto">» 进入下一章</a></p>
				  </div>
				</div>
			  </section>
	
			  
	
			  <section rel="#page12" style="height: 600px; display: none; left: -30px; opacity: 0;">
				<div class="l-column">
				  <figure>
					<img src="__PUBLIC__/Img/1_004.png">
				  </figure>
				  <div class="hang-foot">
					<h2>NSSC减肥法之科学运动(Sports)</h2>
					<p class="clear-margin">“宁愿饿死，也不愿意累死。”很多人在减肥中如此选择，你也是这样想的吗？别再做梦啦！如果饿就能减肥，那世界上还会有胖子吗？如果饿就能想瘦大腿就瘦大腿，想瘦腰就瘦腰，那么模特们还会坚持运动吗？</p>  
				  </div>        
				</div>
				<div class="r-column">
				  <h3>1 运动对减肥的好处</h3>
				  <p>运动给减肥带来的效果，并不仅仅是我们表面看到的每小时消耗200或300大卡那么简单，在减肥中，运动的好处主要体现在三个方面。</p>
				  <p>首先，只有运动才能消耗大量的脂肪，单纯的节食只能导致肌肉和水分的流失，脂肪依然没有消失。</p>
				  <p>第二，运动的最大效果在于可以提高我们身体的代谢消耗。运动能够在一段时间内提升我们的新陈代谢水平，最多可以提高50%，通常这种效果可以维持48小时左右。这就是意味着，今天运动了，明天即使休息，也会比从不做运动时消耗的热量多。</p>
				  <p>第三，运动能够塑造玲珑的身材曲线。总有人说，我要瘦手臂，要瘦小腿，要使局部变瘦，最根本的方法就是运动。这是节食减肥药等方法不可能实现的效果。</p>
				  <p>另外，运动可以刺激大脑分泌一种名为内啡肽的物质，让人感到欢愉和满足。这对减肥时情绪的调节也是很有帮助的。</p>
				  
				</div>
			  </section>
	
			  <section rel="#page13" style="height: 600px; display: none; left: -30px; opacity: 0;">
				<div class="l-column">
				  <p>虽然说做运动太累，而且也比较花时间，但是仔细想想，运动至少可以让我们不用天天饿肚子减肥，至少不会在看到美食时只能流流口水。而且运动还有那么多好处，为了好身材，是不是累一点也值得呢？</p>
				  <figure>
					<img src="__PUBLIC__/Img/2_003.jpg">
				  </figure>
				</div>
				<div class="r-column">
				  <h3>2 减肥时的运动安排</h3>
				  <p>在减脂瘦身阶段，一般要以燃脂运动(有氧运动的一种)为主，同时以力量训练为辅。</p>
				  <p>有氧运动具有以下几个特点，即为燃脂运动：</p>
				  <ul>
					<li>运动所需的能量主要通过氧化体内的碳水化合物、脂肪和蛋白质来提供；</li>
					<li>运动时全身大多数的肌肉群(2／3)都参与；</li>
					<li>运动强度在低-中等之间，运动心率通常在最大运动心率的60-80%；</li>
					<li>运动有一定的节奏感，持续时间为30~60分钟或更长。</li>
				  </ul>
				  <p>常见的有氧运动项目中减肥效果较好的运动是：6~9km/h的跑步、动感单车、健身操等。</p>
				  <p>而减肥中力量训练的目的主要是增加肌肉含量，让更多的肌肉来消耗热量，达到提高减肥效果的目的。力量训练对于肌肉体积的维持以及力量的获得具有良好促进作用，不同的次数、组数以及负重都会产生不同的效果。</p>
				  
				  
				</div>
			  </section>
	
			  <section rel="#page14" style="height: 600px; display: block; left: 0px; opacity: 1;">
				<div class="l-column">
				  <p>看到这里，很多人会问，那减肥具体要做什么运动？运动时间到底要多久？多久做一次运动才能有效减肥呢？其实运动计划跟
	我们的饮食计划一样，是因人而异的。具体做什么运动，做多少才能减肥，是需要综合考虑自身的运动条件，身体的最佳摄入预算以及新陈代谢情况等的。这样制定
	的运动计划才能够确保可执行性和有效性。</p>
				  <p class="last-margin">如果自己无法很好地安排，那么同样我们推荐NSSC瘦身服务，请瘦身顾问来帮你。瘦身顾问为你制定的瘦身方案中，有专门的运动计划部分，并且会根据你瘦身过程中情况的不同进行调整，保证运动减脂的最佳效果。</p>
				  <h3>3 减肥时运动的注意事项</h3>
				  <p>我们说健康减肥必须运动，那么运动是不是越多越好，这样就能越来越瘦了呢？其实不然。</p>
				  <p>如果大量运动，心率长时间在燃脂心率或者以上，维持1.5小时以上，反而会给身体造成意想不到的伤害：</p>
				</div>
				<div class="r-column">
				  <ul>
					<li>运动过度，很容易适得其反，身体很难恢复，反而会造成疲劳累积，没有运动后的精力充沛的感觉，反而是疲劳、乏力，甚至对运动产生排斥感，事倍功半。</li>
					<li>燃脂运动期间，身体必须依赖充足的氧气，运动过量势必会造成细胞氧化过渡，促使身体过早老化，所以经常运动过量的人很可能会出现内分泌失调和抵抗力下降等情况。</li>
				  </ul>
				  <p>合理的运动习惯是：在运动开始的时候做好充分的热身；如慢跑2~3分钟，使身体有一个适应到运动状态的过程，如果没有
	充足热身，身体没有适应过程，那么之后的运动过程中，身体中就会产生较多的乳酸，肌肉还容易出现微损伤，就会出现酸痛的现象了。热身运动可以做几个拉伸动
	作，把肌肉拉伸开，就能延缓乳酸产生的时间，很好的预防运动损伤，还能提高运动质量和减肥的效果。另外，运动结束后，不要立刻停止，建议做少量整理活动，
	可以加速乳酸代谢。过多的乳酸不在一定时间内代谢完的话，还是会有较少的一部分转化为脂肪，影响运动的减肥效果。</p>
				<div class="size20">
					<p><a href="#page15" class="goto">» 进入下一章</a></p>
				  </div>
				</div>
			  </section>
	          <section rel="#page15" style="height: 600px; display: none; left: -30px; opacity: 0;">
				<div class="l-column">
				  <figure>
					<img src="__PUBLIC__/Img/1_002.png">
				  </figure>
				  <div class="hang-foot">
					<h2>NSSC减肥法之热量控制(Calorie)</h2>
					<p class="clear-margin">不管你是否有减肥经验，相信你都会知道这句减肥箴言：“减肥就是要少
	吃多动。”但就是这句话，让很多人在减肥中走了弯路，有的人拼命节食少吃，有的人疯狂运动，更多人则是明明觉得自己已经吃得很少也运动了，但是怎么都瘦不
	下来。这是因为减肥的根本，是让身体实现热量负平衡，不懂得合理控制热量，盲目少吃多动，当然会收效甚微啦！</p>
				  </div>
				</div>
				<div class="r-column">
				  <h3>1  热量平衡原理</h3>
				  <p>从长期来看，以下的法则无疑是正确的，这就是“热力学法则”——热量平衡原理。</p>
	
				  <div class="media" style="height:120px;padding:15px 30px;line-height:40px;background:#edfaff;">
					<p class="clear-margin">摄取热量 = 消耗热量 时，体重保持稳定；<br>摄取热量 > 消耗热量 时，体重处于上升趋势；<br><span style="color:red;">摄取热量 < 消耗热量 时，体重处于下降趋势。</span></p>
				  </div>
				  <p>热量的摄取主要通过进食。在过去的几十年中，它被严格的科学研究一次又一次地证实了。在成百上千次研究中，有一项发生
	于瑞士。54名肥胖者每日摄入的热量被严格控制在 
	1100大卡以内，并进行了不同食物和就餐时间的组合测试。实验表明，参与者的体重并没有因不同食物和就餐时间呈现差异，但是当食物热量减少到一定程度
	时，体重就减轻了。因此体重的减轻可以归因于所摄入能量的多少，而非能量的提供方式。所以，我们可以判断，当我们吃的食物热量减少到比消耗的热量小时，体
	重就会下降。
				  </p>
				</div>
			  </section>
	
			  <section rel="#page16" style="height: 600px; display: none; left: -30px; opacity: 0;">
				<div class="l-column">
				  <p>从另一方面来说，当我们增加消耗时，也会使体重下降。消耗的热量主要是由三部分组成：基础代谢率、身体活动总消耗、食物热效应。另外，其他身体的能量消耗，如御寒的热量等，也是身体热量消耗的方式，但是消耗的热量并不多。所以可以近似的认为，对于普通成年人来说：</p>
				  
				  <div class="media center" style="padding:15px 0;line-height:40px;background:#edfaff;">
					<p class="clear-margin"><span class="red1">消耗热量 = 基础代谢 + 身体活动总消耗 + 食物热效应</span><sup>[1]</sup></p>
				  </div>
				  <p class="last-margin">接下来，就具体为你讲述应该如何实现身体热量负平衡。</p>
				  <h3>2 NSSC最佳热量预算</h3>
				  <p>NSSC最佳热量预算是减肥时每日饮食摄入的最佳热量值，由NSSC瘦身顾问组以美国USDA的权威研究和结论为基
	础，结合中国减肥人群的特点和需求，独家研发而来。依照最佳热量预算控制饮食热量的摄入，配合合理的运动计划，就能够有效实现热量负平衡，最终达到减肥的
	目的。</p>
				  <div class="note hang-foot">
					<p class="clear-margin">备注[1]：此热量摄取/消耗公式适合于一般成人。怀孕期、哺乳妇女、成长期儿童、处于病期的病人等会消耗多余的热量，需要摄取更多的热量才能达到热量平衡。</p>
				  </div>
				</div>
				<div class="r-column">
				  <p>最佳热量预算需要了解您的身高、体重、年龄、性别以及近期减肥经历，综合考虑人体的基础营养所需(为了避免影响健康、避免节食的风险)、日常活动的消耗、新陈代谢等身体情况，以及能够帮助逐步瘦身的运动量来制定的。 </p>
				  <p>因此，每个人的最佳热量预算都不一样，别人能瘦的饮食摄入量并不一定你能瘦，这也是为什么尝试别人能有效果的减肥食谱，自己却怎么做都瘦不下来的原因。</p>
				  <p>另外，在减肥过程中，最佳热量预算是会随身体变化而变化的。这也很容易理解，体重每降到一个阶段，身体的各项情况都会
	发生变化，需要调整饮食摄入值才能够确保身体继续实现热量负平衡。所以一个有效的减肥方法，是需要根据你的身体情况不断调整优化的。看到这里，如果你也想
	请NSSC瘦身顾问为你制定最佳热量预算的话，就可以去了解下NSSC瘦身服务。</p>
				</div>
			  </section>
	
			  <section rel="#page17" style="height: 600px; display: none; left: -30px; opacity: 0;">
				<div class="l-column">
				  <h3>3 热量的摄取与消耗</h3>
				  <h4>1)身体热量的摄取</h4>
				  <p>基本上可以近似认为，我们所吃的食物热量就是身体摄取的热量。当然，这其中要扣除掉身体没有办法吸收的那一部分，这对每个人来说是不一样的，因为每个人的吸收能力不同。</p>
				  <p>其中蛋白质、脂肪和碳水化合物，是饮食中热量的绝大部分来源，因此在减肥时尤其需要注意适量摄入比例。在这里我们需要强调“适量”摄入，并不是说要为了减肥一味少吃，营养素摄取过少不仅会对身体健康造成影响，而且很可能适得其反不利于减肥。</p>
				  <p>要减肥，管住嘴是一大重点。因此我们建议在保证健康的前提下，在日常饮食中做到以下几点： </p>
				  <figure>
					<img src="__PUBLIC__/Img/2.jpg">
				  </figure>
				</div>
				<div class="r-column">
				  <ul>
					<li>减少热量的摄取应在保证营养需求的基础上选择热量低的食物，例如：减少油炸、烘焙类食物，以馒头代替面包，以开水代替含糖饮料。</li>
					<li>广泛摄取各种食物，避免因贪食而增加饮食，口味要清淡，过多的盐份会使水份滞留在身体内，引发水肿。避免酒类饮料和加糖饮料。</li>
					<li>增加饮食中的纤维量，可获充分的饱足感，减轻因为吃不饱而大量进食导致发胖的情况。</li>
					<li>每人每天热量总摄取量需要保证基础代谢率<sup>[1]</sup>，一般不宜低于自身基础代谢。</li>
				  </ul>
				  <h4>2)身体热量的消耗</h4>
				  <p>在”热量平衡原理“这一节中，我们已经提到了热量消耗的公式：</p>
				  <div class="media center" style="padding:15px 0;line-height:40px;background:#edfaff;">
					<p class="clear-margin"><span class="red1">消耗热量 = 基础代谢 + 身体活动总消耗 + 食物热效应</span></p>
				  </div>
				  <div class="note hang-foot">
					<p class="clear-margin">备注[1]：基础代谢率就是指人体处于基础代谢状态下，每小时每平方米表体积(或每千克体重)能量消耗。我们将在下文中详细介绍。</p>
				  </div>
				</div>
			  </section>
	
			  <section rel="#page18" style="height: 600px; display: none; left: -30px; opacity: 0;">
				<div class="l-column">
				  <p>下面我们对热量消耗的几个部分，来作具体的讲解。</p>
				  <p class="stress">基础代谢</p>
				  <p>基础代谢是指维持生命最低能量消耗。即人体在安静和恒温条件下，为18℃~25℃时，禁食12h后，静卧、放松且清醒时能量消耗。占约70％人体总热量的消耗。此时能量仅用于维持体温和呼吸、血液循环及其他器官生理需要。基础代谢量是人体消耗热量</p>
				  <p>最多的一项，所以它在很大程度上会影响减肥的速度。如果基础代谢提升，则身体自身消耗的热量不断增加，就能促使身体燃烧多余的脂肪，带来显著的减肥效果。</p>
				  <p>对于基础代谢的提高，能通过后天努力来改善的部分只有肌肉组织。基础代谢与肌肉组织成正比关系，因此减肥期间，需特别重视身体肌肉组织的维持，通过运动来增加肌肉组织的量，避免采用节食等不健康减肥方式造成身体肌肉的流失<sup>[1]</sup>，导致基础代谢下降，反而不利于减肥。</p>
				  <div class="note hang-foot">
					<p class="clear-margin">备注[1]：节食的时候会使血液中的糖不够，进而分解肌肉以提供能量，所以会使肌肉流失，而肌肉在短期内是不会迅速增长的。另外，节食的时候往往是低碳水化合物摄入，蛋白质不充分，如果不及时补充蛋白质，会使肌肉流失得不到补充。</p>
				  </div>
				  
				  
				</div>
				<div class="r-column">
				  <p class="stress">身体活动总消耗量</p>
				  <p>身体总活动量包括身体日常活动消耗和运动额外消耗。日常活动消耗是说人体正常需要进行的活动，比如吃饭、走路等。每个人日常活动不同，消耗也不同；体力劳动者比脑力劳动者消耗更多的热量。</p>
				  <p>这里我们重点要来讲讲运动额外消耗。与我们的一般认知不同的是，运动的消耗不仅仅是它直接消耗的热量。事实上，运动的消耗包括三大部分：</p>
				  <p>首先，运动的进行会直接消耗热量。通常进行有氧运动30分钟以上，身体就会开始大量地分解脂肪为运动供能。</p>
				  <p>其次，运动能够提升新陈代谢消耗。运动最多可提升50%的新陈代谢消耗，运动能把氧气带到全身各部位，并通过对心肺的作用在短期内增加身体的新陈代谢，并可持续作用一天的时间。</p>
				  <p>另外，长期持续的运动带来基础代谢的提高，这一点我们已经在上文中提到过。</p>
				  <p>所以你完全不必为每天运动30分钟消耗的那一点热量而沮丧，放弃运动而投向节食减肥的怀抱了。相反，你可能还应该适当增加</p>
				  
				</div>
			  </section>
	
			  <section rel="#page19" style="height: 600px; display: none; left: -30px; opacity: 0;">
				<div class="l-column">
				  <p>运动时间(比如增加到40-60分钟)，它会给你带来意想不到的好处。</p>
				  <p class="stress">食物热效应</p>
				  <p>食物热效应是指，进食后体内代谢加快，用于消化食物、吸收、运送、储存以及代谢利用营养素所消耗的热量。一般认为它的消耗量约为食物摄取热量的10%。即如果有500大卡的热量需求，需要吃550大卡的食物；或者进食500大卡，通过食物热效应还剩余450大卡。</p>
				  <p class="divide20">运动可促进肠胃消化功能，而不当的饮食会减弱消化功能，所以减肥的时候，要提高这部分的效果，就需合理饮食，适当运动。</p>
				</div>
				<div class="r-column">
				</div>
			  </section>
			  <section rel="#page20" style="height: 600px; display: none; left: 30px; opacity: 0;">
				<div class="l-columns">
				  <p class="size18" align="center"><font color="red">谢谢惠顾,真心希望对您有所帮助！</font></p>
				  <div class="email-panel">
					<div>
					  <p class="size18">留下您的邮箱，我们会发送更多瘦身知识分享给您！</p>
						<p class="textbox"><input name="mail" type="text" placeholder="请输入邮箱名称..." /></p>
						<p style="text-align:center;">
						<input value="提交" type="submit" class="mails" />
						</p>              
					</div>
				  </div>
				</div>
			  </section>
			</div>
			<div style="height: 600px;" class="navpanel">
			  <div>
				<dl>
				  <dt><a href="#page12">NSSC减肥法综述</a></dt>
				  <dd><a href="#">1 NSSC减肥原理</a></dd>
				  <dd><a href="#">2 NSSC与健康</a></dd>
				  <dd><a href="#">3 NSSC与美丽</a></dd>
				</dl>
	
				<dl>
				  <dt><a href="#">NSSC减肥法之营养均衡(Nutrition)</a></dt>
				  <dd><a href="#">1 营养均衡的重要性</a></dd>
				  <dd><a href="#">2 怎样达到营养均衡</a></dd>
				</dl>
	
				<dl>
				  <dt><a href="#">NSSC减肥法之自我管理(Self)</a></dt>
				  <dd><a href="#">1 设定合理的目标</a></dd>
				  <dd><a href="#">2 将减肥当成快乐的事</a></dd>
				  <dd><a href="#">3 营造良好的减肥氛围</a></dd>
				</dl>
				<dl>
				  <dt><a href="#">NSSC减肥法之科学运动(Sports)</a></dt>
				  <dd><a href="#">1 运动对减肥的好处</a></dd>
				  <dd><a href="#">2 减肥时的运动安排</a></dd>
				  <dd><a href="#">3 减肥时运动的注意事项</a></dd>
				</dl>
				<dl>
				  <dt><a href="#">NSSC减肥法之热量控制(Calorie)</a></dt>
				  <dd><a href="#">1 热量平衡原理</a></dd>
				  <dd><a href="#">2 NSSC最佳热量预算</a></dd>
				  <dd><a href="#">3 热量的摄取与消耗</a></dd>
				</dl>
			  </div>
			  <a class="closer" href="#"></a>
			</div>      
		</article>
	  </div>
	</section>
	<script>
	$(function(){
	  $(".carousel").Carousel({hasToolbar:true,hasNavPanel:true,hasPagination:true});
	});
	</script>
	<script src="__PUBLIC__/Js/jquery_002.js" type="text/javascript"></script>
	<script src="__PUBLIC__/Js/jquery.js" type="text/javascript"></script>
	<script src="__PUBLIC__/Js/iepng.js" type="text/javascript"></script>
	
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