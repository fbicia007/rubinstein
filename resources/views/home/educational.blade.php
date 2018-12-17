@extends('layouts.home')
@section('mainContent')

    <!-- ======================= Main Content ======================= -->
    <div id="content-area" class="main-content">

        <div class="post-4388 study type-study status-publish hentry" id="post-4388">

            <div class="row">
                <div class="small-12 columns">
                    <div class="breadcrumb">
                        <span typeof="v:Breadcrumb"><a rel="v:url" property="v:title" title="Gehe zu Anton Rubinstein Musikakademie." href="{{url('/')}}" class="home">首页</a></span>
                        <span typeof="v:Breadcrumb"><span property="v:title">学制</span></span>
                    </div>
                </div>
            </div>

            <div class="row pad-top-20 pad-btm-20 ">
                <div class="small-12 columns">
                    <div class="row collapse">
                        <div class="small-12 columns">
                            <h1 class="page-title">学制</h1>
                        </div>
                    </div>


                    @foreach($educational as $educational_one)
                    <div class="row collapse ar-margin-bottom">
                        <div class="small-12 show-for-small-only columns">
                            <a href="{{url('educationalDetails')}}"><img
                                        style="width: 100%; margin: 0;" src="{{$educational_one['edu_pic']}}" /></a>
                        </div>
                        <div class="small-12 columns clearfix">
                            <a href="{{url('educationalDetails')}}"><img
                                        style="width: auto; margin: 0;"
                                        class="medium-up-height-250 show-for-medium-up left"
                                        src="{{$educational_one['edu_pic']}}" /></a>
                            <div style="display: inline;">
                                <section class="ar-panel medium-up-height-250">
                                    <header>
                                        <a href="{{url('educationalDetails')}}">{{$educational_one['edu_name']}}</a>
                                    </header>
                                    <section class="content">
                                        <p>{{$educational_one['edu_info']}}</p>
                                    </section>
                                    <footer>
                                        <span class="right"><a href="{{url('educationalDetails')}}" class="page-btn ar-btn ">更多信息</a></span>
                                    </footer>
                                </section>
                            </div>
                        </div>
                    </div>
                    @endforeach




                </div>
            </div>
        </div>

    </div>




@endsection