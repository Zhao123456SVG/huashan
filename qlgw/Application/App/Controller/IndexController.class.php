<?php
namespace App\Controller;
use Think\Controller;
class IndexController extends Controller {



	//首页导航
    public function index(){
		
		$data = M('menu') -> limit(5) -> select();
		echo json_encode($data);
		
	}	

    //产品介绍
    public function product(){
    	$data['fid'] = I('id');
    	if($data['fid'] != null){
    		$res = M('procuce_detail') -> where($data) -> select();
    	}else{
    		$res = M('procuce_detail') -> select();
    	}
    	foreach($res as $i => $v){
    		$res[$i]['img'] = 'http://expo.qianlangtech.com/Public/'.$res[$i]['img'];
    		$res[$i]['img1'] = 'http://expo.qianlangtech.com/Public/'.$res[$i]['img1'];
    	}

    	echo json_encode($res);
    
    }

      //工程案例
    public function example(){
    	$data['fid'] = I('id');
    	if($data['fid'] != null){
    		$res = M('example') -> where($data) -> select();
    	}else{
    		$res = M('example') -> select();
    	}
    	foreach($res as $i => $v){
    		$res[$i]['image'] = 'http://expo.qianlangtech.com/Public/'.$res[$i]['image'];
    	}

    	echo json_encode($res);
    
    }

      //应用领域
    public function computer(){
    	$data['fid'] = I('id');
    	if($data['fid'] != null){
    		$res = M('computer') -> where($data) -> select();
    	}else{
    		$res = M('computer') -> select();
    	}
    	foreach($res as $i => $v){
    		$res[$i]['image'] = 'http://expo.qianlangtech.com/Public/'.$res[$i]['image'];
    	}

    	echo json_encode($res);
    
    }

       //企业简介
    public function company(){
    	$data['fid'] = I('id');
    	if($data['fid'] != null){
    		$res = M('company') -> where($data) -> select();
    	}else{
    		$res = M('company') -> select();
    	}

    	echo json_encode($res);
    
    }

      //联系我们
    public function ours(){
    	$data['fid'] = I('id');
    	if($data['fid'] != null){
    		$res = M('ours') -> where($data) -> select();
    	}else{
    		$res = M('ours') -> select();
    	}
    	foreach($res as $i => $v){
    		$res[$i]['image'] = 'http://expo.qianlangtech.com/Public/'.$res[$i]['image'];
    	}

    	echo json_encode($res);
    
    }

      //公司资质
    public function zz(){

    	$res = M('zz') -> select();
  
    	foreach($res as $i => $v){
    		$res[$i]['image'] = 'http://expo.qianlangtech.com/Public/'.$res[$i]['image'];
    	}

    	echo json_encode($res);
    
    }
	
    //sylb
    public function sylb(){

        $res = M('sylb') -> select();
  
        foreach($res as $i => $v){
            $res[$i]['img1'] = 'http://expo.qianlangtech.com/Public/'.$res[$i]['img1'];
            $res[$i]['img2'] = 'http://expo.qianlangtech.com/Public/'.$res[$i]['img2'];
            $res[$i]['img3'] = 'http://expo.qianlangtech.com/Public/'.$res[$i]['img3'];
        }

        echo json_encode($res);
    
    }
    //xtyy
     public function xtyy(){

        $res = M('xtyy') -> select();
  
        foreach($res as $i => $v){
            $res[$i]['image'] = 'http://expo.qianlangtech.com/Public/'.$res[$i]['image'];
        }

        echo json_encode($res);
    
    }
     //gsjj
     public function gsjj(){

        $res = M('gsjj') -> select();
  
        foreach($res as $i => $v){
            $res[$i]['image'] = 'http://expo.qianlangtech.com/Public/'.$res[$i]['image'];
        }

        echo json_encode($res);
    
    }











}