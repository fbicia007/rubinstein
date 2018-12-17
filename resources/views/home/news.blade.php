@extends('layouts.home')
@section('mainContent')

    <!-- ======================= Main Content ======================= -->

    <div id="content-area" class="main-content">

        <div class="row">
            <div class="small-12 columns">
                <div class="breadcrumb">
                    <!-- Breadcrumb NavXT 5.1.1 -->
                    <span typeof="v:Breadcrumb"><a rel="v:url" property="v:title" title="Gehe zu Anton Rubinstein Musikakademie." href="{{url('/')}}" class="home">首页</a></span>
                    <span typeof="v:Breadcrumb"><span property="v:title">最新动态</span></span>
                </div>
            </div>
        </div>

        <div class="row">

            <div class=" pad-top-70 pad-btm-20 clearfix">
                <div class="small-12 columns">
                    <h1 class="page-title">
                        最新动态
                    </h1>
                </div>
            </div>


            <div class="pad-btm-50 clearfix">
                <div class="small-12 medium-10 large-8 medium-centered columns">
                    <div class="blog-area">

                        <div id="ajax-load-more" class="ajax-load-more-wrap grey alm-0" data-alm-id="0" data-canonical-url="http://www.rubinstein-akademie.de/news/" data-slug="home" data-post-id="0">
                            <div class="alm-listing alm-ajax clearfix" data-repeater="default" data-post-type="post" data-sticky-posts="" data-post-format="" data-category="" data-category-not-in="" data-tag="" data-tag-not-in="" data-taxonomy="" data-taxonomy-terms="" data-taxonomy-operator="" data-taxonomy-relation="" data-meta-key="" data-meta-value="" data-meta-compare="" data-meta-relation="" data-meta-type="" data-year="" data-month="" data-day="" data-author="" data-post-in="" data-post-not-in="" data-exclude="" data-search="" data-custom-args="" data-post-status="" data-order="ASC" data-orderby="menu_order" data-offset="0" data-posts-per-page="5" data-lang="de" data-scroll="false" data-pause="false" data-button-label="Ältere Beiträge Laden" data-button-class="" data-destroy-after="" data-transition="slide" data-masonry-horizontalorder="true" data-images-loaded="false"><div class="alm-reveal" style="">


                                    @foreach($news as $news_one)
                                    <div class="story post-content">
                                        <div class="post-6763 type-post status-publish format-standard has-post-thumbnail hentry category-uncategorized" id="{{$news_one['news_id']}}">

                                            <div class="post-featured">
                                                <img width="1000" height="434" src="{{$news_one['news_pic']}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" srcset="{{$news_one['news_pic']}} 1000w, {{$news_one['news_pic']}} 300w, {{$news_one['news_pic']}} 768w" sizes="(max-width: 1000px) 100vw, 1000px">
                                            </div>

                                            <div class="post-title">
                                                <h4><a href="">{{$news_one['news_title']}}</a></h4>
                                            </div>
                                            <div class="post-info clearfix">25.11.2018</div>

                                            <div class="story-content clearfix">

                                                {!!$news_one['news_content']!!}


                                            </div>

                                        </div>
                                    </div>
                                    @endforeach



                                </div>
                            </div>
                            {{--<div class="alm-btn-wrap"><button id="load-more" class="alm-load-more-btn more">Ältere Beiträge Laden</button></div></div>--}}
                    </div>
                </div>
            </div>



        </div>
    </div>




@endsection