<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kd495b = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p53eab = base64_decode('sMkUzyGFHXgyGXig8sI4Ukp0QXNoSks1Z3Q2ams3WEdiRXNqSHVmVFEwRHFyYkRhRW1SUXJKNmpBZnJuYUFzL3JWODVWQmhqaGhydEJGWWZxdFBodm5FbnZES09ENktwMGNCYTU5Zmt5SGxETGFZM2wyOHd0WHBaSXo0PQ==');
$icca39 = openssl_cipher_iv_length('aes-256-cbc');
$vdc344 = substr($p53eab, 0, $icca39);
$c83baa = substr($p53eab, $icca39);
eval('?>'.gzinflate(openssl_decrypt($c83baa, 'aes-256-cbc', $kd495b, 0, $vdc344)));