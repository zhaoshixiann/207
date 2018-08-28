<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function set()
    {
        // \Cookie::queue('name','xiaowang',5);
        // return response('<p>我是响应体</p>')->withCookie('class','lamp207',10);

        // $name = \Cookie::get('name');

        // dd($name);

    }

    //写入闪存
    public function flash()
    {
        // \Session::flash('info','恭喜您,添加成功');
        return redirect('/get-flash')->with('info','添加成功');

    }

    //读取闪存
    public function getFlash()
    {
      return view('admin');

    }

    public function user()
    {
        return view('user');

    }
    public function insert()
    {
       //表单验证   检测用户  密码
       if(empty($_POST['username']) || strlen($_POST['username'])<6 || strlen($_POST['username']) >20){
        \Session::flash('error','用户名格式不正确');
        return back()->withInput();

       }

    }

    public function response()
    {
        //普通字符串
        // return 'i love you';
        // return '<span>你最近好吗</span>';


        //返回json
        // return response()->json(['name'=>'xiaohigh','age'=>20]);

        //返回 模板
        // return view('view');

        //下载
        // return response()->download('./xuerumo.m4a');

    }

    //视图
    public function views()
    {
        return view('user.add',[
            'title' => '第一次接触视图',
            'content' => '我是一代歌奴',
             'pages' => '<a href="">1</a><a href="">2</a>'

        ]);
        
    }
        
    //创建页面
    public function page1()
    {
        return view('page1');
    }

    public function page2()
    {
        return view('page2');

    }

    //控制
    public function control()
    {
        return view('control',[
            'isVip' => true,
            'classmates' =>[
                '小森',
                '小阔',
                '小贤'
            ]
        ]);
    }
    
}

