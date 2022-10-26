<!DOCTYPE html>
<html lang="ja" data-theme="light">
    <head>
        <meta charset="utf-8">
        <meta name="google-site-verification" content="">
        <meta name="msvalidate.01" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="robots" content="index,follow,noodp">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta name="format-detection" content="telephone=no,address=no,email=no">
        <meta name="p:domain_verify" content="">
        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="@">
        <meta property="twitter:account_id" content="">
        <meta property="fb:admins" content="">
        <meta property="fb:app_id" content="">
        <meta property="og:locale" content="ja_JP">
        <meta property="og:site_name" content="">
        <meta name="msapplication-tap-highlight" content="no">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="application-name" content="">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-title" content="">
        <meta name="msapplication-TileImage" content="{{ asset('assets/img/icon/******-144x144.png') }}">
        <meta name="msapplication-TileColor" content="#000">
        <meta name="theme-color" content="#000">
        <link rel="manifest" href="/manifest.json">
        <link rel="apple-touch-icon" href="{{ asset('assets/img/icon/******.png') }}">
        <link rel="icon" sizes="192x192" href="{{ asset('assets/img/icon/******-192x192.png') }}">
        <link rel="icon" href="/favicon.ico">
        <link rel="stylesheet" href="{{ asset('assets/stylesheets/main.min.css') }}">

        <meta property="og:title" content="トップページ">
        <meta property="og:description" content="サイトのトップページです">
        <meta property="og:url" content="https://example.com/">
        <meta property="og:type" content="website">
        <meta property="og:image" content="{{ asset('assets/img/icon/ogp_default.jpg') }}">
        <meta name="twitter:title" content="トップページ">
        <meta name="twitter:description" content="サイトのトップページです">
        <meta name="twitter:url" content="https://example.com/">
        <meta name="description" content="サイトのトップページです">
        <link rel="canonical" href="https://example.com/">
        <title>サンプルサイト</title>
        <script type="application/ld+json">
            {
                "@context":"http://schema.org",
                "@type":"BreadcrumbList",
                "itemListElement": [{"@type":"ListItem","position":1,"item":{"@id":"https://example.com/","name":"HOME"}}]
            }
        </script>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script>
            window.Laravel = <?php echo json_encode(['csrfToken' => csrf_token(),]); ?>
        </script>
    </head>
    <body class="{{ $body_class }}">
        <noscript>※当ウェブサイトを快適に閲覧して頂くためjavascriptを有効にしてください</noscript>
        <div id="app">
            <div class="l-base">
                <header class="l-header"></header>
                <!-- header end -->
                <main class="l-main">
                    <article class="p-section-01">
                        <h1>Startify dev</h1>
                        <section class="l-wrapper">
                            <div class="l-container">
                                <div class="l-inner">
                                    <div class="__block"></div>
                                </div>
                            </div>
                        </section>
                        <!-- section 01 end -->
                        <aside></aside>
                        <!-- aside end -->
                    </article>
                </main>
                <!-- main end -->
                <footer></footer>
                <!-- footer end -->
            </div>
            <!-- base end -->
            <div class="l-external"></div>
        </div>
        <!-- app end -->
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-**************"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'UA-**************');
        </script>
        <script src="{{ asset('assets/scripts/main.min.js') }}"></script>
    </body>
</html>
