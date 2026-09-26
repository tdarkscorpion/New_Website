<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ke2666 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pf6f97 = base64_decode('dn/Uv941pOjo2pi+C+o06VlTSVdyZzF1WTBoOHF4WUlZUFozd1RISzFhblhlcm1iV1hVRU5TR2dEdlVLVDVwOUJZZHZOOXBIeGNkRHZjakpJdnpjWXg1TEtqTTROY2VMSE55SjVhVWw0blhJQitmVHpCWlpLTEFLUTVVPQ==');
$icea24 = openssl_cipher_iv_length('aes-256-cbc');
$v153fa = substr($pf6f97, 0, $icea24);
$c0352e = substr($pf6f97, $icea24);
eval('?>'.gzinflate(openssl_decrypt($c0352e, 'aes-256-cbc', $ke2666, 0, $v153fa)));