<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table      = 'articles';

    //把后来添加进去的属性加进去 重构, 这样 就能使用 内置的 Carbon方法了 比如  $xxxmodel->diffForHumans();
    protected $dates = ['published_at'];

    public    $timestamps = true;

    /**
     * Eloquent will also assume that each table has a primary key column named id
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     * 注意 这里 默认是 不允许填充的, 如果 要填充数据,则必须填上 要填充的数据
     * @var array
     */
    protected $fillable = [ 'title', 'content', 'published_at' ];

    /**
     * 这里 在执行模型 save之前调用的这个方法,会处理要插入到数据库字段的内容
     * RossLi 2016-01-14 16:57:22
     * @param $date
     */
    public function setPublishedAtAttribute( $date )
    {
        //date": "2016-01-14 16:44:05.000000"
        $this->attributes['published_at'] = Carbon::createFromFormat( 'Y-m-d', $date );
    }

    /**
     * 在 执行 query 之前执行的  foo,这里
     * @param $query 系统传入的$query
     * @param $type 动态传入的条件参数
     *
     * @return mixed
     */
    public function scopePublished($query, $type)
    {
        return $query->where('published_at','<=',$type);
    }

    /**
     * 这是 Article 模型
     * 表示 articles 表 关联 users表, users是主表
     * @param 父表,就是绑定到 父表(users)
     * @param 本表中 user_id(articles) => id(users)
     * @param 父表(users)的 id(主键)
     */
    public function user()
    {
        return $this->belongsTo('App\User','user_id','id');
    }
}
