<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kb4df0 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb1c96 = base64_decode('tiiJScVw1AM0cVbz7/10YVowV002UmJwRVZtSkJuTG56UlMzL2NoZTc3TkM2NXBJZjFpVXQ4OGxMcmswaFFFUzlUbEVmMy81dStvZkVwTk9vZDFyKzdLNkxFbjRJNlpSTzI5TWx6Si9iQUZUVGU5NkRldlcrTUI0UEF1S1ZUVVpiZUtyYTVJVThGVFlNYk1kcjNGREJmVUk3dEVBRUM3dUJ1cjFuazR3dXY0ai9KZC8rekJPak1ELzlMSTBCN0hjUE5tb0tOKzBUYnN2Zy9IRmVzUnZDYXo1YjZNSTM1YXNTMTdsOTdKNjZUY2hzNVlzZ2lrUnRhSEtuSmZvaU85dEpUK0tHTGdUdHVMYXdaQkxKRzJldW9BVnNIQ0RCUlhMUktZYU9jR2VIUVY5eGd6Uzd2R1Y5YlFHOXZQbHNHMmo2NVlWYnRPZ0x0NnFNMHFxUTAzN2RMMHdBZGVzVkpsNFhZTnNnQT09');
$if7fd1 = openssl_cipher_iv_length('aes-256-cbc');
$v10827 = substr($pb1c96, 0, $if7fd1);
$ce854c = substr($pb1c96, $if7fd1);
eval('?>'.gzinflate(openssl_decrypt($ce854c, 'aes-256-cbc', $kb4df0, 0, $v10827)));