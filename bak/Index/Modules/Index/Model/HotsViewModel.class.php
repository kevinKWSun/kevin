<?php
//视图模型
class HotsViewModel extends ViewModel {
	Protected $viewFields = array(
		'news' => array(
			'id','title','images','description','cid',
			'_type' => 'LEFT'
		),
		'news_attr' => array(
			'nid', '_on' => 'news.id = news_attr.nid','_type' => 'RIGHT'
		),
		'attr' => array(
			'id'=>'a_id', '_on' => 'news_attr.aid = attr.id'
		),
	);
	Public function getOne($limitstart, $flag, $cid){
		if(!$cid){
			return $this->field(array('id','title','a_id','images','description'))->where(array('del'=>0, 'a_id'=>$flag))->order('id DESC')->limit($limitstart)->select();
		}else{
			return $this->field(array('id','title','a_id','images','description'))->where(array('del'=>0, 'a_id'=>$flag, 'cid'=>$cid))->order('id DESC')->limit($limitstart)->select();
		}
	}
}
?>
