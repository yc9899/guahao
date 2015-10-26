<?php 
namespace Home\Controller;

use Think\Controller;

class KeywordsController extends Controller{
    
    public function export_csv($filename, $data){
        header("Content-type:text/csv");   
        header("Content-Disposition:attachment;filename=".$filename);   
        header('Cache-Control:must-revalidate,post-check=0,pre-check=0');   
        header('Expires:0');   
        header('Pragma:public');
        echo $data;
        
    }
}
