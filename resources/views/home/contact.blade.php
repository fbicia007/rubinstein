@extends('layouts.home')
@section('mainContent')

    <!-- ======================= Main Content ======================= -->


    <div id="content-area" class="main-content">
        <div class="post-46 page type-page status-publish hentry" id="post-46">

            <div class="row">
                <div class="small-12 columns">
                    <div class="breadcrumb">
                        <!-- Breadcrumb NavXT 5.1.1 -->
                        <span typeof="v:Breadcrumb"><a rel="v:url" property="v:title" title="鲁宾斯坦国际音乐学院" href="{{url('/')}}" class="home">首页</a></span>
                        <span typeof="v:Breadcrumb"><span property="v:title">联系我们</span></span>
                    </div>
                </div>
            </div>

            <div class="pad-top-20 pad-btm-10 clearfix">
                <div class="row">
                    <div class="small-12 columns">
                        <div class="pad-btm-40">
                            <h1 class="page-title">安东鲁宾斯坦国际音乐学院</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="small-12 medium-10 medium-centered columns">

                        @if(count($errors)>0)
                            <div style="margin-bottom: 40px;">{{$errors}}</div>
                        @endif

                        <div class="contact-form">
                            <div class="wpcf7" id="wpcf7-f302-p46-o1" lang="de-DE" dir="ltr">
                                <div class="screen-reader-response"></div>
                                <form action="" method="post" class="wpcf7-form" name="contactForm" id="contactForm">
                                    {{csrf_field()}}
                                    <div class="ctc-field">
                                        <select placeholder="" name="reg_type" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required ctc-menu styled" id="reg_type" aria-required="true" aria-invalid="false" required>
                                            <option value="5">请选择询问内容</option>
                                            <option value="1"> 考试相关 </option>
                                            <option value="2"> 大师班相关 </option>
                                            <option value="3"> 比赛相关 </option>
                                            <option value="4"> 专业相关 </option>
                                        </select>
                                    </div>
                                    <div class="ctc-field">
                                        <div class="ctc-left">
                                            <span class="wpcf7-form-control-wrap text-876">
                                                <input type="text" name="reg_lastName" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required ctc-text" aria-required="true" aria-invalid="false" placeholder="姓" required/>
                                            </span>
                                        </div>
                                        <div class="ctc-right">
                                            <span class="wpcf7-form-control-wrap text-182">
                                                <input type="text" name="reg_firstName" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required ctc-text" aria-required="true" aria-invalid="false" placeholder="名" required/>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="ctc-field">
                                        <div class="ctc-left">
                                            <span class="wpcf7-form-control-wrap text-876">
                                                <input type="text" name="reg_address" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required ctc-text" aria-required="true" aria-invalid="false" placeholder="联系地址 / 电话" />
                                            </span>
                                        </div>
                                        <div class="ctc-right">
                                            <span class="wpcf7-form-control-wrap text-182">
                                                <input type="email" name="reg_email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required ctc-text" aria-required="true" aria-invalid="false" placeholder="E-Mail地址" required/>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="ctc-field">
                                        <span class="wpcf7-form-control-wrap textarea-401">
                                            <textarea name="reg_text" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="具体内容" required></textarea>
                                        </span>
                                    </div>
                                    <div class="ctc-field">
                                        <div class="ctc-right">
                                            <input type="submit" form="contactForm" value="发送" class="wpcf7-form-control wpcf7-submit ctc-btn" />
                                        </div>
                                    </div>
                                    <div class="wpcf7-response-output wpcf7-display-none"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





@endsection