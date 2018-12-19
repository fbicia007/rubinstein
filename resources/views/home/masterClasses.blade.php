@extends('layouts.home')
@section('mainContent')

    <!-- ======================= Main Content ======================= -->
    <div id="content-area" class="main-content"><div class="post-4579 page type-page status-publish hentry" id="post-4579">

            <div class="row">
                <div class="small-12 columns">
                    <div class="breadcrumb">
                        <!-- Breadcrumb NavXT 5.1.1 -->
                        <span typeof="v:Breadcrumb"><a rel="v:url" property="v:title" title="Gehe zu Anton Rubinstein Musikakademie." href="{{url('/')}}" class="home">首页</a></span>
                        <span typeof="v:Breadcrumb"><span property="v:title">Anton Rubinstein 国际音乐学院大师班</span></span>                </div>
                </div>
            </div>

            <div class="row pad-top-20 pad-btm-20">
                <div class="small-12 columns">
                    <div class="row collapse">
                        <div class="small-12 columns">
                            <h1 class="page-title">Anton Rubinstein 国际音乐学院大师班</h1>
                        </div>
                    </div>
                </div>

                <div class="small-12 columns">
                    <div class="row collapse">
                        <div class="small-12 story-content columns" style="margin-bottom: 20px;">
                            <p style="text-align: center;">Anton Rubinstein 音乐学院的资深教师及各院校讲师教授将不定期提供大师班课程，为年轻的音乐家们传授知识及经验，培养有潜能的优秀音乐人才，与他们一起在音乐的世界里加深对曲目的理解及扩展他们的能力。</p>
                        </div>
                    </div>
                </div>

                @foreach($masters as $master)
                <div class="small-12 large-6 columns">
                    <div class="row collapse ar-margin-bottom">
                        <div class="small-12 show-for-small-only columns">
                            <a href="{{url('masterClassDetails')}}">
                                <img style="width: 100%; margin: 0;" src="{{url('images/master/'.$master['master_pic'])}}" />
                            </a>
                        </div>
                        <div class="small-12 columns clearfix">
                            <a href="{{url('masterClassDetails')}}">
                                <img style="width: auto; margin: 0;"
                                        class="medium-up-height-200 show-for-medium-up left"
                                        src="{{url('images/master/'.$master['master_pic'])}}" />
                            </a>
                            <div style="display: inline;">
                                <section class="ar-panel medium-up-height-200"
                                         style="min-width: 150px;">
                                    <header>
                                        <a style="text-transform: uppercase;" href="{{url('masterClassDetails')}}">{{$master['master_name']}}</a>
                                    </header>
                                    <section class="content">
                                        <ul class="fa-ul">
                                            <li><i class="fa fa-li fa-info" aria-hidden="true"></i>{{$master['master_subject']}}</li>
                                            <li><i class="fa fa-li fa-calendar" aria-hidden="true"></i>{{$master['master_date']}}</li>
                                            <li><i class="fa fa-li fa-map-marker" aria-hidden="true"></i>{{$master['master_location']}}</li>
                                        </ul>
                                    </section>
                                    <footer>
                                        <span class="right"><a href="{{url('masterClassDetails')}}" class="page-btn ar-btn ar-btn-sm">详细信息</a></span>
                                    </footer>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
                    @endforeach

            </div>

        </div>
    </div>






@endsection