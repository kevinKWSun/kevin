<?php
//视图模型
class RankingRelationModel extends RelationModel {
	Protected $tableName = 'member';
	Protected $_link = array(
		'members' => array(
			'mapping_type' => HAS_ONE,
			'class_name' => 'members',
			'foreign_key' => 'uid',
			'mapping_fields' => 'sex,stratweight',
			'as_fields' => 'sex,stratweight'
		)
	);
}
