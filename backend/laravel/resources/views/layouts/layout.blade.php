<!DOCTYPE html>
<html lang="ja" data-theme="light">
    <head>
        @include('layouts.head')
        @yield('meta')
        @yield('style')
        @yield('script_head')
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
                @include('layouts.header')
                @yield('content')
                @include('layouts.footer')
            </div>
            <!-- base end -->
            @include('layouts.external')
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
        @yield('script_body')
    </body>
</html>
