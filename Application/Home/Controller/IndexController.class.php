<?php
namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $this->listActionUrl();
    }

    /*
     * 列出User控制器操作方法的URL
     */
    private function listActionUrl()
    {
        echo "当前URl模式是：".C('URL_MODEL')."</br>";
        echo "<hr>";

        echo "User控制器index操作方法的URl为：<a href=\"".U('Home/User/index')."\">".U('Home/User/index')."<a/>";
        echo "<hr>";
        echo "User控制器edit操作方法的URl为：<a href=\"".U('Home/User/edit')."\">".U('Home/User/edit')."<a/>";
        echo "<hr>";
        echo "User控制器login操作方法的URl为：<a href=\"".U('Home/User/login')."\">".U('Home/User/login')."<a/>";
        echo "<hr>";
    }
}