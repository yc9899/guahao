<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends CommonController {
	//增加用户列表
    public function add(){
		
   $user=M('auth_group');
   $list=$user->select();
   $this->assign('list',$list);
	$this->display();

		}
	//增加用户
	
	public function ad(){

			
	 $name = $data['name']=I('yonghu');
		$data['pwd']=md5(I('mima'));
		$map['group_id']=I('quanxian');
	    $user=M('user');
	    $auth=M('auth_group_access');
	    
	    $ad=$user->data($data)->add();
        
	    if($ad){	
      $list =  $user->where($name)->find();
        $map['uid']= $list['uid'];
        $auth->data($map)->add();

		$this->success('用户增加成功！','/Home/User/lists/');	
			
			
			}else{
				
			$this->error('添加失败，请联系管理员！！！');	
				
				}
		 
		 

		
		
		
	}	
		
		
		//用户列表
	public function lists(){
	    $user=M('user');
        $list =  $user
      ->join('gh_auth_group_access on gh_user.uid = gh_auth_group_access.uid')
      ->join('gh_auth_group on gh_auth_group_access.group_id = gh_auth_group.id')
    //  ->field('user.uid,user.name,auth_group.title')
      ->select();
 // dump($user);
             $this->assign('list',$list);
	      $this->display();	
		}
	public function up(){
		
		$this->error('没有权限！！！！');
		
		}
		
    public function del(){
		
		$this->error('没有权限！！！');
		
		
   }
//用户组管理
     public function group(){
      $user=M('auth_group');
      $list=$user->select();
      $this->assign('list',$list);
         $this->display();


     }
//系统设置
    public function seting(){
         if(IS_POST){
        $map['site'] = I('sitename'); 
        $user = M('seting');
        $user->where('sid=1')->save($map);
        $this->success('修改成功！！！');
         }else{
    $user = M('seting');
  $list= $user->find();
  $this->assign('list',$list);
          $this->display();


            }



      }
}
