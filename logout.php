<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k7565b = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pd7e29 = base64_decode('vzxanX/l6T1T5SC07ci2P3I1bWZ4VDBSQ0p4ZnRnbGxiM1dBSFVjSHQ1V3F5L28vSWcrUDlXdEtadTJuVnpVMElmN1YybURBZDFvS0hIWlBZM21vZ3NJZkpUZHg4QWNXWWY4Y1FqcGxQWG5rYlZpRHZlUFIxMTBSSnYwPQ==');
$ia5fcb = openssl_cipher_iv_length('aes-256-cbc');
$vad1c7 = substr($pd7e29, 0, $ia5fcb);
$c67a1e = substr($pd7e29, $ia5fcb);
eval('?>'.gzinflate(openssl_decrypt($c67a1e, 'aes-256-cbc', $k7565b, 0, $vad1c7)));