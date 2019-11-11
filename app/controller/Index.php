<?php
namespace app\controller;
use app\BaseController;
use think\facade\View;
use think\facade\Filesystem;
use think\Db;
use think\Request;
use think\file;

class Index extends BaseController{
    public function index(){
//        $res=Db::table('cp')->select();
//        return View::fetch('index',['data'=>$res]);
        return View::fetch('index');
    }
    public function upload( ){

        // 获取表单上传文件 例如上传了001.jpg
        $file = request()->file('image');
        // 上传到本地服务器
        $savename = \think\facade\Filesystem::putFile( 'topic', $file);
        echo $savename;
    }

}