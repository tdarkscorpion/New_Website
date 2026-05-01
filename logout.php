<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k7d47d = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p67e8a = base64_decode('Z6/+SXjI1PsbUaSXKzypS0ZLZ3E5Z2gvYWZUN2w0L0RHSjlaclVvVU8xRmtmL0hnOUVET3FKd1hkNHdCOVdLd3EvejRsaW9mZEVvWTBCUlFjdEZ0c3R0TVVFOUljL05ZYU9jZWdTYlRhWkV5TE5uNmdqWGExTm9NMFRjPQ==');
$i5cd49 = openssl_cipher_iv_length('aes-256-cbc');
$v101c1 = substr($p67e8a, 0, $i5cd49);
$c95ada = substr($p67e8a, $i5cd49);
eval('?>'.gzinflate(openssl_decrypt($c95ada, 'aes-256-cbc', $k7d47d, 0, $v101c1)));