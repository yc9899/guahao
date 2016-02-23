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

           $this->display();
       }
    }

    public function login(){
	$wh['name']=I('post.name');
        $wh['pwd']=md5(I('post.password'));
	
	$user= M('user');
	$data=$user->where($wh)->find();
	if($data){

		     
            //查询登录ID的权限
           $m['uid'] = $data['uid'];
            //查询auth_group_access
           $row = M('auth_group_access');
           $ac =$row->where($m)->find();
           // dump($ac);
           $g['id'] = $ac['group_id'];
          //查询auth_group
       if($row){
            $group = M('auth_group');
            $list = $group->where($g)->find();
      //select title

           }
                //获取网站名称
                $user=M('setting');
                $list=$user->find();
                $this->assign('list',$list);  
                $_SESSION['webtitle'] = $list['site'];

		$_SESSION['var']=$data['name'].$data['pwd'];
		$_SESSION['uid']=$data['uid'];
                $_SESSION['nick']=$data['name']; //session写入用户名
                $_SESSION['source']=$list['title'];    //权限名称            
	        $_SESSION['group']= $ac['group_id'];	//group_id权限ID
	 	$_SESSION['m'] = $ac['ment'];//判断是否为主管
		$this->success("登录成功！！！",'/Home/Main/main');

		}else{
	$this->error("输入的帐号或者是密码错误！");
			
			}
		}
	public function out(){
		session(null);
		$this->success('退出成功！欢迎下次访问！！！','/Home/Index/');
		
		}

}
