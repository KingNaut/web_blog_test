<?php


namespace App\Libs;


class Messages
{
    public  static function errors(string $code): string
    {
        $errors = [
            'ERROR_EMAIL_REQUIRED' => 'Vui lòng nhập Email.',
            'ERROR_EMAIL_UNIQUE' => 'Email đã tồn tại! Vui lòng nhập Email khác!',
            'ERROR_EMAIL_REGEX' => 'Nhập đúng định dạng Email: "**@.appota.com"',
            'ERROR_EMAIL_MAX' => 'Email quá dài!',
            'ERROR_PASSWORD_REQUIRED' => 'Vui lòng nhập mật khẩu!',
            'ERROR_PASSWORD_MIN' => 'Mật khẩu quá ngắn!',
            'ERROR_PASSWORD_SAME' => 'Mật khẩu không trùng khớp! Vui lòng nhập lại!',
            'ERROR_PASSWORD_DIFFERENT' => 'Vui lòng nhập mật khẩu mới!',
            'ERROR_LOGIN_FAIL' => 'Tên đăng nhập hoặc Mật khẩu không chính xác! Vui lòng nhập lại.',
            'ERROR_USERNAME_REQUIRED' => 'Vui lòng nhập User Name!',
            'ERROR_USERNAME_REGEX' => 'User Name có chứa ký tự đặc biệt!',
            'ERROR_PERMISSION_REQUIRED' => 'Vui lòng nhập Permission!',
            'ERROR_STATUS_REQUIRED' => 'Vui lòng chọn Status',
            'ERROR_STATUS_IN' => 'Vui nhập đúng Status',
            'ERROR_LOGIN' => 'Vui lòng đăng nhập lại!',
            'ERROR_NOT_PERMISSION' => 'Ban không đủ quyền hạn để thực hiện thao tác này!',
            'ERROR_AVATAR_REQUIRED' => 'Vui lòng chọn Avatar!',
            'ERROR_AVATAR_IMAGE' => 'Avatar sai định dạng!',
            'ERROR_AVATAR_MIMES' => 'Avatar không đúng định dạng :jpeg,bmp,png!',
            'ERROR_AVATAR_MAX' => 'Avatar dung lượng quá lớn!',
            'ERROR_SELECT_USER' => 'Vui lòng chọn thông tin user',
            'ERROR_PERMISSION_IN' => 'Phân quyền không hợp lệ'
        ];
        return $errors[$code];
    }

    public static function success(string $code): string
    {
        $success = [
            'ADD_SUCCESS' => 'Bạn đã thêm thành công!',
            'EDIT_SUCCESS' => 'Bạn đã sửa thành công!',
            'DELETE_SUCCESS' => 'Bạn đã xóa thành công!',
            'CHANGE_PASSWORD_SUCCESS' => 'Bạn đã thay đổi mật khẩu thành công!',
        ];
        return $success[$code];
    }

    public static function actions(string $code): string
    {
            $actions =[
                'LOGIN' => 'Login!',
                'ACTION_ADD_USER' => 'Đã Thêm User: ',
                'ACTION_EDIT_USER' => 'Đã Edit User: ',
                'ACTION_DELETE_USER' => 'Đã Xóa User: ',
                'ACTION_EDIT_PROFILE' => 'Đã thay đổi thông tin cá nhân của mình!',
                'ACTION_CHANGE_PASSWORD' => 'Đã thay đổi mật khẩu cá nhân của mình!',
            ];
        return $actions[$code];
    }
}
