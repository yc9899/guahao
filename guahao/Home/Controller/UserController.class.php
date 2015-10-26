<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends CommonController {
	//增加用户列表
    public function add(){
   if(IS_POST){		
         	$n['name'] = $data['name']=I('yonghu');
	       	$data['pwd']=md5(I('mima'));
		$map['group_id']=I('quanxian');
//是否设为部门管理        
       $m = I('m');
           if($m=3){

         $map['ment']='YES';
        }
	    $user=M('user');
	    $auth=M('auth_group_access');
	    
	    $ad=$user->data($data)->add();
        
	    if($ad){	
      $list =  $user->where($n)->find();
        $map['uid']= $list['uid'];
       $a= $auth->data($map)->add();
       
      $this->success('用户增加成功！','/Home/User/lists/');
			
			
			}else{
				
			$this->error('添加失败，请联系管理员！！！');	
				
				}

                          }else{

   $user=M('auth_group');
   $list=$user->select();
   $this->assign('list',$list);
	$this->display();

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

//修改用户
	public function passwd(){
   
    if(IS_POST){

$pw['name'] = session('nick');
$pw['pwd'] =md5(I('pass'));
$map['pwd']=md5(I('xin'));

    $User = M('user');
    $ra = $User->where($pw)->find();
       
     if($ra){
   //验证通过可以修改密码

$sa = $User->where($pw)->save($map);
                  //验证是否修改成功
                  if($sa){
       //登录成功！退出登录，清除session，重新登录
             $this->success('修改成功！！！','/Home/Index/out/');       
                    }else{
                    $this->error('未知错误，请联系管理员');
                             }

            
         }else{

$this->error('原始密码错误，如忘记可以联系管理员修改！！');

     }



   }	
	
$this->display();		
		}
//删除用户		
    public function del(){
$gid = session('group_id');		
if( $gid=1){
$uid =  I('id');
$User = M('user');
$ra = $User->delete($uid);

if($ra){

$this->success('删除成功！！！');

   }else{

$this->error('删除失败，请联系管理员');
     }
		
}else{ 
$this->error('非主管人员，不可删除用户！！！！');
      }		
   }

//添加用户组
public function groupadd(){

   $user = M('auth_rule');
  $list =  $user->select();
  $this->assign('list',$list);
  $this->display();
if(IS_POST){
 $value = $_POST['checkbox'];
 $map['rules'] = implode(',',$value);

 $map['title'] = I('group');

 $ru = M('auth_group');
$r = $ru->data($map)->add(); 
    if($r){

  $this->success('添加成功！！','/Home/User/group/');

      }
 }

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
        $user = M('setting');
        $user->where('sid=1')->save($map);
        $this->success('修改成功！！！');
         }else{
    $user = M('setting');
  $list= $user->find();
  $this->assign('list',$list);
          $this->display();


            }



      }


}
