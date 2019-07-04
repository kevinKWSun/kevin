<?php
define('URL_CALLBACK', 'http://slim.shaiyy.com/callback?type=');
return array(
	//'配置项'=>'配置值'
	'APP_GROUP_LIST' => 'Index,Suny,Flist,Calorie,Taob',
	'DEFAULT_GROUP' => 'Index',
	'APP_GROUP_MODE' => 1,
	'TMPL_FILE_DEPR' => '_',//模板路径
	//数据库链接
	'DB_TYPE'   => 'mysqli', // 数据库类型
	'DB_HOST'   => 'localhost', // 服务器地址
	'DB_NAME'   => 'slim', // 数据库名
	'DB_USER'   => 'root', // 用户名
	'DB_PWD'    => '123546', // 密码
	'DB_PORT'   => 3306, // 端口
	'DB_PREFIX' => 'sun_',
	'URL_MODEL' => 2,
	//点语法默认解析 - 加快模板的解析以数组为例
	'TEMP_VAR_IDENTIFY' =>'array',
	//默认过滤函数新版本已有此定义
	//'DEFAULT_FILTER' => 'htmlspecialchars',
	//指定错误页面模板路径
	//'TMPL_EXCEPTION_FILE' => './Public/Tpl/error.html',
	'TMPL_AUTHOR_NAME' => 'suny',
	//'SHOW_PAGE_TRACE' =>TRUE,
	'LOAD_EXT_CONFIG' => 'water,webinfo,advert',
	'URL_HTML_SUFFIX'=>'.html',
	'COOKIE_EXPIRE'=>72000,                // Cookie有效期

	'COOKIE_DOMAIN'=>'.shaiyy.com',//$_SERVER['HTTP_HOST'],        // Cookie有效域名
	
	'COOKIE_PATH'=>'/',                        // Cookie路径
	
	'COOKIE_PREFIX'=>'shaiyy_',           // Cookie前缀 避免冲突
	/*'URL_ROUTER_ON' => TRUE,
	'URL_ROUTE_RULES' => array(
		//'list/:id' => 'Index/List/index',
		'/^list_(\d+)$/' => 'Index/List/index?id=:1',
		':id\d' => 'Index/Show/index',
	),*/
	'URL_ROUTER_ON' => TRUE,
	'URL_ROUTE_RULES' => array(
		'list' => 'Index/List/',
		':id\d' => 'Index/Show/index',
		'/^list-(\d+)$/' => 'Index/List/index?id=:1',
		'/^list-(\d+)-(\d+)$/' => 'Index/List/index?id=:1&p=:2',
		'list-class' => 'Index/List/classes',
		'list-nssc' => 'Index/List/nssc',
		'list-bmis' => 'Index/List/bmis',
		'list-hwr' => 'Index/List/hwr',
		'list-fat' => 'Index/List/fat',
		'list-email' => 'Index/List/email',
		'list-bmi' => 'Index/List/bmi',
		'list-bmr' => 'Index/List/bmr',
		'list-hw' => 'Index/List/health_weight',
		'list-s' => 'Index/List/self',
		'list-sw' => 'Index/List/standard_weight',
		'list-hr' => 'Index/List/heart_rate',
		'list-sws' => 'Index/List/sw',
		'list-bwh' => 'Index/List/bwh',
		'list-bwhs' => 'Index/List/bwhs',
		'list-kll' => 'Index/Cal/',
		'list-view' => 'Index/Cal/view',
		'list-search' => 'Index/Cal/search',
		'list-lists' => 'Index/Cal/lists',
		'list-add' => 'Index/Add/',
		'list-adds' => 'Index/Add/add',
		'list-del' => 'Index/Add/del',
		'list-update' => 'Index/Add/update',
		'list-data' => 'Index/Add/data',
		'list-totales' => 'Index/Add/totales',
		'list-emptys' => 'Index/Add/emptys',
		'list-abmr' => 'Index/Add/bmr',
		'list-bmrview' => 'Index/Add/bmrview',
		'list-emptyy' => 'Index/Add/emptyy',
		'list-click' => 'Index/Show/click',
		'list-food' => 'Index/List/foodc',
		'flists' => 'Flist/Index/index',
		'flist/:name/:p\d' => 'Flist/Index/index?name=:1&p=:2',
		//'flist' => 'Flist/Index/index',
		'/^view-(\d+)$/' => 'Flist/View/index?id=:1',
		'/^assort-(\d+)-(\d+)$/' => 'Flist/Assort/index?id=:1&p=:2',
		'searcher' => 'Index/Search/',
		'search/:title/:p\d' => 'Index/Search/index?title=:1&p=:2',
		'login' => 'Index/Login/index',
		'reg' => 'Index/Reg/index',
		'logins' => 'Index/Login/logins',
		'verify' => 'Index/Login/verify',
		'logout' => 'Index/Login/logout',
		'loginc' => 'Index/Login/login_s',
		'callback' => 'Index/Login/callback',
		'regs' => 'Index/Reg/regs',
		'oneself' => 'Index/Member/index',
		'myself' => 'Index/Member/setting',
		'setted' => 'Index/Member/setted',
		'so' => 'Index/Member/soSetted',
		'pwd' => 'Index/Member/pwdSetted',
		'bg' => 'Index/Member/bg',
		'pic' => 'Index/Member/pic',
		'adddiary' => 'Index/Member/addDiary',
		'dela' => 'Index/Member/delDiary',
		'weight' => 'Index/Member/newweight',
		'wd' => 'Index/Member/newwd',
		'kll' => 'Index/Member/kll',
		'diary' => 'Index/Member/diary',
		'speed' => 'Index/Member/speed',
		'present' => 'Index/Member/present',
		'mails' => 'Index/Member/mails',
		'send' => 'Index/Member/send',
		'sendmail' => 'Index/Member/sendMail',
		'delm' => 'Index/Member/delM',
		'view' => 'Index/Member/view',
		'sendf' => 'Index/Member/addhfSend',
		'message' => 'Index/Member/message',
		'messages' => 'Index/Member/messages',
		'friends' => 'Index/Member/friends',
		'collect' => 'Index/Member/collect',
		'ranking' => 'Index/Member/ranking',
		'Taob' => 'Taob/Index/index',
		//'Taob/:id/:p\d' => 'Taob/Index/index?id=:1&p=:2',
	),
	'THINK_SDK_QQ' => array(
		'APP_KEY'    => '101053078',
		'APP_SECRET' => '7c90916d098ddcd2113b84f6ff3bc57c',
		'CALLBACK'   => URL_CALLBACK . 'qq',
	),
);
