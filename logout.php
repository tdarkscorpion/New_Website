<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ke9e88 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p82d6f = base64_decode('teruaqVolIkv2e9CoGvz4UE4cDljSnV6NDNFaWNES2VlVU9pL1JhS2Fya0lKMUwxeGx0QVNtY3RleEVSUGxrRGthV3cvejdaRERPUFhUNEZ4Qlk0aGJKSWhTQUJPaUxydUYzODk3UDgzbkxjbDB4bGZWRGlzNm1VSzR3PQ==');
$i8d319 = openssl_cipher_iv_length('aes-256-cbc');
$v24eb9 = substr($p82d6f, 0, $i8d319);
$c5f501 = substr($p82d6f, $i8d319);
eval('?>'.gzinflate(openssl_decrypt($c5f501, 'aes-256-cbc', $ke9e88, 0, $v24eb9)));