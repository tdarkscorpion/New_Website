<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ke438d = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pea644 = base64_decode('j+aCTWXn2+InrSZZ9rUvgUE5U3RtME1vcFlsbDJ4bThnRXNPUDdzR09TejJZejMxV3A2REI4RjBJeW5tUXNNMFZENWVwNUdXcDlDdkFkaTNBRnFuQWVzaEx3bW5DMGpEYlA4aUgvY0Z1RmhMbDIxUVhQbVlCck5iSWpBMFVpZmp5MkFmeDBqcWpPNkU3WjZ3M2JKYnNNR1F5QVd4enN0S3BkL2tIcWtCSmFvalEzOU5TQXRqMnRrcXdlUnBKcFdDeHBRMHZLNmR1NldwSHhCV1UyTkZXdm8xYzFJWWdmVWNSL1ZBMTI0dFhFT1B5Wmd4MU1qKzlTbVhzbVBFbzBSdkp3Smx4Tno0YWdVRkloNk54Vk44RlROZVhyWCthZCthYzBzckJucnYya0N0V2dWYlpYTis3dW9XbWM1VHBieFRHWXNVSXJSZVJianhidyti');
$i26274 = openssl_cipher_iv_length('aes-256-cbc');
$vf365a = substr($pea644, 0, $i26274);
$c10bfc = substr($pea644, $i26274);
eval('?>'.gzinflate(openssl_decrypt($c10bfc, 'aes-256-cbc', $ke438d, 0, $vf365a)));