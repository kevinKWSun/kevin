<?php
class NewsRelationModel extends RelationModel {
	Protected $tableName = 'news';
	Protected $_link = array(
		'attr' => array(
			'mapping_type' => MANY_TO_MANY,
			'mapping_name' =>'attr',
			'foreign_key' => 'nid', 
			'relation_foreign_key' => 'aid',
			'relation_table' => 'sun_news_attr',
		),
		'cate' => array(
			'mapping_type' => BELONGS_TO,
			'foreign_key' => 'cid',
			'mapping_fields' => 'name',
			'as_fields' => 'name:cate'
		)
		/*,
		'cate' => array(
			'mapping_type' => BELONGS_TO,//多对一BELONGS_TO,一对多HAS_MANY,一对一HAS_ONE
			'foreign_key' => 'cid'
		)*/
	);
	Public function getNews($type = 0){
		$field = array('content','del'); 
		$where = array('del' => $type);
		return $this->field($field,true)->where($where)->relation(true)->select();
	}
}
?>
