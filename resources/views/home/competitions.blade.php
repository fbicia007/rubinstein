@extends('layouts.home')
@section('mainContent')

    <!-- ======================= Main Content ======================= -->


    <div id="content-area" class="main-content"><div class="post-4851 page type-page status-publish hentry" id="post-4851">

            <div class="row">
                <div class="small-12 columns">
                    <div class="breadcrumb">
                        <!-- Breadcrumb NavXT 5.1.1 -->
                        <span typeof="v:Breadcrumb"><a rel="v:url" property="v:title" title="Gehe zu Anton Rubinstein Musikakademie." href="{{url('/')}}" class="home">首页</a></span>
                        <span typeof="v:Breadcrumb"><span property="v:title">Anton Rubinstein 国际音乐学院音乐比赛</span></span>
                    </div>
                </div>
            </div>

            <div class="row pad-top-20">
                <div class="small-12 columns">
                    <div class="row collapse">
                        <div class="small-12 columns">
                            <h1 class="page-title">Anton Rubinstein 国际音乐学院音乐比赛</h1>
                        </div>
                    </div>
                </div>

                <div class="small-12 columns pad-btm-20">
                    <div class="row collapse">
                        <div class="small-12 story-content columns">
                            <p>比赛是年轻音乐家成长的重要里程碑。 通过比赛使他们能够在观众和陪审团面前展示和比较自己的技能。 安东鲁宾斯坦国际音乐学院的比赛面向不同的音乐水平，并通过高质量的乐器或学习奖学金等有吸引力的奖项促进获奖者的艺术发展。</p>
                        </div>
                    </div>
                </div>

                @foreach($competitions as $competition)
                <div class="small-12 columns">

                    <div class="row collapse ar-margin-bottom">
                        <div class="small-12 show-for-small-only columns">
                            <a href="{{url('competitionDetails')}}">
                                <img style="width: 100%; margin: 0;" src="{{'images/competition/'.$competition['competition_pic']}}" />
                            </a>
                        </div>
                        <div class="small-12 columns clearfix">
                            <a href="{{url('competitionDetails')}}">
                                <img
                                        style="width: auto; margin: 0;"
                                        class="medium-up-height-200 show-for-medium-up left"
                                        src="{{'images/competition/'.$competition['competition_pic']}}" />
                            </a>
                            <div style="display: inline;">
                                <section class="ar-panel medium-up-height-200"
                                         style="min-width: 150px; padding-right: 0rem;">
                                    <header>
                                        <a href="{{url('competitionDetails')}}">
                                            <span>{{$competition['competition_title']}}</span>
                                        </a>
                                    </header>
                                    <section class="content">
                                        <ul class="fa-ul">
                                            <li><i class="fa fa-li fa-map-marker" aria-hidden="true"></i>{{$competition['competition_location']}}</li>
                                        </ul>
                                    </section>
                                    <footer>
                                        <span class="right"><a href="{{url('competitionDetails')}}" class="page-btn ar-btn ar-btn-sm">详细信息</a></span>
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