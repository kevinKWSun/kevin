<?php 
/*
Author:sunny 
E-mail:1053577162@qq.com
Date:2013-6-21
*/
Class Cart7{
	var $sessionName='ConnerCart_7';
	public $_total_price=0; //
	var $_total_num='0';  //
	function SessionCart(){
		if(!isset($_SESSION[$this->sessionName]))
		{
			session_register($this->sessionName); 
			$_SESSION[$this->sessionName] = '';
		}
		$this->total(); //
	}
	function getCart(){
		$cur_array=$_SESSION[$this->sessionName];
		return $cur_array;
	}
	//
	function add($product){
		$cur_array=$_SESSION[$this->sessionName][item];
		if($cur_array==""){
			$cur_array[]=$product;
		}else{
			$is_exit=false;
			//
			foreach($cur_array as $i => $v){
				if($v[id]==$product[id]){
					$cur_array[$i][num]+=$product[num];
					$is_exit=true;
				}
			}
			if(!$is_exit){
				$cur_array[]=$product;
			}
		}
		$_SESSION[$this->sessionName][item]="";
		$_SESSION[$this->sessionName][item]=$cur_array;
		$this->total(); //
	}
	//
	function update($id,$num,$price){
		$cur_array=$_SESSION[$this->sessionName][item];
		foreach($cur_array as $i => $v){
			if($v[id]==$id){
				$j=$price/$cur_array[$i][num];
				$cur_array[$i][price]+=($num-$cur_array[$i][num])*$j;
				//$cur_array[$i][price] = $num * $price;
				$cur_array[$i][num]=$num;
			}
		}
		$_SESSION[$this->sessionName][item]="";
		$_SESSION[$this->sessionName][item]=$cur_array;
		$this->total(); //统计信息
	}
	//
	function del($id){
		$cur_array=$_SESSION[$this->sessionName][item];
		foreach($cur_array as $key => $v){
			if($v['id']==$id){
				unset($cur_array[$key]);
			}
		}
		$_SESSION[$this->sessionName][item]="";
		$_SESSION[$this->sessionName][item]=$cur_array;
		$this->total(); //统计信息
	}
	//清空购物车
	function emptyCart(){
		$cur_array=$_SESSION[$this->sessionName][item];
		$cur_array="";
		$_SESSION[$this->sessionName][item]="";
		$_SESSION[$this->sessionName][item]=$cur_array;
		$this->total(); //统计信息
	}
	//计算商品总价
	function total(){
		$totalPrice=0;
		$totalNum=0;
		$cur_array=$_SESSION[$this->sessionName][item];
		foreach($cur_array as $i => $v){
			$totalPrice+=$cur_array[$i][price]*$cur_array[$i][num];
			$totalNum+=$cur_array[$i][num];
		}
		$this->_total_price= $totalPrice;
		$this->_total_num= $totalNum;
		$_SESSION[$this->sessionName][total_price]=$this->_total_price;
		$_SESSION[$this->sessionName][total_num]=$this->_total_num;
	}
}