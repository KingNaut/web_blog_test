@extends('layouts.admin')
@section('title') Error AppotaPay @endsection
@section('content')
    <div class="kt-grid kt-grid--ver kt-grid--root kt-page">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid  kt-error-v6" style="background-image: url('assets/imgs/error/bg6.jpg')">
            <div class="kt-error_container">
                <div class="kt-error_subtitle kt-font-light">
                    <h1>Oops...</h1>
                </div>
                <p class="kt-error_description kt-font-light">
                    Có vẻ như bạn không đủ quyền truy cập!<br>
                    Hãy kiểm tra lại quyền truy cập của mình.
                </p>
            </div>
        </div>
    </div>
    @include("layouts.plugins")
@endsection
