<?php
/*
 * Author: 上海SUNNY科技
 * Email : 1053577162@qq.com
 * DATE  : 2013-10-01
 */
Class AttrbuteAction extends CommonAction {
    Public function index(){ 
		$this->attr = M('attr')->select();
		$this->display();
    }
	Public function addAttr(){ 
		$this->name = '添加属性';
		$this->display();
    }
	Public function addAttrHandle(){
		
		if(M('attr')->add($_POST)){
			$this->success('添加成功',U(GROUP_NAME . '/Attrbute/index'));
		}else{
			$this->error('添加失败');
		}
    }
	Public function modifyAttr(){ 
		$this->name = '编辑属性';
		$id = (int) $_GET['id'];
		$this->attr = M('attr')->find($id);
		$this->display('editAttr');
    }
	Public function updateAttr(){ 
		$id = (int) $_GET['id'];
		$data = array(
			'id' => $id,
		);
		if(M('attr')->where($data)->save($_POST)){
			$this->success('修改成功',U(GROUP_NAME . '/Attrbute/index'));
		}else{
			$this->error('修改失败');
		}
    }
	Public function delAttr(){ 
		$id = (int) $_GET['id'];
		if(M('attr')->delete($id)){
			$this->success('删除成功',U(GROUP_NAME . '/Attrbute/index'));
		}else{
			$this->error('删除失败');
		}
    }
}