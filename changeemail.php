<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k8ddfb = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p0f31e = base64_decode('TwyGXe40OUql63GF/chcnjVTNnVUSHlHeXA4MmVjbmJQQ0R2TU9oYTYrbFVaQk1oQzU0WXhrRUtiWFpLaDgzVFlVaGZrSGgxbU9FM2Y1R1g0akR6RTZFZkVxSzdwN2RvVHFhYXpwR29qTW9DRFRJdkpvSGU3RC8rSituRGd1RC9SaXdUMTFhZzJwcEdjK01wb1lUK0twWkJ0NVFJWGVqTEs1RXd4amVMWkJLWEVzaXpQNTVWeVRuYit5TVAraTVzVXVJU0xGejY4ZFRLNXh3K1lhMXUvRmdvMDBaZ2lQcUhSbk1NU1o1T0ZiSE13dWFBdjUwMk9YanFVNEpoNlRyY2h5dWxCbTBiaHRhQWJEclhpd0ViK3JYYStuMi9Db29rUkxHTi92am1wb1VWc29lVkxGbkZ3N1RTcHpiOC8wV3FLaDRoUVVqWVc5R3pob2NYd0I0a0RUakNGcytESDl0OWdma1l6QT09');
$idd4ac = openssl_cipher_iv_length('aes-256-cbc');
$va7372 = substr($p0f31e, 0, $idd4ac);
$cf1620 = substr($p0f31e, $idd4ac);
eval('?>'.gzinflate(openssl_decrypt($cf1620, 'aes-256-cbc', $k8ddfb, 0, $va7372)));