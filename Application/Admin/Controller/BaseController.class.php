<?php
namespace Admin\Controller;
use Think\Controller;
class BaseController extends Controller {
	public function _initialize(){
		if(ACTION_NAME != 'login'){
			if(session('admin_id') == null){
				$this->error('登录超时', U('Admin/login'));
			}
		}	
	}
}