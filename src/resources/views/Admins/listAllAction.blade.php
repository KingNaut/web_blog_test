@extends('layouts.admin')
@section('title') Danh Sách Tất Cả Action @endsection
@section('content')
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-align-justify"></i> Danh Sách Tất Cả Action Của Tất Cả Thành Viên</div>
                        <div class="card-body">
                            <table class="table table-responsive-sm table-bordered table-striped table-sm" style="text-align: center">
                                <thead>
                                <tr>
                                    <th >ID</th>
                                    <th >Mã Thành Viên</th>
                                    <th >Tên Thành Viên</th>
                                    <th >Action</th>
                                    <th >Lúc</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($actions as $action)
                                    <tr>
                                        <td>{{$action->id}}</td>
                                        <td>{{$action->user_id}}</td>
                                        <td>{{$action->user_name}}</td>
                                        <td>{{$action->action}}</td>
                                        <td>{{$action->created_at}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <nav>
                                {!! $actions->links() !!}
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- /.col-->
            </div>
            @include("layouts.plugins")
@endsection
