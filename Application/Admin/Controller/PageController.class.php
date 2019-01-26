<?php
//由ThinkphpHelper自动生成,请根据需要修改
namespace Admin\Controller;
use Think\Controller;

class PageController extends BaseController {
public function all(){
	$pageModel = M('Page');
	$count = $pageModel->where()->count();
	$Page = new \Think\Page($count,15);	//实例化分页类 传入总记录数和每页显示的记录数(15)
	$show = $Page->show();	//分页显示输出
	$pageList = $pageModel->where()->limit($Page->firstRow.','.$Page->listRows)->select();	//分页查询
	$this->assign('page',$show);	//赋值分页输出
	$this->assign('pageList', $pageList);
	$this->display();
}

public function add(){
	if(IS_POST){
		$pageModel = M('Page');
		$pageModel ->create();
		$flag = $pageModel ->add();
		if($flag){
			$this->success('新建成功',U('Page/all')); 
		}else{
			$this->error('新建失败',U('Page/all')); 
		}
	}else{
		$this->display(); 
	}
}

public function edit(){
	$pageModel = M('Page');
	if(IS_POST){
		$pageModel ->create();
		$flag = $pageModel ->save();
		if($flag){
			$this->success('编辑成功',U('Page/all')); 
		}else{
			$this->error('编辑失败',U('Page/all')); 
		}
	}else{
		$id = I('id'); 
		$page = $pageModel->find($id);
		$this->assign('page', $page);
		$this->display();
	}
}

public function delete(){
	$pageModel = M('page');
	$id = I('id'); 
	$flag = $pageModel->where('id='.$id)->delete();
	if($flag){
		$this->success('删除成功', U('Page/all'));
	}else{
		$this->error('删除失败', U('Page/all'));
	}
}

}