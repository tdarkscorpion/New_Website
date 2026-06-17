<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k47dd7 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p6ecbf = base64_decode('Fj3eQopE7Ge4pG2wJwNzVVNMQzRwNGUzWmdoM1FHYmhHeGxEN0psQVZBa1RVa09lOTQ5Rk1qMXlLbUx5WVloWG9wblV2TWx6c2VncjRCUUh5Rm5UWU5HdjRqR3FYQ1ZCdWd2YlRqTkdHYkViMWZvWXM2cktqQWc4Y3ZVNFRUTjFrc21kRURMRFVyb0lkZVJKWWZXNHZ4OEdlUDhTV3ZzeTg3UW1oQnZ6N0FZa1BaVkdzZUtNTGtuU3N5NStHZ2xYMnJ2MkpOMnpkWkVXWURLZlp2dDMweUw1WFdkUEJCblZHYlBYVnc9PQ==');
$iac4bd = openssl_cipher_iv_length('aes-256-cbc');
$v49735 = substr($p6ecbf, 0, $iac4bd);
$c5f0b5 = substr($p6ecbf, $iac4bd);
eval('?>'.gzinflate(openssl_decrypt($c5f0b5, 'aes-256-cbc', $k47dd7, 0, $v49735)));