<?php
/*
 * Author: 上海SUNNY科技
 * Email : 1053577162@qq.com
 * DATE  : 2013-10-01
 */
class HotImageWidget extends Widget {
    public function render($data){
		$limitstart = $data['limitstart'];
		$flag = $data['flag'];
		$cid = $data['cid'];
		$this->imgwidth = $data['imgwidth'];
		$this->imgheight = $data['imgheight'];
		$data['hotimg'] = D('HotsView')->getOne($limitstart, $flag, $cid);
		return $this->renderFile('',$data);
    }
}