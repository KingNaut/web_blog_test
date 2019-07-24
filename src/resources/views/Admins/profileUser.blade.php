@extends('layouts.admin')
@section('title') {{$getUser['username']}} @endsection
@section('content')
    <div class="kt-grid kt-grid--desktop kt-grid--ver kt-grid--ver-desktop kt-app">
        <!--Begin:: App Aside Mobile Toggle-->
        <button class="kt-app__aside-close" id="kt_user_profile_aside_close">
            <i class="la la-close"></i>
        </button>

        <div class="kt-grid__item kt-app__toggle kt-app__aside" id="kt_user_profile_aside" style="opacity: 1;">
            <div class="kt-portlet ">
                <div class="kt-portlet__head  kt-portlet__head--noborder">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                        </h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                            <i class="flaticon-more-1"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-fit dropdown-menu-md">
                        </div>
                    </div>

                </div>
                <div class="kt-portlet__body kt-portlet__body--fit-y">
                    <!--begin::Widget -->
                    <div class="kt-widget kt-widget--user-profile-1">
                        <div class="kt-widget__head">
                            <div class="kt-widget__media">
                                <img src="{{$getUser['avatar']}}" alt="image">
                            </div>
                            <div class="kt-widget__content">
                                <div class="kt-widget__section">
                                    <a href="#" class="kt-widget__username">
                                        {{$getUser['username']}}
                                        <i class="flaticon2-correct kt-font-success"></i>
                                    </a>
                                    <span class="kt-widget__subtitle">
                            {{$getUser['permission']}}
                        </span>
                                </div>


                            </div>
                        </div>
                        <div class="kt-widget__body">
                            <div class="kt-widget__content">
                                <div class="kt-widget__info">
                                    <span class="kt-widget__label">Email:</span>
                                    <a href="#" class="kt-widget__data">{{$getUser['email']}}</a>
                                </div>
                                <div class="kt-widget__info">
                                    <span class="kt-widget__label">Status:</span>
                                    <a href="#" class="kt-widget__data">{{$getUser['status']}}</a>
                                </div>
                            </div>
                            <div class="kt-widget__items">
                                <a href="/change_password" class="kt-widget__item ">
                        <span class="kt-widget__section">
                            <span class="kt-widget__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                        <path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z" id="Path-50" fill="#000000" opacity="0.3"></path>
                                        <path d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z" id="Mask" fill="#000000" opacity="0.3"></path>
                                        <path d="M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 C14.5228466,17 11.463736,17 7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z" id="Mask-Copy" fill="#000000" opacity="0.3"></path>
                                    </g>
                                </svg>
                            </span>
                            <span class="kt-widget__desc">
                                Thay đổi mật khẩu
                            </span>
                        </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--end::Widget -->
                </div>
            </div>

        </div>

        <div class="kt-grid__item kt-grid__item--fluid kt-app__content">
            <div class="row">
                <div class="col-xl-12">
                    <div class="kt-portlet">
                        <div class="kt-portlet__head">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">Personal Information <small>update your personal informaiton</small></h3>
                            </div>
                            <div class="kt-portlet__head-toolbar">
                                <div class="kt-portlet__head-wrapper">
                                </div>
                            </div>
                        </div>

                        <form class="kt-form kt-form--label-right"  method="POST" action="" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                @if (session('success'))
                                    <div class="alert alert-success">
                                        <p>{{ session('success') }}</p>
                                    </div>
                                @endif
                                    @if (session('errors'))
                                        <div class="alert alert-success">
                                            <p>{{ session('errors') }}</p>
                                        </div>
                                    @endif
                            <div class="kt-portlet__body">
                                <div class="kt-section kt-section--first">
                                    <div class="kt-section__body">
                                        <div class="row">
                                            <label class="col-xl-3"></label>
                                            <div class="col-lg-9 col-xl-6">
                                                <h3 class="kt-section__title kt-section__title-sm">Information:</h3>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label" for="user_avatar">Avatar</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <div class="form-group row">
                                                <img class="pull-left avatar-form__img" width="200" height="200" src="{{$getUser['avatar']}}">
                                                <div class="input-group row">
                                                    <div class="col-lg-9 col-xl-6">
                                                        <input type="file" class="custom-file-input" name="avatar" id="customFile"  accept="image/jpg, image/jpeg, image/png">
                                                        <label class="custom-file-label" for="customFile" style="text-align: left; width: 225px" >{{mb_substr(strip_tags($getUser['avatar']), 0, 10)}}</label>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">User Name</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <input class="form-control" type="text" name="username" value="{{$getUser['username']}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>

                            <div class="kt-portlet__foot">
                                <div class="kt-form__actions">
                                    <div class="row">
                                        <div class="col-lg-3 col-xl-3">
                                        </div>
                                        <div class="col-lg-9 col-xl-9">
                                            <button type="submit" class="btn btn-success">Chỉnh sửa thông tin</button>&nbsp;&nbsp;&nbsp;
                                            <button type="reset" class="btn btn-secondary">Hủy</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--End:: App Content-->
    </div>
    @include("layouts.plugins")
@endsection
