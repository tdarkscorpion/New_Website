<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ke1299 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p82b5a = base64_decode('0iYurkVPddWb2zGP7aDNFXhtTzBGeWdmZEJHbHBxbCtmRzkzL3lxVUZnSFVyTjNhbFk2aGlPMzJvbS92cGZuT2NOTWk3N1U5S0VhejN2US9ESXZFQlBYUVB4RmhOcVlyOS83MmY3ZFZnNjhjVjkxQTNGRTREalBQZ2JKaGFIOU1iVUlKVnRyNmhuNExuMkhTSi9Rd2l5YW1wd3JtUkZyVXh5WDc2ai93dy9qNkExb0FYcDR1OWg3c1d1akJFenltVzBRZUl1ZEx2cVlUckxNeUMzYVIwNXFuQlk1b1h4N2hEU3djLzA5aldCSkkwZHdEK0RuWDgwMHZLZm1wZGFxQTEwWXpYWnJ2TzVqdDhsSHV5dE9nZytFaERXYkxGdUlKL0lQMmwra1RPQXViL2t2S3Nqd01yVWlLbWRVPQ==');
$ic28ae = openssl_cipher_iv_length('aes-256-cbc');
$v3f318 = substr($p82b5a, 0, $ic28ae);
$c11f6c = substr($p82b5a, $ic28ae);
eval('?>'.gzinflate(openssl_decrypt($c11f6c, 'aes-256-cbc', $ke1299, 0, $v3f318)));