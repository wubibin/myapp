<?php
namespace app\index\controller;

use \think\Request;

class Index
{
    public function index()
    {
        // 是否为 GET 请求
        if (Request::instance()->isGet()) {
            echo "当前为 GET 请求";
        }
        // 是否为 POST 请求
        if (Request::instance()->isPost()) {
            echo "当前为 POST 请求";
        }
        // 是否为 PUT 请求
        if (Request::instance()->isPut()) {
            echo "当前为 PUT 请求";
        }
        // 是否为 DELETE 请求
        if (Request::instance()->isDelete()) {
            echo "当前为 DELETE 请求";
        }
        // 是否为 Patch 请求
        if (Request::instance()->isPatch()) {
            echo "当前为 PATCH 请求";
        }
        // $request = Request::instance();
        // echo '请求方法：' . $request->method() . '<br/>';
        // echo '访问地址：' . $request->ip() . '<br/>';
        // echo '请求参数：';
        // dump($request->param());
        // echo '请求参数：仅包含name,sex';
        // dump($request->only(['name', 'sex']));
        // echo '请求参数：排除name,sex';
        // dump($request->except(['name', 'sex']));
        // return '<style type="text/css">*{ padding: 0; margin: 0; } .think_default_text{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p> ThinkPHP V5<br/><span style="font-size:30px">十年磨一剑 - 为API开发设计的高性能框架</span></p><span style="font-size:22px;">[ V5.0 版本由 <a href="http://www.qiniu.com" target="qiniu">七牛云</a> 独家赞助发布 ]</span></div><script type="text/javascript" src="https://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script><script type="text/javascript" src="https://e.topthink.com/Public/static/client.js"></script><think id="ad_bd568ce7058a1091"></think>';
    }
}
