<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
	
	
	function returnJosn($code,$description,$result){
			die(json_encode( array('code'=>strval( $code ),'description'=>$description, 'result'=>$result)) );
	}
    public function index(){
		'严格嘎嘎；发；发；飞啊飞；‘啊；飞阿飞阿飞；’阿'
    	$this->display();
       
    }
	
  /*  public function jcd_pic(){
    	 $info = $this -> uppic();
		 $id['id'] = I('id');
		 $data['pic1'] = 'http://www.corrinfo.com/lol/public/'.$info['pic1']['savepath'].$info['pic1']['savename'];
		 $data['pic2'] = 'http://www.corrinfo.com/lol/public/'.$info['pic2']['savepath'].$info['pic2']['savename'];
		 $ql_wind = M('ql_jcd','','DB_STOCK') -> where($id) -> save($data);
		 $this->returnJosn(1, '成功！', 1);
       
    } */
	
	
    private function uppic(){
		$upload = new \Think\Upload();
		$config = array("maxSize"=>'3145728',
						"exts"=> array('jepg','jpg','png','gif'),
						"rootPath" => 'Public/',
						"savePath" => 'Uploads/',
						);	
		$upload = new \Think\Upload($config);
		return $upload -> upload();
	}
	 public function login(){
	 	$data['username'] = I('username');
	 	$data['password'] = md5(I('password')); 
	 	$res = M('user') -> where($data) -> find();
	 	if(empty($res)){
	 		$this->success('账号或密码错误',U('Index/index'));
	 	}else{
	 		$r['id'] = $res['id'];
	 		$tt['time'] = time();

	 		 M('user') -> where($r) -> save($tt);
	 		session('uid',$res['username'],28800);
	 //		session('username',$res['username'],28800);
	 		$this->success('登录成功',U('Index/menu'));
	 	}
	 	
		//$this->display();
     }

     //主体
     public function menu(){
     	if($_SESSION['uid'] == null){
     		$this->success('请重新登录',U('Index/index'));exit;
     	}
     	//$this->assign('usernmae',$_SESSION['username']);
     	//$this->assign('usernmae',$_SESSION['username']);
     	$this->display();
     }
      public function logout(){
     		session(null);
     		$this->success('退出成功',U('Index/index'));exit;
     	
     }

      public function lol(){
     	$this->display();
     }
     //左导航
      public function left(){
     	$this->display();
     }
	//上导航
	 public function top(){
	 	$this->assign('username',$_SESSION['uid']);
     	$this->display();
     }
     //右导航
      public function right(){
      	$data['id'] = '1';
    	$res = M('user')->where($data)->find();
    	$ll = date("Y-m-d H:i:s",$res['time']);
    	$this->assign('menu',$ll);
     	$this->display();
     }
     //第一模块导航列表
     public function one_menu(){
        $menu = M('menu')->select();
        $this->assign('menu',$menu);
     	$this->display();
     }
       //第一模块导航列表
     public function one_menu_add(){
    // 	echo 'dsada';exit;
     	$this->display();
     }
     //分类模块添加
      public function one_menu_add_y(){
    	$data['procuct'] = I('procuct');
    	M('menu')->add($data);
    	//$this->success('添加成功',U('Index/menu'));
    	 echo "<script>alert('添加成功!');window.history.go(-1);</script>";return false;
     //	$this->display();
     }
     //大分类模块删除
      public function one_menu_del(){
    	$data['id'] = I('id');
    	M('menu')->where($data)->delete();
    	//$this->success('添加成功',U('Index/menu'));
    	 echo "<script>alert('删除成功!');window.history.go(-1);</script>";return false;
     //	$this->display();
     }
      //大分类模块修改
      public function one_menu_update(){
      	if($_POST['fid'] != null){
      		$id['id'] = $_POST['fid'];
      		$data['procuct'] = $_POST['procuct'];
      		M('menu') -> where($id) -> save($data);
    	    echo "<script>alert('修改成功!');window.history.go(-2);</script>";return false;
      	}
    	$data['id'] = I('id');
    	$res = M('menu')->where($data)->find();
    	 $this->assign('res',$res);
     	  $this->display();
     }
      //产品介绍管理
     public function product(){
        $procuce_detail = M('procuce_detail')->select();
        $this->assign('procuce_detail',$procuce_detail);
     	$this->display();
     }
     //产品分类添加
       public function product_add(){
        $menu = M('menu')->select();
        $this->assign('menu',$menu);
     	$this->display();
     }
     //产品分类添加
     public function product_add_insert(){
     		$info = $this -> uppic();
                   $data['title'] = I('title');
					$data['produce'] = I('produce');
					$data['fid'] = I('fid');
					$data['img'] = $info['img']['savepath'].$info['img']['savename'];
					$data['img_title'] = I('img_title');
					$data['img_detail'] = I('img_detail');
					$data['img1'] = $info['img1']['savepath'].$info['img1']['savename'];
					$data['img1_title'] = I('img1_title');
					$data['img1_detail'] = I('img1_detail');
					M('procuce_detail')->add($data);
			// if(!$info){
			// 		unlink('./Public/'.$info['img1']['savepath'].$info['img1']['savename']);
			// 		unlink('./Public/'.$info['img2']['savepath'].$info['img2']['savename']);
			// 		$this->error('图片添加失败');
			// }
			
		   echo "<script>alert('添加成功!');window.history.go(-1);</script>";return false;

     }
      //产品分类删除
      public function product_add_del(){
    	$data['id'] = I('id');
    	M('procuce_detail')->where($data)->delete();
    	 echo "<script>alert('删除成功!');window.history.go(-1);</script>";return false;
     }

       //产品分类修改
      public function product_add_update(){
    	if($_POST['fid'] != null){
    		$info = $this -> uppic();
      		$id['id'] = $_POST['fid'];
      		$data['title'] = $_POST['title'];
      		$data['produce'] = $_POST['produce'];
      		$data['img'] = $info['img']['savepath'].$info['img']['savename'];
      		$data['img1'] = $info['img1']['savepath'].$info['img1']['savename'];
      		$data['img_title'] = $_POST['img_title'];
      		$data['img_detail'] = $_POST['img_detail'];
      		$data['img1_title'] = $_POST['img1_title'];
      		$data['img1_detail'] = $_POST['img1_detail'];
      	//	dump($data['produce']);exit;
      		M('procuce_detail') -> where($id) -> save($data);
    	    echo "<script>alert('修改成功!');window.history.go(-2);</script>";return false;
      	}
    	$data['id'] = I('id');
    	$res = M('procuce_detail')->where($data)->find();
    	 $this->assign('res',$res);
     	 $this->display();
     }

       //工程案例管理
     public function example(){
        $example = M('example')->select();
        $this->assign('example',$example);
     	$this->display();
     }

      //产品分类添加
       public function example_add(){
        $menu = M('menu')->select();
        $this->assign('menu',$menu);
     	$this->display();
     }
       //产品分类添加
       public function example_add_insert(){
     		$info = $this -> uppic();
			$data['title'] = I('title');
			$data['produce'] = I('produce');
			$data['fid'] = I('fid');
			$data['cont1'] = I('cont1');
			$data['cont2'] = I('cont2');
			$data['image'] = $info['image']['savepath'].$info['image']['savename'];
			$data['image_title'] = I('image_title');
			M('example')->add($data);
		   echo "<script>alert('添加成功!');window.history.go(-1);</script>";return false;

     }
       //产品分类删除
      public function example_add_del(){
    	$data['id'] = I('id');
    	M('example')->where($data)->delete();
    	 echo "<script>alert('删除成功!');window.history.go(-1);</script>";return false;
     }
 	//工程案例修改
      public function example_add_update(){
    	if($_POST['fid'] != null){
    		$info = $this -> uppic();
      		$id['id'] = $_POST['fid'];
      		$data['title'] = $_POST['title'];
      		$data['produce'] = $_POST['produce'];
      		$data['image'] = $info['image']['savepath'].$info['image']['savename'];
      		$data['cont1'] = $_POST['cont1'];
      		$data['cont2'] = $_POST['cont2'];
      		$data['image_title'] = $_POST['image_title'];
      	//	dump($data['produce']);exit;
      		M('example') -> where($id) -> save($data);
    	    echo "<script>alert('修改成功!');window.history.go(-2);</script>";return false;
      	}
    	$data['id'] = I('id');
    	$res = M('example')->where($data)->find();
    	 $this->assign('res',$res);
     	 $this->display();
     }


       //应用领域管理
     public function computer(){
        $computer = M('computer')->select();
        $this->assign('computer',$computer);
     	$this->display();
     }

       //应用领域添加
       public function computer_add(){
        $menu = M('menu')->select();
        $this->assign('menu',$menu);
     	$this->display();
     }
     //应用领域添加
       public function  computer_add_insert(){
     		$info = $this -> uppic();
			$data['title'] = I('title');
			$data['detail'] = I('detail');
			$data['fid'] = I('fid');
			$data['cont1'] = I('cont1');
			$data['cont2'] = I('cont2');
			$data['cont3'] = I('cont3');
			$data['image'] = $info['image']['savepath'].$info['image']['savename'];

			M('computer')->add($data);
		   echo "<script>alert('添加成功!');window.history.go(-1);</script>";return false;

     }

        //应用领域删除
      public function computer_add_del(){
    	$data['id'] = I('id');
    	M('computer')->where($data)->delete();
    	 echo "<script>alert('删除成功!');window.history.go(-1);</script>";return false;
     }

     //应用领域修改
      public function computer_add_update(){
    	if($_POST['fid'] != null){
    		$info = $this -> uppic();
      		$id['id'] = $_POST['fid'];
      		$data['title'] = $_POST['title'];
      		$data['detail'] = $_POST['detail'];
      		$data['image'] = $info['image']['savepath'].$info['image']['savename'];
      		$data['cont1'] = $_POST['cont1'];
      		$data['cont2'] = $_POST['cont2'];
      		$data['cont3'] = $_POST['cont4'];
      	//	dump($data['produce']);exit;
      		M('computer') -> where($id) -> save($data);
    	    echo "<script>alert('修改成功!');window.history.go(-2);</script>";return false;
      	}
    	$data['id'] = I('id');
    	$res = M('computer')->where($data)->find();
    	 $this->assign('res',$res);
     	 $this->display();
     }

    

    //企业简介管理
     public function company(){
        $computer = M('company')->select();
        $this->assign('company',$computer);
     	$this->display();
     }

      //企业简介添加
       public function company_add(){
        $menu = M('menu')->select();
        $this->assign('menu',$menu);
     	$this->display();
     }
     //企业简介添加
       public function  company_add_insert(){
     		$info = $this -> uppic();
			$data['title'] = I('title');
			$data['detail'] = I('detail');
			$data['fid'] = I('fid');
			$data['content'] = I('content');

			M('company')->add($data);
		   echo "<script>alert('添加成功!');window.history.go(-1);</script>";return false;

     }

         //企业简介删除
      public function company_add_del(){
    	$data['id'] = I('id');
    	M('company')->where($data)->delete();
    	 echo "<script>alert('删除成功!');window.history.go(-1);</script>";return false;
     }

      //企业简介修改
      public function company_add_update(){
    	if($_POST['fid'] != null){
      		$id['id'] = $_POST['fid'];
      		$data['title'] = $_POST['title'];
      		$data['detail'] = $_POST['detail'];
      		$data['content'] = $_POST['content'];
      		
      	//	dump($data['produce']);exit;
      		M('company') -> where($id) -> save($data);
    	    echo "<script>alert('修改成功!');window.history.go(-2);</script>";return false;
      	}
    	$data['id'] = I('id');
    	$res = M('company')->where($data)->find();
    	 $this->assign('res',$res);
     	 $this->display();
     }
      //联系我们管理
     public function ours(){
        $ours = M('ours')->select();
        $this->assign('ours',$ours);
     	$this->display();
     }
      //联系我们添加
       public function ours_add(){
        $menu = M('menu')->select();
        $this->assign('menu',$menu);
     	$this->display();
     }
      //联系我们添加
       public function  ours_add_insert(){
     		$info = $this -> uppic();
			$data['title'] = I('title');
			$data['detail'] = I('detail');
			$data['fid'] = I('fid');
			$data['detail1'] = I('detail1');
			$data['image'] = $info['image']['savepath'].$info['image']['savename'];
			$data['address'] = I('address');
			$data['email'] = I('email');
			$data['phone'] = I('phone');
			$data['mobile'] = I('mobile');
			M('ours')->add($data);
		   echo "<script>alert('添加成功!');window.history.go(-1);</script>";return false;

     }
	//联系我们删除
        public function ours_add_del(){
    	$data['id'] = I('id');
    	M('ours')->where($data)->delete();
    	 echo "<script>alert('删除成功!');window.history.go(-1);</script>";return false;
     }

      ///联系我们修改
      public function ours_add_update(){
    	if($_POST['fid'] != null){
    		$info = $this -> uppic();
      		$id['id'] = $_POST['fid'];
      		$data['title'] = $_POST['title'];
      		$data['detail'] = $_POST['detail'];
      		$data['image'] = $info['image']['savepath'].$info['image']['savename'];
      		$data['detail1'] = $_POST['detail1'];
      		$data['address'] = $_POST['address'];
      		$data['email'] = $_POST['email'];
      		$data['phone'] = $_POST['phone'];
      		$data['mobile'] = $_POST['mobile'];
      	//	dump($data['produce']);exit;
      		M('ours') -> where($id) -> save($data);
    	    echo "<script>alert('修改成功!');window.history.go(-2);</script>";return false;
      	}
    	$data['id'] = I('id');
    	$res = M('ours')->where($data)->find();
    	 $this->assign('res',$res);
     	 $this->display();
     }

	
	 //公司资质管理
     public function zz(){
        $zz = M('zz')->select();
        $this->assign('zz',$zz);
     	$this->display();
     }
       //公司资质添加
       public function zz_add(){
        $menu = M('menu')->select();
        $this->assign('menu',$menu);
     	$this->display();
     }

      //公司资质添加
       public function  zz_add_insert(){
     		$info = $this -> uppic();
			$data['title'] = I('title');
			$data['detail'] = I('detail');
			$data['fid'] = I('fid');
			$data['cont'] = I('cont');
			$data['image'] = $info['image']['savepath'].$info['image']['savename'];
			M('zz')->add($data);
		   echo "<script>alert('添加成功!');window.history.go(-1);</script>";return false;

     }

     //公司资质们删除
        public function zz_add_del(){
    	$data['id'] = I('id');
    	M('zz')->where($data)->delete();
    	 echo "<script>alert('删除成功!');window.history.go(-1);</script>";return false;
     }

      ///公司资质们修改
      public function zz_add_update(){
    	if($_POST['fid'] != null){
    		$info = $this -> uppic();
      		$id['id'] = $_POST['fid'];
      		$data['title'] = $_POST['title'];
      		$data['detail'] = $_POST['detail'];
      		$data['image'] = $info['image']['savepath'].$info['image']['savename'];
      		$data['cont'] = $_POST['cont'];
      		
      	//	dump($data['produce']);exit;
      		M('zz') -> where($id) -> save($data);
    	    echo "<script>alert('修改成功!');window.history.go(-2);</script>";return false;
      	}
    	$data['id'] = I('id');
    	$res = M('zz')->where($data)->find();
    	 $this->assign('res',$res);
     	 $this->display();
     }

      //pc端首页列表
      public function sylb(){
         $sylb = M('sylb')->select();
        $this->assign('sylb',$sylb);
         $this->display();

      }

       //pc端首页列表添加
      public function sylb_add(){
        if($_FILES != null){
           $info = $this -> uppic();
          $data['img1'] = $info['img1']['savepath'].$info['img1']['savename'];
          $data['img2'] = $info['img2']['savepath'].$info['img2']['savename'];
          $data['img3'] = $info['img3']['savepath'].$info['img3']['savename'];
          $data['title'] = $_POST['title'];
          $data['content'] = $_POST['content'];
          M('sylb')->add($data);
          echo "<script>alert('添加成功!');window.history.go(-1);</script>";return false;

        }
       
          $this->display();
     }

      //pc端首页删除
        public function sylb_add_del(){
      $data['id'] = I('id');
      M('sylb')->where($data)->delete();
       echo "<script>alert('删除成功!');window.history.go(-1);</script>";return false;
     }

       ///pc端首页修改
      public function sylb_update(){
      if($_POST['fid'] != null){
        $info = $this -> uppic();
          $id['id'] = $_POST['fid'];
          $data['title'] = $_POST['title'];
          $data['content'] = $_POST['content'];
          $data['img1'] = $info['img1']['savepath'].$info['img1']['savename'];
          $data['img2'] = $info['img2']['savepath'].$info['img2']['savename'];
          $data['img3'] = $info['img3']['savepath'].$info['img3']['savename'];
          M('sylb') -> where($id) -> save($data);
          echo "<script>alert('修改成功!');window.history.go(-2);</script>";return false;
        }
      $data['id'] = I('id');
       $res = M('sylb')->where($data)->find();
        $this->assign('res',$res);
       $this->display();
     }


      //pc端首页系统应用
      public function xtyy(){
         $xtyy = M('xtyy')->select();
        $this->assign('xtyy',$xtyy);
         $this->display();

      }

      //pc端系统应用
      public function xtyy_add(){
        if($_FILES != null){
           $info = $this -> uppic();
          $data['image'] = $info['image']['savepath'].$info['image']['savename'];
          $data['content'] = $_POST['content'];
          M('xtyy')->add($data);
          echo "<script>alert('添加成功!');window.history.go(-1);</script>";return false;

        }
       
          $this->display();
     }
      //pc端系统应用
        public function xtyy_add_del(){
        $data['id'] = I('id');
        M('xtyy')->where($data)->delete();
        echo "<script>alert('删除成功!');window.history.go(-1);</script>";return false;
     }

      ///pc端系统应用
      public function xtyy_update(){
      if($_POST['fid'] != null){
        $info = $this -> uppic();
          $id['id'] = $_POST['fid'];
         
          $data['content'] = $_POST['content'];
          $data['image'] = $info['image']['savepath'].$info['image']['savename'];

          M('xtyy') -> where($id) -> save($data);
          echo "<script>alert('修改成功!');window.history.go(-2);</script>";return false;
        }
      $data['id'] = I('id');
       $res = M('xtyy')->where($data)->find();
        $this->assign('res',$res);
       $this->display();
     }

      //pc端公司简介
      public function gsjj(){
         $gsjj = M('gsjj')->select();
        $this->assign('gsjj',$gsjj);
         $this->display();

      }

      //pc端公司简介添加
      public function gsjj_add(){
        if($_FILES != null){
           $info = $this -> uppic();
           $data['title'] = $_POST['title'];
          $data['image'] = $info['image']['savepath'].$info['image']['savename'];
          $data['content'] = $_POST['content'];
          M('gsjj')->add($data);
          echo "<script>alert('添加成功!');window.history.go(-1);</script>";return false;

        }
       
          $this->display();
     }

      //pc端公司简介删除
     public function gsjj_add_del(){
        $data['id'] = I('id');
        M('gsjj')->where($data)->delete();
        echo "<script>alert('删除成功!');window.history.go(-1);</script>";return false;
     }

       ///pc端公司简介修改
      public function gsjj_update(){
      if($_POST['fid'] != null){
        $info = $this -> uppic();
          $id['id'] = $_POST['fid'];
         $data['title'] = $_POST['title'];
          $data['content'] = $_POST['content'];
          $data['image'] = $info['image']['savepath'].$info['image']['savename'];

          M('gsjj') -> where($id) -> save($data);
          echo "<script>alert('修改成功!');window.history.go(-2);</script>";return false;
        }
      $data['id'] = I('id');
       $res = M('gsjj')->where($data)->find();
        $this->assign('res',$res);
       $this->display();
     }


      ///管理员修改密码
      public function admin_update(){
    	if($_POST['fid'] != null){

      		$id['id'] = $_POST['fid'];
      		$data['username'] = $_POST['username'];
      		$data['password'] = md5($_POST['password']);
      		
      		M('user') -> where($id) -> save($data);
    	    echo "<script>alert('修改成功!');window.history.go(-2);</script>";return false;
      	}
    	$data['id'] = '1';
    	$res = M('user')->where($data)->find();
    	 $this->assign('res',$res);
     	 $this->display();
     }

	
}