@extends('layouts.home')
@section('mainContent')

    <!-- ======================= Main Content ======================= -->
    <div id="content-area" class="main-content">
        <div class="row">
            <div class="small-12 columns">
                <div class="breadcrumb">
                    <!-- Breadcrumb NavXT 5.1.1 -->
                    <span typeof="v:Breadcrumb"><a rel="v:url" property="v:title" title="安东.鲁宾斯坦音乐学院." href="{{url('/')}}" class="home">首页</a></span>
                    <span typeof="v:Breadcrumb"><span property="v:title">教师</span></span>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="small-12 columns">
                <div class="pad-top-20 pad-btm-10 clearfix">
                    <div class="pad-btm-30">
                        <h1 class="page-title">教师</h1>
                    </div>


                    <div class="teachers-list-area clearfix">


                        @foreach($lecturer as $lecturer_one)
                        <div class="teachers-list">
                            <div class="teachers-list-image">
                                <a href="{{url('lecturerDetails')}}">
                                    <img width="326" height="327" src="{{url('images/lecturer/'.$lecturer_one['lecturer_pic'].'.jpg')}}" class="attachment- size- wp-post-image" alt="" srcset="{{url('images/lecturer/'.$lecturer_one['lecturer_pic'].'.jpg')}} 326w, {{url('images/lecturer/'.$lecturer_one['lecturer_pic'].'-150x150.jpg')}} 150w, {{url('images/lecturer/'.$lecturer_one['lecturer_pic'].'-300x300.jpg')}} 300w" sizes="(max-width: 326px) 100vw, 326px" />
                                    <span class="overlay"><span class="more-info">详细信息</span></span>
                                </a>
                            </div>
                            <h6>
                                {{$lecturer_one['lecturer_firstName']}}, {{$lecturer_one['lecturer_lastName']}}
                                <span>{{$lecturer_one['lecturer_subject']}}</span>
                            </h6>
                        </div>
                        @endforeach


                    </div>

                    <div class="pad-top-50 story-content clearfix">
                        <div class="small-12 large-10 large-centered columns">
                            <div class="row text-center">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>



@endsection