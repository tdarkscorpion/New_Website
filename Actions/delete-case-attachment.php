<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k5c507 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p0b9cf = base64_decode('MlBzfCWFv7+8esJn+y7E4WR1SE5HdnBmN1lPSGorZXpmQUhHOUlGMGp3WGxJRUhOdmd6K0hNT01TUzNpTzIxU0JscUpXQzJ4dVh0NWsvcHI5WUUxQVZvc3FCcWFOUTZWNmZwQS92NUh3a21Tc1VzNEdPSGhZbCtFc2hUSWVQU2w3bk8xczdjcnJrL3RuTDMxTHhKMjBNR3hGQ3U4dHVjZ09TV0IzNFhucGM1UFlRenNrK1drTHpBVGxMOFRncHZqK0ZUejdpWk1sWWFtSUJTTUkrdkpaSmpEajEvMlpHeUppemZtR1FPbkJ0ZTQxaUlJSUN2SWZpUnRPb25ISjY4cVQ1aTI1VldaeEpHbys2aDFrbXdPMmJNcm92c0UxM1BZUTlNSlc1UGJhRzNjWlRPR3JKTm1KNTNKOU1yTFRCTWFNcDhKQ1QxSDh2VDA2N0ZC');
$i04a0e = openssl_cipher_iv_length('aes-256-cbc');
$vfbbc0 = substr($p0b9cf, 0, $i04a0e);
$c420ad = substr($p0b9cf, $i04a0e);
eval('?>'.gzinflate(openssl_decrypt($c420ad, 'aes-256-cbc', $k5c507, 0, $vfbbc0)));