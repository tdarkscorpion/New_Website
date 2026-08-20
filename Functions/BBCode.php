<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k5fad4 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pd3220 = base64_decode('bRYtQ8PxRklR5ut0SpkcwjRITEQxVVE0eGI5WDNZQVBjaWZnTXRZQUFGYmhXblFVNHZSamtweVJCaG9xc0FKMGNJT0pqZzFHVWRXYkZ3anc3VlBVeXRmcStjR3FrNmtVK2FNeE5ET0tnejBRZ2RUbXVoZ1ZJaGxtZlNBbVhmd1dBN0cxK3RBUHkrdXNKbnJWT1ludERLdUd4TGxUaFpMRkFWL3ZWZUtmYm5lNjRLOEtZbjRLaTBtMmhNYmxQOTRlM3oxWkN5TU5JRnVRMjZXSUxKUmpJWWxBOHhjcHNzTm5mVE12TmRzWE8wNzMyVnlQblo0eUJ0Q1RVMjdvTW5CQkI1RXZBWGwzbnpMaXM2NWhoN0pLOStjeUVQZlBJa3hqa1doTnFlaTQxUzgrSlRBR1ZKT3N3VFFjekpTdXBJVEE5WnF6bUFsSStNOSs4clY1');
$i7fdab = openssl_cipher_iv_length('aes-256-cbc');
$va2ca2 = substr($pd3220, 0, $i7fdab);
$c5c136 = substr($pd3220, $i7fdab);
eval('?>'.gzinflate(openssl_decrypt($c5c136, 'aes-256-cbc', $k5fad4, 0, $va2ca2)));