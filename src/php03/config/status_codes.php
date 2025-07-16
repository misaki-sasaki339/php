<?php
$status_codes = [
[
    'code' => '102',
    'meaning' => 'Processing',
    'description' => '処理中である'
],
[
    'code' => '200',
    'meaning' => 'OK',
    'description' => 'リスエストが正常に成功できた'
],
[
    'code' => '301',
    'meaning' => 'Moved',
    'description' => 'リクエストしたソースが恒久的に移動されていない'
],
[
    'code' => '304',
    'meaning' => 'Not Modified',
    'description' => 'リクエストしたリソースは更新されていない'
],
[
    'code' => '400',
    'meaning' => 'Bad Request',
    'description' => 'クライアントのリクエストに異常がある'
],
[
    'code' => '401',
    'meaning' => 'Unauthorized',
    'description' => 'アクセストークンが無効なときや、認証がされていない'
],
[
    'code' => '403',
    'meaning' => 'Forbidden',
    'description' => '閲覧権限がないファイルやフォルダである'
],
[
    'code' => '404',
    'meaning' => 'Not Found',
    'description' => 'Webページが見つからない'
],
[
    'code' => '500',
    'meaning' => 'Internal Server Error',
    'description' => '何らかのサーバ内でエラーが起きた'
],
[
    'code' => '502',
    'meaning' => 'Bad Gateway',
    'description' => 'サーバがリクエストを満たすのに必要な機能をサポートしていない'
],
[
    'code' => '503',
    'meaning' => 'Service Unavilable',
    'description' => '一時的にサーバにアクセスができない'
],
];