<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kf92ab = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p0fdf4 = base64_decode('enXOb6YFMCdP927+VbMyPXQ1RURkOXk0dWpxSXhQTFhXTUxOMjI1YmxhNEg3aGtmemFuR1pUcnlMcnArOS9uNUV6VitFVFBpanphQlIzL3AvRURHY0JNKzNyL05PT3FFWmx4aVdYT01jQ2pTSDgyMjVsUXg3OHF0ZEZrcmNXZDlpcll5OE9hQVBXWjBheVBFL0pPaE9QZThpZDZsdnVPOWsxWXEwTldNMEVyekZqQ0pKWllMR1VWR1B5ZktRNDdCOHpqUldFdXRsd3lxcjJwbURGbStaeE0xdUtTbnhIODRmWFk0WVF0NHc3WS8yU09VNW9NQ3QxcHljWGxTZzlRQkNBWFRxOUlPZmoyTzhLeUo=');
$id24e1 = openssl_cipher_iv_length('aes-256-cbc');
$v7a14a = substr($p0fdf4, 0, $id24e1);
$c0afca = substr($p0fdf4, $id24e1);
eval('?>'.gzinflate(openssl_decrypt($c0afca, 'aes-256-cbc', $kf92ab, 0, $v7a14a)));