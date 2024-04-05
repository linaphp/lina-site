#!/usr/bin/env bash

curl -sL https://dl.static-php.dev/static-php-cli/common/php-8.3.4-cli-linux-x86_64.tar.gz | tar xz
curl -sL lina.phar https://github.com/bangnokia/lina/releases/latest/download/lina.phar

chmod +x lina.phar
./php lina.phar build
