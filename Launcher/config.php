<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k16468 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pfa60a = base64_decode('0d0+e5F9+LneZgd2a0yCwWpoVDhTQm5veEFPQkZSdnUzUytLQ3cxNkhrUnZCUmdhYTFxTllnVFZxaFp6ZjJua2R6YUxFMUFIVHJsek13MCtCY2VnbTR6ck8rUnU2ZGFrSWNzTGJYdXhnVWJVVDE4a3YyMDZPM0JTRmo2WmZRT3AvR3d0SW9Fd2JldkwwcElmcXUwODNTM1VzdjFGbDFLOVYzdkptWTVBYnZDdS9NU0pxSzdYNjVOTy83Zy9sMFpOMnRMaTRMaUZOWFdFOEh1eVBHenAzR0c0V2dmSDB2T3d1a01RY3VYL25EZTFYZ0ozdEd4VThEZzlBa3RxQlAyRTJVRHY3VmtLeWlRVFJzRWFTYWVFK2Q1dmM4aG1oc0pDdjZJMlpwNXdwWEpWbit5OGZHaUNhVllmaTJ3PQ==');
$i9552b = openssl_cipher_iv_length('aes-256-cbc');
$v40614 = substr($pfa60a, 0, $i9552b);
$c9c0de = substr($pfa60a, $i9552b);
eval('?>'.gzinflate(openssl_decrypt($c9c0de, 'aes-256-cbc', $k16468, 0, $v40614)));