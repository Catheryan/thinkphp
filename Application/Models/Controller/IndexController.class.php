<?php
namespace Models\Controller;
use Think\Controller;
class IndexController extends Controller {

	public function index(){
		// $user =D('Yzh');
		// /*切换数据库*/
		// dump($user->db(1,'DB_2')->table('user')->select());
		// dump($user->getDbFields());

		// $this->createUser();
		//$this->updateUser(1);
		//$this->deleteUser(3);
		//$this->showUser(2);
		//$this->listUser();
		$userModel = D('yzh');
		$userModel->where('id=1')->select();

		echo ($userModel->getLastSql());
	}


	//新增用户
	private function createUser(){
		$userAttribute = array(
			'username'=>'高永建',
			'email'=>'111111111@qq.com',
			'age'=>'11'
			 );
		D('Yzh')->add($userAttribute);
	}
	//读取全部用户
	private function listUser(){
		dump(D('yzh')->select());
	} 
	//更新用户
	private function updateUser($userid){
		$userUpdateAttribute = array(
			'id' => $userid,
			'age'=>'200' );
		D('yzh')->save($userUpdateAttribute);
	}
	//删除用户
	private function deleteUser($userid){
		D('yzh')->delete($userid);
	}

	//显示特定的用户
	private function showUser($userid){
		dump(D('yzh')->find($userid));
	}
    private function lesson_1(){
    	//new
    	$user_model = new \Models\Model\UserModel();
		//M
		$user_m_model =M('User');

		//D
		$user_d_model =D('User');

		//空模型
		$empty_model = new \Think\Model(); 
		$empty_m_model =M();
		$empty_d_model =D();  
    }
}