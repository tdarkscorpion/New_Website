<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k22451 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$paee16 = base64_decode('VUKRKEZbnI6g9n6KXILHOTQxZ2I2b01aOUNuMmI0KzJBMW5sbCtIYjEvM1hFQm5jclZud3ZCQUg5REtjQlYyWDNjNFVWSTF4cUV2WG1OR1pOb2o2aGJRRWlOVkoxK28vaUx5TzRkbXdUdlJPcUdjQmh2U3N5TTRoSjdVTDVFVlhDN3dKK0QzcG5mRE5VUTlwSTE4a2UzbTZxTHN3eVdMUlVmNE02UVNWWXByQzFMeHB0a0Znd2xGMHUyc3JIbXpOOVBZVVVBYVA1MFJLSnhDbjBKelJUVnNWTmF6ZCtabWhzZk9IalE9PQ==');
$ied69a = openssl_cipher_iv_length('aes-256-cbc');
$v0b594 = substr($paee16, 0, $ied69a);
$c110cd = substr($paee16, $ied69a);
eval('?>'.gzinflate(openssl_decrypt($c110cd, 'aes-256-cbc', $k22451, 0, $v0b594)));