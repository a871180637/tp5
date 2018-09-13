<?php 
namespace app\admin\controller; 
use think\Controller;

class Index extends Controller{

	public function index(){
		return $this->fetch();	
	}

	public function login(){

		return $this->fetch();
	}

	public function doLogin(){
		// $admin_name = input('admin_name');
		// $admin_pwd = input('admin_pwd');
		// $info = db('admin_user')
		// ->where('admin_name','=',"$admin_name")
		// ->where('admin_pwd','=',"$admin_pwd")
		// ->find();

		// $a = is_null($info);

		// if ($a) {
			// return 1;
		// }else{
			return 2;
		// }
		// if ($a) {
		// 	$this->success('登录成功……','{:url(Index/index,admin=$admin_name)}');
		// }else{
		// 	$this->error('验证失败，正在返回登陆界面……','{:url(Index/login,admin=$admin)}');

		// }

	}


}	

?>