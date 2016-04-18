<?php
// 本类由系统自动生成，仅供测试用途
class CartoonAction extends AclAction {
    public function add(){
	    $this->display();
    }
    public function insert(){
        header('Content-Type:text/html; charset=utf-8');
    	$cartoon=M('cartoon');
    	$cartoon->create();
    	$cartoon->time=time(); 
    	if($cartoon->add()){
    		$this->success("添加成功",U(add));
    	}else{
    		$this->error('新增失败');
    	}
    }
    public function show(){
        $cartoon=M('cartoon');
        $rows=$cartoon->order('id desc')->limit(5)->select();
        $this->assign('rows',$rows);
        $this->display();
    }
    public function delete(){
        $cartoon=M('cartoon');
        if($cartoon->where("id={$_GET['id']}")->delete()){
            $this->success("删除成功",U(show));
         }else{
            $this->error('删除失败');
         }

    }
    public function update(){
        header('Content-Type:text/html; charset=utf-8');
        $cartoon=M("cartoon");
        $cartoon->create();
        if($cartoon->where("id={$_POST['id']}")->save()){
            $this->success("修改成功",U(show));
         }else{
            $this->error('修改失败');
         }


        
    }
 }
?>