@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{url('admin/index')}}">
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
                            <a class="nav-link" href="{{url('admin/reg_master')}}">
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

            <main id="38" role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 text-center" style="margin-top: 70px;">
                <div class="jumbotron">
                    <h1 class="display-4">欢迎使用Rubinstein Academy 后台管理系统</h1>
                    <p class="lead">{{isset($user_name)?$user_name:'管理员'}} 你好</p>
                    <hr class="my-4">
                    <p>可以通过此系统更新网站内容信息。左侧菜单选择具体修改内容。点击右上角Logout退出登录</p>
                    @if(count($errors)>0)
                        @foreach($errors->all() as $error)
                            <div class="mark">{{$error}}</div>
                        @endforeach
                    @endif
                    @if(session('pwError'))
                        <div class="mark">{{session('pwError')}}</div>
                    @endif
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#userEditor">
                        修改密码
                    </button>
                </div>
            </main>

            <div class="modal fade" id="userEditor" tabindex="-1" role="dialog" aria-labelledby="userEditor" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="userEditorLabel">修改密码</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="" name="userEditorForm" id="userEditorForm">
                                {{csrf_field()}}

                                <div class="form-group">
                                    <label for="oldPassword">原密码</label>
                                    <input type="password" class="form-control" id="oldPassword" placeholder="原密码" name="oldPassword">
                                </div>
                                <div class="form-group">
                                    <label for="newPassoword">新密码</label>
                                    <input type="password" class="form-control" id="password" placeholder="新密码" name="password">
                                </div>
                                <div class="form-group">
                                    <label for="newPassoword_confirmation">确认新密码</label>
                                    <input type="password" class="form-control" id="password_confirmation" placeholder="确认新密码" name="password_confirmation">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                            <button type="submit" class="btn btn-primary" name="userEditor" form="userEditorForm">确认修改</button>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection






