//登录验证  1为空   2为错误							  
var validate={cid:1,title:1}
$(function(){
	$("#news").submit(function(){
		if(validate.cid==0 && validate.title==0){
			return true;
		}
		$("select[name='cid']").trigger("blur");
		$("input[name='title']").trigger("blur");
		return false;
	})
})
$(function(){
	$("select[name='cid']").blur(function(){
		var cid = $("select[name='cid']");
		if(cid.val().trim()=='' || cid.val()==0){
			cid.parent().find("span").remove().end().append("<span class='error'>请选择二级分类!</span>");
			return ;
		}else{
			validate.cid=0;
			cid.parent().find("span").remove().end().append("<span>(请选择二级分类)</span>");
		}
	})
	$("input[name='title']").blur(function(){
		var title = $("input[name='title']");
		if(title.val().trim()=='' || title.val().trim().length > 60){
			title.parent().find("span").remove().end().append("<span class='error'>标题长度60个汉字以内!</span>");
			return ;
		}else{
			validate.title=0;
			title.parent().find("span").remove().end().append("<span>(标题长度60个汉字以内)</span>");
		}
	})
	/////////////
})
