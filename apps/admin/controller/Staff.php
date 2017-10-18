<?php
namespace app\admin\controller;
use think\Controller;

/**
* 
*/
class Staff extends Common
{
	//员工列表
	public function index($key=''){
		$where = '1=1';
		if(!empty($key)){
			$where .= " and realname like '%".$key."%' or job_number like '%".$key."%' or mobile like '%".$key."%'";
		}
		$list = db('admin_users')->where($where)->field('admin_id,auth_code,realname,admin_user,mobile,weixin,qq,job_number,sex,birthday,reg_time')->paginate();
		
		$page = $list->render();
		$this->assign('key',$key);
		$this->assign('page',$page);
		$this->assign('list',$list);
		return $this->fetch();
	}

	//员工添加
	public function add(){
		if(request()->isPost()){
			$data = input('');
			$data['password'] = md5(md5($data['password'].'guochen'));
			$data['reg_time'] = time();
			$data['last_ip'] = request()->ip();
			$last = db('admin_users')->insert($data);
			if($last){
				return json(['code'=>200,'msg'=>'添加成功']);
			}else{
				return json(['code'=>201,'msg'=>'添加失败']);
			} 
		}else{
			return $this->fetch();
		}
	}

}
?>