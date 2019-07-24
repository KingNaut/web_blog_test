@extends('layouts.admin')
@section('title') Thêm User @endsection
@section('content')
    <div class="kt-content  kt-grid__item kt-grid__item--fluid">
        <div class="row">
            <div class="col-md-7">
                <form class="kt-form" method="POST" action="" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        @if (session('success'))
                            <div class="alert alert-success">
                                <p>{{ session('success') }}</p>
                            </div>
                        @endif
                            @if (session('error'))
                            <div class="alert alert-success">
                                <p>{{ session('error') }}</p>
                            </div>
                        @endif
                        @if ($errors->all())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                    </div>
                    <div class="kt-portlet__body">
                        <div class="form-group"> <h3 style="text-align: center";><br/>Edit User Profile</h3></div>
                        <div class="form-group">
                            <label class="form-group" for="user_avatar">Avatar</label>

                            <div class="form-group">
                                <img class="pull-left avatar-form__img" width="150" height="150" src="/assets/imgs/users/appota.png">
                            </div>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="avatar" id="customFile"  accept="image/jpg, image/jpeg, image/png">
                                    <label class="custom-file-label" for="customFile" >Choose File</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>User name: </label>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="User Name" name="username">
                        </div>
                        <div class="form-group">
                            <label>Email: </label>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Email" name="email" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label>Password: </label>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="password" placeholder="Password" name="password">
                        </div>
                        <div class="form-group">
                            <label>Permission: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <select name="permission" id="permission" style="width: 120px" >
                                <option>root</option>
                                <option>staff</option>
                                <option>guest</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Status: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <select name="status" id="status" style="width: 120px">
                                <option style="">inactive</option>
                                <option>active</option>
                                <option>blocked</option>
                            </select>
                        </div>
                    </div>
                    <div class="kt-portlet__foot" style="text-align: center">
                        <div class="kt-login__actions">
                            &nbsp;&nbsp;&nbsp;&nbsp;<button  type="submit" class="btn btn-brand">Add User</button>&nbsp;&nbsp;
                            &nbsp;&nbsp;<button  type="reset" class="btn btn-secondary">Cancel</button>
                        </div>
                    </div>
                    <div class="form-group"><br/></div>
                </form>
            </div>
        </div>
    </div>
    @include("layouts.plugins")
@endsection
