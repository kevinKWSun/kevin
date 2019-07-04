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
	);
	Public function getNew($limitstart, $limitend){
		return $this->field(array('id','title'))->order('id DESC')->limit($limitstart, $limitend)->relation(true)->select();
	}
}
?>
