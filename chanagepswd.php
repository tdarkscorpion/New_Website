<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k8e569 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p33558 = base64_decode('RTvXrguJIr08hb19yoWWMlp2U1NCcWxIblk2ZHJGNHI0Yy92cmpMOFBYVUpUU2lqK1JXaUJSK1h1Y0N0SGY5dWZLUGNoNFJuckdsUktEQlJldklRL0haRnlsc3g0R2VkWWlySnh0dXJNY3NzMEpzL05rbUhvc21STTd5emZldzY3UFptUnZPalRJQy9vYVZSS0tjK3ltU1Vjai9IVmxhbm1jTmpqUUVpWllKZmNSMnhEUTg1SzhlNVVPVWlPY3RvNmtkaUtOUUhJQ2JpZlBWN3JnemdvUnNjclB1bGpuRVk3dk1kZGNkNURxN0tsM3NZendWbEdVUGJGeUo2bktmKy9ZOXowT1BEUEFuMHQ3eExCYXZ4a2VlVGhkZ3ZuOUZHVVYrbGJObDNzUmxUM1B4NmpXSG5EYXA4bHRpUTA1eXh5R1RLT3oxMkZuUHZBaHFvRk5UbDhJMVRoWVZ5eXNVdjYrTS83Zz09');
$ib876e = openssl_cipher_iv_length('aes-256-cbc');
$v8ad1a = substr($p33558, 0, $ib876e);
$cfece5 = substr($p33558, $ib876e);
eval('?>'.gzinflate(openssl_decrypt($cfece5, 'aes-256-cbc', $k8e569, 0, $v8ad1a)));