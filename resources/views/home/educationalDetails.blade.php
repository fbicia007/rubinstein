@extends('layouts.home')
@section('mainContent')

    <!-- ======================= Main Content ======================= -->
    <div id="content-area" class="main-content">

        <div class="post-4411 study type-study status-publish has-post-thumbnail hentry" id="post-4411">

            <div class="row">
                <div class="small-12 columns">
                    <div class="breadcrumb">
                        <span typeof="v:Breadcrumb"><a rel="v:url" property="v:title" title="鲁宾斯坦音乐学院" href="{{url('/')}}" class="home">首页</a></span>
                        <span typeof="v:Breadcrumb"><a rel="v:url" href="{{url('educationalSystem')}}">学制</a></span>
                        <span typeof="v:Breadcrumb"><span property="v:title">{{$edu['edu_name']}}</span></span>
                    </div>
                </div>
            </div>


            @if($edu['edu_id'] == 1)
                @foreach($educational as $educational_one)
                    @if($educational_one['edu_un_id'] == 1)
                        <div class="row collapse ar-margin-bottom">
                            <div class="small-12 show-for-small-only columns">
                                <a href="{{url('educationalDetails/'.$educational_one['edu_id'])}}"><img
                                            style="width: 100%; margin: 0;" src="{{url('images/edu/'.$educational_one['edu_pic'])}}" /></a>
                            </div>
                            <div class="small-12 columns clearfix">
                                <a href="{{url('educationalDetails/'.$educational_one['edu_id'])}}"><img
                                            style="width: auto; margin: 0;"
                                            class="medium-up-height-250 show-for-medium-up left"
                                            src="{{url('images/edu/'.$educational_one['edu_pic'])}}" /></a>
                                <div style="display: inline;">
                                    <section class="ar-panel medium-up-height-250">
                                        <header>
                                            <a href="{{url('educationalDetails/'.$educational_one['edu_id'])}}">{{$educational_one['edu_name']}}</a>
                                        </header>
                                        <section class="content">
                                            <p>{{$educational_one['edu_info']}}</p>
                                        </section>
                                        <footer>
                                            <span class="right"><a href="{{url('educationalDetails/'.$educational_one['edu_id'])}}" class="page-btn ar-btn ">更多信息</a></span>
                                        </footer>
                                    </section>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            @else

            <div class="row pad-top-20 pad-btm-20 ">
                <div class="small-12 columns">
                    <div class="row collapse">
                        <div class="small-12 columns">
                            <h1 class="page-title">{{$edu['edu_name']}}</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="small-12 large-9 columns">
                            <div class="row">
                                <div class="small-12 show-for-small-only columns">
                                    <img style="width: 100%; height: auto; margin: 0 0 20px 0;" src="{{url('images/edu/'.$edu['edu_pic'])}}" />
                                </div>
                                <div class="small-12 columns">
                                    <img class="show-for-medium-only left" style="width: 150px; height: auto; margin: 0 20px 5px 0;" src="{{url('images/edu/'.$edu['edu_pic'])}}" />
                                    <img class="show-for-large-up left" style="width: 250px; height: auto; margin: 0 20px 5px 0;" src="{{url('images/edu/'.$edu['edu_pic'])}}" />
                                    <p>{{$edu['edu_info']}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="small-12 large-3 columns">
                            <div class="row">
                                <div class="small-12 medium-4 large-12 columns">
                                    <section class="ar-panel dark-grey ar-margin-bottom">
                                        <header>考试日期</header>
                                        <section class="content text-center">
                                            <i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;&nbsp;<b>{{$edu['edu_test_date']}}</b>
                                        </section>
                                        <footer class="text-center">
                                            <a href="http://www.rubinstein-akademie.de/anmeldeformular" class="page-btn ar-btn anmelden-btn ">申请注册</a>
                                        </footer>
                                    </section>
                                </div>
                                <div class="small-12 medium-4 large-12 columns">
                                    <section class="ar-panel dark-grey ar-margin-bottom">
                                        <header>报名所需材料</header>
                                        <section class="content">
                                            <ul class="fa-ul">
                                                {!! $edu['edu_reg_materials'] !!}
                                            </ul>
                                        </section>
                                    </section>
                                </div>
                                @if($edu['edu_addon'])
                                <div class="small-12 medium-4 large-12 columns">
                                    <section class="ar-panel dark-grey ar-margin-bottom">
                                        <header>重要信息</header>
                                        <section class="content">
                                            <ul class="fa-ul">
                                                <li>
                                                    <i class="fa fa-li fa-file-pdf-o" aria-hidden="true"></i>
                                                    <a href="{{url('addon/'.$edu['edu_addon'])}}">考试须知</a>
                                                </li>
                                            </ul>
                                        </section>
                                    </section>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif

        </div>

    </div>







@endsection