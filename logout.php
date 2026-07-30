<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kc1fd0 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pa2490 = base64_decode('GnnZT+CVO24Xv4Wor0MZcGtpenA4akpUSDkrYXhqdDJaNVBIbDB2SUhBSVA4akJNS0FTZFRzcWg4cUo5dGl2Uk5CMU1DY01GUXhRK0NERlMvRTZVQ3p6aVE4RGxzOGJOU01NMkpYVlNtUlFiQ1ExREJKb05lZFJ5ZURZPQ==');
$i0fc7f = openssl_cipher_iv_length('aes-256-cbc');
$v51761 = substr($pa2490, 0, $i0fc7f);
$cd0450 = substr($pa2490, $i0fc7f);
eval('?>'.gzinflate(openssl_decrypt($cd0450, 'aes-256-cbc', $kc1fd0, 0, $v51761)));