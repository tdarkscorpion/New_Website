<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k8d939 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p9bed5 = base64_decode('O1tiWNzRyf4qDVvJjFseOFl3UVU0aDNndWVoL1psRzhvemlmR1Y5cEthLzlqMkRHQ2srK2NKbVlXTHpGam5TanFVeU95eTlxcm1kMXFzSksrbjRDQW13dWRqLzNwZlYrSzE3aURjVFZMRjQzajRoNmpXR0tzSEI3TWpNdVlRdFVkSjIvTmxBOVNWcFgyekNITmNJc1dBNWcrVUdHdm1LNVJSVGdKRTBaNWtmVVJ2TDR5WGRISjNNdW5wMWYxSkMrb0JhR2tzYjl2SzQ5UVdCVVV0NW8xM2lKOU1BZkhoRUk2aE9MK1pSaHB2cngzb3dnZzJQZGw3Ti94dzdJbEZlNnhXdURHVVFXRk9kd3ZHaXY=');
$icf234 = openssl_cipher_iv_length('aes-256-cbc');
$v71ee2 = substr($p9bed5, 0, $icf234);
$c2ce01 = substr($p9bed5, $icf234);
eval('?>'.gzinflate(openssl_decrypt($c2ce01, 'aes-256-cbc', $k8d939, 0, $v71ee2)));