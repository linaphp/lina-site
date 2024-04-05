<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ implode(' | ', [$data->title ?? '', 'My awesome blog']) }}</title>
    <meta name="description" content="{{ substr(strip_tags($data->content), 0, 165) }}">
    <meta name="og:image" content="/images/og.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:creator" content="@bangnokia">

    <link rel="icon" href="/images/logo.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="//fonts.googleapis.com/css2?family=Roboto Mono:ital,wght@0,100..700;1,100..700&display=swap"
          rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/@unocss/runtime/attributify.global.js"></script>
    <script>
        window.__unocss = {
            rules: [],
            presets: [
                presetAttributify(),
            ],
        }
    </script>
    <script src="//cdn.jsdelivr.net/npm/@unocss/runtime/core.global.js"></script>
    <style>
        body {
            font-family: 'Roboto Mono', monospace;
            background-size: 40px 40px;
            background-image:
                    linear-gradient(to right, #eee 1px, transparent 1px),
                    linear-gradient(to bottom, #eee 1px, transparent 1px);
        }

        [un-cloak] {
            display: none;
        }
    </style>
</head>

<body bg-neutral-100>
<div id="app" un-cloak>
    <main class="container mx-auto">
        @yield('content')
    </main>


    <footer mt-16 border-t border-t-solid border-black py-4>
        <div container mx-auto>
            &copy; {{ date('Y') }} by <a href="https://daudau.cc">Nguyen Viet</a>. This site is built using Lina 😆!
        </div>
    </footer>
</div>
</body>
</html>
