<?php if (!defined('THINK_PATH')) exit();?><script>$(function(){
	$( '.submit' ).click( function () {
		var idc = "<?php echo $_GET['idc']; ?>";
		var e_name = $( 'input[name=e_name]' ).val();
		var num = $( 'input[name=num]' ).val();
		var units = $( 'input[name=unit]' ).val();
		var calories = $( 'input[name=calories]' ).val();
		if(e_name==''){
			alert('请填写名称!');
			return;
		}
		if(num==''){
			alert('请填写数量!');
			return;
		}
		if(units==''){
			alert('请填写单位!');
			return;
		}
		if(calories==''){
			alert('请填写热量!');
			return;
		}
		if(idc=='4'){
			$('#sport_record_wrap').load('<?php echo U("/list-adds");?>?idc='+idc+'&e_name='+e_name+'&num='+num+'&unit='+units+'&calories='+calories,function() {
				$('.l .x span').load('<?php echo U("/list-totales");?>?action=4');
			});
			return false;
		}else{
			$('#h'+idc).load('<?php echo U("/list-adds");?>?idc='+idc+'&e_name='+e_name+'&num='+num+'&unit='+units+'&calories='+calories,function() {
				$('.l .y span').load('<?php echo U("/list-totales");?>?action=1');
			});
			return false;
		}
		
	});
});
</script><div class="foodBox"><a><img src="__PUBLIC__/Img/Images/13.jpg" alt="无该项" width="47" height="43" /></a><dl><dt><a>无该项,您可以手动添加...</a></dt><dd><span>非常抱歉没有找到该项内容...</span></dd></dl></div><div class="empty"><ul><li><span class="stress" style="width:60px;">食物名称</span>：
		  <input name="e_name" maxlength="20" size="20" value="<?php echo $_GET['search']; ?>" type="text" /></li><li><span class="stress" style="width:60px;">数　　量</span>：
		  <input name="num" maxlength="4" value="1" type="text" onkeyup="value=value.replace(/[^\d.]/g,'') " /></li><li><span class="stress" style="width:60px;">单　　位</span>：
		  <input name="unit" maxlength="5" type="text" /></li><li><span class="stress" style="width:60px;">总 热 量</span>：
		  <input name="calories" maxlength="6" type="text" onkeyup="value=value.replace(/[^\d.]/g,'') " /> 大卡
		</li><li><span class="stress">　　　　 </span>　 <input class="submit" value="　确定添加　" type="submit"></li></ul></div>