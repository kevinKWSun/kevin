<?php
/*
 * Author: 上海SUNNY科技
 * Email : 1053577162@qq.com
 * DATE  : 2013-10-01 
 */ 
class IndexAction extends Action { 
    public function index(){
		$name = trim($_GET['name']);
		$map['name'] = array('like','%'.(string)$name.'%');
		if($name!=''){
			$this->keyword = $name;
			import('Class.Pagefood',APP_PATH);
			//import('ORG.Util.Page');
			$count = M('calories')->where($map)->count();
			$page = new Pagefood($count,4,1);
			$limit = $page->firstRow . ',' . $page->listRows;
			$this->news = M('calories')->where($map)->limit($limit)->select();
			$this->page = $page->show();
			$this->emptys = '<div class="empty">。抱歉，没有找到<font color=red>“'.$name.'”</font>相关的食物!<br> 。请您检查是否输入了错误的食物名称(中间不能有空格)<br>。您也可以尝试输入该食物的其他名称进行查询</div>';
		}else{
			$this->emptys = '<div class="empty">。抱歉，没有找到<font color=red>“'.$name.'”</font>相关的食物!<br> 。请您检查是否输入了错误的食物名称(中间不能有空格)<br>。您也可以尝试输入该食物的其他名称进行查询</div>';
		}
		$this->display();
	}
} 