<?php
//由ThinkphpHelper自动生成,请根据需要修改
namespace Admin\Controller;
use Think\Controller;

class AdminController extends BaseController {
public function login(){
	if(IS_POST){
		$username = I('username');
		$password = I('password');
		$adminModel = M('Admin');
		$admin = $adminModel->where(array('username'=> $username, 'password'=> $password))->find();
		if($admin){
			session('admin_id',$admin['id']);
			//$this->success('登录成功',U('Index/index'));
			$this->redirect('Index/index');
		}else{
			$this->error('登录信息错误。');
		}
	}
	$this->display();
}

public function logout(){
	session('admin_id',null);
	$this->success('您已登出',U('Admin/login'));
}
	
public function all(){
	$adminModel = M('Admin');
	$count = $adminModel->where()->count();
	$Page = new \Think\Page($count,15);	//实例化分页类 传入总记录数和每页显示的记录数(15)
	$show = $Page->show();	//分页显示输出
	$adminList = $adminModel->where()->limit($Page->firstRow.','.$Page->listRows)->select();	//分页查询
	$this->assign('page',$show);	//赋值分页输出
	$this->assign('adminList', $adminList);
	$this->display();
}

public function add(){
	if(IS_POST){
		$adminModel = M('Admin');
		$adminModel ->create();
		$flag = $adminModel ->add();
		if($flag){
			$this->success('新建成功',U('Admin/all')); 
		}else{
			$this->error('新建失败',U('Admin/all')); 
		}
	}else{
		$this->display(); 
	}
}

public function edit(){
	$adminModel = M('Admin');
	if(IS_POST){
		$adminModel ->create();
		$flag = $adminModel ->save();
		if($flag){
			$this->success('编辑成功',U('Admin/all')); 
		}else{
			$this->error('编辑失败',U('Admin/all')); 
		}
	}else{
		$id = I('id'); 
		$admin = $adminModel->find($id);
		$this->assign('admin', $admin);
		$this->display();
	}
}

public function delete(){
	$adminModel = M('admin');
	$id = I('id'); 
	$flag = $adminModel->where('id='.$id)->delete();
	if($flag){
		$this->success('删除成功', U('Admin/all'));
	}else{
		$this->error('删除失败', U('Admin/all'));
	}
}

}