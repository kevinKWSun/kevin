<?php
/*
 * Author: 上海SUNNY科技
 * Email : 1053577162@qq.com
 * DATE  : 2013-10-01
 */
class AddAction extends Action { 
    public function index(){  
		$this->display(); 
    }
	public function add(){
		$idc = $_GET['idc'];
		$id = $_GET['id'];
		if($idc=='1'){
			import('Class.Cart', APP_PATH);
			$cart=new Cart();
			$row = M('calories')->where(array('id'=>$id))->find($id);
			if($row){
				$name = $row['name'];
				$calories = $row['calories'];
				$unit = $row['unit'];//每分钟
				$num = '1';
				$product = array('id'=>$id,'name'=>$name,'price'=>$calories,'num'=>$num,'unit'=>$unit);
			}else{
				$name = $_GET['e_name'];
				$calories = $_GET['calories'];
				$unit = $_GET['unit'];//每分钟
				$num = $_GET['num'];
				$eid = $id.$idc.mt_rand(1,1000);
				$product = array('id'=>$eid,'name'=>$name,'price'=>$calories,'num'=>$num,'unit'=>$unit);
			}
			$cart->add($product);
			$lists = $cart->getCart();
			$list = $lists[item];
			$liste = array_slice($lists,1,2);
			$this->liste = $liste;
			$this->listz = $list;
		}else if($idc=='2'){
			import('Class.Cart2', APP_PATH);
			$cart=new Cart2();
			$row = M('calories')->where(array('id'=>$id))->find($id);
			if($row){
				$name = $row['name'];
				$calories = $row['calories'];
				$unit = $row['unit'];//每分钟
				$num = '1';
				$product = array('id'=>$id,'name'=>$name,'price'=>$calories,'num'=>$num,'unit'=>$unit);
			}else{
				$name = $_GET['e_name'];
				$calories = $_GET['calories'];
				$unit = $_GET['unit'];//每分钟
				$num = $_GET['num'];
				$eid = $id.$idc.mt_rand(1,1000);
				$product = array('id'=>$eid,'name'=>$name,'price'=>$calories,'num'=>$num,'unit'=>$unit);
			}
			$cart->add($product);
			$lists = $cart->getCart();
			$list = $lists[item];
			$liste = array_slice($lists,1,2);
			$this->liste = $liste;
			$this->listz = $list;
		}else if($idc=='4'){
			import('Class.Cart4', APP_PATH);
			$cart=new Cart4();
			$row = M('calories')->where(array('id'=>$id))->find($id);
			if($row){
				$name = $row['name'];
				$calories = $row['calories'];
				$unit = $row['unit'];//每分钟
				$num = $_GET['num'];
				$product = array('id'=>$id,'name'=>$name,'price'=>$calories,'num'=>$num,'unit'=>$unit);
			}else{
				$name = $_GET['e_name'];
				$calories = $_GET['calories'];
				$unit = $_GET['unit'];//每分钟
				$num = $_GET['num'];
				$eid = $id.$idc.mt_rand(1,1000);
				$product = array('id'=>$eid,'name'=>$name,'price'=>$calories,'num'=>$num,'unit'=>$unit);
			}
			$cart->add($product);
			$lists = $cart->getCart();
			$list = $lists[item];
			$liste = array_slice($lists,1,2);
			$this->liste = $liste;
			$this->listz = $list;
			$this->display('adds');
			die;
		}else if($idc=='6'){
			import('Class.Cart6', APP_PATH);
			$cart=new Cart6();
			$row = M('calories')->where(array('id'=>$id))->find($id);
			if($row){
				$name = $row['name'];
				$calories = $row['calories'];
				$unit = $row['unit'];//每分钟
				$num = '1';
				$product = array('id'=>$id,'name'=>$name,'price'=>$calories,'num'=>$num,'unit'=>$unit);
			}else{
				$name = $_GET['e_name'];
				$calories = $_GET['calories'];
				$unit = $_GET['unit'];//每分钟
				$num = $_GET['num'];
				$eid = $id.$idc.mt_rand(1,1000);
				$product = array('id'=>$eid,'name'=>$name,'price'=>$calories,'num'=>$num,'unit'=>$unit);
			}
			$cart->add($product);
			$lists = $cart->getCart();
			$list = $lists[item];
			$liste = array_slice($lists,1,2);
			$this->liste = $liste;
			$this->listz = $list;
		}else if($idc=='7'){
			import('Class.Cart7', APP_PATH);
			$cart=new Cart7();
			$row = M('calories')->where(array('id'=>$id))->find($id);
			if($row){
				$name = $row['name'];
				$calories = $row['calories'];
				$unit = $row['unit'];//每分钟
				$num = '1';
				$product = array('id'=>$id,'name'=>$name,'price'=>$calories,'num'=>$num,'unit'=>$unit);
			}else{
				$name = $_GET['e_name'];
				$calories = $_GET['calories'];
				$unit = $_GET['unit'];//每分钟
				$num = $_GET['num'];
				$eid = $id.$idc.mt_rand(1,1000);
				$product = array('id'=>$eid,'name'=>$name,'price'=>$calories,'num'=>$num,'unit'=>$unit);
			}
			$cart->add($product);
			$lists = $cart->getCart();
			$list = $lists[item];
			$liste = array_slice($lists,1,2);
			$this->liste = $liste;
			$this->listz = $list;
		}
		$this->display();
    }
	public function del(){
		$idc = $_GET['idc'];
		$id = $_GET['id'];
		if($idc=='1'){
			import('Class.Cart', APP_PATH);
			$cart=new Cart();
			$cart->del($id);
			$lists = $cart->getCart();
			$list = $lists[item];
			$liste = array_slice($lists,1,2);
			if(empty($liste)){
				$this->liste = array('total_price'=>0);
			}else{
				$this->liste = $liste;
			}
			$this->empty = '<p>请从左边选择食物，然后点击"添加"。</p>';
			$this->listz = $list;
			//session_destroy();
		}else if($idc=='2'){
			import('Class.Cart2', APP_PATH);
			$cart=new Cart2();
			$cart->del($id);
			$lists = $cart->getCart();
			$list = $lists[item];
			$liste = array_slice($lists,1,2);
			if(empty($liste)){
				$this->liste = array('total_price'=>0);
			}else{
				$this->liste = $liste;
			}
			$this->empty = '<p>请从左边选择食物，然后点击"添加"。</p>';
			$this->listz = $list;
			//session_destroy();
		}else if($idc=='4'){
			import('Class.Cart4', APP_PATH);
			$cart=new Cart4();
			$cart->del($id);
			$lists = $cart->getCart();
			$list = $lists[item];
			$liste = array_slice($lists,1,2);
			if(empty($liste)){
				$this->liste = array('total_price'=>0);
			}else{
				$this->liste = $liste;
			}
			$this->empty = '<p>请从左边选择活动消耗方式，然后点击"添加"。</p>';
			$this->listz = $list;
			$this->display('adds');
			die;
			//session_destroy();
		}else if($idc=='6'){
			import('Class.Cart6', APP_PATH);
			$cart=new Cart6();
			$cart->del($id);
			$lists = $cart->getCart();
			$list = $lists[item];
			$liste = array_slice($lists,1,2);
			if(empty($liste)){
				$this->liste = array('total_price'=>0);
			}else{
				$this->liste = $liste;
			}
			$this->empty = '<p>请从左边选择食物，然后点击"添加"。</p>';
			$this->listz = $list;
			//session_destroy();
		}else if($idc=='7'){
			import('Class.Cart7', APP_PATH);
			$cart=new Cart7();
			$cart->del($id);
			$lists = $cart->getCart();
			$list = $lists[item];
			$liste = array_slice($lists,1,2);
			if(empty($liste)){
				$this->liste = array('total_price'=>0);
			}else{
				$this->liste = $liste;
			}
			$this->empty = '<p>请从左边选择食物，然后点击"添加"。</p>';
			$this->listz = $list;
			//session_destroy();
		}
		$this->display('add');
	}
	public function update(){
		$num = $_GET['num'];
		$price = $_GET['price'];
		$id = $_GET['id'];
		$idc = $_GET['idc'];
		if($idc=='1'){
			import('Class.Cart', APP_PATH);
			$cart=new Cart();
			$cart->update($id,$num,$price);
			$lists = $cart->getCart();
			$list = $lists[item];
			$liste = array_slice($lists,1,2);
			$this->liste = $liste;
			$this->listz = $list;
		}else if($idc=='2'){
			import('Class.Cart2', APP_PATH);
			$cart=new Cart2();
			$cart->update($id,$num,$price);
			$lists = $cart->getCart();
			$list = $lists[item];
			$liste = array_slice($lists,1,2);
			$this->liste = $liste;
			$this->listz = $list;
		}else if($idc=='4'){
			import('Class.Cart4', APP_PATH);
			$cart=new Cart4();
			$cart->update($id,$num,$price);
			$lists = $cart->getCart();
			$list = $lists[item];
			$liste = array_slice($lists,1,2);
			$this->liste = $liste;
			$this->listz = $list;
			$this->display('adds');
			die;
		}else if($idc=='6'){
			import('Class.Cart6', APP_PATH);
			$cart=new Cart6();
			$cart->update($id,$num,$price);
			$lists = $cart->getCart();
			$list = $lists[item];
			$liste = array_slice($lists,1,2);
			$this->liste = $liste;
			$this->listz = $list;
		}else if($idc=='7'){
			import('Class.Cart7', APP_PATH);
			$cart=new Cart7();
			$cart->update($id,$num,$price);
			$lists = $cart->getCart();
			$list = $lists[item];
			$liste = array_slice($lists,1,2);
			$this->liste = $liste;
			$this->listz = $list;
		}
		$this->display('add');
	}
	public function data(){
		import('Class.Cart', APP_PATH);
		$cart=new Cart();
		$lists = $cart->getCart();
		$list = $lists[item];
		$liste = array_slice($lists,1,2);
		if(empty($liste)){
			$this->liste = array('total_price'=>0);
		}else{
			$this->liste = $liste;
		}
		$this->empty = '<p>请从左边选择食物，然后点击"添加"。</p>';
		$this->listz = $list;
		
		import('Class.Cart2', APP_PATH);
		$cart=new Cart2();
		$lists_2 = $cart->getCart();
		$list_2 = $lists_2[item];
		$liste_2 = array_slice($lists_2,1,2);
		if(empty($liste_2)){
			$this->liste_2 = array('total_price'=>0);
		}else{
			$this->liste_2 = $liste_2;
		}
		$this->empty_2 = '<p>请从左边选择食物，然后点击"添加"。</p>';
		$this->listz_2 = $list_2;
		
		import('Class.Cart4', APP_PATH);
		$cart=new Cart4();
		$lists_4 = $cart->getCart();
		$list_4 = $lists_4[item];
		$liste_4 = array_slice($lists_4,1,2);
		if(empty($liste_4)){
			$this->liste_4 = array('total_price'=>0);
		}else{
			$this->liste_4 = $liste_4;
		}
		$this->empty_4 = '<p>请从左边选择食物，然后点击"添加"。</p>';
		$this->listz_4 = $list_4;
		
		import('Class.Cart6', APP_PATH);
		$cart=new Cart6();
		$lists_6 = $cart->getCart();
		$list_6 = $lists_6[item];
		$liste_6 = array_slice($lists_6,1,2);
		if(empty($liste_6)){
			$this->liste_6 = array('total_price'=>0);
		}else{
			$this->liste_6 = $liste_6;
		}
		$this->empty_6 = '<p>请从左边选择食物，然后点击"添加"。</p>';
		$this->listz_6 = $list_6;
		
		import('Class.Cart7', APP_PATH);
		$cart=new Cart7();
		$lists_7 = $cart->getCart();
		$list_7 = $lists_7[item];
		$liste_7 = array_slice($lists_7,1,2);
		if(empty($liste_7)){
			$this->liste_7 = array('total_price'=>0);
		}else{
			$this->liste_7 = $liste_7;
		}
		$this->empty_7 = '<p>请从左边选择食物，然后点击"添加"。</p>';
		$this->listz_7 = $list_7;
		$totales1 = $liste['total_price'];
		$totales2 = $liste_2['total_price'];
		$totales6 = $liste_6['total_price'];
		$totales7 = $liste_7['total_price'];
		$totales = $totales1 + $totales2 + $totales6 + $totales7;
		$this->totales = '' ? 0 : $totales;
		$this->display();
	}
	public function totales(){
		import('Class.Cart', APP_PATH);
		$cart=new Cart();
		$lists = $cart->getCart();
		$list = $lists[item];
		$liste = array_slice($lists,1,2);
		
		import('Class.Cart2', APP_PATH);
		$cart=new Cart2();
		$lists_2 = $cart->getCart();
		$list_2 = $lists_2[item];
		$liste_2 = array_slice($lists_2,1,2);
		
		import('Class.Cart4', APP_PATH);
		$cart=new Cart4();
		$lists_4 = $cart->getCart();
		$list_4 = $lists_4[item];
		$liste_4 = array_slice($lists_4,1,2);
		
		import('Class.Cart6', APP_PATH);
		$cart=new Cart6();
		$lists_6 = $cart->getCart();
		$list_6 = $lists_6[item];
		$liste_6 = array_slice($lists_6,1,2);
		
		import('Class.Cart7', APP_PATH);
		$cart=new Cart7();
		$lists_7 = $cart->getCart();
		$list_7 = $lists_7[item];
		$liste_7 = array_slice($lists_7,1,2);
		if($_GET['action'] == '1'){
			$totales1 = $liste['total_price'];
			$totales2 = $liste_2['total_price'];
			$totales6 = $liste_6['total_price'];
			$totales7 = $liste_7['total_price'];
			$totales = $totales1 + $totales2 + $totales6 + $totales7;
			echo $totales = '' ? 0 : $totales;
		}else if($_GET['action'] == '4'){
			$totales4 = $liste_4['total_price'];
			echo $totales4 = '' ? 0 : $totales4;
		}
	}
	public function emptys(){
		unset($_SESSION['ConnerCart_1']);
		unset($_SESSION['ConnerCart_2']);
		unset($_SESSION['ConnerCart_4']);
		unset($_SESSION['ConnerCart_6']);
		unset($_SESSION['ConnerCart_7']);
		unset($_SESSION['bmrs']);
		$this->display();
	}
	public function bmr(){
		$sex = (int) $_GET['sex'];
		$age = (int) $_GET['age'];
		$weight = (int) $_GET['weight'];
		$height = (int) $_GET['height'];
		if($sex=='1'){
			$bmr = 66 + (13.7 * $weight) + (5 * $height) - (6.8 * $age);
			if(isset($_SESSION['bmrs']))
			{
				unset($_SESSION['bmrs']);
			}
		}else if($sex=='0'){
			$bmr = 655 + (9.6 * $weight) + (1.7 * $height) - (4.7 * $age);
			if(isset($_SESSION['bmrs']))
			{
				unset($_SESSION['bmrs']);
			}
		}
		if(!isset($_SESSION['bmrs']))
		{
			$_SESSION['bmrs'] = $bmr;
		}
		if($_SESSION['bmrs']!=''){
			echo number_format($_SESSION['bmrs'],1);
		}else{
			echo '0';
		}
	}
	public function bmrview(){
		if($_SESSION['bmrs']!=''){
			echo number_format($_SESSION['bmrs'],1);
		}else{
			echo '0';
		}
	}
	public function emptyy(){
		$this->display();
	}
} 