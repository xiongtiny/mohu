<?php
//由ThinkphpHelper自动生成,请根据需要修改
namespace Home\Controller;
use Think\Controller;

class PageController extends Controller {

	public function show(){
		$articleModel = M('Article');
		//会员风采
		$where = array('class_id' => 4);
		$count = $articleModel->where($where)->count();
		$Page4 = new \Think\Page($count,3);	//实例化分页类 传入总记录数和每页显示的记录数(3)
		$show4 = $Page4->show();	//分页显示输出
		$articleList4 = $articleModel->where($where)->limit($Page->firstRow.','.$Page->listRows)->select();	//分页查询
		$this->assign('page4',$show4);	//赋值分页输出
		$this->assign('articleList4', $articleList4);
		
		$title = I('title'); 
		$this->display($title);
	}


}