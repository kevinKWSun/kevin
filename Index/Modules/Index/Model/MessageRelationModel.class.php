<?php
//视图模型
class MessageRelationModel extends RelationModel {
	Protected $tableName = 'message';
	Protected $_link = array(
		'member' => array(
			'mapping_type' => BELONGS_TO,
			'class_name' => 'member',
			'foreign_key' => 'uid',
			'mapping_fields' => 'uname',
			'as_fields' => 'uname'
		)
	);
}
