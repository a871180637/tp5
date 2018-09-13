<?php 
namespace app\admin\controller; 
use think\Controller;

class Good extends Controller{

	public function add(){
		return $this->fetch();
	}

	public function edit(){

	}
	
	public function listmanger(){
		return $this->fetch();
	}

	public function manger(){
		return $this->fetch();
	}

}

?>