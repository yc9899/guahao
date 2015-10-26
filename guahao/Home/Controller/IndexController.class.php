<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
if(session('?var')){
     $this->success('已经登录了，正在跳转...','/home/main/main');

         }else{
  //显示名称
      $user=M('setting');
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
		     
            //查询登录ID的权限
           $m['uid'] = $data['uid'];
            //$map = M('auth_group_access');
          // $acc = $map->where($m)->find();
         $list = $user
->join('gh_auth_group_access on gh_user.uid = gh_auth_group_access.uid')
->join('gh_auth_group on gh_auth_group_access.group_id = gh_auth_group.id')
->find();
		$_SESSION['var']=$data['name'].$data['pwd'];
		$_SESSION['uid']=$data['uid'];
                $_SESSION['nick']=$data['name']; //session写入用户名
                $_SESSION['source']=$list['title'];                
	        $_SESSION['group']= $list['group_id'];	
		$_SESSION['m'] = $list['ment'];
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
