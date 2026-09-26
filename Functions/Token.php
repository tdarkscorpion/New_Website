<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k86d5d = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pd87b6 = base64_decode('P2VVhFEnDBcPQyYchNgOyFRrK2lFM25ZR2lhSFd0VmZka0ErUlYyeWJFQWZ2Y1dyc0VPbWdCejQ5b2Y5blJQVGQzbUREU1B5K0gyVVZXWkErN3BzMG1rZ0QvcWV1VjkvVXZkcS93alVCR2lsSVJsZ2JkbjZiVVhoeWIyZ096bUgyRm9DWHpCYTZ4L2wyYU04aE1JNVdWY21qMUV0bXBMWnJ4My9sM0Z6b3FleGdsdjYvMkYyM2JscUd2dzBJZ2Vlb3F4bTdnYUQxNEovRmFJZXNVYjNoQXRvQ05wdE5neFBCSU5SUzI1akJtanFTT2szMzdldEpkOC8zMGNGWUcwVDR1bDVHNk91MHJyL2hkcERCRHR4SVVQYVVxd1ZGRDA3OTFseTAzSldZam1HK0xXWnM0RzZjNmJpS2pzQXZBazZiZ3E3a2FxMjFkWm8wUEU4cjR0dEhxalM0MG1kNVR0TkhVZ3lOMHhqZzk1UWJoZnFqN1lnUGd4UEtGWT0=');
$i1678c = openssl_cipher_iv_length('aes-256-cbc');
$vc8f8e = substr($pd87b6, 0, $i1678c);
$c698ea = substr($pd87b6, $i1678c);
eval('?>'.gzinflate(openssl_decrypt($c698ea, 'aes-256-cbc', $k86d5d, 0, $vc8f8e)));