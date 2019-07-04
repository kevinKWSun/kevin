<?php
/*
 * Author: 上海SUNNY科技
 * Email : 1053577162@qq.com
 * DATE  : 2013-10-01
 */ 
Class NewsAction extends CommonAction {
    Public function index(){ 
		$this->tname = '新闻列表';
		$this->news = D('NewsRelation')->getNews();
		$this->display();
    }
	Public function toTrach(){ 
		$type = (int) $_GET['type'];
		$msg = $type ? '删除' :'还原';
		$update = array(
			'id' => (int) $_GET['id'],
			'del' => $type,
		);
		if(M('news')->save($update)){
			$this->success($msg . '成功',U(GROUP_NAME . '/News/index'));
		}else{
			$this->error($msg . '失败');
		}
		//$this->display();
    }
	Public function trach(){
		$this->tname = '回收站管理'; 
		$this->news = D('NewsRelation')->getNews(1);
		$this->display('index');
    }
	Public function delete(){
		$id = (int) $_GET['id'];
		if(M('news')->delete($id)){
			M('news_attr')->where(array('nid' => $id))->delete();
			$this->success('删除成功',U(GROUP_NAME . '/News/index'));
		}else{
			$this->error('删除失败');
		}
		//D('NewsRelation')->relation('attr')->delete($id);官方bug没有修复，暂时不能用多对多
    }
	Public function addNews(){ 
		$this->click = mt_rand(80,300);
		import('Class.Category', APP_PATH);
		$cate = M('cate')->order('sort')->select();
		$this->cate = Category::unlimitedForLevel($cate);
		$this->attr = M('attr')->select();
		$this->display();
    }
	Public function addNewsHandle(){
		$subject = strip_tags($_POST['content']);//去除html标签
		$content = preg_replace("/(\s|\&nbsp\;|　|\xc2\xa0)/","",$subject);
		if($_POST['description'] == ''){
			$des = subtext($content,200);
		}else{
			$des = subtext($_POST['description'],200);
		}
		$data = array(
			'title' => I('title'),
			'images' => I('images'),
			'keyword' => I('keyword'),
			'description' => $des,
			'content' => $_POST['content'],
			'stime' => time(),
			'cid' => (int) $_POST['cid'],
			'click' => (int) $_POST['click']
		);
		if($nid = M('news')->add($data)){
			if(isset($_POST['aid'])){
				$sql = 'INSERT INTO sun_news_attr(nid,aid) VALUES';
				foreach($_POST['aid'] as $v){
					$sql .= '(' . $nid . ',' . $v .'),';
				}
				$sql = rtrim($sql, ',');
				M('news_attr')->query($sql);
			}
			$this->success('添加成功',U(GROUP_NAME . '/News/index'));
		}else{
			$this->error('添加失败');
		}
		//D('NewsRelation')->relation(true)->add($data);官方bug没有修复，暂时不能用多对多
    }
	Public function modifyNews(){ 		
		$id = (int) $_GET['id'];
		import('Class.Category', APP_PATH);
		$cate = M('cate')->order('sort')->select();
		$this->attr = M('attr')->select();
		$this->n_a = M('news_attr')->where(array('nid'=>$id))->field('aid')->select();
		$this->cate = Category::unlimitedForLevel($cate);
		$this->news = M('news')->find($id);
		$this->display('editNews');
    }
	Public function updateNews(){
		$id = (int) $_GET['id'];
		$subject = strip_tags($_POST['content']);//去除html标签
		$content = preg_replace("/(\s|\&nbsp\;|　|\xc2\xa0)/","",$subject);
		if($_POST['description'] == ''){
			$des = subtext($content,200);
		}else{
			$des = subtext($_POST['description'],200);
		}
		$data = array(
			'title' => I('title'),
			'images' => I('images'),
			'keyword' => I('keyword'),
			'description' => $des,
			'content' => $_POST['content'],
			'stime' => time(),
			'cid' => (int) $_POST['cid'],
			'click' => (int) $_POST['click']
		);
		if(M('news')->where(array('id'=>$id))->data($data)->save()){
			if(isset($_POST['aid'])){
				$sql_i = M('news_attr')->where(array('nid'=>$id))->delete();
				$sql = 'INSERT INTO sun_news_attr(nid,aid) VALUES';
				foreach($_POST['aid'] as $v){
					$sql .= '(' . $id . ',' . $v .'),';
				}
				$sql = rtrim($sql, ',');
				M('news_attr')->query($sql);
			}else{
				M('news_attr')->where(array('nid'=>$id))->delete();
			}
			$this->success('修改成功',U(GROUP_NAME . '/News/index'));
		}else{
			$this->error('修改失败');
		}
		//D('NewsRelation')->relation(true)->add($data);官方bug没有修复，暂时不能用多对多
    }
	Public function upload(){
		import('ORG.Net.UploadFile');
		$upload = new UploadFile();
		$upload->autoSub = true;
		$upload->subType = 'date';
		$upload->dateFormat = 'Ym';
		if($upload->upload('./Uploads/')){
			$info = $upload->getUploadFileInfo();
			//添加水印think的类
			/*import('ORG.Util.Image');
			Image::water('./Uploads/' . $info[0]['savename'],'./Date/water.png');*/
			//自定义水印及验证码类调用
			import('Class.Image', APP_PATH);
			//Image::text('./Uploads/' . $info[0]['savename']);
			Image::water('./Uploads/' . $info[0]['savename']);
			echo json_encode(array(
			'url' => $info[0]['savename'],
			'title' => htmlspecialchars($_POST['pictitle'], ENT_QUOTES), 
			'original' => $info[0]['name'],
			'state' => 'SUCCESS'
			));
		}else{
			echo json_encode(array(
				'state' => $upload->getErrorMsg()
			));
		}
    }
}