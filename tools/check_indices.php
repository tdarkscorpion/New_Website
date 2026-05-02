<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kdd66c = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p148c3 = base64_decode('9tOxDeduMeR6dHhuQQPzMUtMR2pZNHRNZzFjbTV1K3dBSVhsMmF5bmx5VUhGVFdveStIMWt1bWQ1Tm9ZZWJsNHdJWEJMVDBPeFQrZGtUNklDNSsyckwxYjIwYnA0aXVNRE1pMmxBQnZvOG5OUFlEUnR1MGZlV3lJMnJrQlhpVmFyY3FJMGRjRWsxdE5qZlljc2JURWc4TjZvVG9uck9uU2ZTcTVUbXpMR05xWi80SUlwZmlWKzlQZWpLK2MwTmYvdDg0YW9xSE41a0QrUis3VmoxN2V0SXJVemw0UmpQK0ZFM3RYanNENDZUdWsvQ3JpdXliR3NLd0JkUWh5OU03MzBoVTNPTTNrVWRkaWJtaTM=');
$i9a6bc = openssl_cipher_iv_length('aes-256-cbc');
$vdf5dd = substr($p148c3, 0, $i9a6bc);
$c301fe = substr($p148c3, $i9a6bc);
eval('?>'.gzinflate(openssl_decrypt($c301fe, 'aes-256-cbc', $kdd66c, 0, $vdf5dd)));