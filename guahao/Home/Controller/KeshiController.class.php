<?php
namespace Home\Controller;
use Think\Controller;
class KeshiController extends CommonController {
    public function index(){
        $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>[ 您现在访问的是Home模块的Index控制器 ]</div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    }
    //显示增加页面
    public function add(){
        if(IS_POST){
	   		//管理权限判断
		if($_SESSION['var']){
	   	$user=M('department');
		$data['dname']=I('post.mingcheng');
		$data['ddate']=date('Y-m-d');
		$sub=I('post.submit');
		$user->data($data)->add();
		$this->success('添加成功！！','/Home/Keshi/lists');
	   
		}else{
			
			$this->error('违规提交数据，权限不够！！！');
			
			
			}

        }else{
            $this->display();
        }
    }
			

    public function lists(){
		$user=M('department');
		$list=$user->select();
		$this->assign('list',$list);
		$this->display();
		}

	public function uplist(){
            if(IS_POST){
                $data['id']=I('post.id');
		$data['dname']=I('post.mingcheng');
		$data['ddate']=date('Y-m-d');
		$user=M('department');
		$sa=$user->save($data);
		if($sa){
		    $this->success('修改成功！！！','/Home/Keshi/lists');
		}else{
	             $this->error('修改失败');
				
	        }

	    }else{

		$data['id']=I('get.id');
		$user=M('department');
		$list=$user->where($data)->find	();
		$this->assign('list',$list);
      		$this->display();



            }	
        }
	public function up(){
		$data['id']=I('post.id');
		$data['dname']=I('post.mingcheng');
		$data['ddate']=date('Y-m-d');
		$user=M('department');
		$sa=$user->save($data);
		if($sa){
		$this->success('修改成功！！！','/Home/Keshi/lists');
		    }else{
				
				$this->error('修改失败');
				
				}
		
		}
		
	public function del(){
		 $user=M('department');
		 $data=I('get.id');
		 $user->delete($data);
		 
		 $this->success('删除成功！！！','/Home/Keshi/lists/');	
		
		
		}
}
