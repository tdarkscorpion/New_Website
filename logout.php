<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k2b90e = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pdabf0 = base64_decode('NdtqS1GLm1ve9QMVFPjrgjZDLzlsTkRaVitJZXRTRjZiZkg2bUh5V3ZxdHd6NmdoT0lKc080RE9Jc1dJNkt4SjFKVXl5K3RDeGFVMnQvazB5enkyTHRINDMxNG5BVWZNZUt3Q0FJcytZZW1wVi9TWXF5ZlF2UisrWXlJPQ==');
$i80257 = openssl_cipher_iv_length('aes-256-cbc');
$v16cef = substr($pdabf0, 0, $i80257);
$c213f6 = substr($pdabf0, $i80257);
eval('?>'.gzinflate(openssl_decrypt($c213f6, 'aes-256-cbc', $k2b90e, 0, $v16cef)));