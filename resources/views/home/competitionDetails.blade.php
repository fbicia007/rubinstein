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

                $('.expand-toggle').on('click', function(e) {
                    e.preventDefault();
                    var $elm = $(this);
                    if ($elm.hasClass('closed')) {
                        $elm.removeClass('closed');
                    } else {
                        $elm.addClass('closed');
                    }
                });
            });
        </script>

        <div class="row">
            <div class="small-12 columns">
                <div class="breadcrumb">
                    <!-- Breadcrumb NavXT 5.1.1 -->
                    <span typeof="v:Breadcrumb"><a rel="v:url" property="v:title" title="鲁宾斯坦音乐学院" href="{{url('/')}}" class="home">首页</a></span>
                    <span typeof="v:Breadcrumb"><a rel="v:url" property="v:title" href="{{url('competitions')}}" class="home">Anton Rubinstein 国际音乐学院音乐比赛</a></span>
                    <span typeof="v:Breadcrumb"><span property="v:title">{{$comp['competition_title']}}</span></span>
                </div>
            </div>
        </div>




        <div class="post-6160 competition type-competition status-publish has-post-thumbnail hentry" id="post-6160">
            <div class="row pad-top-20 pad-btm-20 ">
                <div class="small-12 columns">
                    @if(count($errors)>0)
                        <div style="margin-bottom: 40px;">{{$errors}}</div>
                    @endif
                    <h1 class="page-title">鲁宾斯坦国际赛事 - {{$comp['competition_subject']}}</h1>
                    <h2 class="page-title">{{$comp['competition_title']}}</h2>
                </div>
                <div class="small-12 columns">
                    <div class="row collapse">
                        <div class="small-12 large-8 columns">
                            <div class="row" style="margin-bottom: 10px;">
                                <div class="small-12 show-for-small-only columns">
                                    <img style="width: 100%; height: auto; margin: 0 0 20px 0;"
                                         src="{{url('images/competition/'.$comp['competition_pic'])}}" />
                                </div>
                                <div class="small-12 columns">
                                    <img class="show-for-medium-only left"
                                         style="width: 150px; height: auto; margin: 0 20px 10px 0;"
                                         src="{{url('images/competition/'.$comp['competition_pic'])}}" />
                                    <img class="show-for-large-up left"
                                         style="width: 200px; height: auto; margin: 0 20px 10px 0;"
                                         src="{{url('images/competition/'.$comp['competition_pic'])}}" />
                                    <p>{{$comp['competition_info']}}</p>
                                </div>
                                <div id="jury" class="small-12 columns">
                                    <h3 class="expand-toggle closed ar-font-18">
                                        <i class="fa ar-toggle" aria-hidden="true"></i>评委
                                    </h3>
                                    <ul style="margin-bottom: 15px;">
                                        <li>{{$comp['competition_juror']}}</li>
                                    </ul>
                                </div>
                                <div id="prizes" class="small-12 columns">
                                    <h3 class="expand-toggle closed ar-font-18">
                                        <i class="fa ar-toggle" aria-hidden="true"></i>比赛奖项</h3>
                                    <ul style="list-style: disc; margin: 1em;">
                                        <p style="list-style: disc;">{{$comp['competition_rate']}}</p>

                                    </ul>
                                </div>
                                <div id="conditions" class="small-12 columns">
                                    <h3 class="expand-toggle closed ar-font-18">
                                        <i class="fa ar-toggle" aria-hidden="true"></i>比赛说明</h3>
                                    <div class="manual_text"><ol>
                                            <p>
                                                {{$comp['competition_announcement']}}
                                            </p>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="small-12 large-4 columns">
                            <div class="row">
                                <div class="small-12 medium-4 large-12 columns">
                                    <section class="ar-panel dark-grey ar-margin-bottom">
                                        <header>注册截止日期</header>
                                        <section class="content text-center">
                                            <i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;&nbsp;<b>{{$comp['competition_signDate']}}</b>
                                        </section>
                                        <footer id="formBtn" class="text-center">
                                            <a href="http://www.rubinstein-akademie.de/anmeldeformular" class="page-btn ar-btn anmelden-btn ">注册</a>
                                        </footer>
                                    </section>
                                </div>

                                <div class="small-12 medium-4 large-12 columns">
                                    <section class="ar-panel dark-grey ar-margin-bottom">
                                        <header>注册费用</header>
                                        <section class="content">
                                            <table class="ar-table">
                                                <tr>
                                                    <td>
                                                        <i class="fa fa-money" aria-hidden="true"></i>
                                                    </td>
                                                    <td width="100%">提前两个月注册费</td>
                                                    <td class="text-right"><b>{{$comp['competition_earlyBookingPrice']}} €</b></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <i class="fa fa-money" aria-hidden="true"></i></td><td width="100%">注册费</td>
                                                    <td class="text-right"><b>{{$comp['competition_earlyBookingPrice']}} €</b></td></tr>
                                                <tr>
                                                    <td>
                                                        <i class="fa fa-music" aria-hidden="true"></i>
                                                    </td>
                                                    <td width="100%">钢琴伴奏费</td>
                                                    <td class="text-right"><b>{{$comp['competition_earlyBookingPrice']}} €</b>
                                                    </td>
                                                </tr>
                                            </table>
                                        </section>
                                    </section>
                                </div>

                                <div class="small-12 medium-4 large-12 columns">
                                    <section class="ar-panel dark-grey ar-margin-bottom">
                                        <header>付款方式</header>
                                        <section class="content">
                                            <ul class="fa-ul">
                                                <li><i class="fa fa-li fa-university" aria-hidden="true"></i>
                                                    <div>
                                                        <p style="padding-bottom: 5px;">汇款信息</p>
                                                        <p style="font-size: 0.9em; line-height: 1.2em;">
                                                            {{$comp['competition_bank']}}
                                                        </p>
                                                    </div></li>
                                                <li><i class="fa fa-li fa-paypal" aria-hidden="true"></i> <a
                                                            href="https://www.paypal.me/Musikakademie" target="ar_paypal">PayPal&nbsp;(+&nbsp;2%)</a>
                                                </li>
                                            </ul>
                                        </section>
                                    </section>
                                </div>

                                <div class="small-12 medium-4 large-12 columns">
                                    <section class="ar-panel dark-grey ar-margin-bottom">
                                        <header>报名所需材料</header>
                                        <section class="content">
                                            <ul class="fa-ul">
                                                {!! $comp['competition_docu'] !!}
                                            </ul>
                                        </section>
                                    </section>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div id="app_form" class="small-12 columns" style="margin-top: 30px;">
                    <h3 class="ar-font-18">报名表</h3>
                    <!-- CF7 Start -->
                    <div class="wpcf7" id="wpcf7-f4819-p6160-o1" lang="de-DE" dir="ltr">
                        <div class="screen-reader-response"></div>
                        <form name="compForm" action="" method="post" class="wpcf7-form" enctype="multipart/form-data" >
                            {{csrf_field()}}

                            <input type="text" name="reg_type" value="3" style="display:none" />
                            <input type="text" name="comp_id" value="{{$comp['competition_id']}}" style="display:none" />


                            <div class="contact-form">
                                <div>

                            </div>
                            <div class="ctc-field">
                                <div class="ctc-left">
                                    <span class="wpcf7-form-control-wrap anrede">
                                        <select name="reg_gender" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required ctc-text" aria-required="true" aria-invalid="false" required>
                                            <option disabled selected value>性别 (*)</option>
                                            <option value="女">女</option>
                                            <option value="男">男</option>
                                        </select>
                                    </span>
                                </div>
                            </div>
                            <div class="ctc-field">
                                <div class="ctc-left">
                                    <span class="wpcf7-form-control-wrap last-name">
                                        <input type="text" name="reg_lastName" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required ctc-text" aria-required="true" aria-invalid="false" placeholder="姓 (*)" required/>
                                    </span>
                                </div>
                                <div class="ctc-right">
                                    <span class="wpcf7-form-control-wrap first-name">
                                        <input type="text" name="reg_firstName" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required ctc-text" aria-required="true" aria-invalid="false" placeholder="名 (*)" required/>
                                    </span>
                                </div>
                            </div>
                            <div class="ctc-field">
                                <div class="ctc-left">
                                    <span class="wpcf7-form-control-wrap birthday">
                                        <input type="date" name="reg_birthday" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required ctc-text" aria-required="true" aria-invalid="false" placeholder="生日 (*)" required/>
                                    </span>
                                </div>
                                <div class="ctc-right">
                                    <span class="wpcf7-form-control-wrap birth">
                                        <input type="text" name="reg_birthLocation" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required ctc-text" aria-required="true" aria-invalid="false" placeholder="出生地 (*)" required/>
                                    </span>
                                </div>
                            </div>
                            <div class="ctc-field">
                                <span class="wpcf7-form-control-wrap nationality">
                                    <input type="text" name="reg_nation" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required ctc-text" aria-required="true" aria-invalid="false" placeholder="国籍 (*)" required/>
                                </span>
                            </div>
                            <div class="ctc-field">
                                <div class="ctc-left"> <span class="wpcf7-form-control-wrap address1">
                                        <input type="text" name="reg_address" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required ctc-text" aria-required="true" aria-invalid="false" placeholder="联系地址 (*)" required/></span>
                                </div>
                                <div class="ctc-right"><span class="wpcf7-form-control-wrap address2">
                                        <input type="text" name="reg_address2" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required ctc-text" aria-required="true" aria-invalid="false" placeholder="邮编/城市/国家 (*)" required/></span>
                                </div>
                            </div>
                            <div class="ctc-field">
                                <div class="ctc-left">
                                    <span class="wpcf7-form-control-wrap your-email">
                                        <input type="email" name="reg_email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email ctc-text" aria-required="true" aria-invalid="false" placeholder="E-Mail (*)" required/>
                                    </span>
                                </div>
                                <div class="ctc-right">
                                    <span class="wpcf7-form-control-wrap telefon">
                                        <input type="text" name="reg_tel" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required ctc-text" aria-required="true" aria-invalid="false" placeholder="联系电话" />
                                    </span>
                                </div>
                            </div>
                            <div class="ctc-field">
                                <span class="wpcf7-form-control-wrap piano">
                                    <span class="wpcf7-form-control wpcf7-checkbox ar-checkbox">
                                        <span class="wpcf7-list-item first last">
                                            <label>
                                                <input type="checkbox" name="reg_help" value="1" />&nbsp;
                                                <span class="wpcf7-list-item-label">我需要一个钢琴伴奏</span>
                                            </label>
                                        </span>
                                    </span>
                                </span>
                            </div>
                            <div class="ctc-field">
                                <span class="wpcf7-form-control-wrap links"><textarea name="reg_text" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="用做第一,第二轮比赛的视频链接" required></textarea></span>
                            </div>

                            <div class="ctc-field">
                                其他文档 (请通过邮件附件发送致 <a href="mailto:info@rubinstein-academy.com" class="mail">info@rubinstein-academy.com</a>)
                            </div>
                            <div class="ctc-field">
                                <p><b>通过对您提供材料的审核和确认来确定您是否能晋级比赛决赛圈，电此并提交表单证明您已同意我们的条款。</b></p>
                                <p> <span class="wpcf7-form-control-wrap accept_rules">
                                        <span class="wpcf7-form-control wpcf7-checkbox wpcf7-validates-as-required ar-checkbox">
                                            <span class="wpcf7-list-item first last"><label>
                                                    <input type="checkbox" value="已同意条款" required/>&nbsp;
                                                    <span class="wpcf7-list-item-label">说明和条款您已阅读并同意</span>
                                                </label>
                                            </span>
                                        </span>
                                    </span>
                                </p></div>
                            <div class="wpcf7-response-output wpcf7-display-none"></div>
                            <div class="ctc-field">
                                <input type="submit" value="发送" class="wpcf7-form-control wpcf7-submit ctc-btn" />
                            </div>
                            </div>
                        </form>

                    </div>			<!-- CF7 End -->
                </div>
            </div>
        </div>
    </div>


@endsection