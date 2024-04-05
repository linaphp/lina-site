---
title: Lina PHP - A simple and blazing fast static blog generator
description: Lina is a simple and lightweight blog platform built on top of Laravel Blade. Lina is designed to be easy to use and minimalistic.
layout: home
---

## Blazing fast build
It's just miliseconds! Then all your pages are generated to html files
![fast-build](/images/fast-build.png)

## Built-in web server
You just need to run <code text-red-500 bg-white px-2 rounded>lina serve</code> and your site is ready to be preview!
![server-command](/images/serve.png)

```php
use Tempest\Highlight\Highlighter;
use Tempest\Highlight\Themes\LightTerminalTheme;

$highlighter = new Highlighter(new LightTerminalTheme());

echo $highlighter->parse($code, 'php');
```


