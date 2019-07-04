<?php
/*
 * Author: 上海SUNNY科技
 * Email : 1053577162@qq.com
 * DATE  : 2013-10-01 
 */ 
class ViewAction extends Action { 
    public function index(){
		$id = (int) $_GET['id'];
		if($id!=''){
			$this->v = M('calories')->where(array('id'=>$id))->find();
		}else{
			redirect('list-food.html');
		}
		$this->display();
	}
} 