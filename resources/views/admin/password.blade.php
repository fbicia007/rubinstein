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
                                HOME <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('admin/basic')}}">
                                <span><img width="24" height="24" src="http://wow-blue.com/"></span>
                                基础信息
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="item.php?id={$gameId}">
                                <span><img width="24" height="24" src="http://wow-blue.com/"></span>
                                教师
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="item.php?id={$gameId}">
                                <span><img width="24" height="24" src="http://wow-blue.com/"></span>
                                学制
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="item.php?id={$gameId}">
                                <span><img width="24" height="24" src="http://wow-blue.com/"></span>
                                比赛
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="item.php?id={$gameId}">
                                <span><img width="24" height="24" src="http://wow-blue.com/"></span>
                                大师班
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="item.php?id={$gameId}">
                                <span><img width="24" height="24" src="http://wow-blue.com/"></span>
                                新闻
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
                    <p class="text-danger">如若修改管理员信息，请点击下面按钮</p>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#changePassword">
                        修改密码
                    </button>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#userEditor">
                        编辑个人信息
                    </button>
                </div>
            </main>

            <div class="modal fade" id="changePassword" tabindex="-1" role="dialog" aria-labelledby="changePassword" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="changePasswordLabel">修改密码</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="" name="changePasswordForm" id="changePasswordForm">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="oldPassword">原密码</label>
                                    <input type="password" class="form-control" id="oldPassword" placeholder="原密码" name="oldPassword">
                                </div>
                                <div class="form-group">
                                    <label for="newPassoword">新密码</label>
                                    <input type="password" class="form-control" id="newPassoword" placeholder="新密码" name="newPassword">
                                </div>
                                <div class="form-group">
                                    <label for="newPassowordConfirm">确认新密码</label>
                                    <input type="password" class="form-control" id="newPassowordConfirm" placeholder="确认新密码" name="newPassowordConfirm">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                            <button type="submit" class="btn btn-primary" name="changePassword" form="changePasswordForm">确认修改</button>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection






