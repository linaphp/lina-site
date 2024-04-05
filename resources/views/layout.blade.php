<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ implode(' | ', [$data->title ?? '', 'My awesome blog']) }}</title>
    <meta name="description" content="{{ substr(strip_tags($data->content), 0, 165) }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="//fonts.googleapis.com/css2?family=Roboto Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/@unocss/runtime/attributify.global.js"></script>
    <script>
        window.__unocss = {
            rules: [
            ],
            presets: [
                presetAttributify(),
            ],
        }
    </script>
    <script src="//cdn.jsdelivr.net/npm/@unocss/runtime/core.global.js"></script>
    <style>
        body {
            font-family: 'Roboto Mono', monospace;
        }
        [un-cloak] {
            display: none;
        }
    </style>
</head>
<body>
<div id="app" un-cloak>
    <main class="container mx-auto">
        @yield('content')
    </main>
</div>
</body>
</html>
