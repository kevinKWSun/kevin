<?php if (!defined('THINK_PATH')) exit();?><script type="text/javascript">
$(function(){
	$(".foodMenu a").one('click',function(){
		var rel = $(this).attr("rel");
		if(rel){
			$('#tabletab'+<?php echo $_GET['idc']; ?>).load(rel,function() {
				choose_foodsy(<?php echo $_GET['idcs']; ?>);
			});
			return false;
		}
	});
	$(".foodBox li").click(function(){
		var rel = $(this).attr("rel");
		var id = $(this).attr("rels");
		adds(id,<?php echo $_GET["idc"]; ?>,rel);
	});
});
function choose_foods(d){
	$('#tabletab<?php echo $_GET['idc']; ?>').load('<?php echo U(GROUP_NAME . "/Index/lists","","");?>/idc/<?php echo $_GET['idc']; ?>/idcs/'+d,function() {
    	$('.choose_foods_'+d).css('color','red');
    });
    return false;
}
function choose_foodsy(d){
	$('.choose_foods_'+d).css('color','red');
}
</script>
<div class="tabmenu">
	<div class="l">
		<?php if($_GET['idc']=='4'){ echo '
				<a href="javascript:void(0);" onclick="choose_foods(8);" class="choose_foods_8">日常生活</a>|
				<a href="javascript:void(0);" onclick="choose_foods(9);" class="choose_foods_9">运动健身</a>
			'; }else if($_GET['idc']=='7'){ echo '<font color="red">零食 / 点心　　　　　</font>'; }else{ echo '
			<a href="javascript:void(0);" onclick="choose_foods(11);" class="choose_foods_11">主食类</a>|
			<a href="javascript:void(0);" onclick="choose_foods(12);" class="choose_foods_12">肉类</a>|
			<a href="javascript:void(0);" onclick="choose_foods(13);" class="choose_foods_13">蔬菜类</a>|
			<a href="javascript:void(0);" onclick="choose_foods(14);" class="choose_foods_14">蛋类</a>|
			<a href="javascript:void(0);" onclick="choose_foods(15);" class="choose_foods_15">豆制品</a>|
			<a href="javascript:void(0);" onclick="choose_foods(16);" class="choose_foods_16">乳制品</a>|
			<a href="javascript:void(0);" onclick="choose_foods(17);" class="choose_foods_17">水果</a>|
			<a href="javascript:void(0);" onclick="choose_foods(18);" class="choose_foods_18">饮料</a>
			'; } ?>
	</div>
	<div class="r" id='search_<?php echo $_GET["idc"]; ?>'>
		<input type="text" name="search" /><a href="javascript:void(0);" onclick='search_can(<?php echo $_GET["idc"]; ?>);'></a>
	</div>
</div>
<div id='sun<?php echo $_GET["idc"]; ?>'>
	<?php if(is_array($calories)): foreach($calories as $key=>$v): ?><div class="foodBox">
		<a><img src="__PUBLIC__/Img/Images/<?php echo ($v["img_path"]); ?>" alt="<?php echo ($v["name"]); ?>" /></a>
		<dl>
			<dt><a><?php echo ($v["name"]); ?></a></dt>
			<dd>
				<span><?php echo ($v["calories"]); ?>大卡(每<?php if($v['unit'] == 'G'): echo ($pa); echo ($v["unit"]); else: echo ($v["unit"]); endif; ?>)</span>
				<a href="javascript:void(0);">
					<div>
						<ul>
							<li rel="5" rels='<?php echo ($v["id"]); ?>'>5分钟</li>
							<li rel="10" rels='<?php echo ($v["id"]); ?>'>10分钟</li>
							<li rel="20" rels='<?php echo ($v["id"]); ?>'>20分钟</li>
							<li rel="30" rels='<?php echo ($v["id"]); ?>'>30分钟</li>
							<li rel="60" rels='<?php echo ($v["id"]); ?>'>1 小时</li>
							<li rel="120" rels='<?php echo ($v["id"]); ?>'>2 小时</li>
						</ul>
					</div>
				</a>
			</dd>
		</dl>
	</div><?php endforeach; endif; ?>
	<div class="cl"></div>
	<div class="foodMenu" >
		<?php echo ($page); ?>
	</div>
</div>