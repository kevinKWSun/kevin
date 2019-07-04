<?php
/*
 * Author: 上海SUNNY科技
 * Email : 1053577162@qq.com
 * DATE  : 2013-10-01
 */
Class Category {
	//后台的栏目分级输出,组合一维数组
	Static Public function unlimitedForLevel ($cate, $html = '　⊥ ', $pid = 0, $level = 0) {
		$arr = array();
		foreach ($cate as $v) {
			if ($v['pid'] == $pid) {
				$v['level'] = $level + 1;
				$v['html'] = str_repeat($html,$level);
				$arr[] = $v;
				$arr = array_merge($arr, self::unlimitedForLevel($cate, $html, $v['id'], $level + 1));
			}
		}
		return $arr;
	}
	//组合多维数组，如前台的导航栏
	Static Public function unlimitedForLayer ($cate, $name='child', $pid = 0) {
		$arr = array();
		foreach ($cate as $v) {
			if ($v['pid'] == $pid) {
				$v[$name] = self::unlimitedForLayer($cate, $name, $v['id']);
				$arr[] = $v;
			}
		}
		return $arr;
	}
	//列表、文章页导航传递一个子分类ID返回有的父级分类，
	Static Public function getParents ($cate, $id) {
		$arr = array();
		foreach ($cate as $v) {
			if ($v['id'] == $id) {
				$arr[] = $v;
				$arr = array_merge(self::getParents($cate, $pid), $arr);
			}
		}
		//首页 >> 列表 >> cc >> dd
		return $arr;
	}
	//列表、文章页导航传递一个父级分类ID返回子分类ID
	Static Public function getChildsId ($cate, $pid) {
		$arr = array();
		foreach ($cate as $v) {
			if ($v['pid'] == $pid) {
				$arr[] = $v['id'];
				$arr = array_merge($arr, self::getChildsId($cate, $v['id']));
			}
		}
		//首页 >> 列表 >> cc >> dd
		return $arr;
	}
	//列表、文章页导航传递一个父级分类ID返回所有的子分类
	Static Public function getChildsIds ($cate, $pid) {
		$arr = array();
		foreach ($cate as $v) {
			if ($v['pid'] == $pid) {
				$arr[] = $v;
				$arr = array_merge($arr, self::getChildsIds($cate, $v['id']));
			}
		}
		//首页 >> 列表 >> cc >> dd
		return $arr;
	}
}
?>


























