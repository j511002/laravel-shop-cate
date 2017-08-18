<?php
/**
 * Created by PhpStorm.
 * User: coffeekizoku
 * Date: 2017/8/18
 * Time: 下午2:52
 */

namespace SimpleShop\Cate\Models;


use Illuminate\Database\Eloquent\Model;

class CommodityCateBrand extends Model
{
    /**
     * 主键
     */
    protected $primaryKey = "id";

    /**
     * 黑名单列表
     *
     * @var array
     */
    protected $fillable = [
        'cate_id',
        'brand_id'
    ];
}