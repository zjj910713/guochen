<?php
namespace app\admin\controller;
use think\Controller;

/**
* 
*/
class Common extends Controller
{
	
	public function _initialize(){
		if(!session('admin_user') && !cookie('admin_cookie_id')) {
			$this->redirect('login/index');
		}
	}
}
?>