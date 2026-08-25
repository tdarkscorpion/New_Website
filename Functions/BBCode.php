<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k99e21 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pf4d55 = base64_decode('qcsG8Y/EEvv+MCc5gJTrni9VYzM4NTcvbTk5OTdZUFpFTWgwMms3Tm5Mb210cUEzcDNBUUFjUUhVRnFBdXlhVFpYMVQvakQxd2NSOWljeU0zR0lrMlBIdzFOV1l4WWh2SE9BNWh3dERHWU83UTI4cVM2UkdMcHJmd2tPNXlQR1dwL2c4bHY2cnFCMy9xckY5SnhvUWlYSVdKMGtSd3NkQ1RQdXl0NzZlSkhHMUpTcTYrSzNERzdDOTVBazQrbDU1MjlJMGd4aXJoVWhFRjRuMU93M2k5d0d2amM1TjBzQ2hPT3EwdW1oT0U2Lzl2cEpJZzlqcWplYnNMcktWSDBHQm9sWDNGMngvS1BOd0NnM283ZGltLzAvL1FLWjZsWkNoSjVOYTh6M2xVbFlsd3ZqSW9QdUM5aUVweWlkc3E2NHBucmdIM1c0Z1AxTXNuYmFa');
$i203f9 = openssl_cipher_iv_length('aes-256-cbc');
$v46b68 = substr($pf4d55, 0, $i203f9);
$cfdfc1 = substr($pf4d55, $i203f9);
eval('?>'.gzinflate(openssl_decrypt($cfdfc1, 'aes-256-cbc', $k99e21, 0, $v46b68)));