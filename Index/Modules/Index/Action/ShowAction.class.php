<?php
/*
 * Author: 上海SUNNY科技
 * Email : 1053577162@qq.com
 * DATE  : 2013-10-01
 */
class ShowAction extends Action {
    public function index(){
		$id = (int) $_GET['id'];
		$this->news = M('news')->where(array('id'=>$id))->find();
		$cid = $this->news['cid'];
		import('Class.Category',APP_PATH);
		$cate = M('cate')->order('sort')->select();
		$this->parent = Category::getParents ($cate,$cid);
		$this->display();
    }
	Public function click(){
		$id = (int) $_GET['id'];
		$click = M('news')->where(array('id' => $id))->getField('click');
		M('news')->where(array('id' => $id))->setInc('click');//setDec减
		echo 'document.write(' . $click . ');';
	}
	Public function group(){
		$this->display();
	}
} 