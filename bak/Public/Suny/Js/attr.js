//登录验证  1为空   2为错误							  
var validate={name:1,color:1}
$(function(){
	$("#attr").submit(function(){
		if(validate.name==0 && validate.color==0){
			return true;
		}
		$("input[name='name']").trigger("blur");
		$("input[name='color']").trigger("blur");
		return false;
	})
})
$(function(){
	$("input[name='name']").blur(function(){
		var name = $("input[name='name']");
		if(name.val().trim()=='' || name.val().trim().length > 10){
			name.parent().find("span").remove().end().append("<span class='error'>属性名称填写出错!</span>");
			return ;
		}else{
			validate.name=0;
			name.parent().find("span").remove().end().append("<span>(10个汉字以内)</span>");
		}
	})
	$("input[name='color']").blur(function(){
		var color = $("input[name='color']");
		if(color.val().trim()=='' || color.val().trim().length > 10){
			color.parent().find("span").remove().end().append("<span class='error'>属性名称填写出错!</span>");
			return ;
		}else{
			validate.color=0;
			color.parent().find("span").remove().end().append("<span>(10个字节以内)</span>");
		}
	})
	/////////////
})
