@extends('layouts.home')


@section('mainContent')

    <div id="content-area" class="main-content">
        <div class="post-4211 page type-page status-publish hentry" id="post-4211">

            <div class="row">
                <div class="small-12 columns">
                    <div class="breadcrumb">
                        <!-- Breadcrumb NavXT 5.1.1 -->
                        <span typeof="v:Breadcrumb">
                            <a rel="v:url" property="v:title" title="鲁宾斯坦音乐学院" href="{{url('/')}}" class="home">首页</a>

                        </span><span typeof="v:Breadcrumb">
                            <span property="v:title">考试报名表</span>
                        </span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="small-12 columns">
                    <div class="pad-top-20 pad-btm-10 clearfix">
                        <div class="pad-btm-40">
                            @if(count($errors)>0)
                                <div style="margin-bottom: 40px;">{{$errors}}</div>
                            @endif
                            <h1 class="page-title">专业考试报名表</h1>
                        </div>
                        <div class="story-content clearfix">
                            <div class="wpcf7" id="wpcf7-f4210-p4211-o1" lang="de-DE" dir="ltr">
                                <div class="screen-reader-response"></div>
                                <form name="regForm" action="" method="post" class="wpcf7-form" enctype="multipart/form-data">
                                    {{csrf_field()}}

                                    <input type="text" name="reg_type" value="1" style="display:none" />

                                    <div class="contact-form">
                                        <div class="ctc-field">
                                            <div class="ctc-left">
                                                <span class="wpcf7-form-control-wrap studiengang">
                                                    <select name="edu_id" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required ctc-text" aria-required="true" aria-invalid="false">
                                                        <option disabled selected value>选择学制 (*)</option>
                                                        <option value="5">大师班课程</option>
                                                        <option value="3">本科学制</option>
                                                        <option value="9">音乐硕士-瑞士Kalaidos公立大学</option>
                                                        <option value="10">音乐硕士-意大利拉斯佩齐亚贾科莫.普契尼音乐学院</option>
                                                        <option value="11">音乐硕士—-荷兰方提斯大学艺术学院</option>
                                                        <option value="2">音乐会演奏家课程</option>
                                                        <option value="4">进修课程</option>
                                                        <option value="6">独奏研究生课程</option>
                                                        <option value="7">预科班</option>
                                                        <option value="8">音乐管理</option>
                                                    </select>
                                                </span>
                                            </div>
                                            <div class="ctc-right">
                                                <span class="wpcf7-form-control-wrap instrument">
                                                    <select name="reg_subject" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required ctc-text" aria-required="true" aria-invalid="false">
                                                        <option disabled selected value>选择专业 (*)</option>
                                                        <option value="钢琴">钢琴</option>
                                                        <option value="声乐">声乐</option>
                                                        <option value="小提琴">小提琴</option>
                                                        <option value="大提琴">大提琴</option>
                                                        <option value="中提琴">中提琴</option>
                                                        <option value="长笛">长笛</option>
                                                        <option value="吉他">吉他</option>
                                                        <option value="圆号">圆号</option>
                                                        <option value="小号">小号</option>
                                                        <option value="单簧管">单簧管</option>
                                                        <option value="双簧管">双簧管</option>
                                                        <option value="作曲">作曲</option>
                                                        <option value="室内乐">室内乐</option>
                                                        <option value="长号">长号</option>
                                                        <option value="其他">其他</option>
                                                    </select>
                                                </span>
                                            </div>
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
                                                <span class="wpcf7-form-control-wrap address1">
                                                    <input type="text" name="reg_address" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required ctc-text" aria-required="true" aria-invalid="false" placeholder="联系地址 (*)" required/>
                                                </span>
                                            </div>
                                            <div class="ctc-right">
                                                <span class="wpcf7-form-control-wrap address2">
                                                    <input type="text" name="reg_address2" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required ctc-text" aria-required="true" aria-invalid="false" placeholder="邮编/城市 (*)" required/>
                                                </span>
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
                                            <div class="ctc-left">
                                                <span class="wpcf7-form-control-wrap birth">
                                                    <input type="date" name="reg_birthday" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required ctc-text" aria-required="true" aria-invalid="false" placeholder="出生日期 (*)" required/>
                                                </span>
                                            </div>
                                            <div class="ctc-right">
                                                <span class="wpcf7-form-control-wrap birthplace">
                                                    <input type="text" name="reg_birthLocation" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required ctc-text" aria-required="true" aria-invalid="false" placeholder="出生地 (*)" required/>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="ctc-field">
                                            <div class="ctc-left">
                                                <span class="wpcf7-form-control-wrap state">
                                                    <input type="text" name="reg_nation" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required ctc-text" aria-required="true" aria-invalid="false" placeholder="国籍 (*)" required/>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="ctc-field">
                                            <span class="wpcf7-form-control-wrap programm">
                                                <textarea name="reg_text" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="考试曲目"></textarea>
                                            </span>
                                        </div>
                                        <div class="ctc-field">
                                            <span class="wpcf7-form-control-wrap teacher">
                                                <input type="text" name="reg_teacher" value="" size="40" class="wpcf7-form-control wpcf7-text ctc-text" aria-invalid="false" placeholder="预期教师" />
                                            </span>
                                        </div>
                                        <div class="ctc-field">
                                            其他文档 (请通过邮件附件发送致 <a href="mailto:info@rubinstein-academy.com" class="mail">info@rubinstein-academy.com</a>)
                                        </div>

                                        <div class="ctc-field">
                                            <input type="submit" value="发送" class="wpcf7-form-control wpcf7-submit ctc-btn" />
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- ======================= Page Slider ======================= -->
                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection