<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller {
	
	public function _initialize() {
		$user=M('user');
		$data=$user->select();
		$var=$_SESSION['var']
		if($var){
			
			}else{
				
				$this->error("请登录在访问");
				
				}
			
		
		
		
	}
	
	
	
	
	
	
	
	
}
