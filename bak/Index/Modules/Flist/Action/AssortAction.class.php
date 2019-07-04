<?php
/*
 * Author: 上海SUNNY科技
 * Email : 1053577162@qq.com
 * DATE  : 2013-10-01 
 */ 
class AssortAction extends Action { 
    public function index(){
		$id = (int) $_GET['id'];
		import('Class.Pageassort',APP_PATH);
		if($id=='1'){
			$count = M('calories')->where(array('b_name'=>'主食类'))->count();
			$page = new Pageassort($count,4,1);
			$limit = $page->firstRow . ',' . $page->listRows;
			$this->news = M('calories')->where(array('b_name'=>'主食类'))->limit($limit)->select();
			$this->name = '主食类';
		}else if($id=='2'){
			$count = M('calories')->where(array('b_name'=>'肉类'))->count();
			$page = new Pageassort($count,4,1);
			$limit = $page->firstRow . ',' . $page->listRows;
			$this->news = M('calories')->where(array('b_name'=>'肉类'))->limit($limit)->select();
			$this->name = '肉类';
		}else if($id=='3'){
			$count = M('calories')->where(array('b_name'=>'蛋类'))->count();
			$page = new Pageassort($count,4,1);
			$limit = $page->firstRow . ',' . $page->listRows;
			$this->news = M('calories')->where(array('b_name'=>'蛋类'))->limit($limit)->select();
			$this->name = '蛋类';
		}else if($id=='4'){
			$count = M('calories')->where(array('b_name'=>'乳制品'))->count();
			$page = new Pageassort($count,4,1);
			$limit = $page->firstRow . ',' . $page->listRows;
			$this->news = M('calories')->where(array('b_name'=>'乳制品'))->limit($limit)->select();
			$this->name = '乳制品';
		}else if($id=='5'){
			$count = M('calories')->where(array('b_name'=>'豆制品'))->count();
			$page = new Pageassort($count,4,1);
			$limit = $page->firstRow . ',' . $page->listRows;
			$this->news = M('calories')->where(array('b_name'=>'豆制品'))->limit($limit)->select();
			$this->name = '豆制品';
		}else if($id=='6'){
			$count = M('calories')->where(array('b_name'=>'水果'))->count();
			$page = new Pageassort($count,4,1);
			$limit = $page->firstRow . ',' . $page->listRows;
			$this->news = M('calories')->where(array('b_name'=>'水果'))->limit($limit)->select();
			$this->name = '水果';
		}else if($id=='7'){
			$count = M('calories')->where(array('b_name'=>'蔬菜'))->count();
			$page = new Pageassort($count,4,1);
			$limit = $page->firstRow . ',' . $page->listRows;
			$this->news = M('calories')->where(array('b_name'=>'蔬菜'))->limit($limit)->select();
			$this->name = '蔬菜';
		}else if($id=='8'){
			$count = M('calories')->where(array('b_name'=>'零食/点心'))->count();
			$page = new Pageassort($count,4,1);
			$limit = $page->firstRow . ',' . $page->listRows;
			$this->news = M('calories')->where(array('b_name'=>'零食/点心'))->limit($limit)->select();
			$this->name = '零食/点心';
		}else if($id=='9'){
			$count = M('calories')->where(array('b_name'=>'饮料'))->count();
			$page = new Pageassort($count,4,1);
			$limit = $page->firstRow . ',' . $page->listRows;
			$this->news = M('calories')->where(array('b_name'=>'饮料'))->limit($limit)->select();
			$this->name = '饮料、冷饮';
		}else{
			$this->emptys = '<div class="empty">非法操作!</div>';
			redirect('list-food.html');
		}
		$this->page = $page->show();
		$this->display();
	}
} 