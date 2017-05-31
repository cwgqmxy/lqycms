<?php
namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'user';
	public $timestamps = false;
	
	/**
     * 不能被批量赋值的属性
     *
     * @var array
     */
    protected $guarded = [];
	
	/**
     * 获取关联到用户的角色
     */
    public function userrole()
    {
        return $this->belongsTo(UserRole::class, 'role_id', 'id');
    }
}