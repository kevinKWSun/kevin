<?php
/*
 * Author: 上海SUNNY科技
 * Email : 1053577162@qq.com
 * DATE  : 2013-10-01 
 */ 
class IndexAction extends Action { 
    public function index(){
		$this->cids = M('tcate')->select();
		$cid = I('get.id',1,intval);
		$this->cid = $cid;
		$where['cid'] = $cid;
		import('Class.Pagetaob',APP_PATH);
		$count = M('tao')->where($where)->count();
		$page = new Pagetaob($count,15,1);
		$limit = $page->firstRow . ',' . $page->listRows;
		$this->t = M('tao')->where($where)->order('id DESC')->limit($limit)->select();
		$this->page = $page->show();
		$this->display();
	}
} 