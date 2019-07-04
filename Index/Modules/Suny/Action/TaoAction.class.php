<?php
/*
 * Author: 上海SUNNY科技
 * Email : 1053577162@qq.com
 * DATE  : 2015-11-09
 */ 
class TaoAction extends CommonAction { 
    public function index(){
		$this->cids = M('tcate')->select();
		$cid = I('get.cid',0,intval);
		if($cid){
			$where['cid'] = $cid;
		}else{
			$where['cid'] = 1;
		}
		$this->tname = '商品列表';
		$this->t = M('tao')->where($where)->select();
		$this->display();
	}
	public function addCate(){
		$this->tname = '商品分类';
		if(IS_POST){
			$name = trim(I('post.name'));
			if(! $name){
				$this->error('商品分类不能为空');
			}
			if(M('tcate')->add(array('name'=>$name))){
				$this->success('添加成功',U(GROUP_NAME . '/Tao/addCate'));
			}else{
				$this->error('添加失败');
			}
		}
		$this->display();
	}
	public function addTao(){
		if(IS_POST){
			$ids = I('post.num_iid');
			$cid = I('post.cid');
			foreach($ids as $k => $v){
				/* if(M('tao')->where(array('num_iid' => $v)->getField('id'))){
					unset($ids[$k]);
				} */
				$list[] = array('num_iid' => $v, 'time' => time(),'cid' => $cid);
			}
			if(isset($list)){
				if(M('tao')->addAll($list)){
					$info['status'] = 1;
					exit(json_encode($info));
				}else{
					$info['status'] = 0;
					exit(json_encode($info));
				}
			}
		}
		$this->cates = M('tcate')->select();
		$this->display();
	}
	public function taos(){
		$k = I('get.name',0,intval);
		$k = M('tcate')->getFieldById($k,name);
		include "./tao/TopSdk.php";
		$appkey = '23196497';
		$secret = 'e387dcc468d478f42d6eaca45144b5f1';
		$c = new TopClient;
		$c->appkey = $appkey;
		$c->secretKey = $secret;
		$req = new TbkItemGetRequest;
		//provcity  small_images
		$req->setFields("num_iid,title,pict_url,reserve_price,zk_final_price,user_type,item_url");
		$req->setPlatform(1);//2 APP
		//$req->setIsTmall("1");//是否为天猫
		//$req->setPageNo(1);//第几页
		//type 卖家类型，0表示集市，1表示商城
		$req->setPageSize(100);
		//"女装"
		$req->setQ($k);
		$resp = $c->execute($req);
		$a = (array)$resp;
		$b = (array)$a['results'];
		$c = (array)$b['n_tbk_item'];
		foreach($c as $k => $v){
			$d[$k] = (array)$v;
		}
		$this->c = $d;
		$this->display();
	}
} 