<?php

namespace App\Model;

use function GuzzleHttp\Psr7\str;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Null_;

class User extends Model
{
    /**
     * @var string
     */
    protected  $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // protected $fillable = [
    //     'id','name', 'email', 'lever', 'profile_picture', 'job', 'telephone_number',
    //     'status', 'created_at', 'updated_at', 'token_expiry'
    // ];
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];


    /**
     * @param $input
     * @param $token
     */
    public static function getUserWithEmail(string $email)
    {
        $infoUser = User::where('email', $email)->first();
        return $infoUser;
    }

    /**
     * @param $input
     * @param $token
     */
    public static function editToken($input, $token)
    {
        $tokenExpiry = time() + (86400*7);
        User::where('email', $input['email'])->update([
            'email' => $input['email'],
            'remember_token' => $token,
            'token_expiry' => $tokenExpiry
        ]);
        return;
    }

    /**
     * @param $token
     * @return mixed
     */
    public static function getToken($token){
        $user = User::where([
            ['remember_token', '=', $token],
            ['token_expiry', '>', time()]
            ])->first();

        return $user;
    }

    /**
     * @param $token
     * @param $permission
     * @return mixed
     */
    public static function checkPermission($token, $permission){
        $user = User::where([
            ['remember_token', '=', $token],
            ['permission', '=', $permission],
        ])->first();
        return $user;
    }

    /**
     * @param $input
     * @param $fileName
     * @param $id
     */
    public static function editUser($input, $fileName, $id){

        User::where('id', $id)->update([
            'username' => $input['username'],
            'email' => $input['email'],
            'avatar' => $fileName,
            'permission' => $input['permission'],
            'status' => $input['status']
        ]);

        return;
    }

    /**
     * @param $input
     * @param $fileName
     * @param $id
     */
    public static function editProfile($input, $fileName, $id)
    {
        User::where('id', $id)->update([
            'username' => $input['username'],
            'avatar' => $fileName
        ]);

        return;
    }

    /**
     * @param $input
     * @param $id
     */
    public static function editUserNoAvatar($input, $id)
    {

        $timeNow = now()->timezone('Asia/Ho_Chi_Minh');
        User::where('id', $id)->update([
            'email' => $input['email'],
            'username' => $input['username'],
            'permission' => $input['permission'],
            'status' => $input['status'],
            'updated_at' => $timeNow,
        ]);
    }

    /**
     * @param $input
     * @param $id
     */
    public static function editProfileNoAvatar($input, $id)
    {
        User::where('id', $id)->update([
            'username' => $input['username']
        ]);

        return;
    }

    /**
     * @param $input
     * @param $fileName
     */
    public static function addUser($input, $fileName)
    {

        $tokenExpiry = time() + (86400*7);
        $salt = substr(md5(rand()), 0, 30);
        $password = password_hash($input['password'] . $salt, PASSWORD_BCRYPT);

        User::create([
            'username' => $input['username'],
            'email' => $input['email'],
            'password' => $password,
            'salt' => $salt,
            'avatar' => $fileName,
            'permission' => $input['permission'],
            'status' => $input['status'],
            'token_expiry' => $tokenExpiry,
        ]);
        return;
    }

    public static function changePassword($newPasswpord, $email){
        $timeNow = now()->timezone('Asia/Ho_Chi_Minh');
        $salt = substr(md5(rand()), 0, 30);
        $newPassword = password_hash($newPasswpord . $salt, PASSWORD_BCRYPT);
        User::where('email', $email)->update([
            'password' => $newPassword,
            'salt' => $salt,
            'updated_at' => $timeNow,
        ]);
        return;
    }
}
