<?php
namespace Home\Controller;
use Think\Controller;
class YuyueController extends CommonController {
	//显示添加表格
    public function add(){
           if(IS_POST){
		    $data['name']=I('post.xingming');
		    $data['gender']=I('post.xingbie');
		    $data['age']=I('post.nianling');
		    $data['telephone']= I('post.phone');
		    $data['yydate']=I('post.yysj');
		    $data['department']=I('post.keshi');
		    $data['data']=I('post.ziliao');
		    $data['date']=date('Y-m-d H:i:s');
		    $data['yuyue']='已预约';
                    $data['uid']=session('uid');
                    $data['sid']=session('group');
                    $data['uname'] = session('nick');
                    $data['source'] = session('source');
		  //  $data['enddate']=date('Y-m-d',strtotime('+1 year'));
             $User = M("customer"); // 实例化User对象
             $a = $User->data($data)->add();

			if($a){
				$this->success('添加成功！！！','/Home/Yuyue/lists');
				
				}
			
		}else{	
			
				
				
	$user=M('department');
	$list=$user->select();
    $this->assign('list',$list);
    $this->display(); 
      }  
    }
    //添加客户
    public function ad(){
		    $data['name']=I('post.xingming');
		    $data['gender']=I('post.xingbie');
		    $data['age']=I('post.nianling');
		    $data['telephone']= implode('-', sscanf(I('post.phone'), '%3s%4s%4s'));//格式化手机号
		    $data['yydate']=I('post.yysj');
		    $data['department']=I('post.keshi');
		    $data['data']=I('post.ziliao');
		    $data['date']=date('Y-m-d H:i:s');
		    $data['yuyue']='已预约';
                    $data['uid']=session('uid');
                    $data['sid']=session('group');
                    $data['uname'] = session('nick');
                  //查询权限
                   $g['id'] = session('group');
                   $group = M('auth_group');
                    $map= $group->where($g)->find(); 
                    $data['source'] = $map['title'];
		  //  $data['enddate']=date('Y-m-d',strtotime('+1 year'));
		if(IS_POST){
             $User = M("customer"); // 实例化User对象
            $a = $user->data($data)->add();

			if($a){
				$this->success('添加成功！！！','/Home/Yuyue/lists');
				
				}
			
			
			}else{
				
		$this->error('没有提交任何内容！！！！','/Home/Customer/add');		
				
				}
		
		}
		//客户列表
    public function lists(){
    $User = M('customer'); // 实例化User对象
    
    $u['uid'] = session('uid');//获取登录ID
    $ment = session('m');//获取主管权限状态
    $acc = M('auth_group_access');
    $g = $acc->where($u)->find();
    $group_id= $g['group_id']; 
    if($group_id=='1'){

//超级管理员，全部权限

      }elseif($ment == "YES"){
 //部门主管ID
     $map['sid'] = session('group');



      }elseif($ment == "NO"){
//普通员工
   $map['uid'] = session('uid');
    }
    $count = $User->where($map)->count();// 查询满足要求的总记录数
    $Page = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
    $Page->setConfig('prev', '上一页');
    $Page->setConfig('next', '下一页');
    $Page->setConfig('theme', '%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
    
    $show = $Page->show();// 分页显示输出
    // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
    $list = $User->where($map)->order('date desc')->limit($Page->firstRow.','.$Page->listRows)->select();
    $this->assign('list',$list);// 赋值数据集
    $this->assign('page',$show);// 赋值分页输出
    
    //显示昨日预约情况
    $us=M('customer');
    $data['date']=date('Y-m-d',strtotime('-1 day'));
   $yy=$us->where($data)->count();
    $this->assign('yy',$yy);
    $map['todate']=date('Y-m-d',strtotime('-1 day'));
    $list=$us->where($map)->count();
    $this->assign('daoyuan',$list);
    $this->display(); // 输出模板
    
    
    }
    //客户详细信息
    public function more(){
              
		$data['id']=I('get.id');
		$user=M('customer');
		$list=$user->where($data)->find();
		$this->assign('list',$list);
		$this->display();
		
		
		}
	//客户更新信息
      public function uplist(){
		$data['id']=I('get.id');
		$user=M('customer');
		$list=$user->where($data)->find();
		$this->assign('list',$list);
		$this->display();
		
		
		} 
 //客户信息更新
 public function up(){
	  $hidd=I('post.hidd');
	 if(IS_POST){
		    $data['id']=I('post.hidd');
		    $data['name']=I('post.xingming');
		    $data['gender']=I('post.xingbie');
		    $data['age']=I('post.nianling');
		    $data['telephone']=I('post.phone');
		    $data['yydate']=I('post.yysj');
		    $data['department']=I('post.keshi');
		    $data['data']=I('post.ziliao');   
		 	$d=M('customer');
			$a=$d->save($data);
			
			if($a){
				$this->success('修改成功！！！','/Home/Yuyue/lists');
				
				}else{ $this->error('没有修改任何内容！！！','/Home/Yuyue/lists');}
		 }else{
			 
			$this->error('不存在要更新的内容！！！','/Home/Yuyue/lists');
			 
			 
			 }
 
	 
	 
	 }
	 //删除客户资料
	 public	function del(){
		 if(isset($_SESSION['var'])){
		 $user=M('customer');
		 $data=I('get.id');
		 $user->delete($data);
		 
		 $this->success('删除成功！！！','/Home/Yuyue/lists/');
	 }else{
		 
		 $this->error('删除只有管理员才可以做到，需要请联系管理员！！！');
		 
		    }
		 }
	//确认到院！
	public function yy(){
		$user=M('customer');
		$data['id']=I('get.id');
		$data['yuyue']='已到院';
		$data['todate']=date('Y-m-d');
		$user->save($data);
		$this->success('确认到院成功！');
		
  		}
         //确认手术
        public function sur(){
              $user=M('customer');
                $data['id']=I('get.id');
                $data['surgery']='是';
                $data['todate']=date('Y-m-d');
                $user->save($data);
                $this->success('确认手术成功！');
           


            } 		
	//搜索
	public function search(){
		$id=I('get.id');
		if($id==1){//当日
	   $data['todate']=date('Y-m-d'); 
	   $user=M('customer');
	   $list=$user->where($data)->select();
	   $this->assign('list',$list);
	   $this->display('lists');
	   
			
			}elseif($id==2){//昨日	
	   $data['todate']=date('Y-m-d',strtotime('-1 day'));	
	   $user=M('customer');
	   $list=$user->where($data)->select();
	   $this->assign('list',$list);
	   $this->display('lists');		
				}elseif($id==3){//本周	
		$user=M('customer');	
		$end=date('Y-m-d',strtotime('-7 day'));	
		$map['todate']=array('EGT',$end);
		$list=$user->where($map)->select();
	    $this->assign('list',$list);
	    $this->display('lists');	
					
					
					}elseif($id==4){//本月
						
		$user=M('customer');	
		$end=$data['todate']=date('Y-m-1');
		$map['todate']=array('EGT',$end);
		$list=$user->where($map)->select();
	    $this->assign('list',$list);
	    $this->display('lists');			
						
					
						
						}
		
		
		
		}
//根据患者姓名搜索
public function xmsearch(){
	if(IS_POST){
		$data['name']=I('xm');
		$user=M('customer');
		$list=$user->where($data)->select();
		$this->assign('list',$list);
		$this->display('lists');
		
		
		}
	}
	
//数据统计
public function stat(){
//根据状态显示数据
    $status=I('status');
    $stat = I('start');
    $end = I('end');
   $_SESSION['sdate'] = $map['date']=array(array('gt',$stat),array('lt',$end));

    if($status==全部){
    //显示全部数据
   }
elseif($status==已预约){
 //显示已经预约数据
        $map['yuyue']=$status;

}else{
	//显示已到院人数
        $map['yuyue']=$status;
	
	}
	  

	$User = M('customer'); // 实例化User对象
    $count = $User->where($map)->count();// 查询满足要求的总记录数
    $Page = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)

    $Page->setConfig('prev', '上一页');
    $Page->setConfig('next', '下一页');
    $Page->setConfig('theme', '%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
       //分页跳转的时候保证查询条件
foreach($map as $key=>$val) {
$Page->parameter[$key] = urlencode($val);
}
    $show = $Page->show();// 分页显示输出
    // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
    $list = $User->where($map)->order('date desc')->limit($Page->firstRow.','.$Page->listRows)->select();
    $this->assign('list',$list);// 赋值数据集
    $this->assign('page',$show);// 赋值分页输出
		 
	$this->display();

	
	
	}
   



       public function export_csv($filename, $data){
        header("Content-type:text/csv");   
        header("Content-Disposition:attachment;filename=".$filename);   
        header('Cache-Control:must-revalidate,post-check=0,pre-check=0');   
        header('Expires:0');   
        header('Pragma:public');
        echo $data;
        
    } 
    public function statout(){

   $ra['date'] =  session('sdate');
        $hot = M('customer');
        $row = $hot->Field('id,source,name,gender,age,department,date,yydate,telephone,yuyue,todate')->where($ra)->select();
        $str = "预约号,部门,姓名,性别,年龄,科室,录入时间,预约时间,联系方式,是否到院,到院时间\n";
        $str = iconv('utf-8','gb2312',$str);
        foreach($row as $v){
            $id = iconv('utf-8','gb2312',$v['id']);
            $source = iconv('utf-8','gb2312',$v['source']);
            $name = iconv('utf-8','gb2312',$v['name']);
            $gender = iconv('utf-8','gb2312',$v['gender']);
            $age = iconv('utf-8','gb2312',$v['age']);
            $department = iconv('utf-8','gb2312',$v['department']);
            $date = iconv('utf-8','gb2312',$v['date']);
            $yydate = iconv('utf-8','gb2312',$v['yydate']);
            $telephone = iconv('utf-8','gb2312',$v['telephone']);
            $yuyue = iconv('utf-8','gb2312',$v['yuyue']);
            $todate = iconv('utf-8','gb2312',$v['todate']);
            $str .= $id.",".$source.",".$name.",".$gender.",".$age.",".$department.",".$date.",".$yydate.",".$telephone.",".$yuyue.",".$todate."\n";
        }
        $fileName ='预约列表'.date('Ymd').'.csv';
       $this-> export_csv($fileName,$str);
       exit();


      }

    public function out(){
        $hot = M('customer');
        $row = $hot->Field('id,source,name,gender,age,department,date,yydate,telephone,yuyue,todate')->select();
        $str = "预约号,部门,姓名,性别,年龄,科室,录入时间,预约时间,联系方式,是否到院,到院时间\n";
        $str = iconv('utf-8','gb2312',$str);
        foreach($row as $v){
            $id = iconv('utf-8','gb2312',$v['id']);
            $source = iconv('utf-8','gb2312',$v['source']); 
            $name = iconv('utf-8','gb2312',$v['name']);
            $gender = iconv('utf-8','gb2312',$v['gender']);
            $age = iconv('utf-8','gb2312',$v['age']);            
            $department = iconv('utf-8','gb2312',$v['department']);
            $date = iconv('utf-8','gb2312',$v['date']);
            $yydate = iconv('utf-8','gb2312',$v['yydate']);
            $telephone = iconv('utf-8','gb2312',$v['telephone']);
            $yuyue = iconv('utf-8','gb2312',$v['yuyue']);
            $todate = iconv('utf-8','gb2312',$v['todate']);
            $str .= $id.",".$source.",".$name.",".$gender.",".$age.",".$department.",".$date.",".$yydate.",".$telephone.",".$yuyue.",".$todate."\n";
        }
        $fileName ='预约列表'.date('Ymd').'.csv';
       $this-> export_csv($fileName,$str);
       exit();
    }


//csv导入 函数
  public function input_csv($handle) {

         $out = array (); 
         $n = 0;
//    print_r(fgetcsv($handle,0)); 
    while ($data = fgetcsv($handle,0)) {
       $num = count($data); 
        for ($i = 0; $i < $num; $i++) { 
         $out[$n][$i] = $data[$i]; 
        } 
        $n++; 
    }
     $num = count($out); 
     $out;
     return $out;
     return $num;
print_r($out);

  }



//导入csv文件
 public function csvput(){

if (IS_POST) { //导入CSV  
$upload = new \Think\Upload();// 实例化上传类
$upload->maxSize   =     3145728 ;// 设置附件上传大小
$upload->exts      =     array('csv');// 设置附件上传类型
$upload->rootPath  =      './Uploads/'; // 设置附件上传根目录
$upload->autoSub  =   'false';//自动使用子目录保存上传文件 默认为true
$upload->savePath  =      ''; // 设置附件上传（子）目录
// 上传文件 
  $info   =   $upload->uploadOne($_FILES['csv']);

if(!$info) {// 上传错误提示错误信息
    $this->error($upload->getError());
}else{// 上传成功 获取上传文件信息
 $filename = "http://localhost:85/Uploads/".$info['savepath']. $info['savename'];
}


//上传文件结束
   $handle = fopen($filename,rb);

//    dump($handle);
    $result = $this->input_csv($handle); //解析csv  
//dump($result);
$num = count($result);//显示表中有多少数据
    if($num==0){  
        echo '没有任何数据！';  
        exit;  
    }





for ($i = 1; $i < $num; $i++) { //循环获取各字段值 
        $data['name'] = iconv('gb2312', 'utf-8', $result[$i][0]); //中文转码  
        $data['gender'] = iconv('gb2312', 'utf-8', $result[$i][1]);  
        $data['age'] = iconv('gb2312','utf-8',$result[$i][2]); 
        $data['yydate'] = iconv('gb2312','utf-8',$result[$i][3]);
        $data['telephone'] =iconv('gb2312','utf-8', $result[$i][4]);
   /*     $data_values .= "('$name','$gender','$age','$yydate','$telephone'),";  */
//获取表格默认数据
         $data['date']=date('Y-m-d H:i:s');
         $data['yuyue']='已预约';
         $data['department']='眼科';
         $data['uid']=session('uid');
         $data['sid']=session('group');
         $data['uname'] = session('nick');
         $data['source']=session('source');
//合并数组，准备写入数据库
    $datalist[] = $data;
   }  
   // $data_values = substr($data_values,0,-1); //去掉最后一个逗号  
    fclose($handle); //关闭指针  
$User = M('customer');
$add = $User->addAll($datalist);
    if($add){  
       $this->success('导入成功！！！','/Home/Yuyue/lists/');  
    }else{  

    $this->error('导入失败！！！');
               }
          }

      }


 }
