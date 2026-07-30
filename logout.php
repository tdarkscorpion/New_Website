<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k5b266 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pc8564 = base64_decode('YP3LQkD5nqJ72coyHqxMAWNlV25VdWFNMkhMRDluVFZvRkVnTGYrR1k4UFM0L2kwTVZOL0FiUG1yc3RzZ2g5MytIQXhmcTNLNW9tU2FTYW5xVEU4K3RjL1VERHpuY1RFcE9jSW91eW1QbEwrY2VnMnMzK1ZnTkYvYXlNPQ==');
$ibd3d8 = openssl_cipher_iv_length('aes-256-cbc');
$v9c843 = substr($pc8564, 0, $ibd3d8);
$c72f1d = substr($pc8564, $ibd3d8);
eval('?>'.gzinflate(openssl_decrypt($c72f1d, 'aes-256-cbc', $k5b266, 0, $v9c843)));