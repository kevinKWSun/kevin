<?php if (!defined('THINK_PATH')) exit();?><script type="text/javascript">
function addnum_1(id){
	var num=parseInt(document.getElementById('1book_num'+id).value);
	num++;
	document.getElementById('1book_num'+id).value=num;
}
function subnum_1(id){
	if(document.getElementById('1book_num'+id).value!=1){
		var num=parseInt(document.getElementById('1book_num'+id).value);
		num--;
		document.getElementById('1book_num'+id).value=num;
	}else{
	}
}
function addnum_2(id){
	var num=parseInt(document.getElementById('2book_num'+id).value);
	num++;
	document.getElementById('2book_num'+id).value=num;
}
function subnum_2(id){
	if(document.getElementById('2book_num'+id).value!=1){
		var num=parseInt(document.getElementById('2book_num'+id).value);
		num--;
		document.getElementById('2book_num'+id).value=num;
	}else{
	}
}
function addnum_4(id){
	var num=parseInt(document.getElementById('4book_num'+id).value);
	num++;
	document.getElementById('4book_num'+id).value=num;
}
function subnum_4(id){
	if(document.getElementById('4book_num'+id).value!=1){
		var num=parseInt(document.getElementById('4book_num'+id).value);
		num--;
		document.getElementById('4book_num'+id).value=num;
	}else{
	}
}
function addnum_6(id){
	var num=parseInt(document.getElementById('6book_num'+id).value);
	num++;
	document.getElementById('6book_num'+id).value=num;
}
function subnum_6(id){
	if(document.getElementById('6book_num'+id).value!=1){
		var num=parseInt(document.getElementById('6book_num'+id).value);
		num--;
		document.getElementById('6book_num'+id).value=num;
	}else{
	}
}
function addnum_7(id){
	var num=parseInt(document.getElementById('7book_num'+id).value);
	num++;
	document.getElementById('7book_num'+id).value=num;
}
function subnum_7(id){
	if(document.getElementById('7book_num'+id).value!=1){
		var num=parseInt(document.getElementById('7book_num'+id).value);
		num--;
		document.getElementById('7book_num'+id).value=num;
	}else{
	}
}
//////////////
var zindex = 0;
function showDiv(obj) {
	$(".arrowDown").hide();
	var box = obj.nextSibling;
	if (getNextNode(box).style.display == "none") {
		getNextNode(box).style.display = "";
	 } else {
		getNextNode(box).style.display = "none";
	}
}
function getNextNode(node) {
	while (node.nodeType != 1) {
		node = node.nextSibling;
		if (!node) return null;
	};
	return node;
}
</script>
<div class="consumptionBox">
	<ul class="can-record-tab">
		<li class="float-left"><a id="food_tab" class="food-tab current" href="javascript:void(0);" onclick="choose_to_food(1)">饮食摄入量</a></li>
		<li class="float-right"><a id="sport_tab" class="sport-tab" href="javascript:void(0);" onclick="choose_to_sport(4)">运动消耗量</a></li>
	</ul >
	<div class="can-record" id="can_record">
		<div id="food_record_wrap" class="food-record-wrap upper">
			<div id="food_record" class="food-record">
				<div id="h1" class="record-panel current">
					<h2 class="record-title meal1" id="ab1" onclick="choose_one_time(1)">
						早餐<span> (<?php echo ($liste["total_price"]); ?>大卡)</span>
					</h2>
					<div class="record-body">
						<?php if(is_array($listz)): $k = 0; $__LIST__ = $listz;if( count($__LIST__)==0 ) : echo "$empty" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><dl>
							<dd>
								<span class="zl"><?php echo ($vo["name"]); ?></span>
								<div class="varietiesbox">
									<div class="log" onclick="showDiv(this)">
										<span><?php if($vo['unit'] == 'G'): echo ($vo["num"]); ?>/100克<?php else: echo ($vo["num"]); ?>/<?php echo ($vo["unit"]); endif; ?></span> 
										<a href="javascript:void(0);"></a>
									</div>
									<div class="arrowDown"  style="display:none ; ">
										<span class="fl_1_<?php echo ($vo["id"]); ?>">
											<b>数量：</b><input type="text" name="quatily[<?php echo ($k); ?>]" value="<?php echo ($vo["num"]); ?>" id="1book_num<?php echo ($k); ?>" />
											<a class="j" href="javascript:void(0);" onClick="addnum_1('<?php echo ($k); ?>')"></a>
											<a class="c" href="javascript:void(0);" onClick="subnum_1('<?php echo ($k); ?>')"></a>
										</span>
										<div>
											<input type="button" onclick="update(<?php echo ($vo["id"]); ?>,<?php echo ($vo["num"]); ?>,<?php echo ($vo["price"]); ?>,1);" value="确定"></a>
											<input type="button" onclick='resets()' value="取消"></a>
										</div>
									</div>
								</div>
								<div class="jz"><?php echo $vo['price']*$vo['num']; ?>大卡</div>
								<div class="delete"><a href="javascript:void(0);" onclick="del(<?php echo ($vo["id"]); ?>,1);"></a></div>
							</dd>
						</dl><?php endforeach; endif; else: echo "$empty" ;endif; ?>
					</div>
				</div>
				<div id="h6" class="record-panel">
					<h2 class="record-title meal6"  id="ab6" onclick="choose_one_time(6)">
						午餐<span> (<?php echo ($liste_6["total_price"]); ?>大卡)</span>
					</h2>
					<div class="record-body">
						<?php if(is_array($listz_6)): $k = 0; $__LIST__ = $listz_6;if( count($__LIST__)==0 ) : echo "$empty_6" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><dl>
							<dd>
								<span class="zl"><?php echo ($vo["name"]); ?></span>
								<div class="varietiesbox">
									<div class="log" onclick="showDiv(this)">
										<span><?php if($vo['unit'] == 'G'): echo ($vo["num"]); ?>/100克<?php else: echo ($vo["num"]); ?>/<?php echo ($vo["unit"]); endif; ?></span> 
										<a href="javascript:void(0);"></a>
									</div>
									<div class="arrowDown"  style="display:none ; ">
										<span class="fl_6_<?php echo ($vo["id"]); ?>">
											<b>数量：</b><input type="text" name="quatily[<?php echo ($k); ?>]" value="<?php echo ($vo["num"]); ?>" id="6book_num<?php echo ($k); ?>" />
											<a class="j" href="javascript:void(0);" onClick="addnum_6('<?php echo ($k); ?>')"></a>
											<a class="c" href="javascript:void(0);" onClick="subnum_6('<?php echo ($k); ?>')"></a>
										</span>
										<div>
											<input type="button" onclick="update(<?php echo ($vo["id"]); ?>,<?php echo ($vo["num"]); ?>,<?php echo ($vo["price"]); ?>,6);" value="确定"></a>
											<input type="button" onclick='resets()' value="取消"></a>
										</div>
									</div>
								</div>
								<div class="jz"><?php echo $vo['price']*$vo['num']; ?>大卡</div>
								<div class="delete"><a href="javascript:void(0);" onclick="del(<?php echo ($vo["id"]); ?>,6);"></a></div>
							</dd>
						</dl><?php endforeach; endif; else: echo "$empty_6" ;endif; ?>
					</div>
				</div>
				<div id="h2" class="record-panel">
					<h2 class="record-title meal2"  id="ab2" onclick="choose_one_time(2)">
						晚餐<span> (<?php echo ($liste_2["total_price"]); ?>大卡)</span></span>
					</h2>
					<div class="record-body">
						<?php if(is_array($listz_2)): $k = 0; $__LIST__ = $listz_2;if( count($__LIST__)==0 ) : echo "$empty_2" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><dl>
							<dd>
								<span class="zl"><?php echo ($vo["name"]); ?></span>
								<div class="varietiesbox">
									<div class="log" onclick="showDiv(this)">
										<span><?php if($vo['unit'] == 'G'): echo ($vo["num"]); ?>/100克<?php else: echo ($vo["num"]); ?>/<?php echo ($vo["unit"]); endif; ?></span> 
										<a href="javascript:void(0);"></a>
									</div>
									<div class="arrowDown"  style="display:none ; ">
										<span class="fl_2_<?php echo ($vo["id"]); ?>">
											<b>数量：</b><input type="text" name="quatily[<?php echo ($k); ?>]" value="<?php echo ($vo["num"]); ?>" id="2book_num<?php echo ($k); ?>" />
											<a class="j" href="javascript:void(0);" onClick="addnum_2('<?php echo ($k); ?>')"></a>
											<a class="c" href="javascript:void(0);" onClick="subnum_2('<?php echo ($k); ?>')"></a>
										</span>
										<div>
											<input type="button" onclick="update(<?php echo ($vo["id"]); ?>,<?php echo ($vo["num"]); ?>,<?php echo ($vo["price"]); ?>,2);" value="确定"></a>
											<input type="button" onclick='resets()' value="取消"></a>
										</div>
									</div>
								</div>
								<div class="jz"><?php echo $vo['price']*$vo['num']; ?>大卡</div>
								<div class="delete"><a href="javascript:void(0);" onclick="del(<?php echo ($vo["id"]); ?>,2);"></a></div>
							</dd>
						</dl><?php endforeach; endif; else: echo "$empty_2" ;endif; ?>
					</div>
				</div>
				<div id="h7" class="record-panel">
					<h2 class="record-title meal7"  id="ab7" onclick="choose_one_time(7)">
						零食<span> (<?php echo ($liste_7["total_price"]); ?>大卡)</span>
					</h2>
					<div class="record-body">
						<?php if(is_array($listz_7)): $k = 0; $__LIST__ = $listz_7;if( count($__LIST__)==0 ) : echo "$empty_7" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><dl>
							<dd>
								<span class="zl"><?php echo ($vo["name"]); ?></span>
								<div class="varietiesbox">
									<div class="log" onclick="showDiv(this)">
										<span><?php if($vo['unit'] == 'G'): echo ($vo["num"]); ?>/100克<?php else: echo ($vo["num"]); ?>/<?php echo ($vo["unit"]); endif; ?></span> 
										<a href="javascript:void(0);"></a>
									</div>
									<div class="arrowDown"  style="display:none ; ">
										<span class="fl_7_<?php echo ($vo["id"]); ?>">
											<b>数量：</b><input type="text" name="quatily[<?php echo ($k); ?>]" value="<?php echo ($vo["num"]); ?>" id="7book_num<?php echo ($k); ?>" />
											<a class="j" href="javascript:void(0);" onClick="addnum_7('<?php echo ($k); ?>')"></a>
											<a class="c" href="javascript:void(0);" onClick="subnum_7('<?php echo ($k); ?>')"></a>
										</span>
										<div>
											<input type="button" onclick="update(<?php echo ($vo["id"]); ?>,<?php echo ($vo["num"]); ?>,<?php echo ($vo["price"]); ?>,7);" value="确定"></a>
											<input type="button" onclick='resets()' value="取消"></a>
										</div>
									</div>
								</div>
								<div class="jz"><?php echo $vo['price']*$vo['num']; ?>大卡</div>
								<div class="delete"><a href="javascript:void(0);" onclick="del(<?php echo ($vo["id"]); ?>,7);"></a></div>
							</dd>
						</dl><?php endforeach; endif; else: echo "$empty_7" ;endif; ?>
					</div>
				</div>
			</div>
		</div>
		<div id="sport_record_wrap" class="sport-record-wrap">
			<div id="sport_record" class="sport-record">
				<div id="sport_record_panel" class="record-panel sport-current">
					<h2 class="record-title meal4">
						活动<span>(<b class="suny_data_4"><?php echo ($liste_4["total_price"]); ?>大卡</b>)</span>
					</h2>
					<div class="record-body" style="height:230px;">
						<!--<p>消耗值计算需结合您的体重、身高、年龄、性别等，为避免较大误差，请您先<a href="#" target="_blank">登录</a></p>-->
						
						<?php if(is_array($listz_4)): $k = 0; $__LIST__ = $listz_4;if( count($__LIST__)==0 ) : echo "$empty" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><dl>
							<dd>
								<span class="zl"><?php echo ($vo["name"]); ?></span>
								<div class="varietiesbox">
									<div class="log" onclick="showDiv(this)">
										<span><?php if($vo['unit'] == 'G'): echo ($vo["num"]); ?>/100克<?php else: echo ($vo["num"]); ?>/<?php echo ($vo["unit"]); endif; ?></span> 
										<a href="javascript:void(0);"></a>
									</div>
									<div class="arrowDown"  style="display:none ; ">
										<span class="fl_4_<?php echo ($vo["id"]); ?>">
											<b>数量：</b><input type="text" name="quatily[<?php echo ($k); ?>]" value="<?php echo ($vo["num"]); ?>" id="4book_num<?php echo ($k); ?>" />
											<a class="j" href="javascript:void(0);" onClick="addnum_4('<?php echo ($k); ?>')"></a>
											<a class="c" href="javascript:void(0);" onClick="subnum_4('<?php echo ($k); ?>')"></a>
										</span>
										<div>
											<input type="button" onclick="updates(<?php echo ($vo["id"]); ?>,<?php echo ($vo["num"]); ?>,<?php echo ($vo["price"]); ?>,4);" value="确定"></a>
											<input type="button" onclick='resets()' value="取消"></a>
										</div>
									</div>
								</div>
								<div class="jz"><?php echo $vo['price']*$vo['num']; ?>大卡</div>
								<div class="delete"><a href="javascript:void(0);" onclick="dels(<?php echo ($vo["id"]); ?>,4);"></a></div>
							</dd>
						</dl><?php endforeach; endif; else: echo "$empty" ;endif; ?>
					</div>
				</div>
				<div style="border-top:1px solid #CCC;padding-top:10px;margin:0 5px;">
						* 总消耗 = 活动消耗 + <a href="javascript:void(0);" onclick="showqDiv();"><span class="green1">基础代谢率<font color="red">( <span>0</span>大卡 )</font></span></a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="conclusion">
	<div class="l">
		<p>饮食摄入：<span class="y"><span style="font-size:14px;">
		 <?php echo ($totales); ?>
		</span>大卡</span></p>
		<p>活动消耗：<span class="x"><span style="font-size:14px;">
		<?php echo ($liste_4["total_price"]); ?>
		</span>大卡</span></p>
	</div>
	<div class="r">
		<a href="javascript:void(0);" onclick="insert();" class="b">保存到日记</a>
		<a href="javascript:void(0);" onclick="if(confirm('您确定清空饮食运动记录吗？')){empty();return false;}">清空</a></div>
	</div>
</div>