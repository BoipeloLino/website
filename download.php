<?php
include_once 'db.conf.php';
include_once 'common.php';

if (!isset($_COOKIE['lang'])) {
    $cLang = "en";
} else {
    $cLang = filter_input(INPUT_COOKIE, 'lang', FILTER_SANITIZE_STRING);
}
?>

<!doctype html>
<html lang="en">
<head>
    <!-- jQuery -->
    <script src="scripts/jquery.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Generate evil insults">

    <meta name="application-name" content="Evil Insult Generator">
    <meta name="robots" content="index,follow,noodp">
    <meta name="googlebot" content="index,follow">

    <meta name="theme-color" content="#E64545">

    <!-- Add to homescreen -->
    <meta name="mobile-web-app-capable" content="yes">
    <!-- More info: https://developer.chrome.com/multidevice/android/installtohomescreen -->

    <meta name="google" value="notranslate">

    <!-- Android -->
    <meta property="al:android:url" content="applinks://docs">
    <meta property="al:android:app_name" content="App Links">
    <meta property="al:android:package" content="org.applinks">
    <!-- More info: http://applinks.org/documentation/ -->

    <!-- For IE 11, Chrome, Firefox, Safari, Opera -->
    <link rel="icon" href="favicons/favicon-16.png" sizes="16x16" type="image/png">
    <link rel="icon" href="favicons/favicon-32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="favicons/favicon-48.png" sizes="48x48" type="image/png">
    <link rel="icon" href="favicons/favicon-62.png" sizes="62x62" type="image/png">

    <title><?php echo $lang['PAGE_TITLE']; ?></title>


    <script src="https://use.fontawesome.com/9ee63b7ac0.js" async></script>


    <!-- Select2 -->
    <script src="scripts/select2.min.js" defer></script>

    <script type="text/javascript" src="scripts/cookieinfo.min.js" defer></script>
    <script type="text/javascript" src="scripts/jquery.cookie.min.js" defer></script>
    <script type="text/javascript">

        // PHP Cookie to JS
        var lang = "<?php echo $cLang; ?>";
        function Generate() {
            $.ajax({
                url: "generate_insult.php?lang=" + lang,
                type: 'get',
                success: function(response){
                    $('#generated_insult').html(response);
                },
                cache: false
            });
        }
        $(document).ready(function () {
            $("#lang_select").val($.cookie("lang"));
            Generate()
        });

    </script>

    <script>
        $(function() {
            // bind change event to select
            $('#lang_select').on('change', function () {
                lang = $(this).val(); // get selected value
                $.cookie('lang', lang);
               
                document.location.reload(true);
            });
        });
    </script>


    <!-- Piwik -->

    <!-- End Piwik Code -->


<!-- Piwik -->

<!-- End Piwik Code -->


    <link rel="stylesheet" href="css/layouts/pure-min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/layouts/mobile.css">

    <!--[if lte IE 8]>

    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-old-ie-min.css">

    <![endif]-->
    <!--[if gt IE 8]><!-->

    <link rel="stylesheet" href="css/layouts/grids-responsive-min.css ">

    <!--<![endif]-->
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="css/layouts/marketing-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
    <link rel="stylesheet" href="css/layouts/marketing.css">
    <!--<![endif]-->
    <link href="css/layouts/select2.min.css" rel="stylesheet"/>

<meta name="carrot-page-owner" content="LJVK-WPRB-JQWG-CVKJ" />

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'YOURGAID', 'auto');
  ga('send', 'pageview');

</script>

</head>
<body>
<div class="header">
    <div class="home-menu pure-menu pure-menu-horizontal pure-menu-fixed wrap-menu">
        <a class="pure-menu-heading" href=""><?php echo $lang['HEADER_TITLE']; ?></a>

        <ul class="pure-menu-list">
            <li class="pure-menu-item pure-menu-selected"><a onclick="Generate()" href="#"
                                                             class="pure-menu-link"><?php echo $lang['MENU_GENERATE']; ?></a>
            </li>
            <li class="pure-menu-item"><a
                    href="mailto:marvin@evilinsult.com?Subject=Evil%20Insult%20Generator%20Proposal&Body=Hej%20fuckers%2C%0A%0Aplease%20add%20this%20beauty%3A%0A%0Ainsult%3A%20...%0Alanguage%3A%20...%0Acomment%20%28optional%29%3A%20...%0A%0A...%0A"
                    target="_blank" class="pure-menu-link"><?php echo $lang['MENU_PROPOSAL']; ?></a></li>
            <li class="pure-menu-item"><a
                    href="mailto:marvin@evilinsult.com?Subject=Evil%20Insult%20Generator%20Contact&Body=Marvin%2C%20fuck%20you%21"
                    class="pure-menu-link"><?php echo $lang['MENU_CONTACT']; ?></a></li>
            <li class="pure-menu-item"><a href="https://evilinsultgenerator.typeform.com/to/jc2TfO" target="_blank"
                                          class="pure-menu-link"><?php echo $lang['MENU_FEEDBACK']; ?></a></li>
            <li class="pure-menu-item"><a href="legal.pdf" download="EIG_legal.pdf"
                                          class="pure-menu-link"><?php echo $lang['MENU_LEGAL']; ?></a></li>

            <script type="text/javascript">
                $(document).ready(function () {
                    $(".js-example-basic-single").select2();
                });
            </script>

            <div class="pure-menu-item ">
                <i class="fa fa-language fa-lg whiteicon" aria-hidden="true"></i>


                <select id="lang_select" class="js-example-basic-single">
                    <option value="cn">cn</option>
                    <option value="de">de</option>
                    <option value="el">el</option>
                    <option value="en">en</option>
                    <option value="es">es</option>
                    <option value="fr">fr</option>
                    <option value="ru">ru</option>
                    <option value="sw">sw</option>

                </select>

            </div>
        </ul>
    </div>
</div>

<div class="splash-container">
    <div class="splash">
        <h1 id="generated_insult" class="splash-head">
        </h1>

        <p class="splash-subhead">
            FUCK YOU <i class="fa fa-hand-o-up"></i>
        </p>
        <p>
            <a onclick="Generate()"
               class="generate-insult pure-button pure-button-primary"><?php echo $lang['INSULT_GENERATE']; ?></a>
        </p>
    </div>
</div>

<div class="content-wrapper">
    <div class="content">
        <h2 class="content-head is-center">Evil Insult Generator</h2>

        <div class="pure-g">
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-3">

                <h3 class="content-subhead">
                    <i class="fa fa-download fa-2x" aria-hidden="true"></i>
                    <p><a href="/download/latest.zip" download="latest.zip">Download</a></p>
                </h3>

            </div>
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-3">
                <h3 class="content-subhead">
                    <i class="fa fa-youtube-play fa-2x" aria-hidden="true"></i>
                    <p><a href="https://youtu.be/mfabYEQRPQw" target="_blank">Explainer Video</a></p>
                </h3>
            </div>
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-3">
                <h3 class="content-subhead">
                    <i class="fa fa-question fa-2x" aria-hidden="true"></i>
                    <p><a href="mailto:marvin@evilinsult.com?Subject=EIG Windows 10 Sideload&Body=" target="_blank">Support</a></p>
                </h3>
            </div>
        </div>

        <div class="ribbon l-box-lrg pure-g">
            <div class="l-box-lrg is-center pure-u-1 pure-u-md-1-2 pure-u-lg-2-5">
                <img class="pure-img-responsive" alt="File Icons" width="300" src="img/common/EIG_for_Pure.png">
            </div>
            <div class="pure-u-1 pure-u-md-1-2 pure-u-lg-3-5">

                <h2 class="content-head content-head-ribbon"><?php echo $lang['WORLD']; ?></h2>

                <p>
                    <?php echo $lang['SUBMIT']; ?> <i class="fa fa-hand-o-right"></i> <a
                        href="mailto:marvin@evilinsult.com?Subject=Evil%20Insult%20Generator%20Proposal&Body=Hej%20fuckers%2C%0A%0Aplease%20add%20this%20beauty%3A%0A%0Ainsult%3A%20...%0Alanguage%3A%20...%0Acomment%20%28optional%29%3A%20...%0A%0A...%0A">HERE</a>
                    <i class="fa fa-hand-o-left"></i>
                </p>
            </div>
        </div>

        <div class="content">
            <h2 class="content-head is-center"><?php echo $lang['NEWSLETTER_HEADER']; ?></h2>

            <div class="pure-g">
                <div class="l-box-lrg pure-u-1 pure-u-md-2-5">
                    <form class="pure-form pure-form-stacked" action="https://www.poopjournal.rocks/sendy/subscribe"
                          method="POST" accept-charset="utf-8">
                        <fieldset>

                            <label for="name">Name</label>
                            <input type="text" name="name" id="name"/>

                            <label for="email">Email</label>
                            <input type="text" name="email" id="email"/>

                            <input type="hidden" name="list" value="4g4APyIsIDDZs2UxatSZyw"/>


                            <button type="submit" class="pure-button"><?php echo $lang['UP_TO_DATE']; ?></button>
                        </fieldset>
                    </form>
                </div>

                <div class="l-box-lrg pure-u-1 pure-u-md-3-5">
                    <h4><?php echo $lang['ABOUT_HEADER']; ?></h4>
                    <p>

                        Evil Insult Generator goal is to offer the most evil insults. Please help us to reach this
                        honorable purpose by submitting insults <a
                            href="mailto:marvin@evilinsult.com?Subject=Evil%20Insult%20Generator%20Proposal&Body=Hej%20fuckers%2C%0A%0Aplease%20add%20this%20beauty%3A%0A%0Ainsult%3A%20...%0Alanguage%3A%20...%0Acomment%20%28optional%29%3A%20...%0A%0A...%0A">HERE</a>.
                        <br>
                        We are unsocial people: <br>
                        You can find us on <i class="fa fa-facebook"></i> <a
                            href="https://www.facebook.com/EvilInsultGenerator/" target="_blank">Facebook</a> and <i
                            class="fa fa-twitter"></i> <a href="https://twitter.com/__E__I__G__" target="_blank">Twitter</a>.
                        <br>
                        We would be very happy to send you our <i class="fa fa-newspaper-o" aria-hidden="true"></i> <a
                            href="newsletter/" target="_blank">newsletter</a> spam.
                    </p>
                </div>
            </div>

        </div>

        <div class="footer l-box is-center">
            Made with <i class="fa fa-heart"></i> by the Evil Insult Generator Team.
        </div>

    </div>


</body>
</html>
