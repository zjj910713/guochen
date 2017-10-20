<?php
namespace app\admin\controller;
use think\Controller;

/**
* 
*/
class Role extends Common
{
	
	public function index(){
		$list = db('auth_detail')->select();
		
		foreach ($list as $key =>& $v) {
			$v['admin_code'] = json_decode($v['admin_code'],true);
			$v['admin_code'] = db('node')->where('id','in',$v['admin_code'])->field('remark')->select();
		}
		$this->assign('list',$list);
		return $this->fetch();
	}
	public function add(){
		if(request()->isPost()){
			$data = input('');
			$data['admin_code'] = json_encode($data['admin_code']);
			$last = db('auth_detail')->insert($data);
			if($last){
				return json(['code'=>200,'msg'=>'添加成功']);
			}else{
				return json(['code'=>201,'msg'=>'添加失败']);
			} 
		}else{
			$node = db('node')->field('id,remark')->order('sort asc')->select();
			$this->assign('node',$node);
			return $this->fetch();
		}
	}
	public function edit($auth_code=''){
		if(request()->isPost()){
			$data = input('');
			$data['admin_code'] = json_encode($data['admin_code']);
			$last = db('auth_detail')->where('auth_code',$auth_code)->update($data);
			if($last){
				return json(['code'=>200,'msg'=>'修改成功']);
			}else{
				return json(['code'=>201,'msg'=>'修改失败']);
			} 
		}else{
			$data = db('auth_detail')->find($auth_code);
			$data['admin_code'] = json_decode($data['admin_code'],true);
			$node = db('node')->field('id,remark')->order('sort asc')->select();
			$this->assign('node',$node);
			$this->assign('data',$data);
			return $this->fetch();
		}
	}
	//节点列表
	public function nodeList(){
		$list = db('node')->field('id,name,remark,sort,level')->order('sort asc')->select();
		
		$this->assign('list',$list);
		return $this->fetch();
	}

	//添加节点
	public function addNode(){
		if(request()->isPost()){
			$data = input('');
			$data['name'] =ucwords(str_replace(" ", "", $data['name']));
			$last = db('node')->insert($data);
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