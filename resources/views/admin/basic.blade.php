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
                                HOME <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{url('admin/basic')}}">
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
                    <h1 class="display-4">批量修改物品信息/上传物品图片</h1>
                    <p class="lead">左侧菜单找到相应游戏，批量修改添加内容</p>
                    <hr class="my-4">
                    <p>1.选择相应游戏后，请在"修改信息"板块中下载现有数据的csv文件，在excel中修改完毕后重新上传应用修改内容。</p>
                    <p>2.如有未添加图片的物品，则会显示添加图片板块，同时会出现图预览列表。请将图片按照列表中给出的文件名命名后打包上传。</p>
                    <p class="text-danger">由于登录验证与商城不同步，登陆此系统的同时在同一浏览器打开商城主地址会报错。如遇此问题，请点击右上角的logout登出解决。</p>
                </div>
            </main>
        </div>
    </div>
@endsection






