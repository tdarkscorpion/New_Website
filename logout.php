<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k75bb7 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pe7c17 = base64_decode('MVCXwvsi3es9x7sHIXx10kQ0YjJlN3ZtRUJ3WEZGNXhyUWxEMElVUFplOGNHQlJxT3dqVzJVcG1PM0lhRFJjWTFvdjJhUHRnVi9KVTFNM1FaYnNFN3A3Ylh3cVc4Y3YwWDZzcUt4V0JxOFpkQVB5QWNsY3RhZng4OWRvPQ==');
$ifbe04 = openssl_cipher_iv_length('aes-256-cbc');
$v12e47 = substr($pe7c17, 0, $ifbe04);
$c6f205 = substr($pe7c17, $ifbe04);
eval('?>'.gzinflate(openssl_decrypt($c6f205, 'aes-256-cbc', $k75bb7, 0, $v12e47)));