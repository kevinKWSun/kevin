<?php
/*
 * Author: 上海SUNNY科技
 * Email : 1053577162@qq.com
 * DATE  : 2013-10-01
 */
Class LoginAction extends Action {
    Public function index(){
		$this->display();
    }
	Public function login(){
		if(!IS_AJAX) halt('页面不存在...');
		if(I('code','','md5')!=session('verify')){
			$data['info'] = '验证码错误!';
			$data['status'] = 0;
			$this->ajaxReturn($data, 'json');
		}
		$data = array(
			'username' => I('username')
		);
		$password = md5(I('password').md5(C('TMPL_AUTHOR_NAME')));
		$user = M('user')->where($data)->find();
		if(!$user || $user['password']!=$password){
			$this->error('用户名或密码错误...');
		}else if($user['lock'] == 0){
			$this->error('该用户已被停用,请与管理员联系...');
		}else{
			$data['status'] = 1;
			$data['info'] = '登录成功!';
			$data['url'] = U('Suny/Index/index');
			$datas = array(
				'id' => $user['id'],
				'logintime' => time(),
				'loginip' => get_client_ip(),
			);
			M('user')->save($datas);
			session('uid',$user['id']);
			session('username',$user['username']);
			session('logintime',date('Y-m-d H:i:s',$user['logintime']));
			session('loginip',$user['loginip']);
			$this->ajaxReturn($data, 'json');
			//$this->redirect('Suny/Index/index');
		}
    }
	Public function verify(){
		import('ORG.Util.Image');
		Image::buildImageVerify(4,1,'png',60,25);
    }
}