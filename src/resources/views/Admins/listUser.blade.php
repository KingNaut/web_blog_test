@extends('layouts.admin')
@section('title') Danh Sách User @endsection
@section('content')
<div class="kt-section__content kt-section__content--solid" style="padding: 10px">
    <a href="{{url('/adduser')}}">
        <button class="btn btn-success btn-lg"  type="button" aria-pressed="true" >Thêm User</button>
    </a>
</div>
            <div class="row">
                <div class="col-lg-12">
                    @csrf
                    @if(session('success'))
                        <script>
                            alert("{{ session('success') }}");
                        </script>
                    @endif
                        @if(session('errors'))
                            <script>
                                alert("{{ session('errors') }}");
                            </script>
                        @endif
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-align-justify"></i> Danh Sách Thành Viên</div>
                        <div class="card-body">
                            <table class="table table-responsive-sm table-bordered table-striped table-sm" style="text-align: center">
                                <thead>
                                <tr>
                                    <th>Chức Năng</th>
                                    <th>Avatar</th>
                                    <th >Tên Thành Viên</th>
                                    <th >Email</th>
                                    <th >Quyền Hạn</th>
                                    <th >Trạng Thái</th>
                                    <th >Ngày Thêm</th>
                                    <th >Ngày Cập Nhật</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td style="padding: 16px; text-align: center">
                                            <a href="{{url('/edituser?id='.$user->id)}}">
                                                <button class="btn btn-sm btn-pill btn-info" type="button" aria-pressed="true" style="font-style: unset ">Sửa</button>
                                            </a>
                                            <a href="{{url('/deleteuser?id='.$user->id)}}" onclick="return  confirm('Bạn thật sự muốn xóa user này hay không?')")>

                                                <button class="btn btn-sm btn-pill btn-danger" type="button" aria-pressed="true"
                                                >Xóa</button>
                                            </a>
                                        </td>
                                        <td><img class="pull-left avatar-form__img" width="100" height="100" src="{{$user['avatar']}}"></td>
                                        <td>{{$user->username}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->permission}}</td>
                                        <td>{{$user->status}}</td>
                                        <td>{{$user->created_at}}</td>
                                        <td>{{$user->updated_at}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <nav>
                                {!! $users->links() !!}
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- /.col-->
            </div>
@include("layouts.plugins")
@endsection
