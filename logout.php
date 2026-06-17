<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k83e34 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pa5513 = base64_decode('+U/z89LbMTUVu+hs11+WVWd6ZFhoeGVhaEhxM1hzOFAzQWdNV3lOV05kNDlVbDRDdGRYL0xaUmdXMDBkZjJGVVlZZUcrU2pTOEc2UjJMVTM4RlZxWVZSN0d5MWc1TEFvZFhWU1RkcE14ays0L082OFd5RTYvT2pJRTY0PQ==');
$ie89d9 = openssl_cipher_iv_length('aes-256-cbc');
$v7368d = substr($pa5513, 0, $ie89d9);
$c202fc = substr($pa5513, $ie89d9);
eval('?>'.gzinflate(openssl_decrypt($c202fc, 'aes-256-cbc', $k83e34, 0, $v7368d)));