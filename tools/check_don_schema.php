<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ke9181 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p0208f = base64_decode('6TmKuHkbKUl03v6Fim9R0nZkSWM5ZVRWWi9hQmNXdkpVODFXN0FqaXJpRWswNDB5bDN6cEdtODhka0QwZWt6cmVPdmRvaHRyWDRRTHM1K3FsaWE0Z0dVQUlHOG5tVlJibm1OdURuOURuMGhNcVQrcWkzdTZOcXNsOFp0azlQWWpuQ2lGYXowQWdrL05xbkE1NEZ6L2JYcjM2b25ranVUZEVWNGd5L1U4WDZVS0hzUmRpREJXeXVkV2dvdklydm9CbmRjWWt3OHAwZUhaZXc4ZXFYQ1NFWnJQVlpYUmVUZHZtQXEzVVNOYXp4WDFqODk5Q3lSUmJQbDVQTWM9');
$i16ef6 = openssl_cipher_iv_length('aes-256-cbc');
$v8b423 = substr($p0208f, 0, $i16ef6);
$c87242 = substr($p0208f, $i16ef6);
eval('?>'.gzinflate(openssl_decrypt($c87242, 'aes-256-cbc', $ke9181, 0, $v8b423)));