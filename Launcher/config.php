<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$keaf79 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb38b4 = base64_decode('3HlxVxB8iomRWioVgMYcuDM3ajdTSVdybGVFbHZSSGdFbkpCeWRFekFMQ2Z0THovZktkTTlyMkJLSlRobjJLNzYzb2F2RUFUK0t4TUNnSk1ocmN3eFBpenI1c3ZSaERheVd6WGwwS095Y1crT0lxVThwS0E2VEdFUXAvaXAwRnVQUUMxT29McE5RdzV1Y0pLOW1WZktBaURDNENBTUQ3UmMzYU1jbHFUeXhHZ3NVbVBKT2VoQ2xDVjlpd3ZTTmNxMnh3bDkxdkRvbGFJRndIU2NQdHk4UWY1Z2d4T0d2T0EzcEFVdjB0amxTUHQ1ZGZ6RFp3SzRmNUFNck9jUzFLMnhnODZWNE1tS0tVMnVtSVFxNmdNNXhRT3VZL09TbjBTUHVjbWd0YnZVZ1dHTU53ZC85WEMrbXBRZ1NBPQ==');
$i4848c = openssl_cipher_iv_length('aes-256-cbc');
$v9b26e = substr($pb38b4, 0, $i4848c);
$c49fa3 = substr($pb38b4, $i4848c);
eval('?>'.gzinflate(openssl_decrypt($c49fa3, 'aes-256-cbc', $keaf79, 0, $v9b26e)));