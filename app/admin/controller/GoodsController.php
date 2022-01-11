<?php
declare (strict_types = 1);

namespace app\admin\controller;

use app\admin\model\Goods;
use app\Request;

class GoodsController
{
    /**
     * 展示
     */
    public function show()
    {
        $obj = new Goods();
        $data = $obj->show();
        return view('./goods_list',['data'=>$data]);
    }
    /**
     * 软删除
     */
    public function del(Request $request)
    {
        $id = $request->get('id','');
        $obj = new Goods();
        $res = $obj->del($id);
        if ($res){
            return redirect('show');
        }
    }
    /**
     * 回收站
     */
    public function only()
    {
        $obj = new Goods();
        $data = $obj->only();
        return view('./only',['data'=>$data]);
    }
    public function upOnly(Request $request)
    {
        $id = $request->get('id','');
        $obj = new Goods();
        $res = $obj->upOnly($id);
        if ($res){
            return redirect('show');
        }
    }
}
