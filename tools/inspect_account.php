<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k8344e = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p370c2 = base64_decode('T5W5FqK1sel5pjrmephm/Uxkc0ZxMlpaL2dhSHRHd2hJVlBMZ3ZRUUlNSDNJcFZDUzgxODdMalJ0WXFSeERCbUZlMHM1d3JIQzhVNEJCY1Yra25kR2pPUWdkSW00MDFuWFBTUDZSZHhXMFFVR0ZPdHZ6SHFEL2MvZ05lVU50TzJnS3VvZ1RobVNLb2FzTHRTNWRtV3JPZW5mTHpxTUZnNUJTNFFJejczc1dyWE9zTWdJelVMUlhHN2ozek53bkJLdEhXeWxxWElObnJUbHBteQ==');
$i8875f = openssl_cipher_iv_length('aes-256-cbc');
$vbf920 = substr($p370c2, 0, $i8875f);
$cfe363 = substr($p370c2, $i8875f);
eval('?>'.gzinflate(openssl_decrypt($cfe363, 'aes-256-cbc', $k8344e, 0, $vbf920)));