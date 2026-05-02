<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k92485 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p6a245 = base64_decode('OG2oT7hbDxlusJFCk9ki1m10RWxWdDI5eVpERzYvLzhmQWJSWmFNSmlqbDVaakRkZysvbStDai9NZG5HWFhmVGlVR0dZQXVsOVJsWnpqQ3lYZlZaTWlKb1h6NDFva3h0RVJlY2VhQUNyM2QvRGdlb3lxSGs0dlVEU0t4NzRzbEtYZDh5TS81aUdoOXR3UlhXUFpycXRZSE9oT2xWK1lKRXA4cDhIKy9MdVFWYTRNaTFCd3FGczk4TE9DOENnWGpkU3d5YUdFdkJiTm5rNFl4VGg0RDVzSzJoQTdxMVR5RUVnWmt4cnc9PQ==');
$ib97bb = openssl_cipher_iv_length('aes-256-cbc');
$vd8d43 = substr($p6a245, 0, $ib97bb);
$cc7272 = substr($p6a245, $ib97bb);
eval('?>'.gzinflate(openssl_decrypt($cc7272, 'aes-256-cbc', $k92485, 0, $vd8d43)));