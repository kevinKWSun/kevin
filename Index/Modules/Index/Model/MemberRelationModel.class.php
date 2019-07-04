<?php
//视图模型
class MemberRelationModel extends RelationModel {
	Protected $tableName = 'member';
	Protected $_link = array(
		'members' => array(
			'mapping_type' => HAS_ONE,
			'foreign_key' => 'uid',
			//'mapping_fields' => 'name',
			'as_fields' => 'sex,birthday,height,xwm,ywm,dwm,sbwm,dtwm,xtwm,stratweight,mweight,startdate,position,style,eatlove,sportlove,open,background,point'
		)
	);
	Public function getOne($uid){
		if($uid){
			return $this->field('score,login,reg_ip,reg_time,last_login_ip,last_login_time,mstatus,b_type',true)->where(array('uid'=>$uid))->find();
		}
	}

}

