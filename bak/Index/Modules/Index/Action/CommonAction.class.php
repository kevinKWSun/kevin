<?php
/*
 * Author: 上海SUNNY科技
 * Email : 1053577162@qq.com
 * DATE  : 2013-10-01
 */
Class CommonAction extends Action {
    Public function _initialize(){
		 if(!isset($_SESSION['ss_uid']) || !isset($_SESSION['ss_username'])){
			//$this->redirect('/login');
			//header("Content-type: text/html; charset=utf-8");
			//echo "<script>alert('请先登录哦...');top.window.location.href='/login.html';</script";
			$this->error('您还没有登录或登录过期，请重新登录...','/login.html');
		}
    }
}