<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\EditProfileRequest;
use App\Model\Action;
use App\Model\User;
use App\Http\Requests\EditUserRequest;
use App\Libs\Messages;
use App\Libs\Strings;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function  getListUser(Request $request)
    {
        $getUser = $request['getUser'];

        $users = User::where([
            ['id', '!=', $getUser['id']]
        ])->latest('created_at')->paginate(10);
        return view('Admins.listUser')->with(['users' => $users, 'getUser' => $getUser]);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public  function getEditUser( Request $request )
    {
        $getUser = $request['getUser'];

        $input = $request->only('id');


        if (!isset($input['id'])) {
            return redirect()->route('get-list-user');
        }

        $user = User::where('id', $input['id'])->first();
        return view('Admins.editUser')->with(['user' => $user, 'getUser' => $getUser]);
    }

    /**
     * @param EditUserRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postEditUser(EditUserRequest $request){

        $getUser = $request['getUser'];
        $user = new User();
        $email = $request['email'];
        $request['email'] = 'dfvndfjknvkjfdnvjk';
        dd($request['id']);
        $input = $request->only('email', 'username', 'permission', 'status');

        if(!$request['avatar']) {
            $user->editUserNoAvatar($input, $request->id);
            return back()->with('success', Messages::success('EDIT_SUCCESS'));
        }

        $fileName = Strings::getFileName($request['avatar']);
        $request->avatar->move(base_path('public/assets/imgs/users'), $fileName);
        $user->editUser($input, '/assets/imgs/users/' . $fileName, $request->id);

        Action::add($getUser, Messages::actions('ACTION_ADD_USER') . $input['username']);
        return back()->with('success', Messages::success('EDIT_SUCCESS'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function getAddUser(Request $request)
    {
        $getUser = $request['getUser'];
        return view('Admins.addUser')->with('getUser', $getUser);
    }

    /**
     * @param EditUserRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postAddUser(EditUserRequest $request)
    {

        $getUser = $request['getUser'];

        if (User::getUserWithEmail($request['email'])) {
            return back()->with('error', Messages::errors('ERROR_EMAIL_UNIQUE'));
        }

        if(!$request['avatar']) {
            $keyName = Strings::getFirstChar($request['username']);
            $fileName = $keyName.'.png';
        } else {
            $fileName = Strings::getFileName($request['avatar']);
            $request->avatar->move(base_path('public/assets/imgs/users'), $fileName);
        }

        User::addUser($request, '/assets/imgs/users/' . $fileName);
        Action::add($getUser, Messages::actions('ACTION_ADD_USER') . $request['username']);

        return back()->with('success', Messages::success('ADD_SUCCESS'));
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function getDeleteUser(Request $request)
    {
        $getUser = $request['getUser'];

        User::where('id', $request->id)->delete();
        Action::add($getUser, Messages::actions('ACTION_ADD_USER') . $request->id);
        return redirect()->route('get-list-user')->with([
            'success' => Messages::success('DELETE_SUCCESS'),
            'getUser' => $getUser,
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function  getProfileUser(Request $request){
        $getUser = $request['getUser'];
        return view('Admins.profileUser')->with('getUser', $getUser);
    }

    public function postProfileUser(EditProfileRequest $request)
    {

        $getUser = $request['getUser'];
        $userId = $getUser['id'];
        $user = new User();

        if(!$request['avatar']){
            $user->editProfileNoAvatar($request, $userId);
            return back()->with('success', Messages::success('EDIT_SUCCESS'));
        }
        $fileName = Strings::getFileName($request['avatar']);
        $request->avatar->move(base_path('public/assets/imgs/users'), $fileName);
        $user->editProfile($request, '/assets/imgs/users/' . $fileName, $userId);
        Action::add($getUser, Messages::actions('ACTION_EDIT_PROFILE'));
        return back()->with('success', Messages::success('EDIT_SUCCESS'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getChangePassword(Request $request){
        $getUser = $request['getUser'];
        return view('Admins.changePassword')->with('getUser', $getUser);
    }

    /**
     * @param ChangePasswordRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function postChangePassword(ChangePasswordRequest $request)
    {
        $newPassWord = $request['password'];
        $oldPassword = $request['old_password'];
        $getUser = $request['getUser'];

        if (password_verify($oldPassword.$getUser->salt, $getUser->password)) {

            User::changePassword($newPassWord, $getUser['email']);
            Action::add($getUser, Messages::actions('ACTION_EDIT_PROFILE'));
            return redirect('/profile')->with('success', Messages::success('CHANGE_PASSWORD_SUCCESS'));
        }

        return back()->with('success', Messages::errors('ERROR_CHANGE_PASSWORD'));
    }
    public function getError(Request $request){
        $getUser = $request['getUser'];
        return view('error-404')->with('getUser', $getUser);
    }

}
