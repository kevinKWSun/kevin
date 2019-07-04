<?php
/*
 * Author: 上海SUNNY科技
 * Email : 1053577162@qq.com
 * DATE  : 2013-10-01
 */  
class LoginAction extends Action {
    public function index(){
		if(isset($_SESSION['ss_uid']) || isset($_SESSION['ss_username'])){
			$this->redirect('/myself');
		}
		$this->display();
	}
	Public function logins(){
		if(!IS_AJAX) halt('页面不存在...');
		if(I('code','','md5')!=session('verify')){
			$this->error('验证码错误...');
		}
		$uname = I('username');
		$pwd = md5(I('password').md5(C('TMPL_AUTHOR_NAME')));
		$mstatus = 1;
		$user = M('member')->where(array('uname' => $uname))->find();
		if(!$user || $user['pwd']!=$pwd){
			$this->error('用户名或密码错误...');
		}else if($user['mstatus'] == 0){
			$this->error('该用户已被停用,请与管理员联系...');
		}else{
			$scores = $user['score'] + 2;
			$login = $user['login'] + 1;
			$last_login_time = date('Ymd',$user['last_login_time']);
			if($last_login_time == date('Ymd',time())){
				$datas = array(
					'uid' => $user['uid'],
					'login' => $login,
					'last_login_ip' => get_client_ip(),
					'last_login_time' => time(),
				);
			}else{
				$datas = array(
					'uid' => $user['uid'],
					'login' => $login,
					'score' => $scores,
					'last_login_ip' => get_client_ip(),
					'last_login_time' => time(),
				);
			}
			if(M('member')->save($datas)){
				session('ss_uid',$user['uid']);
				session('ss_username',$user['uname']);
				$this->success('登录成功...',U('/oneself'));
			}else{
				$this->error('登录失败...');
			}
		}
    }
	Public function logout(){
		unset($_SESSION['ss_uid']);
		unset($_SESSION['ss_username']);
		$this->redirect('/');
    }
	Public function verify(){
		import('ORG.Util.Image');
		Image::buildImageVerify(6,1,'png',80,25);
    }
	//登录地址
	public function login_s(){
		$type = I('type');
		empty($type) && $this->error('参数错误');
		import('SDK.SunyOauth', APP_PATH);
		$sns  = SunyOauth::getInstance($type);
		//跳转到授权页面
		redirect($sns->getRequestCodeURL());
	}
	//授权回调地址
	public function callback($type = null, $code = null){
		(empty($type) || empty($code)) && $this->error('参数错误');
		//加载SunyOauth类并实例化一个对象
		import('SDK.SunyOauth', APP_PATH);
		$sns  = SunyOauth::getInstance($type);
		//腾讯微博需传递的额外参数
		$extend = null;
		if($type == 'tencent'){
			$extend = array('openid' => $this->_get('openid'), 'openkey' => $this->_get('openkey'));
		}
		//请妥善保管这里获取到的Token信息，方便以后API调用
		//调用方法，实例化SDK对象的时候直接作为构造函数的第二个参数传入
		//如： $qq = SunyOauth::getInstance('qq', $token);
		$token = $sns->getAccessToken($code , $extend);
		//获取当前登录用户信息
		if(is_array($token)){
			$user_info = A('Type', 'Event')->$type($token);
			$openid = $token['openid'];
			$nickname = $user_info['name'];
			if($user_info['sex'] == '男'){
				$gender = 1;
			}else if($user_info['sex'] == '女'){
				$gender = 0;
			}else{
				$gender = '';
			}
			$uimgpath = '100';
			if(!isset($_SESSION['ss_uid']) || !isset($_SESSION['ss_username'])){
				Load('extend');
				$uname = 'ss_' . rand_string(8,3);
				$password = rand_string(6);
				$pwd = md5($password.md5(C('TMPL_AUTHOR_NAME')));
				$user = array(
					'uname' => $uname,
					'uimgpath' => $uimgpath,
					'nickname' => $nickname,
					'pwd' => $pwd,
					'mstatus' => 1,
					'qq_status' => $openid,
					'reg_ip' => get_client_ip(),
					'reg_time' => time(),
				);
				$uid = M('member')->field('uid,uname,score,login,last_login_time')->where(array('qq_status'=>$openid))->find();
				if($uid){
					$scores = $uid['score'] + 2;
					$login = $uid['login'] + 1;
					$last_login_time = date('Ymd',$uid['last_login_time']);
					if($last_login_time == date('Ymd',time())){
						$datas = array(
							'uid' => $uid['uid'],
							'login' => $login,
							'last_login_ip' => get_client_ip(),
							'last_login_time' => time(),
						);
					}else{
						$datas = array(
							'uid' => $uid['uid'],
							'login' => $login,
							'score' => $scores,
							'last_login_ip' => get_client_ip(),
							'last_login_time' => time(),
						);
					}
					M('member')->save($datas);
					session('ss_uid',$uid['uid']);
					session('ss_username',$uid['uname']);
					$this->success('成功登录!正在转向...',U('/myself'));
				}else{
					if($regid = M('member')->add($user)){
						M('members')->filter('strip_tags')->add(array('uid' => $regid, 'sex' => $gender));
						$message = array(
							'uid' => 1,
							'title' => '欢迎您来到诗诗瘦身网!',
							'content' => "亲爱的".$uname."：<br>
			　　您好，欢迎您来到诗诗瘦身网，成为诗诗的新宝宝——诗诗是中国最温馨的免费瘦身网站哦！<br>
			这是您的诗诗账号，用户名：".$username."，密码：".$password." 。请牢记...<br>
			为了您瘦身数据的可靠性，请尽快完善您的基本信息和瘦身信息。这样您的瘦身数据会更准确哦。[ <a href='/myself.html'>完善个人资料</a> ]<br>
			现在就开始你在诗诗的快乐瘦身之旅吧，期待一个更完美的自己！",
							'to_uid' => $regid,
							'send_time' => time(),
						);
						M('message')->add($message);
						$reg = M('member')->field('uid,uname,score,login,last_login_time')->where(array('uid'=>$regid))->find();
						$scores = $reg['score'] + 2;
						$login = $reg['login'] + 1;
						$last_login_time = date('Ymd',$reg['last_login_time']);
						if($last_login_time == date('Ymd',time())){
							$datas = array(
								'uid' => $reg['uid'],
								'login' => $login,
								'last_login_ip' => get_client_ip(),
								'last_login_time' => time(),
							);
						}else{
							$datas = array(
								'uid' => $reg['uid'],
								'login' => $login,
								'score' => $scores,
								'last_login_ip' => get_client_ip(),
								'last_login_time' => time(),
							);
						}
						M('member')->save($datas);
						session('ss_uid',$reg['uid']);
						session('ss_username',$reg['uname']);
						$this->success('登录成功!正在转向...',U('/myself'));
					}
				}
			}
			//over
			
		}
	}
} 