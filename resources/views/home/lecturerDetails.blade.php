@extends('layouts.home')
@section('mainContent')

    <!-- ======================= Main Content ======================= -->
    <div id="content-area" class="main-content">    <div class="post-4061 teacher type-teacher status-publish has-post-thumbnail hentry instrument-streicher location-berlin" id="post-4061">

            <div class="row">
                <div class="small-12 columns">
                    <div class="breadcrumb">
                        <!-- Breadcrumb NavXT 5.1.1 -->
                        <span typeof="v:Breadcrumb"><a rel="v:url" property="v:title" title="Gehe zu Anton Rubinstein Musikakademie." href="{{url('/')}}" class="home">首页</a></span>
                        <span typeof="v:Breadcrumb"><a rel="v:url" property="v:title" title="Gehe zu Dozenten." href="{{url('lecturers')}}">教师</a></span>
                        <span typeof="v:Breadcrumb"><span property="v:title">{{$lecturer['lecturer_lastName']}} {{$lecturer['lecturer_firstName']}}</span></span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="teacher-single pad-top-70 pad-btm-90">

                    <div class="clearfix">
                        <div class="small-12 columns">
                            <h1 class="page-title">{{$lecturer['lecturer_lastName']}} {{$lecturer['lecturer_firstName']}}</h1>
                            <h4>{{$lecturer['lecturer_subject']}}</h4>
                        </div>
                    </div>

                    <div class="pad-top-30 clearfix">
                        <div class="small-12 medium-7 columns">
                            <div class="story-content clearfix">
                                <p>{{$lecturer['lecturer_info']}}</p>
                            </div>
                        </div>
                        <div class="small-12 medium-5 large-4 columns">
                            <img width="326" height="327" src="{{url('images/lecturer/'.$lecturer['lecturer_pic'].'.jpg')}}" class="attachment-people size-people wp-post-image" alt="" srcset="{{url('images/lecturer/'.$lecturer['lecturer_pic'].'.jpg')}} 326w, {{url('images/lecturer/'.$lecturer['lecturer_pic'].'.jpg')}} 150w, {{url('images/lecturer/'.$lecturer['lecturer_pic'].'.jpg')}} 300w" sizes="(max-width: 326px) 100vw, 326px" />
                            <div class="person-info">
                                <h5>{{$lecturer['lecturer_lastName']}} {{$lecturer['lecturer_firstName']}}</h5>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <div class="dark-grey pad-top-80 pad-btm-80">
            <div class="row">
                <div class="small-12 columns">
                    <div class="pad-btm-40">
                        <h2>近期比赛 &amp; 大师班</h2>
                    </div>
                    <div class="event-list-area clearfix" data-equalizer>
                    </div>
                    <div class="text-center">
                        <a href="{{url('competitions')}}" class="page-btn">近期活动</a>
                    </div>
                    <div class="text-center">
                        <a href="{{url('masterClasses')}}" class="page-btn">大师班</a>
                    </div>
                </div>
            </div>
        </div>
    </div>






@endsection