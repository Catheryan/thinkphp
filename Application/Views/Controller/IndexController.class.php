 <?php
namespace Views\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$username ='CatherYan';
    	$email ='741699287@qq.com';
    	$age ='18';

    	$user = array(
    		'username' => $username,
    		'email' => $email,
    		'age' => $age, );

    	// $this->assign('username',$username);
    	// $this->assign('email',$email);
    	// $this->assign('age',$age);
    	$this->assign('user',$user);

    	$fetchContent = $this->fetch();
    	$fetchContent =str_replace('qq', 'QQ', $fetchContent);
    	$this->show($fetchContent);

    	//$this->display();
    }
}