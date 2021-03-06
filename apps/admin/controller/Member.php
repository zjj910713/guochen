<?php
namespace app\admin\controller;
use think\Controller;

/**
* 
*/
class Member extends Common
{
	//会员列表
	public function index($key=''){
		$where = '1=1';
		if(!empty($key)){
			$where .= " and realname like '%".$key."%' or user_name like '%".$key."%' or mobile like '%".$key."%'";
		}
		$list = db('users')->where($where)->field('user_id,parent_id,reg_time,user_name,mobile,alias,sex,is_validated,sex,head')->paginate();
		
		$page = $list->render();
		$this->assign('key',$key);
		$this->assign('page',$page);
		$this->assign('list',$list);
		return $this->fetch();
	}
	//会员添加
	public function add(){
		if(request()->isPost()){
			$data = input('');
			$data['password'] = md5(md5($data['password'].'guochen'));
			$data['reg_time'] = time();
			$last = db('users')->insert($data);
			if($last){
				return json(['code'=>200,'msg'=>'添加成功']);
			}else{
				return json(['code'=>201,'msg'=>'添加失败']);
			} 
		}else{
			return $this->fetch();
		}
	}
	//会员编辑
	public function edit($id){

	}
	//会员删除
	public function del($id){

	}

}
?>