<?php
declare (strict_types = 1);

namespace app\admin\model;

use think\Model;
use think\model\concern\SoftDelete;

/**
 * @mixin \think\Model
 */
class Goods extends Model
{

    /**
     * 查询
     */
    public function show()
    {
        return $this->select();
    }
    /**
     * 软删除
     */
    use SoftDelete;
    protected $deleteTime='delete_time';
    public function del($id)
    {
        return $this->destroy($id);
    }
    /**
     * 回收站
     */
    public function only()
    {
        return $this->queryOnlyTrashed()->select();
    }
    /**
     * 恢复
     */
    public function upOnly($id)
    {
        return $this->where('id',$id)->restore();
    }
}
