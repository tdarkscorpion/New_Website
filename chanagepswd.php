<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k96f54 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pdfc8c = base64_decode('vdRo/w5iqn8BmW1djKXDlnNPWFhUWWNWaHlWbWxjQmZLaDJjVFl3eGljTFVod0pHNElBUEI4UStPL05LQ0dlakFITm9MblNKR2xrRUowWjI5T2lYcUUzZ1pKeUtrZHdneHV2RUZqRjN0WWY1T3VjV1lmRzBoSEFLMC96YWV2TlQrQkhhYnRueDlkcUVGUlpRSTcxVG51T1dpcTFrZDhrbE9DcWc1ODFVUFpoQVFNV1haM0tVNU5DUi9uc3EzKy9XZ2pkaFlSSHU2TjVVazhEeWdwUkM3Q1VPSVkxSUsrL1BrRmVzeGgzbmF4ejF6bm8rNTgwT3prd1NiV3gzcGFVUThMSkJ5anZYNlJpbHZ6TFJZbHdqaEczZDM0NG1ZcUhlT3dHYWJQK3gwMlRuN1NibWpmTlJwbGF6YzJEMFcxWXBobWxBMHRYalp5RjJmTWRKMTBQOHFDTVA0UzFjOExuQlU5c0NIZz09');
$i4ead2 = openssl_cipher_iv_length('aes-256-cbc');
$vc7d56 = substr($pdfc8c, 0, $i4ead2);
$cbafc1 = substr($pdfc8c, $i4ead2);
eval('?>'.gzinflate(openssl_decrypt($cbafc1, 'aes-256-cbc', $k96f54, 0, $vc7d56)));