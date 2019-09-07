<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    /**
     * @var string
     */
    protected  $table = 'actions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // protected $fillable = [
    //     'id', 'user_id', 'user_name', 'action', 'created_at', 'update_at',
    // ];
    protected $guarded = [];

    public static function add($checkUser, $action){
        $timeNow = now()->timezone('Asia/Ho_Chi_Minh');
        Action::create([
            'user_id' => $checkUser->id,
            'user_name' => $checkUser->username,
            'action' => $action,
            'created_at' => $timeNow,
            'updated_at' => $timeNow,
        ]);
    }
}
