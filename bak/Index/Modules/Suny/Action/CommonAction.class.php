<?php
// 后台
Class CommonAction extends Action {
    Public function _initialize(){
		 if(!isset($_SESSION['uid']) || !isset($_SESSION['username'])){
			$this->redirect('Suny/Login/index');
		}
    }
	
}