@extends('layouts.home')


@section('mainContent')

    <div id="content-area" class="main-content"><div class="post-4916 page type-page status-publish hentry" id="post-4916">

            <div class="row pad-top-20 pad-btm-20">
                <div class="small-12 columns">
                    <div class="row collapse">
                        <div class="small-12 columns">
                            <h1 class="page-title">安东鲁宾斯坦国际音乐学院</h1>
                        </div>
                    </div>
                </div>

                <div class="small-12 story-content columns">
                    <div class="row collapse">
                        <div class="small-12 columns">
                        </div>
                    </div>
                </div>

                <div class="small-12 columns">
                    <div class="row collapse ar-margin-bottom"
                    >
                        <div class="small-12 large-8 columns">
                            <div class="row" style="margin-bottom: 10px;">
                                <div class="small-12 show-for-small-only columns">
                                    <img style="width: 100%; height: auto; margin: 0 0 20px 0;"
                                         src="{{url('images/location/'.$location['loc_pic'])}}" />
                                </div>
                                <div class="small-12 columns">
                                    <img class="show-for-medium-only left"
                                         style="width: 150px; height: auto; margin: 0 20px 5px 0;"
                                         src="{{url('images/location/'.$location['loc_pic'])}}" /> <img
                                            class="show-for-large-up left"
                                            style="width: 200px; height: auto; margin: 0 20px 5px 0;"
                                            src="{{url('images/location/'.$location['loc_pic'])}}" />
                                    <h4>{{$location['loc_name']}} 校区</h4>
                                    <span class="story-content">
								<p>{!! $location['loc_info'] !!}</p>
							</span>
                                </div>
                            </div>
                        </div>
                        <div class="small-12 large-4 columns">
                            <div class="row">
                                <div class="small-12 medium-6 large-12 columns">
                                    <section class="ar-panel dark-grey ar-margin-bottom">
                                        <header>联系方式</header>
                                        <section class="content">
                                            <ul class="fa-ul">
                                                <li><i class="fa fa-li fa-map-marker" aria-hidden="true"></i>
                                                    <div style="margin-bottom: 5px;">
                                                        {{$location['loc_address']}}
                                                    </div>
                                                </li>

                                                <li><i class="fa fa-li fa-envelope" aria-hidden="true"></i>
                                                    <div>
                                                        {{$location['loc_person']}}<br>
                                                        <a href='mailto:info@rubinstein-akademie.de'>{{$location['loc_email']}}</a>
                                                    </div>
                                                </li>

                                                <li><i class="fa fa-li fa-phone" aria-hidden="true"></i>
                                                    <div>
                                                        Tel.: &nbsp;{{$location['loc_tel']}}
                                                    </div>
                                                </li>
                                                <li><i class="fa fa-li fa-wechat" aria-hidden="true"></i>
                                                    <div>
                                                        微信: &nbsp;{{$location['loc_wechat']}}
                                                    </div>
                                                </li>
                                            </ul>
                                        </section>
                                    </section>
                                </div>
                                <div class="small-12 medium-6 large-12 columns">
                                    <section class="ar-panel dark-grey ar-margin-bottom">
                                        <header>电话咨询时间</header>
                                        <section class="content">
                                            <table class="ar-table">
                                                {!! $location['loc_opening'] !!}
                                            </table>
                                        </section>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>




@endsection