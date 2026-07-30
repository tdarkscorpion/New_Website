<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k4e5d0 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p50a90 = base64_decode('Iu03FpGoskHSw3WGcxRL8m5WZzVSL3dOcmpXNk9QWGZyWEloeHdPYnY1aU10RzF5YkNac2pWZC91OFFvYWJXTXFuaktFSVg0dTBCTHFJTzNvZTNDMFVNdG9takpNMUN3ZTY0ZlFUa3ZDVGFRaVgyclNpY0U0d21rdzVjPQ==');
$ie82a2 = openssl_cipher_iv_length('aes-256-cbc');
$v0b8b4 = substr($p50a90, 0, $ie82a2);
$c5c526 = substr($p50a90, $ie82a2);
eval('?>'.gzinflate(openssl_decrypt($c5c526, 'aes-256-cbc', $k4e5d0, 0, $v0b8b4)));