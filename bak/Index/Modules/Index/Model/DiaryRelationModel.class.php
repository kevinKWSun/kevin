<?php
//关系模型
class DiaryRelationModel extends RelationModel {
	Protected $tableName = 'time';
	Protected $_link = array(
		'diary' => array(
			'mapping_type' => HAS_MANY,
			'class_name' => 'diary',
			'foreign_key' => 'time',
			'mapping_fields' => 'pid,name,unit,num,cal,cate,time as sid',
		),
	);

}

