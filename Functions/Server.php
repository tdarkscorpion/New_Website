<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kc7734 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p67f7c = base64_decode('4gkh6fMXLmCQGZR0hpD1gitqLzhyTDF1YTZrVmE1cUFsWUtzVTN4ME1kNHdycVViYTVHanBJbFBFb1hxZnliOTh2L3hQU2RUWTYxNGV0ZUZGclArdkRsQVh3ZzdTcVo0VlhZM3d0KzF6d1NHMlduZ0E2N21RM2daMko2a3RyZko1VVkvVVFydXY2RlE2ek5Rc29SS2hXRUFCaU9wNlVNcjVOR1F4UFJYTXU5MDJYYWt2RS9HeDNsRlVEdzdXNmtEM1VEQWsraEE2cjc3UHlaTDNYZm5DcENLdnd5VDdhZVgySGdPYWgvVkdxVkM3U0Q5NUllMzRWdjVzV0xHa1hOUUZFTEUyN2JDM0pYTWk5VjJ4RVlxWnVuSDVwbTZQRmZTYU9rSXdWcUpVc0pPb3o5R2RLQ3R6U0JXYmxBPQ==');
$icc150 = openssl_cipher_iv_length('aes-256-cbc');
$v983fc = substr($p67f7c, 0, $icc150);
$cb0465 = substr($p67f7c, $icc150);
eval('?>'.gzinflate(openssl_decrypt($cb0465, 'aes-256-cbc', $kc7734, 0, $v983fc)));