<?php
/*
 * Author: 上海SUNNY科技
 * Email : 1053577162@qq.com
 * DATE  : 2013-10-01
 */
class NewWidget extends Widget {
    public function render($data){
		$limitstart = $data['limitstart'];
		$cid = $data['cid'];
		if($cid){
			$data['new'] = M('news')->field(array('id','title'))->where(array('del'=>0, 'cid'=>$cid))->order('id DESC')->limit($limitstart)->select();
		}else{
			$data['new'] = M('news')->field(array('id','title'))->where(array('del'=>0))->order('id DESC')->limit($limitstart)->select();
		}
		return $this->renderFile('',$data);
    }
}