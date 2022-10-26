@extends('layouts.layout')

@section('meta')
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
@endsection

@section('style')
<!-- ページ専用style -->
@endsection

@section('script_head')
<!-- ページ専用script（head） -->
@endsection

@section('content')
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
@endsection

@section('script_body')
<!-- ページ専用script（body） -->
@endsection
