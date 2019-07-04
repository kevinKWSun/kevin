<?php
/*
 * Author: 上海SUNNY科技
 * Email : 1053577162@qq.com
 * DATE  : 2013-10-01 
 */ 
class ListAction extends Action { 
    public function index(){
		$id = (int) $_GET['id'];
		$cate = M('cate')->order('sort')->select();
		import('Class.Category',APP_PATH);
		$cids = Category::getChildsId ($cate,$id);
		$cids[] = $id;
		import('Class.Page',APP_PATH);
		$count = M('news')->where(array('cid'=>array('IN',$cids)))->count();
		$page = new Page($count,8,1);
		$limit = $page->firstRow . ',' . $page->listRows;
		$this->news = D('NewsView')->getAll(array('cid'=>array('IN',$cids)),$limit);
		$this->typename = M('cate')->where(array('id'=>$id))->field('name')->find();
		$this->page = $page->show();
		$this->display();
    }
	public function classes(){
		$this->display();
    }
	public function nssc(){
		$this->display();
    }
	public function bmi(){
		$this->display();
    }
	public function bmis(){
		$height = (int) $_GET['height'] / 100;
		$weight = (int) $_GET['weight'];
		$bmi = $weight / ($height * $height);
		echo '您的BMI指数为　<font color=red>',number_format($bmi,1),'</font>';
    }
	public function bmr(){
		$this->display();
    }
	public function hwr(){
		$height = (int) $_GET['height'] / 100;
		$min_weight = $height * $height * 18.5;
		$max_weight = $height * $height * 24;
		echo '您的健康体重范围　<font color=red>',number_format($min_weight,0),' ~ ',number_format($max_weight,0),'</font>　KG(1KG=2斤)';
    }
	public function health_weight(){
		$this->display();
    }
	public function standard_weight(){
		$this->display();
    }
	public function sw(){
		$sex = (int) $_GET['sex'];
		$height = (int) $_GET['height'];
		$age = (int) $_GET['age'];
		if($sex==1){
			$weight = ($height - 100) * 0.9;
		}else if($sex==0){
			$weight = ($height - 100) * 0.9 - 2.5;
		}
		echo '您的标准体重　<font color=red>',number_format($weight,0),'</font>　KG(1KG=2斤)';
    }
	public function heart_rate(){
		$this->display();
    }
	public function fat(){
		$age = (int) $_GET['age'];
		$min_fat = (220 - $age) * 0.6;
		$max_fat = (220 - $age) * 0.8;
		echo '您的中低强度运动心率是　<font color=red>',number_format($min_fat,0),' ~ ',number_format($max_fat,0),'</font>　次/分钟';
    }
	public function bwh(){
		$this->display();
    }
	public function bwhs(){
		$version = (int) $_GET['version'];
		$sex = (int) $_GET['sex'];
		$height = (int) $_GET['height'];
		if($version == 1){
			if($sex == 1){
				$b = $height * 0.48;
				$w =  $height * 0.47;
				$h =  $height * 0.51; 
				echo '<br>　您的标准胸围是: <font color=red>　',number_format($b,2),'　</font>CM<br><br>　您的标准腰围是: <font color=red>　',number_format($w,2),'　</font>CM<br><br>　您的标准臀围是: <font color=red>　',number_format($h,2),'　</font>CM<br><br>';
			}else if($sex == 0){
				$b = $height * 0.51;
				$w =  $height * 0.34;
				$h =  $height * 0.542; 
				echo '<br>　您的标准胸围是: <font color=red>　',number_format($b,2),'　</font>CM<br><br>　您的标准腰围是: <font color=red>　',number_format($w,2),'　</font>CM<br><br>　您的标准臀围是: <font color=red>　',number_format($h,2),'　</font>CM<br><br>';
			}
		}else if($version == 0){
			if($sex == 1){
				//$old_man
				$b = $height * 0.48;
				$w =  $height * 0.47;
				$h =  $height * 0.51; 
				echo '<br>　您的标准胸围是: <font color=red>　',number_format($b,2),'　</font>CM<br><br>　您的标准腰围是: <font color=red>　',number_format($w,2),'　</font>CM<br><br>　您的标准臀围是: <font color=red>　',number_format($h,2),'　</font>CM<br><br>';
			}else if($sex == 0){
				$b = $height * 0.53;
				$w =  $height * 0.37;
				$h =  $height * 0.54;
				$bl =  $height * 0.3; 
				$bs =  $height * 0.26; 
				echo '<br>　您的标准胸围是: <font color=red>　',number_format($b,2),'　</font>CM<br><br>　您的标准腰围是: <font color=red>　',number_format($w,2),'　</font>CM<br><br>　您的标准臀围是: <font color=red>　',number_format($h,2),'　</font>CM<br><br>　您的标准大腿长: <font color=red>　',number_format($bl,2),'　</font>CM<br><br>　您的标准小腿长: <font color=red>　',number_format($bs,2),'　</font>CM<br><br>';
			}
		}
    }
	public function email(){
		if(!IS_AJAX) halt('页面不存在...');
		$data = array(
			'uid'=>session('ss_uid'),
			'email'=>$_POST['email'],
		);
		if(M('email')->add($data)){
			$data['status'] = 1;
			$data['info'] = '提交成功,感谢您的参与!';
			$data['url'] = U('/list-class');
			$this->ajaxReturn($data, 'json');
		}else{
			$data['info'] = '提交失败,请刷新后重新提交,谢谢!';
			$data['status'] = 0;
			$this->ajaxReturn($data, 'json');
		}
    }
	public function foodc(){
		$this->display('food');
	}
} 