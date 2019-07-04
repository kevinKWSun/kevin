<?php
/*
 * Author: 上海SUNNY科技
 * Email : 1053577162@qq.com
 * DATE  : 2013-10-01
 */
class RegAction extends Action {
    public function index(){
		$this->display();
	}
	public function regs(){
		if(!IS_AJAX) halt('页面不存在...');
		if(I('code','','md5')!=session('verify')){
			$data['info'] = '验证码错误!';
			$data['status'] = 0;
			$this->ajaxReturn($data, 'json');
		}
		$password = I('password');
		$password2 = I('password2');
		$username = I('username');
		$email = I('email');
		$sex = I('sex');
		if(mb_strlen($username) < 3){
			$data['info'] = '用户名长度不能小于3位!';
			$data['status'] = 0;
			$this->ajaxReturn($data, 'json');
		}
		if(mb_strlen($password) < 6){
			$data['info'] = '密码长度不能小于6位!';
			$data['status'] = 0;
			$this->ajaxReturn($data, 'json');
		}
		if($password != $password2){
			$data['info'] = '两次密码不一致!';
			$data['status'] = 0;
			$this->ajaxReturn($data, 'json');
		}
		$datas = array(
			'uname' => $username,
			'pwd' => md5($password.md5(C('TMPL_AUTHOR_NAME'))),
			'email' => $email,
			'reg_ip' => get_client_ip(),
			'reg_time' => time(),
			'mstatus' => 1,
		);
		
		$usernames = M('member')->where(array('uname' =>$username))->find();
		$useremail = M('member')->where(array('email' =>$email))->find();
		if($usernames){
			$data['info'] = '用户名已存在!';
			$data['status'] = 0;
			$this->ajaxReturn($data, 'json');
		}else if($useremail){
			$data['info'] = '该邮箱已被注册!';
			$data['status'] = 0;
			$this->ajaxReturn($data, 'json');
		}else{
			$data['status'] = 1;
			$data['info'] = '注册成功,正在转向登录页面...';
			$data['url'] = U('/login');
			$m = M('member')->add($datas);
			M('members')->filter('strip_tags')->add(array('uid' => $m, 'sex' => $sex));
			$message = array(
				'uid' => 1,
				'title' => '欢迎您来到诗诗瘦身网!',
				'content' => "亲爱的".$username."：<br>
　　您好，欢迎您来到诗诗瘦身网，成为诗诗的新宝宝——诗诗是中国最温馨的免费瘦身网站哦！<br>
这是您的诗诗账号，用户名：".$username."，密码：".$password." 。请牢记...<br>
为了您瘦身数据的可靠性，请尽快完善您的基本信息和瘦身信息。这样您的瘦身数据会更准确哦。[ <a href='/myself.html'>完善个人资料</a> ]<br>
现在就开始你在诗诗的快乐瘦身之旅吧，期待一个更完美的自己！",
				'to_uid' => $m,
				'send_time' => time(),
			);
			M('message')->add($message);
			$this->ajaxReturn($data, 'json');
		}
	}
} 