<?php
namespace app\admin\controller;
use think\controller;

/**
* 
*/
class Common extends controller
{
	
	public function _initialize(){
		if(!session('admin_user') && !cookie('admin_cookie_id')) {
			$this->redirect('login/index');
		}
	}
}
?>