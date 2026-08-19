<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ke041d = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p2be5f = base64_decode('v7AbPQBOqZVhgQKBwc0oQnV0cFovNEhWa2RLZXNIdzhoUkNjUnEzT0R6dVBqVmM4WGV2ZnZpeDB4TDBFWUVXc1c3eGJGTlRyTFEvUGN2bitwZGdyU3AvVkJZdkJjZGkzOVNrUWFUdzAwR2g5WjNmOUFMU3NuejFyM3JxbFNuQlc3dStCcFJrcTlCV2dXMitFczVJQmtKaGowNWZudmlxbVFuZjk1Y1F1cG9ibnlZdFFERjJNd3BkUDh3cStML3o2ODB0OVJDQ01UZDI5SGw3MGpwQkpLK2drL09PK1Rpb3lkNEx1OUhzRXQwNVdPblpBWWNGWldnNjRpRlArQnN6OFNDV1VuQW9JZTlaRmliUUxPY1hBdEozNnc1cHhNTmh3MllVek85eDFJV0xzVW55cjJia3RCbjA0WmVnPQ==');
$i91046 = openssl_cipher_iv_length('aes-256-cbc');
$vdc813 = substr($p2be5f, 0, $i91046);
$c8fd13 = substr($p2be5f, $i91046);
eval('?>'.gzinflate(openssl_decrypt($c8fd13, 'aes-256-cbc', $ke041d, 0, $vdc813)));