<?php
/*
 * Author: 上海SUNNY科技
 * Email : 1053577162@qq.com
 * DATE  : 2013-10-01
 */ 
Class CacheAction extends CommonAction {
	Public function index(){  
		$caches = array(  
            'IndexCache' => array('name' => '网站前台缓存文件', 'path' => WEB_ROOT . RUNTIME_PATH . 'Cache/Index'),
			'FlistCache' => array('name' => '网站前台食物缓存文件', 'path' => WEB_ROOT . RUNTIME_PATH . 'Cache/Flist'),
            'SunyCache' => array('name' => '网站后台缓存文件', 'path' => WEB_ROOT . RUNTIME_PATH . 'Cache/Suny'),
			'CalorieCache' => array('name' => '应用卡路里缓存文件', 'path' => WEB_ROOT . RUNTIME_PATH . 'Cache/Calorie'),
            'WebData' => array('name' => '网站数据库字段缓存文件', 'path' => WEB_ROOT . RUNTIME_PATH . 'Data/'),
            'WebLog' => array('name' => '网站前台日志缓存文件', 'path' => WEB_ROOT . RUNTIME_PATH . 'Logs/'),
            //'Indexruntime' => array('name' => '网站前台runtime.php缓存文件', 'path' => WEB_ROOT . RUNTIME_PATH . 'Cache/Index/~runtime.php'),
            //'Sunyruntime' => array('name' => '网站后台runtime.php缓存文件', 'path' => WEB_ROOT . RUNTIME_PATH . 'Cache/Suny/~runtime.php'),
            'IndexFiles' => array('name' => '网站前台首页缓存文件', 'path' => WEB_ROOT . RUNTIME_PATH . 'Temp/'),
			'ShowFiles' => array('name' => '网站前台文章静态文件', 'path' => WEB_ROOT . 'Index/html/'),
        );
		if (IS_POST) {
            foreach ($_POST['cache'] as $path) {
                if (isset($caches[$path])){
                    D('Cache')->del($caches[$path]['path']);
				}
            }
            $this->success('删除成功',U(GROUP_NAME . '/Cache/index'));
        } else {
            $this->caches = $caches;
            $this->display();
        }
	}
	
}
