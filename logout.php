<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k85ca4 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p8518a = base64_decode('6he2RnV2gjZzlO8LaHx5KnA3Y2twN1YrRjlseldzMGhLT3JWVDh3K2E3eE8ybDU1UWhOM1hVMmJkU1I1L3BTUE9MNmorb3NzVG4ydzJhTCt1WmRZNVlQVXFZK1AySUNXQk40TVdMRlZCeUFQK1Q3TjVtampBRlZlaG5vPQ==');
$ia8011 = openssl_cipher_iv_length('aes-256-cbc');
$v2ae95 = substr($p8518a, 0, $ia8011);
$c0ef6a = substr($p8518a, $ia8011);
eval('?>'.gzinflate(openssl_decrypt($c0ef6a, 'aes-256-cbc', $k85ca4, 0, $v2ae95)));