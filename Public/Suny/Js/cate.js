//登录验证  1为空   2为错误							  
var validate={name:1,sort:1}
$(function(){
	$("#cate").submit(function(){
		if(validate.name==0 && validate.sort==0){
			return true;
		}
		$("input[name='name']").trigger("blur");
		$("input[name='sort']").trigger("blur");
		return false;
	})
})
$(function(){
	$("input[name='name']").blur(function(){
		var name = $("input[name='name']");
		if(name.val().trim()=='' || name.val().trim().length > 15){
			name.parent().find("span").remove().end().append("<span class='error'>15个汉字以内!</span>");
			return ;
		}else{
			validate.name=0;
			name.parent().find("span").remove().end().append("<span>(15个汉字以内)</span>");
		}
	})
	$("input[name='sort']").blur(function(){
		var sort = $("input[name='sort']");
		if(sort.val().trim()==''){
			sort.parent().find("span").remove().end().append("<span class='error'>填写数字!</span>");
			return ;
		}else{
			validate.sort=0;
			sort.parent().find("span").remove().end().append("<span>(填写数字)</span>");
		}
	})
	/////////////
})
