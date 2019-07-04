<?php
/*
 * Author: 上海SUNNY科技
 * Email : 1053577162@qq.com
 * DATE  : 2013-10-01
 */  
class MemberAction extends CommonAction { 
    public function index(){ 
		$day = M('members')->field('startdate')->where(array('uid'=>session('ss_uid')))->find();
		if(!$day['startdate']){
			echo "<script>alert('您还没有设置瘦身开始日期,请先完善瘦身信息谢谢...');top.window.location.href='/myself.html';</script>";
		}
		$user = M('member')->where(array('uid' => $_SESSION['ss_uid']))->find();
		if($user){
			$this->user = $user;
		}else{
			$this->redirect('/login');
		}
		$score = $user['score'];
		if(150 > $scores && $scores > 100){
			$this->score = '列兵';
		}else if(200 > $score && $score > 150){
			$this->score = '上等兵';
		}else if(300 > $score && $score > 200){
			$this->score = '排长';
		}else if(450 > $score && $score > 300){
			$this->score = '副连长';
		}else if(500 > $score && $score > 450){
			$this->score = '连长';
		}else if(550 > $score && $score > 500){
			$this->score = '副营长';
		}else if(600 > $score && $score > 550){
			$this->score = '营长';
		}else if(650 > $score && $score > 600){
			$this->score = '副团长';
		}else if(700 > $score && $score > 650){
			$this->score = '团长';
		}else if(800 > $score && $score > 700){
			$this->score = '副师长';
		}else if(900 > $score && $score > 800){
			$this->score = '师长';
		}else if(1200 > $score && $score > 900){
			$this->score = '副军长';
		}else if(2000 > $score && $score > 1200){
			$this->score = '军长';
		}else if(5000 > $score && $score > 2000){
			$this->score = '军区司令';
		}else if($score > 5000){
			$this->score = '总司令';
		}
		$this->member = '我的诗诗';
		$ms = M('members')->field('xwm,ywm,dwm,sbwm,dtwm,xtwm,stratweight,mweight,startdate,background,point')->where(array('uid'=>session('ss_uid')))->find();
		$newm = M('newweight')->field('weight')->where(array('uid'=>session('ss_uid')))->order('wtime desc')->find();
		$time = strtotime(date('Y-m-d',time()));
		$startdate = $ms['startdate'];
		if($startdate){
			$this->day = ($time - $startdate) / 3600 / 24;
		}else{
			$this->day = 0;
		}
		$this->weight = $ms['stratweight'] - $newm['weight'];
		$this->bl = ($ms['stratweight'] - $newm['weight']) / ($ms['stratweight'] - $ms['mweight']) * 372;
		$this->ms = $ms;
		$this->newm = $newm;
		$m = M('newweight')->field('weight,wtime')->where(array('uid'=>session('ss_uid')))->order('wtime desc')->limit(30)->select();
		foreach($m as $v){
			$mj[] = array(date('m-d',$v['wtime']));
		}
		foreach($m as $v){
			$wj[] = array(
				'name'=>date('m-d',$v['wtime']),
				'y'=>$v['weight'],
			);
		}
		foreach($m as $v){
			$wm[] = array(
				'name'=>date('m-d',$v['wtime']),
				'y'=>$ms['mweight'],
			);
		}
		$this->mj = json_encode($mj);
		$this->wj = json_encode($wj);
		$this->wm = json_encode($wm);
		$wd = M('newwd')->field('xw,yw,dw,sbw,dtw,xtw,dtime')->where(array('uid'=>session('ss_uid')))->order('dtime desc')->limit(30)->select();
		foreach($wd as $v){
			$sj[] = array(date('m-d',$v['dtime']));
		}
		foreach($wd as $v){
			$xw[] = array(
				'name'=>date('m-d',$v['dtime']),
				'y'=>$v['xw'],
			);
		}
		foreach($wd as $v){
			$yw[] = array(
				'name'=>date('m-d',$v['dtime']),
				'y'=>$v['yw'],
			);
		}
		foreach($wd as $v){
			$dw[] = array(
				'name'=>date('m-d',$v['dtime']),
				'y'=>$v['dw'],
			);
		}
		foreach($wd as $v){
			$sbw[] = array(
				'name'=>date('m-d',$v['dtime']),
				'y'=>$v['sbw'],
			);
		}
		foreach($wd as $v){
			$dtw[] = array(
				'name'=>date('m-d',$v['dtime']),
				'y'=>$v['dtw'],
			);
		}
		foreach($wd as $v){
			$xtw[] = array(
				'name'=>date('m-d',$v['dtime']),
				'y'=>$v['xtw'],
			);
		}
		foreach($wd as $v){
			$xwm[] = array(
				'name'=>date('m-d',$v['wtime']),
				'y'=>$ms['xwm'],
			);
		}
		foreach($wd as $v){
			$ywm[] = array(
				'name'=>date('m-d',$v['wtime']),
				'y'=>$ms['ywm'],
			);
		}
		foreach($wd as $v){
			$dwm[] = array(
				'name'=>date('m-d',$v['wtime']),
				'y'=>$ms['dwm'],
			);
		}
		foreach($wd as $v){
			$sbwm[] = array(
				'name'=>date('m-d',$v['wtime']),
				'y'=>$ms['sbwm'],
			);
		}
		foreach($wd as $v){
			$dtwm[] = array(
				'name'=>date('m-d',$v['wtime']),
				'y'=>$ms['dtwm'],
			);
		}
		foreach($wd as $v){
			$xtwm[] = array(
				'name'=>date('m-d',$v['wtime']),
				'y'=>$ms['xtwm'],
			);
		}
		$this->sj = json_encode($sj);
		$this->xw = json_encode($xw);
		$this->yw = json_encode($yw);
		$this->dw = json_encode($dw);
		$this->sbw = json_encode($sbw);
		$this->dtw = json_encode($dtw);
		$this->xtw = json_encode($xtw);
		$this->xwm = json_encode($xwm);
		$this->ywm = json_encode($ywm);
		$this->dwm = json_encode($dwm);
		$this->sbwm = json_encode($sbwm);
		$this->dtwm = json_encode($dtwm);
		$this->xtwm = json_encode($xtwm);
		$sx = M('time')->where(array('uid'=>session('ss_uid')))->order('times desc')->limit(30)->select();
		foreach($sx as $v){
			$times[] = array(date('m-d',$v['times']));
		}
		foreach($sx as $v){
			$sr[] = array(
				'name'=>date('m-d',$v['times']),
				'y'=>$v['c_1']+$v['c_2']+$v['c_6']+$v['c_7'],
			);
		}
		foreach($sx as $v){
			$xh[] = array(
				'name'=>date('m-d',$v['times']),
				'y'=>$v['c_4'],
			);
		}
		$this->times = json_encode($times);
		$this->sr = json_encode($sr);
		$this->xh = json_encode($xh);
		$this->display();
	} 
	public function messages(){
		$tipArr = array();
		$message = M('message')->where(array('to_uid' => $_SESSION['ss_uid'],'read_time'=>0))->count();
		if($message>0){
			$tipArr['message'] = "短消息: <img src='/Public/Img/new-msg.gif' />　<a href='/mails/fj/2.html' style='color:#f66600;'>".$message."　封新的消息</a>";
		}else{
			$tipArr['message'] = "短消息: 0";
		}
		$this->ajaxReturn($tipArr);
	}
	public function setting(){
		
		$user = D('MemberRelation')->relation(true)->getOne(session('ss_uid'));
		/*if(!$user){
			$this->redirect('/logout');
		}*/
		if($user['startdate']==0){
			$user['startdate'] = time();
			$user['birthday'] =  strtotime('1990-01-01');
		}
		$this->username = session('ss_username');
		$this->member = '个人资料设置';
		$this->user = $user;
		$this->id_1 = explode(',',$user['position']);
		$this->display();
	}
	public function setted(){
		if(!IS_AJAX){
			$data['info'] = '非法操作!!!';
			$data['status'] = 0;
			$this->ajaxReturn($data, 'json');
		}
		$nickname = M('member')->field('nickname')->where(array('uid' => session('ss_uid')))->find();
		if($nickname['nickname'] != I('name')){
			if(M('member')->field('uid')->where(array('nickname' => I('name')))->find()){
				$this->error('昵称已存在，请更换...');
			}
		}		
		if(mb_strlen(I('name')) < 3){
			$data['info'] = '昵称长度不能小于3位!';
			$data['status'] = 0;
			$this->ajaxReturn($data, 'json');
		}
		$m = M('member')->field('score,b_type')->where(array('uid' => session('ss_uid')))->find();
		if($m['b_type']){
			$datas = array(
				'nickname' => I('name'),
				'email' => I('mail'),
				'qq' => I('qqs'),
				'tel' => I('telp'),
				'code' => I('codes'),
				'area' => I('areas'),
				'city' => I('citys'),
				'address' => I('addresses'),
				'sign' => I('signs'),
				'biog' => I('biogs'),
			);
		}else{
			$datas = array(
				'nickname' => I('name'),
				'email' => I('mail'),
				'qq' => I('qqs'),
				'tel' => I('telp'),
				'code' => I('codes'),
				'area' => I('areas'),
				'city' => I('citys'),
				'address' => I('addresses'),
				'sign' => I('signs'),
				'biog' => I('biogs'),
				'score' => $m['score'] + 20,
				'b_type' => 1,
			);
			$b_type = '　<font color="red">积分增加20分</font>';
		}
		$return = M('member')->data($datas)->where(array('uid' => session('ss_uid')))->save();
		if($return){
			$data['status'] = 1;
			$data['info'] = '基本信息设置成功...!' . $b_type;
			$data['url'] = U('/myself');
			$this->ajaxReturn($data, 'json');
		}else{
			$data['info'] = '基本信息没有改变...!';
			$data['status'] = 0;
			$this->ajaxReturn($data, 'json');
		}
	}
	public function soSetted(){
		if(!IS_AJAX){
			$data['info'] = '非法操作!!!';
			$data['status'] = 0;
			$this->ajaxReturn($data, 'json');
		}
		$datas = array(
			'startdate' => strtotime(I('startdates')),
			'stratweight' => I('stratweights'),
			'mweight' => I('mweights'),
			'sex' => I('sexs'),
			'birthday' => strtotime(I('birthdays')),
			'height' => I('heights'),
			'xwm' => I('xwms'),
			'ywm' => I('ywms'),
			'dwm' => I('dwms'),
			'sbwm' => I('sbwms'),
			'dtwm' => I('dtwms'),
			'xtwm' => I('xtwms'),
			'position' => implode(',',I('positions')),
			'style' => implode(',',I('styles')),
			'open' => I('opens',0,'intval'),
			'eatlove' => I('eatloves'),
			'sportlove' => I('sportloves'),
			'time' => time(),
		);
		$s_type = '　<font color="red">积分增加20分</font>';
		$mone = M('members')->field('s_type')->where(array('uid'=>session('ss_uid')))->find();
		if(!$mone['s_type']){
			$datas['s_type'] = 1;
			if(M('members')->where(array('uid'=>session('ss_uid')))->save($datas)){
				M('member')->where(array('uid'=>session('ss_uid')))->setInc('score',20); 
				$this->success('瘦身信息修改成功!' . $s_type,U('/myself'));
			}else{
				$this->error('瘦身信息修改失败...');
			}
		}else{
			if(M('members')->where(array('uid'=>session('ss_uid')))->save($datas)){
				$this->success('瘦身信息修改成功!',U('/myself'));
			}else{
				$this->error('瘦身信息修改失败...');
			}
		}
	}
	public function pwdSetted(){
		if(!IS_AJAX){
			$data['info'] = '非法操作!!!';
			$data['status'] = 0;
			$this->ajaxReturn($data, 'json');
		}
		$password = trim(I('password'));
		$newpwd = trim(I('newpwd'));
		$newpwds = trim(I('newpwds'));
		if(mb_strlen($password) < 6){
			$data['info'] = '密码长度不能小于6位!';
			$data['status'] = 0;
			$this->ajaxReturn($data, 'json');
		}
		if($newpwd != $newpwds){
			$data['info'] = '两次密码不一致!';
			$data['status'] = 0;
			$this->ajaxReturn($data, 'json');
		}
		if($newpwd == $password){
			$data['info'] = '密码没有改变!';
			$data['status'] = 0;
			$this->ajaxReturn($data, 'json');
		}
		$pwd = md5($password.md5(C('TMPL_AUTHOR_NAME')));
		$uid = M('member')->field('uid')->where(array('pwd'=>$pwd))->find();
		if(!$uid){
			$this->error('原密码错误...');
		}
		if(M('member')->where(array('uid'=>session('ss_uid')))->setField('pwd',md5($newpwd.md5(C('TMPL_AUTHOR_NAME'))))){
			$this->success('瘦身信息修改成功!',U('/myself'));
		}else{
			$this->error('瘦身信息修改失败...');
		}
		
	}
	public function pic(){
		header("Content-type: text/html; charset=utf-8"); 
		import('@.ORG.UploadFile');
		$upload = new UploadFile();
		$upload->maxSize = 1024 * 200;
		$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');
		$dirname = './Uploads/' . session('ss_username') .'/';
		if (!is_dir($dirname) && !mkdir($dirname, 0777, true)) {
			//$this->error('附件上传目录不可写');
			echo "<script>alert('附件上传目录不可写');history.go(-1);</script>";
			die;
		}
		$upload->savePath = $dirname;
		if(!$upload->upload()) {
			//$this->error($upload->getErrorMsg());
			echo "<script>alert('",$upload->getErrorMsg(),"');history.go(-1);</script>";
			die;
		}else{
			$info = $upload->getUploadFileInfo();
		}
		if(is_array($info[0]) && !empty($info[0])){
			$uimgpath = $info[0]['savename'];
			M('member')->where(array('uid'=>session('ss_uid')))->setField('uimgpath',$uimgpath);
			//$this->success('上传成功!正在转向主页面...',U('/myself'));
			echo "<script>alert('上传成功');self.location=document.referrer;</script>";
		}else{
			//$this->error('上传失败');
			echo "<script>alert('上传失败');history.go(-1);</script>";
		}
		
	}
	public function bg(){
		$background = I('img',21,'intval');
		$point = I('imgs',1,'intval');
		$data = array('background'=>$background,'point'=>$point);
		if(M('members')->where(array('uid'=>session('ss_uid')))->setField($data)){
			$this->success('进度条背景修改成功!',U('/myself'));
		}else{
			$this->error('进度条背景修改失败...');
		}
		
	}
	public function kll(){
		$this->member = '摄入消耗';
		$this->display();
	}
	public function addDiary(){
		if(!IS_AJAX){
			//$this->error('非法操作...');
			echo "<script>alert('非法操作...');history.go(-1);</script>";
			die;
		}
		$time = strtotime(date('Y-m-d',time()));
		if(!M('time')->where(array('uid'=>session('ss_uid'),'times'=>$time))->find()){
			if($tid = M('time')->add(array('times'=>$time,'uid'=>session('ss_uid')))){
				import('Class.Cart', APP_PATH);//早餐
				$cart=new Cart();
				$lists = $cart->getCart();
				$list = $lists[item];
				$liste = array_slice($lists,1,2);
				$c_1 = $liste['total_price'] ? $liste['total_price'] : 0;
				foreach($list as $v){
					M('diary')->add(array('pid'=>$v['id'],'name'=>$v['name'],'unit'=>$v['unit'],'num'=>$v['num'],'cal'=>$v['price']*$v['num'],'cate'=>1,'time'=>$tid));
				}
				import('Class.Cart2', APP_PATH);//晚餐
				$cart=new Cart2();
				$lists = $cart->getCart();
				$list = $lists[item];
				$liste = array_slice($lists,1,2);
				$c_2 = $liste['total_price'] ? $liste['total_price'] : 0;
				foreach($list as $v){
					M('diary')->add(array('pid'=>$v['id'],'name'=>$v['name'],'unit'=>$v['unit'],'num'=>$v['num'],'cal'=>$v['price']*$v['num'],'cate'=>2,'time'=>$tid));
				}
				import('Class.Cart4', APP_PATH);//消耗
				$cart=new Cart4();
				$lists = $cart->getCart();
				$list = $lists[item];
				$liste = array_slice($lists,1,2);
				$c_4 = $liste['total_price'] ? $liste['total_price'] : 0;
				foreach($list as $v){
					M('diary')->add(array('pid'=>$v['id'],'name'=>$v['name'],'unit'=>$v['unit'],'num'=>$v['num'],'cal'=>$v['price']*$v['num'],'cate'=>4,'time'=>$tid));
				}
				import('Class.Cart6', APP_PATH);//午餐
				$cart=new Cart6();
				$lists = $cart->getCart();
				$list = $lists[item];
				$liste = array_slice($lists,1,2);
				$c_6 = $liste['total_price'] ? $liste['total_price'] : 0;
				foreach($list as $v){
					M('diary')->add(array('pid'=>$v['id'],'name'=>$v['name'],'unit'=>$v['unit'],'num'=>$v['num'],'cal'=>$v['price']*$v['num'],'cate'=>6,'time'=>$tid));
				}
				import('Class.Cart7', APP_PATH);//零食
				$cart=new Cart7();
				$lists = $cart->getCart();
				$list = $lists[item];
				$liste = array_slice($lists,1,2);
				$c_7 = $liste['total_price'] ? $liste['total_price'] : 0;
				foreach($list as $v){
					M('diary')->add(array('pid'=>$v['id'],'name'=>$v['name'],'unit'=>$v['unit'],'num'=>$v['num'],'cal'=>$v['price']*$v['num'],'cate'=>7,'time'=>$tid));
				}
				M('time')->where(array('uid'=>session('ss_uid'),'times'=>$time))->save(array('c_1'=>$c_1,'c_2'=>$c_2,'c_4'=>$c_4,'c_6'=>$c_6,'c_7'=>$c_7));
				$this->success('保存成功!',U('/diary'));
			}else{
				$this->error('保存失败!');
			}
		}else{
			$this->error('今天的数据已存在，如果要更新请先删除已存在的内容!');
		}
	}
	public function diary(){
		$this->member = '我的日记';
		import('Page.Page', APP_PATH);
		$count = D('DiaryRelation')->relation(true)->where(array('uid'=>session('ss_uid')))->order('tid desc')->count();
		$Page = new Page($count,7); 
		$show = $Page->show(); 
		$diary = D('DiaryRelation')->relation(true)->page(I('p',1,'intval').',7')->where(array('uid'=>session('ss_uid')))->order('tid desc')->select();
		$this->page = $show;
		$this->diary = $diary;
		$day = M('members')->field('startdate,stratweight,sex,height,birthday')->where(array('uid'=>session('ss_uid')))->find();
		if(!$day['startdate']){
			echo "<script>alert('您还没有设置瘦身开始日期,请先完善瘦身信息谢谢...');top.window.location.href='/myself.html';</script>";
		}
		$this->day = $day;
		$sex = $day['sex'];
		$age = date('Y',time())-date('Y',$day['birthday']);
		$weight = $day['stratweight'];
		$height = $day['height'];
		if($sex=='1'){
			$this->bmr = 66 + 13.7 * $weight + (5 * $height - 6.8 * $age);
		}else if($sex=='0'){
			$this->bmr = 655 + 9.6 * $weight + (1.7 * $height - 4.7 * $age);
		}
		$this->display();
	}
	public function delDiary(){
		if(!IS_AJAX){
			echo "<script>alert('非法操作...');history.go(-1);</script>";
			die;
		}
		$id = I('id',0,'intval');
		if($id){
			if(M('time')->where(array('id'=>$id))->delete()){
				M('diary')->where(array('time'=>$id))->delete();
				$this->success('删除成功...',U('/diary'));
			}else{
				$this->error('删除失败...');
			}
		}else{
			echo "<script>alert('非法操作...');history.go(-1);</script>";
		}
	}
	public function speed(){
		$day = M('members')->field('startdate,stratweight,sex,height,birthday')->where(array('uid'=>session('ss_uid')))->find();
		if(!$day['startdate']){
			echo "<script>alert('您还没有设置瘦身开始日期,请先完善瘦身信息谢谢...');top.window.location.href='/myself.html';</script>";
		}
		$this->member = '瘦身进度曲线图';
		$ms = M('members')->field('xwm,ywm,dwm,sbwm,dtwm,xtwm,stratweight,mweight,startdate,background,point')->where(array('uid'=>session('ss_uid')))->find();
		$newm = M('newweight')->field('weight')->where(array('uid'=>session('ss_uid')))->order('wtime desc')->find();
		$time = strtotime(date('Y-m-d',time()));
		$startdate = $ms['startdate'];
		if($startdate){
			$this->day = ($time - $startdate) / 3600 / 24;
		}else{
			$this->day = 0;
		}
		$this->weight = $ms['stratweight'] - $newm['weight'];
		$this->bl = ($ms['stratweight'] - $newm['weight']) / ($ms['stratweight'] - $ms['mweight']) * 372;
		$this->ms = $ms;
		$this->newm = $newm;
		$m = M('newweight')->field('weight,wtime')->where(array('uid'=>session('ss_uid')))->order('wtime desc')->limit(30)->select();
		foreach($m as $v){
			$mj[] = array(date('m-d',$v['wtime']));
		}
		foreach($m as $v){
			$wj[] = array(
				'name'=>date('m-d',$v['wtime']),
				'y'=>$v['weight'],
			);
		}
		foreach($m as $v){
			$wm[] = array(
				'name'=>date('m-d',$v['wtime']),
				'y'=>$ms['mweight'],
			);
		}
		$this->mj = json_encode($mj);
		$this->wj = json_encode($wj);
		$this->wm = json_encode($wm);
		$wd = M('newwd')->field('xw,yw,dw,sbw,dtw,xtw,dtime')->where(array('uid'=>session('ss_uid')))->order('dtime desc')->limit(30)->select();
		foreach($wd as $v){
			$sj[] = array(date('m-d',$v['dtime']));
		}
		foreach($wd as $v){
			$xw[] = array(
				'name'=>date('m-d',$v['dtime']),
				'y'=>$v['xw'],
			);
		}
		foreach($wd as $v){
			$yw[] = array(
				'name'=>date('m-d',$v['dtime']),
				'y'=>$v['yw'],
			);
		}
		foreach($wd as $v){
			$dw[] = array(
				'name'=>date('m-d',$v['dtime']),
				'y'=>$v['dw'],
			);
		}
		foreach($wd as $v){
			$sbw[] = array(
				'name'=>date('m-d',$v['dtime']),
				'y'=>$v['sbw'],
			);
		}
		foreach($wd as $v){
			$dtw[] = array(
				'name'=>date('m-d',$v['dtime']),
				'y'=>$v['dtw'],
			);
		}
		foreach($wd as $v){
			$xtw[] = array(
				'name'=>date('m-d',$v['dtime']),
				'y'=>$v['xtw'],
			);
		}
		foreach($wd as $v){
			$xwm[] = array(
				'name'=>date('m-d',$v['wtime']),
				'y'=>$ms['xwm'],
			);
		}
		foreach($wd as $v){
			$ywm[] = array(
				'name'=>date('m-d',$v['wtime']),
				'y'=>$ms['ywm'],
			);
		}
		foreach($wd as $v){
			$dwm[] = array(
				'name'=>date('m-d',$v['wtime']),
				'y'=>$ms['dwm'],
			);
		}
		foreach($wd as $v){
			$sbwm[] = array(
				'name'=>date('m-d',$v['wtime']),
				'y'=>$ms['sbwm'],
			);
		}
		foreach($wd as $v){
			$dtwm[] = array(
				'name'=>date('m-d',$v['wtime']),
				'y'=>$ms['dtwm'],
			);
		}
		foreach($wd as $v){
			$xtwm[] = array(
				'name'=>date('m-d',$v['wtime']),
				'y'=>$ms['xtwm'],
			);
		}
		$this->sj = json_encode($sj);
		$this->xw = json_encode($xw);
		$this->yw = json_encode($yw);
		$this->dw = json_encode($dw);
		$this->sbw = json_encode($sbw);
		$this->dtw = json_encode($dtw);
		$this->xtw = json_encode($xtw);
		$this->xwm = json_encode($xwm);
		$this->ywm = json_encode($ywm);
		$this->dwm = json_encode($dwm);
		$this->sbwm = json_encode($sbwm);
		$this->dtwm = json_encode($dtwm);
		$this->xtwm = json_encode($xtwm);
		$sx = M('time')->where(array('uid'=>session('ss_uid')))->order('times desc')->limit(30)->select();
		foreach($sx as $v){
			$times[] = array(date('m-d',$v['times']));
		}
		foreach($sx as $v){
			$sr[] = array(
				'name'=>date('m-d',$v['times']),
				'y'=>$v['c_1']+$v['c_2']+$v['c_6']+$v['c_7'],
			);
		}
		foreach($sx as $v){
			$xh[] = array(
				'name'=>date('m-d',$v['times']),
				'y'=>$v['c_4'],
			);
		}
		$this->times = json_encode($times);
		$this->sr = json_encode($sr);
		$this->xh = json_encode($xh);
		$this->display();
	}
	public function newweight(){
		if(!IS_AJAX){
			echo "<script>alert('非法操作...');history.go(-1);</script>";
			die;
		}
		$datas = array(
			'uid'=> session('ss_uid'),
			'weight' => I('newweight'),
			'wtime' => strtotime(I('ttime')),
		);
		if($id = M('newweight')->field('wid')->where(array('uid'=>session('ss_uid'),'wtime'=>strtotime(I('ttime'))))->find()){
			if(M('newweight')->where(array('wid'=>$id['wid']))->setField('weight',I('newweight'))){
				$this->success('记录修改成功!',U('/speed'));
			}else{
				$this->error('记录修改失败!');
			}
			
		}else{
			if(M('newweight')->add($datas)){
				$this->success('记录成功!',U('/speed'));
			}else{
				$this->error('记录失败!');
			}
		}
	}
	public function newwd(){
		if(!IS_AJAX){
			echo "<script>alert('非法操作...');history.go(-1);</script>";
			die;
		}
		$datas = array(
			'uid'=> session('ss_uid'),
			'xw' => I('xw'),
			'yw' => I('yw'),
			'dw' => I('dw'),
			'sbw' => I('sbw'),
			'dtw' => I('dtw'),
			'xtw' => I('xtw'),
			'dtime' => strtotime(I('wdtime')),
		);
		if($id = M('newwd')->field('did')->where(array('uid'=>session('ss_uid'),'dtime'=>strtotime(I('wdtime'))))->find()){
			if(M('newwd')->where(array('did'=>$id['did']))->save($datas)){
				$this->success('记录修改成功!',U('/speed'));
			}else{
				$this->error('记录修改失败!');
			}
			
		}else{
			if(M('newwd')->add($datas)){
				$this->success('记录成功!',U('/speed'));
			}else{
				$this->error('记录失败!');
			}
		}
	}
	public function message(){
		
		$this->member = '留言本';
		$this->display();
	}
	public function mails(){
		$this->member = '消息中心';
		$p = I('p',1,'intval');
		$fj = I('fj',1,'intval');
		$ms = D('MessageRelation');
		$mf = D('MessagefRelation');
		import('Page.Pages', APP_PATH);
		if($fj == 1){
			$count = $ms->relation(true)->where(array('to_uid' => session('ss_uid')))->count();
			$this->messages = $ms->relation(true)->where(array('to_uid' => session('ss_uid')))->page($p.',15')->select();
		}else if($fj == 2){
			$count = $ms->relation(true)->where(array('to_uid' => session('ss_uid'),'read_time' => 0))->count();
			$this->messages = $ms->relation(true)->where(array('to_uid' => session('ss_uid'),'read_time' => 0))->page($p.',15')->select();
		}else if($fj == 3){
			$count = $mf->relation(true)->where(array('uid' => session('ss_uid')))->count();
			$this->messages = $mf->relation(true)->where(array('uid' => session('ss_uid')))->page($p.',15')->select();
		}
		$Page = new Page($count,15);
		$this->page = $Page->show();
		$this->fjx = $fj;
		$this->display();
	}
	public function view(){
		$id = I('id',0,'intval');
		$user_id = session('ss_uid');
		$f = I('f',0,'intval');
		if($f){
			if($id && $user_id){
				$views = D('MessagefRelation')->relation(true)->where(array('id'=>$id,'uid'=>$user_id))->find();
			}
		}else{
			if($id && $user_id){
				$views = D('MessageRelation')->relation(true)->where(array('id'=>$id,'to_uid'=>$user_id))->find();
				if(!$views['read_time']){
					M('message')->where(array('id'=>$id))->setField('read_time',time());
				}
			}
		}
		$this->name = session('ss_username');
		$this->views = $views;
		$this->f = $f;
		$this->display();
    }
	public function delM(){
		$id = I('id',0,'intval');
		$ids = I('checkbox');
		if($id){
			if(M('message')->where(array('id'=>$id))->delete()){ 
				$this->success('删除成功!',U('/mails'));
			}else{
				$this->error('删除失败!');
			}
		}else if(!empty($ids)){
			$return = false;
			foreach($ids as $id){
				$savereutrn =  M('message')->where(array('id'=>$id))->delete();
				$return = $savereutrn || $return;
			}
			if($return){
				$this->success('删除成功!',U('/mails'));
			}else{
				$this->error('删除失败!');
			}
		}else{
			$this->error('删除失败!');
		}
    }
	//send mails
	public function send(){
		$id = I('id',0,'intval');
		$h = I('h',0,'intval');
		$user_id = session('ss_uid');
		if($id && $h==1){
			$views = D('MessageRelation')->relation(true)->where(array('id'=>$id,'to_uid'=>$user_id))->find();
			$this->views = $views;
			$this->hf = '回复：';
			$this->h = $h;
			$this->id = $id;
		}else if($id && $h==2){
			$views = M('member')->field('uname')->where(array('uid'=>$id))->find();
			$this->views = $views;
			$this->h = $h;
		}
		$this->display();
	}
	public function addhfSend(){
		if(!IS_AJAX){
			echo "<script>alert('非法操作...');history.go(-1);</script>";
			die;
		}
		$toname = I('toname');
		$m = M('member')->field('uid')->where(array('uname'=>$toname))->find();
		if(!$m['uid']||!$toname){
			$this->error('该用户不存在...');
		}
		$to_user_id = I('to_user_id');
		$title = I('title');
		$content = I('content');
		$id = I('id');
		if($to_user_id != session('ss_uid')){
			$datas = array(
				'uid' => session('ss_uid'),
				'title' => $title,
				'content' => $content,
				'to_uid' => $to_user_id,
				'send_time' => time(),
			);
			if(M('message')->add($datas)){
				M('message')->where(array('id'=>$id))->setField('type','1');
				$this->success('回复成功!',U('/mails'));
			}else{
				$this->error('回复失败!');
			}
		}else{
			$this->error('不能回复自己!');
		}
				
    }
	public function sendMail(){
		if(!IS_AJAX){
			echo "<script>alert('非法操作...');history.go(-1);</script>";
			die;
		}
		$toname = I('toname');
		$m = M('member')->field('uid')->where(array('uname'=>$toname))->find();
		if(!$m['uid']){
			$this->error('该用户不存在...');
		}else if($m['uid'] == session('ss_uid')){
			$this->error('不能发送给自己...');
		}else{
			$datas = array(
				'uid' => session('ss_uid'),
				'title' => I('title'),
				'content' => I('content'),
				'to_uid' => $m['uid'],
				'send_time' => time(),
			);
			if(M('message')->add($datas)){
				$this->success('发送成功...',U('/mails'));
			}else{
				$this->error('发送失败...');
			}
		}
	}
	public function friends(){
		$this->member = '好友中心';
		$this->display();
	}
	public function collect(){
		$this->member = '收藏夹';
		$this->display();
	}
	public function ranking(){
		$this->member = '瘦身排行榜';
		import('Page.Pager', APP_PATH);
		$p = I('p',1,'intval');
		$count = D('RankingRelation')->field('uid,uimgpath,uname,nickname,sign,biog,qq_status')->relation(true)->where(array('mstatus'=>1))->count();
		$rank = D('RankingRelation')->field('uid,uimgpath,uname,nickname,sign,biog,qq_status')->relation(true)->where(array('mstatus'=>1))->page($p.',15')->select();
		$Page = new Page($count,15);
		foreach($rank as $v){
			$data[] = array(
				'uid' => $v['uid'],
				'sex' => $v['sex'],
				'uimgpath' => $v['uimgpath'],
				'uname' => $v['uname'],
				'nickname' => $v['nickname'],
				'sign' => $v['sign'],
				'biog' => $v['biog'],
				'stratweight' => $v['stratweight'],
				'qq_status' => $v['qq_status'],
				'newweight' => M('newweight')->field('weight')->where(array('uid'=>$v['uid']))->order('wtime desc')->find(),
			);
		}
		$this->datas = $data;
		$this->page = $Page->show();
		$this->display();
	}
	public function present(){
		$this->member = '赠送礼物';
		$this->display();
	}
} 