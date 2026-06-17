<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k8e4bf = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pe780c = base64_decode('PRX0IEMDR+hhYODo3VLL5TZ0VzNadUNOT1Zhd0JlY0xiQmc2UDd1Z2wzU1I4MDZNQ3lzM0I3TzlyYUJmSUFjcUY1NkhzaVRQV1htV3dqWXV0WURYaFBFUTJ3TDRTeWtjaTJFeXYveFpHRTZrSmo2ZVFGcU5QVVNRUjU1MG8zMW1WVU9IcVNIejBXSTVGWWpmcGtEWDMwRzFTcVF4TXdmR2xxZFdPa1ptYUdOWGNZRkJ5aDkzUmRic3RKdFBOWk1yVlRsWEFveG85S3FzZnJBOEFCeTR1RExXLzVPK2RMUmg5Y3FsWHc9PQ==');
$i9991b = openssl_cipher_iv_length('aes-256-cbc');
$veeb80 = substr($pe780c, 0, $i9991b);
$cc69c1 = substr($pe780c, $i9991b);
eval('?>'.gzinflate(openssl_decrypt($cc69c1, 'aes-256-cbc', $k8e4bf, 0, $veeb80)));