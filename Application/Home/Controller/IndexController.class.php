<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
   // public function index(){
  //      $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px }</style><div style="padding: 24px 48px;"> <h1></h1>[ Home::Index控制器 ]</div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
  //  }
public function hello(){
		$data=new Model("select_menu");
		$data=M("select_menu");
		$map['text']='selectAobject1';
		$data->where($map)->select();
		$data='1';
		echo $data;
		
	}
	public function index() {
	
		$Demo  = new Model('select_menu'); // 实例化模型类
	
		$list = $Demo->select(); // 查询数据
	
		$this->assign('text',$list); // 模板变量赋值
	
		$this->display(); // 输出模板
	
	}
    
}
