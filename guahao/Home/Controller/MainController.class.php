<?php
namespace Home\Controller;
use Think\Controller;
class MainController extends CommonController {
	public function index(){
   $agent=$_SERVER["HTTP_USER_AGENT"];
	$soft = $_SERVER['SERVER_SOFTWARE'];
    $ip = get_client_ip();
  //浏览器版本
if(strpos($agent,"MSIE 8.0")) 
$ex="Internet Explorer 8.0"; 

else if(strpos($agent,"MSIE 7.0")) 
 $ex="Internet Explorer 7.0"; 

else if(strpos($agent,"MSIE 6.0")) 
 $ex="Internet Explorer 6.0"; 

else if(strpos($agent,"Firefox/3")) 
 $ex="Firefox 3"; 

else if(strpos($agent,"Firefox/2")) 
 $ex="Firefox 2"; 

else if(strpos($agent,"Chrome")) 
 $ex="Google Chrome"; 

else if(strpos($agent,"Safari")) 
 $ex="Safari"; 

else if(strpos($agent,"Opera")) 
 $ex="Opera"; 

else  $ex=$_SERVER["HTTP_USER_AGENT"];  

//操作系统检测
if(strpos($agent,"Windows")) 

$sys="Windows"; 

else if(strpos($agent,"Linux")) 
$sys="Linux"; 

else if(strpos($agent,"MAC")) 
$sys="MAC"; 

else  $ex="未知操作系统"; 


$this->assign('ip',$ip);
$this->assign('ex',$ex); 
$this->assign('sys',$sys); 
$this->assign('soft',$soft);
$this->display();
		
		}
    public function main(){
    $this->display();
    }
        public function left(){
    $this->display();
    }
        public function top(){
//获取网站名称
   $user=M('setting');
  $list=$user->find();
$this->assign('list',$list);
//获取用户名
$nick = session('nick');
$this->assign('nick',$nick);
    $this->display();
    }
        public function center(){
    $this->display();
    }

}
