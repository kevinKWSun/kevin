<?php
/*
 * Author: 上海SUNNY科技
 * Email : 1053577162@qq.com
 * DATE  : 2013-10-01
 */ 
class IndexAction extends Action {
    public function index(){
		$this->display(); 
		die;
		require_once './Index/APPSDK/OpenApiV3.php';
		$appid = 1101080861;
		$appkey = 'cWPYZwgxyJPUm4xw';
		// OpenAPI的服务器IP 
		// 最新的API服务器地址请参考wiki文档: http://wiki.open.qq.com/wiki/API3.0%E6%96%87%E6%A1%A3 
		$server_name = 'openapi.tencentyun.com';//
		// 用户的OpenID/OpenKey
		$openid = $_GET['openid'];
		$openkey = $_GET['openkey'];
		// 所要访问的平台, pf的其他取值参考wiki文档: http://wiki.open.qq.com/wiki/API3.0%E6%96%87%E6%A1%A3
		$pf = $_GET['pf'];
		$sdk = new OpenApiV3($appid, $appkey);
		$sdk->setServerName($server_name);
		$ret = get_user_info($sdk, $openid, $openkey, $pf);
		//die;
		print_r(".\n");
		p($ret);
		
		
    }
	
	public function klljf(){
		$this->display(); 
	}
	public function view(){
		$this->display();
    }
	public function search(){
		$search = $_GET['search'];
		$idc = $_GET['idc'];
		if($search=='番茄'){
			$search = '西红柿';
		}
		if($idc=='4'){
			$result = M('calories')->where(array('name'=>$search,'a_name'=>'消耗'))->find();
			if($result){
				$this->result = $result;
				$this->pa = '100';
				$this->display('search_s');
			}else{
				$this->display('search_f');
			}
		}else if($idc=='7'){
			$result = M('calories')->where(array('name'=>$search,'b_name'=>'零食/点心'))->find();
			if($result){
				$this->result = $result;
				$this->pa = '100';
				$this->display();
			}else{
				$this->display('search_f');
			}
		}else{
			$result = M('calories')->where(array('name'=>$search))->find();
			if($result['a_name']!='消耗' && $result['b_name']!='零食/点心' && $resutl){
				$this->result = $result;
				$this->pa = '100';
				$this->display();
			}else{
				$this->display('search_f');
			}
		}
    }
	public function lists(){
		$idc = (int) $_GET['idc'];
		$idcs = (int) $_GET['idcs'];
		import('ORG.Util.Pages');
		if($idc=='1' || $idc=='2' || $idc=='6' && $idcs==''){
			$count = M('calories')->where(array('a_name'=>'摄入'))->count();
			$page = new Page($count,8);
			$limit = $page->firstRow . ',' . $page->listRows;
			$this->calories = M('calories')->where(array('a_name'=>'摄入'))->limit($limit)->select();
			$this->page = $page->show();
			$this->pa = '100';
		}else if($idc=='4' && $idcs==''){
			$count = M('calories')->where(array('a_name'=>'消耗'))->count();
			$page = new Page($count,8);
			$limit = $page->firstRow . ',' . $page->listRows;
			$this->calories = M('calories')->where(array('a_name'=>'消耗'))->limit($limit)->select();
			$this->page = $page->show();
			$this->pa = '100';
			$this->display('lists_f');
			die;
		}else if($idc=='7' && $idcs==''){
			$count = M('calories')->where(array('b_name'=>'零食/点心'))->count();
			$page = new Page($count,8);
			$limit = $page->firstRow . ',' . $page->listRows;
			$this->calories = M('calories')->where(array('b_name'=>'零食/点心'))->limit($limit)->select();
			$this->page = $page->show();
			$this->pa = '100';
		}
		if($idcs=='8'){
			$count = M('calories')->where(array('b_name'=>'日常生活'))->count();
			$page = new Page($count,8);
			$limit = $page->firstRow . ',' . $page->listRows;
			$this->calories = M('calories')->where(array('b_name'=>'日常生活'))->limit($limit)->select();
			$this->page = $page->show();
			$this->pa = '100';
			$this->display('lists_f');
			die;
		}else if($idcs=='9'){
			$count = M('calories')->where(array('b_name'=>'运动健身'))->count();
			$page = new Page($count,8);
			$limit = $page->firstRow . ',' . $page->listRows;
			$this->calories = M('calories')->where(array('b_name'=>'运动健身'))->limit($limit)->select();
			$this->page = $page->show();
			$this->pa = '100';
			$this->display('lists_f');
			die;
		}else if($idcs=='11'){
			$count = M('calories')->where(array('b_name'=>'主食类'))->count();
			$page = new Page($count,8);
			$limit = $page->firstRow . ',' . $page->listRows;
			$this->calories = M('calories')->where(array('b_name'=>'主食类'))->limit($limit)->select();
			$this->page = $page->show();
			$this->pa = '100';
		}else if($idcs=='12'){
			$count = M('calories')->where(array('b_name'=>'肉类'))->count();
			$page = new Page($count,8);
			$limit = $page->firstRow . ',' . $page->listRows;
			$this->calories = M('calories')->where(array('b_name'=>'肉类'))->limit($limit)->select();
			$this->page = $page->show();
			$this->pa = '100';
		}else if($idcs=='13'){
			$count = M('calories')->where(array('b_name'=>'蔬菜'))->count();
			$page = new Page($count,8);
			$limit = $page->firstRow . ',' . $page->listRows;
			$this->calories = M('calories')->where(array('b_name'=>'蔬菜'))->limit($limit)->select();
			$this->page = $page->show();
			$this->pa = '100';
		}else if($idcs=='14'){
			$count = M('calories')->where(array('b_name'=>'蛋类'))->count();
			$page = new Page($count,8);
			$limit = $page->firstRow . ',' . $page->listRows;
			$this->calories = M('calories')->where(array('b_name'=>'蛋类'))->limit($limit)->select();
			$this->page = $page->show();
			$this->pa = '100';
		}else if($idcs=='15'){
			$count = M('calories')->where(array('b_name'=>'豆制品'))->count();
			$page = new Page($count,8);
			$limit = $page->firstRow . ',' . $page->listRows;
			$this->calories = M('calories')->where(array('b_name'=>'豆制品'))->limit($limit)->select();
			$this->page = $page->show();
			$this->pa = '100';
		}else if($idcs=='16'){
			$count = M('calories')->where(array('b_name'=>'乳制品'))->count();
			$page = new Page($count,8);
			$limit = $page->firstRow . ',' . $page->listRows;
			$this->calories = M('calories')->where(array('b_name'=>'乳制品'))->limit($limit)->select();
			$this->page = $page->show();
			$this->pa = '100';
		}else if($idcs=='17'){
			$count = M('calories')->where(array('b_name'=>'水果'))->count();
			$page = new Page($count,8);
			$limit = $page->firstRow . ',' . $page->listRows;
			$this->calories = M('calories')->where(array('b_name'=>'水果'))->limit($limit)->select();
			$this->page = $page->show();
			$this->pa = '100';
		}else if($idcs=='18'){
			$count = M('calories')->where(array('b_name'=>'饮料'))->count();
			$page = new Page($count,8);
			$limit = $page->firstRow . ',' . $page->listRows;
			$this->calories = M('calories')->where(array('b_name'=>'饮料'))->limit($limit)->select();
			$this->page = $page->show();
			$this->pa = '100';
		}
		$this->display();
    }
} 