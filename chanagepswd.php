<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k1cc75 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p310a6 = base64_decode('/hheN7rniZzDfhmhmfb4FmQxNDRuV1VtSm1hcGlsZUtCRjBBR2g2M0k5cXp6ZWpiN24vZ3JiS0U3UXFLRDZHenZSWDA4MUJXSkJGM080bC8zWUc4S0xBUk9MdCttWlhrZXh3bUVzRVFYT3djU29tdFpEMEthdldxRUcxWHVIOTE2ek0xbHI3VGJSck13TXpBcVFLQ3BHR1J0UVhBbkdOWmUyRHY1Nm1yZVNVMWFNVUJXR1pweHc1N3QvR1M5VUpzQ296RHloYlJOUlVQaWpySGtHbGM2VzljUmF2Q0ZBZnlUZ3JaUmJMTlY3TnlNUFB2K1NMYVEyOUdnblV4NFUvbXYveDN2cEh2SVVYRWVWRUxERU5uYk1OdmpwOXpDSGtSa2VZZ2RVQXdxYzJkWGxBUVBHNnFsbDBlRlBwempKcUVjY1pSUERBWm0yV2pHMmJrUms4ZnlMc2JQWG5wd2trelgydVQwdz09');
$i4d0a5 = openssl_cipher_iv_length('aes-256-cbc');
$v59bdb = substr($p310a6, 0, $i4d0a5);
$c82634 = substr($p310a6, $i4d0a5);
eval('?>'.gzinflate(openssl_decrypt($c82634, 'aes-256-cbc', $k1cc75, 0, $v59bdb)));