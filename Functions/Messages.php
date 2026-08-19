<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k6199b = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pa3004 = base64_decode('N58xxj9jbN38G98pyqrnBE5PbjJrVFlyUm1XL0RsMDZTMFgwNlVJWDFHcjlPUm9FS08zZzN5UWkwZTViRUdvQUhnQit0NmlQUG43UzA4LzF3M1FsRW1qRGdRd3V4RHhoWkxTeTdEdHRkazd1cTNDRVpoVUxNOFovcWdkV1RoUk91NTNNVWJzb01jM3ZOUnArQ3Fick9oRGNZb1NDei92cUI2TmFBOXRLeUFIMEYvSkZJalp4ME5Edk1UdklXQ2tESHc4dHk2bmlRWmppcnJVRTZJV2R6WDMvdnNBcEpIMjdocEljTXhpTWNiWmx5UEtEeGxMOFVBUFJuZWJOWGFvMm9uc0ZyWVFPRXRGQUtDczgrS0JMY0JGUkluOGpXSjBpMFNoS2xSemtWTWJFV3ZuTVh6VDZaeTgrb3FnPQ==');
$i60cfc = openssl_cipher_iv_length('aes-256-cbc');
$v385f0 = substr($pa3004, 0, $i60cfc);
$c89322 = substr($pa3004, $i60cfc);
eval('?>'.gzinflate(openssl_decrypt($c89322, 'aes-256-cbc', $k6199b, 0, $v385f0)));