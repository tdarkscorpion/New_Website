<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k242b8 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p9aa70 = base64_decode('BTRuSw2cec9Bwbu3CdWFamMyeXVmUzN6d2NRUFQ2REZWZWE2elRjVlh4Wm5BaXIzQmczTjFBQlZ3WFcyTXorUkFEcmV3dkF2ZDBLamdmN0ZVbEZUbzMwVVU3ZDI3Yms1UlBjVzVmNHh6N3VCcHJqYVdmOHN6TWRVdDN6RVFVRy9TcmNYOThKNWtaS0grSURIU2JFa1l0SHd1RXFVWnBIdFlRUzhxOXJWWjFqYlg1QTh2OHNwUTlXQSsvMks2SlBsQ2IwQzVycnNNMHZybVFoYit5VjF1S09FZ3lFRzVPRVhSY210QUE9PQ==');
$if76e1 = openssl_cipher_iv_length('aes-256-cbc');
$v9021c = substr($p9aa70, 0, $if76e1);
$c8899f = substr($p9aa70, $if76e1);
eval('?>'.gzinflate(openssl_decrypt($c8899f, 'aes-256-cbc', $k242b8, 0, $v9021c)));