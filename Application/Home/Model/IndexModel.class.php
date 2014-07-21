<?php
namespace Home\Model;
use Think\Model;
class IndexModel extends Model {
	public function hello(){
		$data=new Model("select_menu");
		$data=M("select_menu");
		$map['text']='selectAobject1';
		$data->where($map)->select();
		$data='1';
		echo $data;
		$this->display('index');
	}
	
}