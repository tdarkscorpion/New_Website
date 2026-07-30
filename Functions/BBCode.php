<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ka8db2 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p8b73d = base64_decode('MG6Wefp8hcSTTyurrRAf32JFaUl6S3hjMXZ3bk5ic0RxRjR3eGRsNVhQNTEvUkwxejVVSVc2TEUzMUZDRTRvc1YxY0hGbFdkUjhkeWtvbnBKNExFbW5HTlZiTXNvcWFBMXUwWDdBOXhNcXFRclB6SU9BQUFpUVFLQW1NbkdFY0k0T2Q1YUFWd05VZGFFUFRrNkI2Uk1FUHF3MWxxd0dERGY1bzFRV05DbkRDZHZEOXBqT0E0WEl4QUk4QS9hNXMvQndPYzB3OXVHM0Q3Q0tFMjM1VGJhOWdqR1I5c21aOUpRTDVwWHJkMVR3Skx4aTQ3c3FrcHpIdkY1TTdYeWxyWjRxTGhLQm9VSkozQm5ndFVubHBXTHlRcHFyaDNQTjh6TDRoT21yNlByVVlEeVFaaFBxdGVrL1gveTBZdllJM09pbDlHR3FXaWROR2RoSkVM');
$i8048b = openssl_cipher_iv_length('aes-256-cbc');
$vda156 = substr($p8b73d, 0, $i8048b);
$c278f6 = substr($p8b73d, $i8048b);
eval('?>'.gzinflate(openssl_decrypt($c278f6, 'aes-256-cbc', $ka8db2, 0, $vda156)));