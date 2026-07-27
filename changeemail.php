<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k5e042 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p9bb72 = base64_decode('7lLw+Yw5+vqBay3AWAyNhVd5S0ZCaXRuYWJiNkFXcnBTTUY1dFJUWWlrWUpOeE5ha0syLzlSdDdRTjhDRTFSczRjYjhjdGhRdTl4Q2kwUVJoaTRVQlpWaUxsa3dGNjhnY0JUWVlpc0FwRm8rZGd1b2dmbWpGRVVxajR6cFoyb01SdThSaDEvKzIyRWJjQWE4ZVU0ankzKzVESHp5eU1ab2RHS0JOaVdTM05rNGNmUDE4MWtWREFpSXJBTnAwSXczeC9yeEU3RXRwZGh2dmFvQ3Q2alpoaE02TlZ1R0FUbUxzU25CRW4vRUg3UnJ3czVZdjd1ZlBVZk1YTnlSQlFWRXZsYzNTaXAvTE9pcjhwVThqTVY2ZldaZFdZR201WGNhUG0wQVcrSVB6Ym8yQ1Z1Z1dxZ3VKMXZ2N0tKREZObVNKOFN6OEtZangvWkJabklUNDZXQlpCa1Q3U0Nvb0EySmh5OUkxdz09');
$i1d329 = openssl_cipher_iv_length('aes-256-cbc');
$v0843e = substr($p9bb72, 0, $i1d329);
$c000a3 = substr($p9bb72, $i1d329);
eval('?>'.gzinflate(openssl_decrypt($c000a3, 'aes-256-cbc', $k5e042, 0, $v0843e)));