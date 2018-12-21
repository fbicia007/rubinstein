@extends('layouts.admin')


@section('content')

    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('admin/index')}}">
                                <span data-feather="home"></span>
                                首页
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('admin/reg_edu')}}">
                                <span data-feather="star"></span>
                                报考列表
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{url('admin/reg_master')}}">
                                <span data-feather="bar-chart-2"></span>
                                大师班报名列表
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('admin/reg_match')}}">
                                <span data-feather="award"></span>
                                比赛报名列表
                            </a>
                        </li>

                    </ul>
                </div>
            </nav>




        </div>
    </div>

    <div class="col-md-9 ml-sm-auto col-lg-10 text-center" style="margin-top: 100px;">

        <table class="table table-sm table-dark">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">姓</th>
                <th scope="col">名</th>
                <th scope="col">E-Mail</th>
                <th scope="col">性别</th>
                <th scope="col">地址</th>
                <th scope="col">邮编/城市/国家</th>
                <th scope="col">联系电话</th>
                <th scope="col">大师班曲目/信息</th>
                <th scope="col">报名大师班</th>
            </tr>
            </thead>
            <tbody>

            @foreach($list as $list_one)
                <tr>
                    <td>{{$list_one['reg_id']}}</td>
                    <td>{{$list_one['reg_lastName']}}</td>
                    <td>{{$list_one['reg_firstName']}}</td>
                    <td>{{$list_one['reg_email']}}</td>
                    <td>{{$list_one['reg_gender']}}</td>
                    <td>{{$list_one['reg_address']}}</td>
                    <td>{{$list_one['reg_address2']}}</td>
                    <td>{{$list_one['reg_tel']}}</td>
                    <td>{{$list_one['reg_text']}}</td>
                    <td>{{$list_one['master_name']}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>

@endsection