<!doctype html>

<html class="no-js" <?php language_attributes(); ?>>

<head>
    <meta charset="utf-8">

    <!-- Force IE to use the latest rendering engine available -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta class="foundation-mq">

    <!-- If Site Icon isn't set in customizer -->
    <?php if (!function_exists('has_site_icon') || !has_site_icon()) { ?>
        <!-- Icons & Favicons -->
        <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
        <link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon"/>
        <!--[if IE]>
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
        <![endif]-->
        <meta name="msapplication-TileColor" content="#f01d4f">
        <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/images/win8-tile-icon.png">
        <meta name="theme-color" content="#121212">
    <?php } ?>

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <?php wp_head(); ?>

    <?php
    $pages = ['donation-thank-you', 'donate-thank-you', 'donate-by-mobile-phone-thank-you'];
    ?>

    <?php
    $pages = ['donation-thank-you'];

    if ((isset($_SESSION["donation"])) && (in_array($post->post_name, $pages))) {
        //if ($_SERVER['REMOTE_ADDR'] == '81.138.12.16') {

            if($_SESSION["donation"]['transactionProducts'][0]['sku'] == 'card-one-off-payment') {
                ?>

                <!-- Begin TVSquared Tracking Code -->
                <script type="text/javascript">
                    var _tvq = window._tvq = window._tvq || [];
                    (function () {
                        var session = {
                            'user': '<?php echo $_SESSION["donation"]['transactionId'];?>'
                        };
                        var actionname = 'donation';
                        var action = {
                            'rev': '<?php echo $_SESSION["donation"]['transactionTotal'];?>',
                            'prod': '<?php echo $_SESSION["donation"]['transactionProducts'][0]['sku'];?>',
                            'id': '<?php echo $_SESSION["donation"]['transactionId'];?>',
                            'promo': ''
                        };

                        var u = (("https:" == document.location.protocol) ? "https://collector-1442.tvsquared.com/" : "http://collector-1442.tvsquared.com/");
                        _tvq.push(['setSiteId', "TV-81545472-1"]);
                        _tvq.push(['setTrackerUrl', u + 'tv2track.php']);
                        _tvq.push([function () {
                            this.setCustomVariable(5, 'session', JSON2.stringify(session), 'visit')
                        }]);
                        _tvq.push([function () {
                            this.setCustomVariable(5, actionname, JSON2.stringify(action), 'page')
                        }]);
                        _tvq.push(['trackPageView']);
                        var d = document,
                            g = d.createElement('script'),
                            s = d.getElementsByTagName('script')[0];
                        g.type = 'text/javascript';
                        g.defer = true;
                        g.async = true;
                        g.src = u + 'tv2track.js';
                        s.parentNode.insertBefore(g, s);
                    })();
                </script>

                <?php
            }
        //}
    }
    ?>
    <?php
    $pages = ['donation-thank-you', 'donate-thank-you', 'donate-by-mobile-phone-thank-you'];
    if ((isset($_SESSION["donation"])) && (in_array($post->post_name, $pages))) {
        echo '<script>window.dataLayer = [];</script>';
        echo '<script>dataLayer.push(' . json_encode($_SESSION["donation"], JSON_NUMERIC_CHECK) . ');</script>';
        unset($_SESSION["donation"]);
    }
    ?>
    <!-- Google -->
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-9Q44');
    </script>
    <!-- End Google Tag Manager -->

    <!-- end Google -->

</head>

<!-- Uncomment this line if using the Off-Canvas Menu -->

<body <?php body_class(); ?>>

<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-9Q44"
            height="0" width="0" style="display:none;visibility:hidden">
    </iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

<div id="wptime-plugin-preloader"></div>

<div class="off-canvas-wrapper">

    <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>

        <?php get_template_part('parts/content', 'offcanvas'); ?>

        <div class="off-canvas-content" data-off-canvas-content>

            <a href="#" class="to-top-btn">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/go-top.png" alt="back-to-top">
            </a>

            <section class="search-form-row" data-closable>
                <button class="close-button" data-close>&times;</button>
                <div class="row">
                    <div class="small-12 columns">
                        <?php get_search_form(); ?>
                    </div>
                </div>
            </section>

            <header class="header" role="banner">

                <!-- This navs will be applied to the topbar, above all content
                     To see additional nav styles, visit the /parts directory -->
                <?php get_template_part('parts/nav', 'title-bar-mega'); ?>
                <?php //get_template_part( 'parts/nav', 'topbar-contained' ); ?>

            </header> <!-- end .header -->