<?php
/*
 * Author: 上海SUNNY科技
 * Email : 1053577162@qq.com
 * DATE  : 2013-10-01
 */
Class CategoryAction extends CommonAction {
    Public function index(){ 
		import('Class.Category', APP_PATH);
		$cate = M('cate')->order('sort ASC')->select();
		$this->cate = Category::unlimitedForLevel($cate);
		$this->display();
    }
	Public function addCate(){
		$this->pid = I('pid', 0 , 'intval');
		$this->display();
    }
	Public function addCateHandle(){
		if(M('cate')->add($_POST)){
			$this->success('添加成功',U(GROUP_NAME . '/Category/index'));
		}else{
			$this->error('添加失败');
		}
    }
	Public function modifyCate(){ 
		$id = (int) $_GET['id'];
		$this->cate = M('cate')->find($id);
		$this->display('editCate');
    }
	Public function updateCate(){ 
		$id = (int) $_GET['id'];
		$data = array(
			'id' => $id,
		);
		if(M('cate')->where($data)->data($_POST)->save()){
			$this->success('修改成功',U(GROUP_NAME . '/Category/index'));
		}else{
			$this->error('修改失败');
		}
    }
	Public function delNews(){ 
		$id = (int) $_GET['id'];
		if(M('cate')->delete($id)){
			$this->success('删除成功',U(GROUP_NAME . '/Category/index'));
		}else{
			$this->error('删除失败');
		}
    }
	Public function sortCate(){
		$db = M('cate');
		foreach($_POST as $id => $sort){
			$db->where(array('id' => $id))->setField('sort',$sort);
		}
		$this->redirect(GROUP_NAME . '/Category/index');
    }
}

























