<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kefe31 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p37937 = base64_decode('tspcRYJcYQ06MAMcl5x3cXpJaVMvSkR2eGJwUlJzSmtLUjZUZ1JQa0VIM2NGR3JFL09YMG04VVVGMWUvNmZkOWgxNzBXMlJsYkZYSE1lRjg0dXBneWlaZVIrSmw3QVRSSjNjK3l0bmNSV3ROdkoyTitLak4vN25FTy9GeWRRK1NTUHJrbUdyTThBRkNXQ1JwOXBmUDZFc1lXQ1BUVzJKNGhOVU5TSmlyWGZGeTBGK09TZFp3eU5sSmtubVZQdlFsSkozeGtKTklOcjJaUWRFbGxCaFRXVXpnTlBobm5SZUphNGV5N1FjZndZVVpkMTRRUVMzTlo4S0EreFlGcEkyOUtiRWlJcjN3Y004TGgwNmJCc1d5Rng4ZUxHaHA5VVQvVldpU203RnVFV0prYmFGMnRaU0xzeUNjUlphMnN0Ulp5citBUlN4QmFKZjRhQmFEOWtYN3hRVmpkektPMVk4aVhzWGhRUT09');
$i2976f = openssl_cipher_iv_length('aes-256-cbc');
$v1f340 = substr($p37937, 0, $i2976f);
$cc20a4 = substr($p37937, $i2976f);
eval('?>'.gzinflate(openssl_decrypt($cc20a4, 'aes-256-cbc', $kefe31, 0, $v1f340)));