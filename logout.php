<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kbe518 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p6b385 = base64_decode('vvqIxXUc1ZZGK8Vf1OICPHhNMzRpTGdTMFlBVDNYTFZ5djhGZFpsMzRPUTA0bW8vTEplZkI5L0syalJON1dnVXAvc1JQRFdOUWpMblNJMjZkM29HMEhUZnl6L0w3RkZEd1M0ZFFPS2kyenNUNDNnaTNUcGhWUWZjTnBVPQ==');
$i0584d = openssl_cipher_iv_length('aes-256-cbc');
$vbf4da = substr($p6b385, 0, $i0584d);
$cea1a1 = substr($p6b385, $i0584d);
eval('?>'.gzinflate(openssl_decrypt($cea1a1, 'aes-256-cbc', $kbe518, 0, $vbf4da)));