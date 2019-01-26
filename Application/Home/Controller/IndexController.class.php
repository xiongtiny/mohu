<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$articleModel = M('Article');
		$class_id = 2;//新闻
		$where = array('class_id' => $class_id);
		$count = $articleModel->where($where)->count();
		$Page = new \Think\Page($count,5);	//实例化分页类 传入总记录数和每页显示的记录数(15)
		$show = $Page->show();	//分页显示输出
		$articleList = $articleModel->where($where)->limit($Page->firstRow.','.$Page->listRows)->select();	//分页查询
		$this->assign('page',$show);	//赋值分页输出
		$this->assign('articleList', $articleList);
        $this->display();
    }
    
    public function articleList(){//通用文章列表
    	$classId = I('cid');
    	$articleModel = M('Article');
    	$where = array('class_id'=>$classId);
		$count = $articleModel->where($where)->count();
		$Page = new \Think\Page($count,15);	//实例化分页类 传入总记录数和每页显示的记录数(15)
		$show = $Page->show();	//分页显示输出
		$articleList = $articleModel->where()->limit($Page->firstRow.','.$Page->listRows)->select();	//分页查询
		$this->assign('page',$show);	//赋值分页输出
		$this->assign('articleList', $articleList);
		
		$this->display();
	}
	
	public function zuzhi(){//组织机构
		$classId = I('cid');
    	$articleModel = M('Article');
    	$where = array('class_id'=>$classId);
		$count = $articleModel->where($where)->count();
		$Page = new \Think\Page($count,15);	//实例化分页类 传入总记录数和每页显示的记录数(15)
		$show = $Page->show();	//分页显示输出
		$articleList = $articleModel->where()->limit($Page->firstRow.','.$Page->listRows)->select();	//分页查询
		$this->assign('page',$show);	//赋值分页输出
		$this->assign('articleList', $articleList);
		
		$this->display();
	}
	
	
}