<?php
/*
 * Author: 上海SUNNY科技
 * Email : 1053577162@qq.com
 * DATE  : 2013-10-01
 */
class SearchAction extends Action { 
	public function index(){
		$title = trim($_GET['title']);
		$map['title'] = array('like','%'.(string)$title.'%');
		import('Class.Pagesearch',APP_PATH);
		$this->keyword = $title;
		if($title!=''){
			$count = M('news')->where($map)->count();
			$page = new Pagesearch($count,8,1);
			$limit = $page->firstRow . ',' . $page->listRows;
			$this->news = M('news')->where($map)->limit($limit)->select();
			$this->page = $page->show();
			$this->emptys = '<div class="empty">。抱歉，没有找到<font color=red>“'.$name.'”</font>相关的信息!<br> 。请您检查是否输入了错误的名称(中间不能有空格)<br>。您也可以尝试输入其他名称进行查询</div>';
		}else{
			$this->emptys = '<div class="empty">。抱歉，没有找到<font color=red>“'.$name.'”</font>相关的信息!<br> 。请您检查是否输入了错误的名称(中间不能有空格)<br>。您也可以尝试输入其他名称进行查询</div>';
			$count = M('news')->count();
			$page = new Pagesearch($count,8,1);
			$limit = $page->firstRow . ',' . $page->listRows;
			$this->news = M('news')->limit($limit)->select();
			$this->page = $page->show();
		}
		$this->display();
	}
} 