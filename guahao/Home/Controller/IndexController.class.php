<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
if(session('?var')){
     $this->success('已经登录了，正在跳转...','/home/main/main');

         }else{
  //显示名称
      $user=M('seting');
      $list=$user->find();
      $this->assign('list',$list);
  //end

   $this->display();}
    }
    public function login(){
	$wh['name']=I('post.name');
    $wh['pwd']=md5(I('post.password'));
	
	$user= M('user');
	$data=$user->where($wh)->find();
	if($data){
		$this->success("登录成功！！！",'/Home/Main/main');
		     

		$_SESSION['var']=$data['name'].$data['pwd'];
		$_SESSION['uid']=$data['uid'];
		
		
		}else{
	$this->error("输入的帐号或者是密码错误！");
			
			}
		}
	public function out(){
		session(null);
		$this->success('退出成功！欢迎下次访问！！！','/Home/Index/');
		
		}
	public function about(){
		
		$this->display();
		
		}
}
