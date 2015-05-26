<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller {
	
	public function _initialize() {

     	$var=$_SESSION['var'];
		$user=$_SESSION['user'];
		
		if($var){
			
			}else{
				
				$this->error("请登录在访问",'/');
				}
			

         $auth = new \Think\Auth();
        //类库位置应该位于ThinkPHP\Library\Think\
        $uid=$_SESSION['uid'];
        if($uid==1){
			
			
			}else{
       $rule  = strtolower(MODULE_NAME.'/'.CONTROLLER_NAME.'/'.ACTION_NAME);
        $au = $auth->check($rule,$uid,$type=1,$mode='url');
           if(!$auth->check($rule,$uid)){
            $this->error('你没有权限');
       }
       
    }
	
 }
}
