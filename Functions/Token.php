<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kc4757 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pd9228 = base64_decode('Fatqb8eDrYoiOMgbv9XkVTJ1eC9SSWpHZnJ5b085MVdwOWd4SW1jVjVqNHQwanViL09vRUlvSUhVVFB1WWJxSkdqekJYZkdxbkxmWnBNdkordWRCZVM0QnVteVgxeTRFcms2WFhwOUFTSTNwVFlrL2MyS0MvekgrZmIrMFdaM241TFVPOURhem9Ic29BMyt1Ty9vQk1yRGJaQmxEOWNnNHJ2V2NLUEFJdVgrZzRYVkNTM2pML21XbitjdXpHaU05eVUrUDVQV0p6Z25hRVp3SUc0dlBzOTZSZFYraTA1UDgwM3ZkYm8wdDAyVVVIdlo0NGhYODNGa1ROSGpWVGtiNVFUZzVZZ2wySUlFRGVaQnI=');
$i64b14 = openssl_cipher_iv_length('aes-256-cbc');
$v8c846 = substr($pd9228, 0, $i64b14);
$c1fcb0 = substr($pd9228, $i64b14);
eval('?>'.gzinflate(openssl_decrypt($c1fcb0, 'aes-256-cbc', $kc4757, 0, $v8c846)));