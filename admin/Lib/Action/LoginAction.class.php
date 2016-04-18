<?php
// 本类由系统自动生成，仅供测试用途
class LoginAction extends Action {
    public function index(){
	   $this->display();
    }

     public function check(){
        header('Content-Type:text/html; charset=utf-8');
	    $username=$_POST['username'];
        $password=md5($_POST['password']);
        $vcode=md5(strtolower($_POST['vcode']));
        $fcode=$_SESSION['verify'];
        if($vcode!=$fcode){
            $this->error("验证码有误！",U(index));
        }else{
            $user=M('user');
            $where="username='{$username}' and password='{$password}' and admin=1";
            $row=$user->where($where)->find();
            if($row){
                $_SESSION['username']=$username;
                $_SESSION['login']=1;
                $this->success("登录成功！",U("Index/index"));
            }else{
                $this->error("登录失败,请重新尝试！");
            }
        }
    }

     public function loginout(){
	    $_SESSION=array();
        setcookie("PHPSESSID",'','time()-3600','/');
        session_destroy(); 
        $this->success("退出成功！",U("Login/index"));
    }
    public function verify(){
       import('ORG.Util.Image');
       Image::buildImageVerify();
    }
}