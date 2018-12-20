@extends('layouts.home')
@section('mainContent')

    <!-- ======================= Main Content ======================= -->
    <div id="content-area" class="main-content">
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                var $btn = $('#formBtn .anmelden-btn');

                $btn.on('click', function(e) {
                    e.preventDefault();

                    $('html,body').animate({scrollTop: $('#app_form').offset().top - 150},'slow');
                });
            });
        </script>

        <div class="row">
            <div class="small-12 columns">
                <div class="breadcrumb">
                    <!-- Breadcrumb NavXT 5.1.1 -->
                    <span typeof="v:Breadcrumb"><a rel="v:url" property="v:title" title="鲁宾斯坦音乐学院" href="{{url('/')}}" class="home">首页</a></span>
                    <span typeof="v:Breadcrumb"><a rel="v:url" property="v:title" title="鲁宾斯坦音乐学院大师班" href="{{url('masterClasses')}}">Anton Rubinstein 国际音乐学院大师班</a></span>
                    <span typeof="v:Breadcrumb"><span property="v:title">{{$master['master_name']}}</span></span>
                </div>
            </div>
        </div>


        <div class="post-6114 masterclass type-masterclass status-publish has-post-thumbnail hentry" id="post-6114">
            <div class="row pad-top-20 pad-btm-20 ">
                <div class="small-12 columns">
                    <h1 class="page-title">{{$master['master_title']}}</h1>
                    <h2 class="page-title">{{$master['master_sTitle']}}</h2>
                </div>
                <div class="small-12 columns">
                    <div class="row collapse">
                        <div class="small-12 large-8 columns">
                            <div class="row" style="margin-bottom: 10px;">
                                <div class="small-12 show-for-small-only columns">
                                    <img style="width: 100%; height: auto; margin: 0 0 20px 0;" src="{{url('images/master/'.$master['master_pic'])}}" />
                                </div>
                                <div class="small-12 columns">
                                    <img class="show-for-medium-only left" style="width: 150px; height: auto; margin: 0 20px 5px 0;" src="{{url('images/master/'.$master['master_pic'])}}" />
                                    <img class="show-for-large-up left" style="width: 200px; height: auto; margin: 0 20px 5px 0;" src="{{url('images/master/'.$master['master_pic'])}}" />
                                    <p>{{$master['master_info']}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="small-12 large-4 columns">
                            <div class="row">
                                <div class="small-12 medium-4 large-12 columns">
                                    <section class="ar-panel dark-grey ar-margin-bottom">
                                        <header>报名截止日期</header>
                                        <section class="content text-center">
                                            <i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;&nbsp;<b>{{$master['master_regDate']}}</b>
                                        </section>
                                        <footer id="formBtn" class="text-center">
                                            <a href="http://www.rubinstein-akademie.de/anmeldeformular" class="page-btn ar-btn anmelden-btn ">报名</a>								</footer>
                                    </section>
                                </div>
                                <div class="small-12 medium-5 large-12 columns end">
                                    <section class="ar-panel dark-grey ar-margin-bottom">
                                        <header>报名费</header>
                                        <section class="content">
                                            <table class="ar-table">
                                                <tr>
                                                    <td>
                                                        <i class="fa fa-money" aria-hidden="true"></i>
                                                    </td>
                                                    <td width="100%">听课费</td>
                                                    <td class="text-right"><b>{{$master['master_aPrice']}} €</b></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <i class="fa fa-money" aria-hidden="true"></i>
                                                    </td>
                                                    <td width="100%">旁听费</td>
                                                    <td class="text-right"><b>{{$master['master_pPrice']}}&nbsp;&euro;</b></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <i class="fa fa-money" aria-hidden="true"></i>
                                                    </td>
                                                    <td width="100%">伴奏费</td>
                                                    <td class="text-right"><b>{{$master['master_help']}}&nbsp;&euro;</b></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <i class="fa fa-money" aria-hidden="true"></i>
                                                    </td>
                                                    <td width="100%">提前报名优惠价</td>
                                                    <td class="text-right"><b>{{$master['master_earlyPrice']}}&nbsp;&euro;</b></td>
                                                </tr>
                                            </table>
                                        </section>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="app_form" class="small-12 columns" style="margin-top: 30px;">
                    <h3>报名表</h3>
                    <!-- CF7 Start -->
                    <div class="wpcf7" id="wpcf7-f4575-p6114-o1" lang="de-DE" dir="ltr">
                        <div class="screen-reader-response"></div>
                        <form name="" action="/msc/mikhail-mordvinov-januar-2019/#wpcf7-f4575-p6114-o1" method="post" class="wpcf7-form" novalidate="novalidate">
                            <div style="display: none;">
                                <input type="hidden" name="_wpcf7" value="4575" />
                                <input type="hidden" name="_wpcf7_version" value="4.1" />
                                <input type="hidden" name="_wpcf7_locale" value="de_DE" />
                                <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f4575-p6114-o1" />
                                <input type="hidden" name="_wpnonce" value="6f9171d78a" />
                            </div>
                            <div class="contact-form">

                            <div class="ctc-field">
                                <span class="wpcf7-form-control-wrap fee_type">
                                    <select name="fee_type" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required ctc-text" aria-required="true" aria-invalid="false">
                                        <option value="">报名类型 (*)</option>
                                        <option value="active_fee">听课</option>
                                        <option value="passive_fee">旁听</option>
                                    </select>
                                </span>
                            </div>
                            <div class="ctc-field">
                                <div class="ctc-left"><span class="wpcf7-form-control-wrap anrede">
                                        <select name="anrede" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required ctc-text" aria-required="true" aria-invalid="false">
                                            <option value="">性别 (*)</option>
                                            <option value="Frau">女</option>
                                            <option value="Herr">男</option>
                                        </select>
                                    </span>
                                </div>
                            </div>
                            <div class="ctc-field">
                                <div class="ctc-left">
                                    <span class="wpcf7-form-control-wrap last-name">
                                        <input type="text" name="last-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required ctc-text" aria-required="true" aria-invalid="false" placeholder="姓 (*)" />
                                    </span>
                                </div>
                                <div class="ctc-right">
                                    <span class="wpcf7-form-control-wrap first-name">
                                        <input type="text" name="first-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required ctc-text" aria-required="true" aria-invalid="false" placeholder="名 (*)" />
                                    </span>
                                </div>
                            </div>
                            <div class="ctc-field">
                                <div class="ctc-left">
                                    <span class="wpcf7-form-control-wrap address1">
                                        <input type="text" name="address1" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required ctc-text" aria-required="true" aria-invalid="false" placeholder="地址 (*)" />
                                    </span>
                                </div>
                                <div class="ctc-right">
                                    <span class="wpcf7-form-control-wrap address2">
                                        <input type="text" name="address2" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required ctc-text" aria-required="true" aria-invalid="false" placeholder="邮政编码/城市/国家 (*)" />
                                    </span>
                                </div>
                            </div>
                            <div class="ctc-field">
                                <div class="ctc-left">
                                    <span class="wpcf7-form-control-wrap your-email">
                                        <input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email ctc-text" aria-required="true" aria-invalid="false" placeholder="E-Mail (*)" />
                                    </span>
                                </div>
                                <div class="ctc-right">
                                    <span class="wpcf7-form-control-wrap telefon">
                                        <input type="text" name="telefon" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required ctc-text" aria-required="true" aria-invalid="false" placeholder="联系电话 (*)" />
                                    </span>
                                </div>
                            </div>
                            <div class="ctc-field">
                                <span class="wpcf7-form-control-wrap programm">
                                    <textarea name="programm" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="大师班曲目"></textarea>
                                </span>
                            </div>
                            <div class="wpcf7-response-output wpcf7-display-none"></div>
                            <div class="ctc-field">
                                <input type="submit" value="发送" class="wpcf7-form-control wpcf7-submit ctc-btn" />
                            </div>
                        </form></div>			<!-- CF7 End -->
                </div>
            </div>
        </div>
    </div>





@endsection