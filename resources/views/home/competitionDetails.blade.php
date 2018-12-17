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
                    <span typeof="v:Breadcrumb"><a rel="v:url" property="v:title" title="Gehe zu Anton Rubinstein Musikakademie." href="{{url('/')}}" class="home">首页</a></span>
                    <span typeof="v:Breadcrumb"><a rel="v:url" property="v:title" href="{{url('competitions')}}" class="home">Anton Rubinstein 国际音乐学院音乐比赛</a></span>
                    <span typeof="v:Breadcrumb"><span property="v:title">6. & 7. April 2019 — VIOLINE</span></span>
                </div>
            </div>
        </div>


        <div class="post-6160 competition type-competition status-publish has-post-thumbnail hentry" id="post-6160">
            <div class="row pad-top-20 pad-btm-20 ">
                <div class="small-12 columns">
                    <h1 class="page-title">Internationaler Anton Rubinstein Wettbewerb 2019 - VIOLINE</h1>
                    <h2 class="page-title">6. & 7. April 2019, Düsseldorf</h2>
                </div>
                <div class="small-12 columns">
                    <div class="row collapse">
                        <div class="small-12 large-8 columns">
                            <div class="row" style="margin-bottom: 10px;">
                                <div class="small-12 show-for-small-only columns">
                                    <img style="width: 100%; height: auto; margin: 0 0 20px 0;"
                                         src="http://www.rubinstein-akademie.de/wp-content/uploads/2017/04/Violine_SWkl.jpg" />
                                </div>
                                <div class="small-12 columns">
                                    <img class="show-for-medium-only left"
                                         style="width: 150px; height: auto; margin: 0 20px 10px 0;"
                                         src="http://www.rubinstein-akademie.de/wp-content/uploads/2017/04/Violine_SWkl.jpg" /> <img class="show-for-large-up left"
                                                                                                                                     style="width: 200px; height: auto; margin: 0 20px 10px 0;"
                                                                                                                                     src="http://www.rubinstein-akademie.de/wp-content/uploads/2017/04/Violine_SWkl.jpg" />
                                    <p>Der Internationale Anton Rubinstein Wettbewerb für Violine 2019 fördert mit seinen attraktiven Preisen junge, hochbegabte Musiker, Musikstudenten, Solisten und angehende Orchestermusiker.</p>
                                    <p>Der Wettbewerb findet in der Internationalen Musikakademie Anton Rubinstein, Flingerstr. 1, 40213 Düsseldorf statt.</p>
                                </div>
                                <div id="jury" class="small-12 columns">
                                    <h3 class="expand-toggle closed ar-font-18">
                                        <i class="fa ar-toggle" aria-hidden="true"></i>&nbsp;Juroren							</h3>
                                    <ul style="margin-bottom: 15px;">
                                        <li>N.N.</li>
                                        <li>N.N.</li>
                                        <li>N.N.</li>

                                    </ul>
                                </div>
                                <div id="prizes" class="small-12 columns">
                                    <h3 class="expand-toggle closed ar-font-18">
                                        <i class="fa ar-toggle" aria-hidden="true"></i>&nbsp;Wettbewerbspreise</h3>
                                    <ul style="list-style: disc; margin: 1em;">
                                        <li style="list-style: disc;">1. Preis der Internationalen Musikakademie Anton Rubinstein / ggf. Bogen als Leihgabe für ein Jahr</li>
                                        <li style="list-style: disc;">2. Preis des Freunde und Förderer Rubinstein-Akademie e.V. / ggf. Bogen als Leihgabe für ein Jahr</li>
                                        <li style="list-style: disc;">3. Preis der Stiftung Blatow / ggf. Bogen als Leihgabe für ein Jahr</li>

                                    </ul>
                                </div>
                                <div id="conditions" class="small-12 columns">
                                    <h3 class="expand-toggle closed ar-font-18">
                                        <i class="fa ar-toggle" aria-hidden="true"></i>&nbsp;Ausschreibung</h3>
                                    <div class="manual_text"><ol>
                                            <li>Der Internationale Anton Rubinstein Wettbewerb für Violine 2019 wird von der Internationalen Musikakademie Anton Rubinstein in Düsseldorf von 06. – 07.04.2019 im Saal der Internationalen Musikakademie Anton Rubinstein in Düsseldorf durchgeführt.</li>
                                            <li>An diesem Wettbewerb können Geiger aller Nationen ohne Altersbegrenzung teilnehmen.</li>
                                            <li>Es finden zwei Runden statt, aus der die Jury die Gewinner ermittelt.</li>
                                            <li>Die erste Runde wird per Video-Link, YouTube oder DVD absolviert. Die Ergebnisse werden am 08.03.2019 per Email bekanntgegeben.</li>
                                            <li>Das Finale findet im Saal der Internationalen Musikakademie Anton Rubinstein in Düsseldorf statt.</li>
                                            <li>Das Finale des Wettbewerbs ist öffentlich.</li>
                                            <li>Insgesamt werden max. 20 Kandidatinnen/Kandidaten zum Wettbewerb zugelassen. Über die Zulassung der Bewerber entscheidet die Internationale Musikakademie Anton Rubinstein in Düsseldorf nach der ersten Runde.</li>
                                            <li>Die Reihenfolge der Vorspiele der Kandidaten/Kandidatinnen wird von der Internationalen Musikakademie Anton Rubinstein festgelegt.</li>
                                            <li>Das Programm für die erste Runde ist nach freier Wahl und darf max. 30 Minuten betragen.</li>
                                            <li>Die Teilnehmenden in der Finalrunde haben ein Programm von maximal 30 Minuten vorzutragen. Das Repertoire für das Finale ist frei wählbar, sollte auswendig vorgetragen werden und kann aus der ersten Runde wiederholt werden.</li>
                                            <li>Die Werke, die eine Präparation des Flügels erfordern, sind vom Wettbewerb ausgeschlossen.</li>
                                            <li>Bei Überschreitung von 30 Minuten Vorspielzeit behält sich die Jury das Recht vor, den Vortrag abzubrechen.</li>
                                            <li>Für die Finale können die Teilnehmenden mit eigener pianistischer Begleitung anreisen. Die Klavierbegleitung kann nach vorheriger Anfrage von der Internationalem Musikakademie Anton Rubinstein gestellt werden. Der dafür fällige Betrag in Höhe von 100 €, der nach der Auswahl in die Finalrunde überwiesen werden soll, beinhaltet eine 20-minütige Probe mit dem/der Pianist/in und den Auftritt beim Wettbewerb.</li>
                                            <li>Die Bekanntgabe der Ergebnisse des Wettbewerbs, sowie Preis- und Urkundenverleihung finden am Sonntag, den 7. April 2019 gegen 19:30 Uhr statt.</li>
                                            <li>Für alle Teilnehmenden herrscht Anwesenheitspflicht bei Bekanntgabe der Ergebnisse.</li>
                                            <li>Die Teilnehmenden erlauben dem Veranstalter mit ihrer Anmeldung, das von ihnen zugeschickte Fotomaterial zu verwenden, und über die während der Veranstaltung erstellten Foto-, Ton- und Video-Aufnahmen frei zu verfügen.</li>
                                            <li>Das Urteil der Jury ist unanfechtbar.</li>
                                            <li>Mit ihrer Anmeldung bestätigen die Kandidat/innen ihr Einverständnis mit den Wettbewerbsbedingungen.</li>
                                            <li>Anmeldeschluss ist 01.03.2019,<br />
                                                Teilnahmegebühr – 100 €,<br />
                                                bis 01.02.2019  –  75 €.</li>
                                            <li>Die Teilnahmegebühr wird in keinem Fall erstattet.<b>Mit dem Absenden dieser Nachricht bestätigen Sie die Datenschutzerklärung gelesen und akzeptiert zu haben.</b></li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="small-12 large-4 columns">
                            <div class="row">
                                <div class="small-12 medium-4 large-12 columns">
                                    <section class="ar-panel dark-grey ar-margin-bottom">
                                        <header>Anmeldeschluss</header>
                                        <section class="content text-center">
                                            <i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;&nbsp;<b>1. März 2019</b>
                                        </section>
                                        <footer id="formBtn" class="text-center">
                                            <a href="http://www.rubinstein-akademie.de/anmeldeformular" class="page-btn ar-btn anmelden-btn ">Anmelden</a>								</footer>
                                    </section>
                                </div>

                                <div class="small-12 medium-4 large-12 columns">
                                    <section class="ar-panel dark-grey ar-margin-bottom">
                                        <header>Anmeldegebühren</header>
                                        <section class="content">
                                            <table class="ar-table">
                                                <tr><td><i class="fa fa-money" aria-hidden="true"></i></td><td width="100%">Early booking<br>bis zum&nbsp;1. Februar 2019</td><td class="text-right"><b>75&nbsp;&euro;</b></td></tr><tr><td><i class="fa fa-money" aria-hidden="true"></i></td><td width="100%">Teilnahmegebühr</td><td class="text-right"><b>100&nbsp;&euro;</b></td></tr><tr><td><i class="fa fa-music" aria-hidden="true"></i></td><td width="100%">Gebühr für den Klavierbegleiter</td><td class="text-right"><b>100&nbsp;&euro;</b></td></tr>				</table>
                                        </section>
                                    </section>
                                </div>

                                <div class="small-12 medium-4 large-12 columns">
                                    <section class="ar-panel dark-grey ar-margin-bottom">
                                        <header>Zahlung</header>
                                        <section class="content">
                                            <ul class="fa-ul">
                                                <li><i class="fa fa-li fa-university" aria-hidden="true"></i>
                                                    <div>
                                                        <p style="padding-bottom: 5px;">Bankverbindung</p>
                                                        <p style="font-size: 0.9em; line-height: 1.2em;">
                                                            Freunde und Förderer der Anton Rubinstein Akademie<br>
                                                            Hypovereinsbank<br> IBAN: DE56 3022 0190 0364 0117 17<br>
                                                            BIC: HYVEDEMM414
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
                                        <header>Erforderliche Dokumente</header>
                                        <section class="content">
                                            <ul class="fa-ul">
                                                <li><i class="fa fa-li fa-check" aria-hidden="true"></i>Lebenslauf</li><li><i class="fa fa-li fa-check" aria-hidden="true"></i>Foto</li><li><i class="fa fa-li fa-check" aria-hidden="true"></i>Youtube - Link mit dem Vorspiel</li><li><i class="fa fa-li fa-check" aria-hidden="true"></i>Überweisungsbestätigung der  Anmeldegebühr (ggf. Gebühr für Klavierbegleiter)</li>				</ul>
                                        </section>
                                    </section>
                                </div>



                                <div class="small-12 medium-4 large-12 columns">
                                    <section class="ar-panel dark-grey ar-margin-bottom">
                                        <header>Preisträger</header>
                                        <section class="content">
                                            <ul class="fa-ul">
                                                <li><i class="fa fa-li fa-trophy" aria-hidden="true"></i><a href="http://www.rubinstein-akademie.de/cmp/internationale-anton-rubinstein-wettbewerb-fuer-violine-2017/">2017</a></li><li><i class="fa fa-li fa-trophy" aria-hidden="true"></i><a href="http://www.rubinstein-akademie.de/cmp/internationaler-knopf-wettbewerb-fuer-violine-2016/">2016</a></li><li><i class="fa fa-li fa-trophy" aria-hidden="true"></i><a href="http://www.rubinstein-akademie.de/cmp/internationaler-knopf-wettbewerb-violine/">2015</a></li><li><i class="fa fa-li fa-trophy" aria-hidden="true"></i><a href="http://www.rubinstein-akademie.de/cmp/internationalen-knopf-wettbewerb-2014-violine/">2014</a></li><li><i class="fa fa-li fa-trophy" aria-hidden="true"></i><a href="http://www.rubinstein-akademie.de/cmp/internationaler-knopf-wettbewerb-2013-violine/">2013</a></li>				</ul>
                                        </section>
                                    </section>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div id="app_form" class="small-12 columns" style="margin-top: 30px;">
                    <h3 class="ar-font-18">Anmeldeformular</h3>
                    <!-- CF7 Start -->
                    <div class="wpcf7" id="wpcf7-f4819-p6160-o1" lang="de-DE" dir="ltr">
                        <div class="screen-reader-response"></div>
                        <form name="" action="/cmp/internationaler-anton-rubinstein-wettbewerb-2019-violine/#wpcf7-f4819-p6160-o1" method="post" class="wpcf7-form" enctype="multipart/form-data" novalidate="novalidate">
                            <div style="display: none;">
                                <input type="hidden" name="_wpcf7" value="4819" />
                                <input type="hidden" name="_wpcf7_version" value="4.1" />
                                <input type="hidden" name="_wpcf7_locale" value="de_DE" />
                                <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f4819-p6160-o1" />
                                <input type="hidden" name="_wpnonce" value="cd8ac0c9c7" />
                            </div>
                            <div class="contact-form">
                                <div class="hide"<br />
                                <span class="wpcf7-form-control-wrap cmp"><input type="text" name="cmp" value="6. &amp; 7. April 2019: Internationaler Anton Rubinstein Wettbewerb 2019 - VIOLINE" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" /></span><span class="wpcf7-form-control-wrap cmpu"><input type="text" name="cmpu" value="http://www.rubinstein-akademie.de/cmp/internationaler-anton-rubinstein-wettbewerb-2019-violine/" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" /></span>
                            </div>
                            <div class="ctc-field">
                                <div class="ctc-left"><span class="wpcf7-form-control-wrap anrede"><select name="anrede" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required ctc-text" aria-required="true" aria-invalid="false"><option value="">Anrede (*)</option><option value="Frau">Frau</option><option value="Herr">Herr</option></select></span></div>
                            </div>
                            <div class="ctc-field">
                                <div class="ctc-left"><span class="wpcf7-form-control-wrap last-name"><input type="text" name="last-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required ctc-text" aria-required="true" aria-invalid="false" placeholder="Name (*)" /></span></div>
                                <div class="ctc-right"><span class="wpcf7-form-control-wrap first-name"><input type="text" name="first-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required ctc-text" aria-required="true" aria-invalid="false" placeholder="Vorname (*)" /></span></div>
                            </div>
                            <div class="ctc-field">
                                <div class="ctc-left"><span class="wpcf7-form-control-wrap birthday"><input type="text" name="birthday" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required ctc-text" aria-required="true" aria-invalid="false" placeholder="Geburtsdatum (*)" /></span></div>
                                <div class="ctc-right"><span class="wpcf7-form-control-wrap birth"><input type="text" name="birth" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required ctc-text" aria-required="true" aria-invalid="false" placeholder="Geburtsort (*)" /></span></div>
                            </div>
                            <div class="ctc-field">
                                <span class="wpcf7-form-control-wrap nationality"><input type="text" name="nationality" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required ctc-text" aria-required="true" aria-invalid="false" placeholder="Staatsangehörigkeit (*)" /></span>
                            </div>
                            <div class="ctc-field">
                                <div class="ctc-left"> <span class="wpcf7-form-control-wrap address1"><input type="text" name="address1" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required ctc-text" aria-required="true" aria-invalid="false" placeholder="Strasse/Hausnummer (*)" /></span> </div>
                                <div class="ctc-right"><span class="wpcf7-form-control-wrap address2"><input type="text" name="address2" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required ctc-text" aria-required="true" aria-invalid="false" placeholder="PLZ/Stadt/Land (*)" /></span></div>
                            </div>
                            <div class="ctc-field">
                                <div class="ctc-left"> <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email ctc-text" aria-required="true" aria-invalid="false" placeholder="E-Mail-Adresse (*)" /></span> </div>
                                <div class="ctc-right"><span class="wpcf7-form-control-wrap telefon"><input type="text" name="telefon" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required ctc-text" aria-required="true" aria-invalid="false" placeholder="Telefon/Mobil (*)" /></span></div>
                            </div>
                            <div class="ctc-field">
                                <span class="wpcf7-form-control-wrap piano"><span class="wpcf7-form-control wpcf7-checkbox ar-checkbox"><span class="wpcf7-list-item first last"><label><input type="checkbox" name="piano[]" value="Ich brauche einen Klavierbegleiter für den Wettbewerb" />&nbsp;<span class="wpcf7-list-item-label">Ich brauche einen Klavierbegleiter für den Wettbewerb</span></label></span></span></span>
                            </div>
                            <div class="ctc-field">
                                <span class="wpcf7-form-control-wrap links"><textarea name="links" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Video-Links für die 1. Runde des Wettbewerbs"></textarea></span>
                            </div>
                            <div class="ctc-field">
                                <span class="wpcf7-form-control-wrap programm"><textarea name="programm" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Programm für die 2. Runde des Wettbewerbs"></textarea></span>
                            </div>
                            <div class="ctc-field">
                                Ihre Dokumente (pdf, jpg, jpeg, max. 10 MB)
                            </div>
                            <div class="ctc-field">
                                <div class="ctc-left"><span class="wpcf7-form-control-wrap your-file1"><input type="file" name="your-file1" value="1" size="40" class="wpcf7-form-control wpcf7-file ctc-text" aria-invalid="false" /></span></div>
                                <div class="ctc-right"><span class="wpcf7-form-control-wrap your-file2"><input type="file" name="your-file2" value="1" size="40" class="wpcf7-form-control wpcf7-file ctc-text" aria-invalid="false" /></span></div>
                            </div>
                            <div class="ctc-field">
                                <div class="ctc-left"><span class="wpcf7-form-control-wrap your-file3"><input type="file" name="your-file3" value="1" size="40" class="wpcf7-form-control wpcf7-file ctc-text" aria-invalid="false" /></span></div>
                                <div class="ctc-right"><span class="wpcf7-form-control-wrap your-file4"><input type="file" name="your-file4" value="1" size="40" class="wpcf7-form-control wpcf7-file ctc-text" aria-invalid="false" /></span></div>
                            </div>
                            <div class="ctc-field">
                                <p><b>Mit ihrer Anmeldung bestätigen die Kandidat/innen ihr Einverständnis mit den Wettbewerbsbedingungen. Mit dem Absenden dieser Nachricht bestätigen Sie die Datenschutzerklärung gelesen und akzeptiert zu haben.</b></p>
                                <p> <span class="wpcf7-form-control-wrap accept_rules"><span class="wpcf7-form-control wpcf7-checkbox wpcf7-validates-as-required ar-checkbox"><span class="wpcf7-list-item first last"><label><input type="checkbox" name="accept_rules[]" value="Die Bedingungen habe ich durchgelesen und akzeptiert." />&nbsp;<span class="wpcf7-list-item-label">Die Bedingungen habe ich durchgelesen und akzeptiert.</span></label></span></span></span>
                                </p></div>
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