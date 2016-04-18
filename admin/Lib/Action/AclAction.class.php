<?php
// 本类由系统自动生成，仅供测试用途
class AclAction extends Action {
      public function _initialize(){
      	  if(!$_SESSION['login']){
      	  	   $this->error("请先登录！",U("Login/index"));
      	  	   exit;
      	  }
      }
}
?>