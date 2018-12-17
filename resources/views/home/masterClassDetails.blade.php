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
                    <span typeof="v:Breadcrumb"><a rel="v:url" property="v:title" title="Gehe zu Anton Rubinstein Musikakademie." href="{{url('/')}}" class="home">首页</a></span>
                    <span typeof="v:Breadcrumb"><a rel="v:url" property="v:title" title="Gehe zu Dozenten." href="{{url('masterClasses')}}">Anton Rubinstein 国际音乐学院大师班</a></span>
                    <span typeof="v:Breadcrumb"><span property="v:title">Anna Babenko</span></span>
                </div>
            </div>
        </div>


        <div class="post-6114 masterclass type-masterclass status-publish has-post-thumbnail hentry" id="post-6114">
            <div class="row pad-top-20 pad-btm-20 ">
                <div class="small-12 columns">
                    <h1 class="page-title">Meisterkurs für Klavier - MIKHAIL MORDVINOV</h1>
                    <h2 class="page-title">19. & 20. Januar 2019, Düsseldorf</h2>
                </div>
                <div class="small-12 columns">
                    <div class="row collapse">
                        <div class="small-12 large-8 columns">
                            <div class="row" style="margin-bottom: 10px;">
                                <div class="small-12 show-for-small-only columns">
                                    <img style="width: 100%; height: auto; margin: 0 0 20px 0;"
                                         src="http://www.rubinstein-akademie.de/wp-content/uploads/2018/05/Mordvinov_Kl_sw.jpg" />
                                </div>
                                <div class="small-12 columns">
                                    <img class="show-for-medium-only left"
                                         style="width: 150px; height: auto; margin: 0 20px 5px 0;"
                                         src="http://www.rubinstein-akademie.de/wp-content/uploads/2018/05/Mordvinov_Kl_sw.jpg" /> <img class="show-for-large-up left"
                                                                                                                                        style="width: 200px; height: auto; margin: 0 20px 5px 0;"
                                                                                                                                        src="http://www.rubinstein-akademie.de/wp-content/uploads/2018/05/Mordvinov_Kl_sw.jpg" />
                                    <p>Jede/r aktive Kursteilnehmer/in erhält jeweils zwei Unterrichtsstunden bei Mikhail Mordvinov.</p>
                                    <p>Die Anmeldungen werden in der Reihenfolge des Eingangs berücksichtigt. Alle ausgewählten Teilnehmer/innen erhalten von uns eine Benachrichtigung.</p>
                                    <p><strong>Mikhail Mordvinov</strong> – im April 1977 in Moskau geboren – zählt zu den bedeutendsten russischen Pianisten seiner Generation. Nach zahlreichen Erfolgen bei internationalen Wettbewerben konzertiert er heute weltweit als Solist, Kammermusiker und Liedpianist. Rundfunk- und CD-Aufnahmen dokumentieren seine Virtuosität und musikalische Reife.</p>
                                    <p>Mordvinov begann mit sechs Jahren Klavier zu spielen und wurde seit seinem siebten Lebensjahr an der Moskauer Gnessin-Musikschule in der Klavierklasse von Tatjana Zelikman unterrichtet. 1994 nahm er sein Studium an der Russischen Gnessin-Akademie unter Professor Vladimir Tropp auf. Dort wurde er 1997 als „Bester Student des Jahres“ ausgezeichnet. Anschließend folgte ein Aufbaustudium an der Hochschule für Musik und Theater Hannover bei Prof. Bernd Goetzke.</p>
                                    <p>Seit er 1994 das Skrjabin-Stipendium des Moskauer Skrjabin-Museums erhielt, ist er ständiger Gast der Skrjabin-Musikfestspiele. 1997/98 war Mikhail Mordvinov zudem Heinrich-Neuhaus-Stipendiat. Zwischen 2004 und 2006 wurde er vom Keyboard Charitable Trust London unterstützt.</p>
                                    <p>Mikhail Mordvinov ist Preisträger zahlreicher Wettbewerbe und gewann u.a. den Ersten Preis des XII. Internationalen Robert-Schumann-Wettbewerbes in Zwickau (1996), den Ersten Preis und Sonderpreis des VI. Internationalen Schubert-Wettbewerb in Dortmund (1997), den Ersten Preis und Sonderpreis des XII. Internationalen Wettbewerb in Andorra (2006). Diese Erfolge führten weltweit zu zahlreichen Konzertauftritten als Solopianist und Kammermusiker sowie zur Teilnahme an bedeutenden Festspielen sowie zu Rundfunk- und CD-Produktionen.</p>
                                    <p>Mordvinov trat u.a. im Konzerthaus und Philharmonie Berlin, dem Gasteig in München, der Meistersingerhalle Nürnberg, Laeiszhalle Hamburg, Minneapolis Orchestra Hall, Minato Mirai Hall Yokohama, dem Sejong Art Center Seoul, Konservatorium und der Philharmonie in Moskau sowie in den Philharmonien der meisten Großstädte Russlands auf.</p>
                                    <p>Das Repertoire des russischen Pianisten reicht von der Barockmusik bis zur Musik des 20. Jahrhunderts. So hat er mehrere Werke des in Berlin lebenden Komponisten Chris Newman uraufgeführt und aufgenommen. Intensiv widmet sich Mordvinov auch der Kammermusik. 2013 wurde er Mitglied des Ensembles Arteunita in Valencia und 2014 des Weinberg-Trio in Berlin. Zudem hat Mikhail Mordvinov in den Jahren 2014 und 2015 gemeinsam mit Kirill Kravtsov in Moskau sämtliche Werke für Violine und Klavier von Bach und Mozart aufgeführt.</p>
                                    <p>Für die Label Thorofon, Oclassica, Genuin, Toccata Classics und Sony Classical hat Mordvinov u.a. Werke von Schubert, Rachmaninow, Rameau, Mozart, Beethoven, Chopin, Skrjabin sowie Mussorgskys „Bilder einer Ausstellung“ aufgenommen und höchstes Lob für seine Einspielungen erhalten.</p>
                                    <p>Das Unterrichten ist eine weitere Facette in Mordvinovs musikalischer Biografie: von 2004 bis 2010 unterrichtete er an der Russischen Gnessin-Akademie für Musik, zur Zeit unterrichtet er an der Hochschule für Musik Hanns Eisler und an der Internationalen Rubinstein Akademie in Berlin. Oft gibt er auch in Meisterkursen sein Wissen weiter.</p>
                                    <p>Mikhail Mordvinov lebt derzeit in Berlin.</p>
                                </div>
                            </div>
                        </div>
                        <div class="small-12 large-4 columns">
                            <div class="row">
                                <div class="small-12 medium-4 large-12 columns">
                                    <section class="ar-panel dark-grey ar-margin-bottom">
                                        <header>Anmeldeschluss</header>
                                        <section class="content text-center">
                                            <i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;&nbsp;<b>15. Dezember 2018</b>
                                        </section>
                                        <footer id="formBtn" class="text-center">
                                            <a href="http://www.rubinstein-akademie.de/anmeldeformular" class="page-btn ar-btn anmelden-btn ">Anmelden</a>								</footer>
                                    </section>
                                </div>
                                <div class="small-12 medium-5 large-12 columns end">
                                    <section class="ar-panel dark-grey ar-margin-bottom">
                                        <header>Anmeldegebühren</header>
                                        <section class="content">
                                            <table class="ar-table">
                                                <tr><td><i class="fa fa-money" aria-hidden="true"></i></td><td width="100%">Aktive Teilnahme</td><td class="text-right"><b>300&nbsp;&euro;</b></td></tr><tr><td><i class="fa fa-money" aria-hidden="true"></i></td><td width="100%">Passive Teilnahme</td><td class="text-right"><b>40&nbsp;&euro;</b></td></tr>				</table>
                                        </section>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="app_form" class="small-12 columns" style="margin-top: 30px;">
                    <h3>Anmeldeformular</h3>
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
                                <div class="hide"<br />
                                <span class="wpcf7-form-control-wrap mst"><input type="text" name="mst" value="19. &amp; 20. Januar 2019: Meisterkurs für Klavier - MIKHAIL MORDVINOV" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" /></span><span class="wpcf7-form-control-wrap msu"><input type="text" name="msu" value="http://www.rubinstein-akademie.de/msc/mikhail-mordvinov-januar-2019/" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" /></span>
                            </div>
                            <div class="ctc-field">
                                <span class="wpcf7-form-control-wrap fee_type"><select name="fee_type" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required ctc-text" aria-required="true" aria-invalid="false"><option value="">Anmeldegebühr (*)</option><option value="active_fee">Aktive Teilnahme</option><option value="passive_fee">Passive Teilnahme</option></select></span>
                            </div>
                            <div class="ctc-field">
                                <span class="wpcf7-form-control-wrap options"><span class="wpcf7-form-control wpcf7-checkbox ar-checkbox"></span></span>
                            </div>
                            <div class="ctc-field">
                                <div class="ctc-left"><span class="wpcf7-form-control-wrap anrede"><select name="anrede" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required ctc-text" aria-required="true" aria-invalid="false"><option value="">Anrede (*)</option><option value="Frau">Frau</option><option value="Herr">Herr</option></select></span></div>
                            </div>
                            <div class="ctc-field">
                                <div class="ctc-left"><span class="wpcf7-form-control-wrap last-name"><input type="text" name="last-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required ctc-text" aria-required="true" aria-invalid="false" placeholder="Name (*)" /></span></div>
                                <div class="ctc-right"><span class="wpcf7-form-control-wrap first-name"><input type="text" name="first-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required ctc-text" aria-required="true" aria-invalid="false" placeholder="Vorname (*)" /></span></div>
                            </div>
                            <div class="ctc-field">
                                <div class="ctc-left"> <span class="wpcf7-form-control-wrap address1"><input type="text" name="address1" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required ctc-text" aria-required="true" aria-invalid="false" placeholder="Strasse/Hausnummer (*)" /></span> </div>
                                <div class="ctc-right"><span class="wpcf7-form-control-wrap address2"><input type="text" name="address2" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required ctc-text" aria-required="true" aria-invalid="false" placeholder="PLZ/Stadt (*)" /></span></div>
                            </div>
                            <div class="ctc-field">
                                <div class="ctc-left"> <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email ctc-text" aria-required="true" aria-invalid="false" placeholder="E-Mail-Adresse (*)" /></span> </div>
                                <div class="ctc-right"><span class="wpcf7-form-control-wrap telefon"><input type="text" name="telefon" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required ctc-text" aria-required="true" aria-invalid="false" placeholder="Telefon/Mobil (*)" /></span></div>
                            </div>
                            <div class="ctc-field">
                                <span class="wpcf7-form-control-wrap programm"><textarea name="programm" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Programm für den Meisterkurs"></textarea></span>
                            </div>
                            <div class="wpcf7-response-output wpcf7-display-none"></div>
                            <div class="ctc-field">
                                <input type="submit" value="Senden" class="wpcf7-form-control wpcf7-submit ctc-btn" />
                            </div>
                        </form></div>			<!-- CF7 End -->
                </div>
            </div>
        </div>
    </div>





@endsection