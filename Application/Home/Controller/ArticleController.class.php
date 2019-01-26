<?php
//由ThinkphpHelper自动生成,请根据需要修改
namespace Home\Controller;
use Think\Controller;

class ArticleController extends Controller {
	public function listByCid(){
		$articleModel = M('Article');
		$class_id = I('cid');
		$artlicTemplate = array(
			'2' => 'zixun',
			'4' => 'fengcai',
			'5' => 'huiyi',
			'6' => 'zhuzuo',
			'7' => 'lunwen',
		);
		$where = array('class_id' => $class_id);
		$count = $articleModel->where($where)->count();
		$Page = new \Think\Page($count,16);	//实例化分页类 传入总记录数和每页显示的记录数(16)
		$show = $Page->show();	//分页显示输出
		$articleList = $articleModel->where($where)->limit($Page->firstRow.','.$Page->listRows)->select();	//分页查询
		$this->assign('page',$show);	//赋值分页输出
		$this->assign('articleList', $articleList);
		
		//会员风采
		$where = array('class_id' => 4);
		$count = $articleModel->where($where)->count();
		$Page4 = new \Think\Page($count,3);	//实例化分页类 传入总记录数和每页显示的记录数(3)
		$show4 = $Page4->show();	//分页显示输出
		$articleList4 = $articleModel->where($where)->limit($Page->firstRow.','.$Page->listRows)->select();	//分页查询
		$this->assign('page4',$show4);	//赋值分页输出
		$this->assign('articleList4', $articleList4);
		
		//著作
		$where = array('class_id' => 6);
		$count = $articleModel->where($where)->count();
		$Page6 = new \Think\Page($count,15);	//实例化分页类 传入总记录数和每页显示的记录数(15)
		$show6 = $Page->show();	//分页显示输出
		$articleList6 = $articleModel->where($where)->limit($Page->firstRow.','.$Page->listRows)->select();	//分页查询
		$this->assign('page6',$show6);	//赋值分页输出
		$this->assign('articleList6', $articleList6);
		
		
		$this->display($artlicTemplate[$class_id]);
	}
	
	
	public function peoplePage(){
		$articleModel = M('Article');
		$id = I('id'); 
		$article = $articleModel->find($id);
		$classModel = M('Class');
		$class = $classModel->where(array('id' => $article['class_id']))->find();
		$this->assign('article', $article);
		$this->assign('class', $class);
		$this->display();
	}
	
	public function zhuzuoPage(){
		$articleModel = M('Article');
		$id = I('id'); 
		$article = $articleModel->find($id);
		$classModel = M('Class');
		$class = $classModel->where(array('id' => $article['class_id']))->find();
		$this->assign('article', $article);
		$this->assign('class', $class);
		$this->display();
	}
	
	public function huiyiPage(){
		$articleModel = M('Article');
		$id = I('id'); 
		$article = $articleModel->find($id);
		$classModel = M('Class');
		$class = $classModel->where(array('id' => $article['class_id']))->find();
		$this->assign('article', $article);
		$this->assign('class', $class);
		$this->display();
	}
}