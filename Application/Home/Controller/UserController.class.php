<?php
/**
 * User: haier
 */

namespace Home\Controller;


use Think\Controller;

class UserController extends Controller{
    public function index(){
    	/*页面跳转选项*/
        //$this->redirect('edit','',3,'跳转界面');
        //$this->success('跳转成功',U('User/login'),3);
        //$this->error('出错了，跳转失败',U('User/login'),5);
        //$this->ajaxReturn(getTestdata(),'xml');
        /*获取输入变量*/
        $server =i('server.HTTP_HOST');
        dump($server);
    }
    public function edit(){
        echo "User.edit";
    }
    public function login(){
        $user =I('get.user',null);
        if ($user ==='jike') {
        	$this ->success('你好，管理员',U('User/index'),3);
        }else{
        	$this->error('你好，你没有管理员权限',U('User/index'),4);
        }
	}	
}