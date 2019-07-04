<?php
/*
 * Author: 上海SUNNY科技
 * Email : 1053577162@qq.com
 * DATE  : 2013-10-01
 */
Class IndexAction extends CommonAction {
	Public function index(){
		$this->display();
	}
    Public function info(){
		if (function_exists('gd_info')) {
            $gd = gd_info();
            $gd = $gd['GD Version'];
        } else {
            $gd = "不支持";
        }
        $this->info = array(
            '操作系统' => PHP_OS,
            '主机名IP端口' => $_SERVER['SERVER_NAME'] . ' (' . $_SERVER['SERVER_ADDR'] . ':' . $_SERVER['SERVER_PORT'] . ')',
            '运行环境' => $_SERVER["SERVER_SOFTWARE"],
            'PHP运行方式' => php_sapi_name(),
            '程序目录' => WEB_ROOT,
            'MYSQL版本' => function_exists("mysql_close") ? mysql_get_client_info() : '不支持',
            'GD库版本' => $gd,
            'MYSQL版本' => mysql_get_server_info(),
            '上传附件限制' => ini_get('upload_max_filesize'),
            '执行时间限制' => ini_get('max_execution_time') . "秒",
            '剩余空间' => round((@disk_free_space(".") / (1024 * 1024)), 2) . 'M',
            '服务器时间' => date("Y年n月j日 H:i:s"),
            '北京时间' => gmdate("Y年n月j日 H:i:s", time() + 8 * 3600),
            '采集函数检测' => ini_get('allow_url_fopen') ? '支持' : '不支持',
            'register_globals' => get_cfg_var("register_globals") == "1" ? "ON" : "OFF",
            'magic_quotes_gpc' => (1 === get_magic_quotes_gpc()) ? 'YES' : 'NO',
            'magic_quotes_runtime' => (1 === get_magic_quotes_runtime()) ? 'YES' : 'NO',
        );
		$this->display();
    }
	Public function webinfo(){
		$this->display();
	}
	Public function updateWebinfo(){
		if(F('webinfo',$_POST,CONF_PATH)){
			$this->success('修改成功',U(GROUP_NAME . '/Index/webinfo'));
		}else{
			$this->error('修改失败,请修' . CONF_PATH . 'webinfo.php的权限');
		}
	}
	Public function advert(){
		$this->display();
	}
	Public function updateAdvert(){
		if(F('advert',$_POST,CONF_PATH)){
			$this->success('修改成功',U(GROUP_NAME . '/Index/advert'));
		}else{
			$this->error('修改失败,请修' . CONF_PATH . 'advert.php的权限');
		}
	}
	Public function email(){
		$this->display();
	}
	Public function updateEmail(){
		if(F('email',$_POST,CONF_PATH)){
			$this->success('修改成功',U(GROUP_NAME . '/Index/email'));
		}else{
			$this->error('修改失败,请修' . CONF_PATH . 'email.php的权限');
		}
	}
	Public function logout(){
		session_unset();
		session_destroy();
		$this->redirect('Suny/Login/index');
    }
	Public function water(){
		$this->display();
	}
	Public function updateWater(){
		if(F('water',$_POST,CONF_PATH)){
			$this->success('修改成功',U(GROUP_NAME . '/Index/water'));
		}else{
			$this->error('修改失败,请修' . CONF_PATH . 'water.php的权限');
		}
	}
}