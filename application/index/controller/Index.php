<?php
namespace app\index\controller;
//引入系统的数据类
use think\Db;
//引入系统的控制器类
use think\Controller;

class Index extends controller
{
   public function index()
   {
       //连接数据库
       $data = Db::table("user")->select();
//       分配数据给页面
       $this->assign('data',$data);
//       var_dump($data);
       //加载页面、
       return view();
   }

   //引入联想首页
    public function lianxiang()
    {
//        return $this->fetch('',['__HOMES__'=>'/static/home/public']);
//        return $this->fetch();
        return view('',[],['__HOMES__'=>'/static/home/public']);
    }

}
