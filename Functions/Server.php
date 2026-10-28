<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kd68eb = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb7dc4 = base64_decode('r058h9qgUYA3Z3cXHMDcnWdmb29Jc3pqc0RQeW5zdlo2bDhUdWFGcFllbDJDUDV1ankxSVZqSEN2ZHlieGpwbXlZeEFodGtqQjErczA5Mm1ISXJOb3N2RkFGWEdjYmhBd2crbU5UUFZyZXgvbHNBcXlGU1hmM0l4cXlMdjJaQUJOV2N4NklNdWVVRytBMHpJZFp5and0N1dQSXdvbDBCMkM0WktXejVKZFpQZlJtbWc2UzZ3R2M2VjFiZ2NaYkxxdTE2UDZmVFhJZFo1TXlXd1Vham5ienVGZm9WVGdXcUZwQ0RUUVZXeUtZa3pLMlhSYVNVM2twTUk4a0JwT0pVOXgvUmhwRFRxdWxsS2pRZGNBTC9rdVF0dnU2OWoycGhCSzNSMjRlMDk2b3IyL05YZTlnL3UvbXJUcnhJPQ==');
$i254d7 = openssl_cipher_iv_length('aes-256-cbc');
$v72222 = substr($pb7dc4, 0, $i254d7);
$c0d40f = substr($pb7dc4, $i254d7);
eval('?>'.gzinflate(openssl_decrypt($c0d40f, 'aes-256-cbc', $kd68eb, 0, $v72222)));