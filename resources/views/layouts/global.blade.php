<!doctype html>
<html class="no-js" lang="de" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex,nofollow">
    <title>{{ isset($layout_title) ? $layout_title.' - ' : '' }}{{ Voyager::setting('page_title', 'Seitentitel') }}</title>

    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    @yield('layout.styles')

    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/manifest.json">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">

    <script>
        window.addEventListener("load", function(){
            window.cookieconsent.initialise({
                "palette": {
                    "popup": {
                        "background": "#000"
                    },
                    "button": {
                        "background": "#f1d600"
                    }
                },
                "theme": "classic",
                "content": {
                    "message": "Um Ihren Besuch optimal gestalten und fortlaufend verbessern zu können, verwenden wir Cookies. Durch die weitere Nutzung dieser Webseite stimmen Sie der Verwendung von Cookies zu.",
                    "dismiss": "Verstanden.",
                    "link": "Mehr erfahren",
                    "href": "/datenschutzerklaerung"
                }
            })
        });
    </script>
</head>
<body class="{!! $bodyClass or '' !!} {!! isset($page_class) ? 'pages-'.$page_class : '' !!}" {{ isset($page_id) ? 'id=page-'.$page_id : '' }}>

<div id="app">
    @yield('layout.aboveNavigation')
    <div class="navigation">
        @yield('layout.navigation')
    </div>

    @yield('layout.aboveContent')
    <div class="content">
        @yield('layout.content')
    </div>
    @yield('layout.belowContent')

    <div class="footer">
        @yield('layout.footer')
    </div>
</div>

@yield('layout.scripts')

<script src="{{ mix('/js/app.js') }}"></script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAd_uF7PlJ1AeKZaQRFkHuic8AuSfFfQEE&callback=initMaps"></script>

</body>
</html>