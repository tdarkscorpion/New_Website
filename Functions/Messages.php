<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k2f15e = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pbf5ea = base64_decode('1aWQWTDG0bLDdPe0l9DeoW9FRS9aL0pTVkdQdXVsa3I2cllZbWs1LzlwWStnZUdWaTFXQks5TWh1VDBZbzlDUTJ6THM0NTFEWHNWUW5mK2MwWEZkYWNwN043NFRmR1hKYldGVjdBTTZJNzJqd2tKQ2pyYmNSNmtlYWZnWlVXVjI1ODFqY0kzeUx4ZDJzaWFuNS9qeUZoUVdyUW95a0lqSk9NMVNOZHNQUDlyeGZzM3IyNllMWHQ1QWpWUzI1Mk5BelRwSVFiR3NhQnpuTjg1UkRTNTh4VGs4R0YzZUtyUE1ma3gwZzJIL1hjM25LUGUyMlVJZlliaGtsQ1AvdmtGZTAzKzRPMTlGZFc4aGVXaGdsWEFvSGVvOEp1S092dmVrbjVLYUY0ZFN5bG9YWllaSUNYbjkyaGJJTG8wPQ==');
$ie688e = openssl_cipher_iv_length('aes-256-cbc');
$v6cda3 = substr($pbf5ea, 0, $ie688e);
$c54e1d = substr($pbf5ea, $ie688e);
eval('?>'.gzinflate(openssl_decrypt($c54e1d, 'aes-256-cbc', $k2f15e, 0, $v6cda3)));