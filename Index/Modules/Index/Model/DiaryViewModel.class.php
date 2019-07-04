<?php
//视图模型 目前无用处
class DiaryViewModel extends ViewModel {
	Protected $tableName = 'time';
	Protected $viewFields = array(
		'time' => array(
			'tid','times','uid',
			'_type' => 'LEFT'
		),
		'diary' => array(
			'pid','num','cal','cate','time', '_on' => 'time.tid = diary.time'
		)
	);
	Public function getAll($uid,$cate){
		return $this->field('uid,times,cal,cate')->where(array('uid'=>$uid,'cate'=>$cate))->select();
	}
}

