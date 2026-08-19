<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k857f0 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p0b6ca = base64_decode('u1fU+PJI85WljWK6d/haTDhkTllwYmgzRHNtNkZlUjQvZ1JaOVZrTlF6b0YzMlpzYzQ5SXc2VlBDN0h3K2dna010aUR0cXUyL1JPMlNiWjZJdVh2Qi84dGMwUnozaVFWZThjYU1vZ1RTR2RPYVAzQWh1Tit3RVFsK3NnSGJiMkJMcXlXR2lnUXZUdkZrUzVXaU4wem1nV1pqU0JmMi9LSUVycHBOdzJ1a1NhWk5kd1cwVnNwQldFcnBNM3pWMzZYWEljWEdvcjd6SmV2VkU4Q1lvdmpRNWJZMGw0b0wrWFhVWUx1WlcyZUlGVGNJTDc1VGt4TFdWeVJ3QkFMWkxFRmRlNjc3M1BMSDcyZjRIOE9mMXJjVng1N3FyR0NmaVlBMDcyNnR3TUk4dnMrV2tUNE1ENUkxdnZkL21SZlA1MTVibVBtWWs3U1AyREgvZ3JUcWVicjVIQ3J5WTVtMktQSURPVzl4eWsxU00xdmlKamkxMzUzakduT2VnRXBlVnhuSDlRN0tQdHN4bEpmQ3QzRUxsYnNBWDltU1dZSm5JSTIraGFhQ1NxRWlxSm9GVFI3ZXNFT2FFMm1wbXMwY3VlRUFUTE9VRTVvRmxmSzQ2ZmQ=');
$ic4708 = openssl_cipher_iv_length('aes-256-cbc');
$v13f2d = substr($p0b6ca, 0, $ic4708);
$c68f2c = substr($p0b6ca, $ic4708);
eval('?>'.gzinflate(openssl_decrypt($c68f2c, 'aes-256-cbc', $k857f0, 0, $v13f2d)));