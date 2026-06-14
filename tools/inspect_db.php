<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ke9057 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p3c8b3 = base64_decode('XJGs5tH74N/17ciKTbSkw3UzY3dTN2dkZWVxenhhUjVDYjZZSXFBZXN0Qko4dnVGNnYyZXFtMkNqMkpjekhQeGZ4OTNZYzNuNDg5a3hXSG9FRVRTdHU3ZEc4aEt6bEFLaWYrcFZ6ZE9pdHBud2VWR05DZm5mUU41ck5adDkwdng5R3ZKZ0NTcXhmaXlwakRrd2tib0VrUCtZL213UGQ2a0YrY1NwU3FsTmp4c3dEb1NoM2EwcnVmdTMwWTBkamEyalFoS0Q4RmZHQm41QVEyMDdhMk4vSDR5U0RJWk15MjN5dXRGdUE9PQ==');
$if410c = openssl_cipher_iv_length('aes-256-cbc');
$v3bedb = substr($p3c8b3, 0, $if410c);
$cf82a4 = substr($p3c8b3, $if410c);
eval('?>'.gzinflate(openssl_decrypt($cf82a4, 'aes-256-cbc', $ke9057, 0, $v3bedb)));