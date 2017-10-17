<?php
namespace app\admin\controller;
use think\controller;

/**
* 
*/
class Login extends controller
{
	//登录
	public function index(){
		$ip =request()->ip();
		$time = time();
		if(request()->isPost()){
			$admin_user = db('admin_users');
			$data = input('');
			$arr = $admin_user -> where(['admin_user'=>$data['username']])->find();
			// dump($arr);die;
			if(empty($arr)){
				return json(['code'=>1001,'msg'=>'用户不存在']);
			}
			if($arr['is_validated'] == 2){
				return json(['code'=>1002,'msg'=>'用户被锁定']);
			}
			if($arr['password'] !=  md5(md5($data['password'].'guochen')) || $arr['admin_user'] != $data['username']){
				return json(['code'=>1003,'msg'=>'用户名或者密码错误']);
			}else{
				$tmp['last_login'] = $time;
				$tmp['last_ip'] = $ip;
				$admin_user -> where('admin_id='.$arr['admin_id'])->update($tmp);
				cookie('admin_cookie_id',$arr['admin_id'],3*24*60);
				session('admin_user',$arr['admin_id']);
				session('admin_username',$arr['admin_user']);
				db('sessions')->insert(['session_key'=>'admin_user','expiry'=>$time,'last_ip'=>$ip]);
				return json(['code'=>200,'登录成功']);

			}
		}else{
			if(session('admin_user') || cookie('admin_cookie_id')){
				db('sessions')->insert(['user_name'=>session('admin_username'),'session_key'=>'admin_user','expiry'=>$time,'adminid'=>session('admin_user'),'ip'=>$ip]);
				$this->redirect('index/index');
			}
			return $this->fetch();
		}

		
	}
	//退出登陆
	public function logout(){
		session('admin_username',null);
		session('admin_user',null);
		cookie('admin_cookie_id',null);
		$this->redirect('login/index');
	}
}
?>