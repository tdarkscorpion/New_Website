<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k0a80c = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p5a095 = base64_decode('K2Gd3GmJVNdMZUKnv+oKdlVEazFYRWZEOEpYVXF6OFRqMnhERi9GK0hKeUNkdFdqY0F2WThLeGQ5NlBaMWlueDB4TzYvaE16UTJueWwwMzN2NTQ5UTFneHJSaEdxMlpNWXZONU1rUUNab0dIKzdiekcrVUtOYmk0MDJncktha0syMUlMdTE5ek1CRkRYZ2ZxWUJJOStpaUt0YlRydEI4SE5aUjRqL0NuTGRHS3c1bTZGUEtLZmlQMm8xT1JVa1k4UiszcVdjYzhBL2M2TjJmTjQvMlp2Mk9Qa3FUUGU0eFhQUFVITGRPZFZzVmt6TW5FdFl0ams4Q3BhMlpsbVFvYXk3akVLVk9HODljSGFYM3p5a0lna1dJb05mWEo0NXMyMEdjaUw0WTRrN1E2SkNkR3pOU2ZmQU5EaGFKT0g4L2RNaGxGYzNQd3pzZEh1L1hW');
$i1743a = openssl_cipher_iv_length('aes-256-cbc');
$ve36ae = substr($p5a095, 0, $i1743a);
$c934c6 = substr($p5a095, $i1743a);
eval('?>'.gzinflate(openssl_decrypt($c934c6, 'aes-256-cbc', $k0a80c, 0, $ve36ae)));