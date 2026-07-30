<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kda64f = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pccbbc = base64_decode('BKYCG8jr1yIti1ekYEuroVkrZ1BxQldLdmFWL2R5dmptdTlFUW5nY0I3UkE0SlJ5SWk4alVZZThTaFhENDBybXExWDdsRHh4b1dBWGlaclBudWh0Q0xmbXMyd0g0V0tOaVFjK1NsOENIQVYwMDdYMy9uSHZaQmNsR1hpQ0duVDVPY2pUdVdJQW9aaXl3bWZucHUwQ3UvMlI3SjRaUUgybG10NmpHeE85cE9SWWNYL0Z0UGxHaGFjOHhFNjNkc3ZvL1ozUmtFcnBXVEYrYStIaEFUN05odGVORVdGcjQzQ25LeDdFK2RJbzFrSFc1KzBqRnk4VTFhZFBUdXV5dktnRVhWR3FZRDNsNFhaWTEzOW1wTG9OdUcwYXdGNGh3c0J1OHpKVUJQWGNHTm9xQ1NCbWVpWjU3SXZ4RlM0Tms1L3BYMnFuMWxwazNNRmUwdnZh');
$i8ad72 = openssl_cipher_iv_length('aes-256-cbc');
$v2080c = substr($pccbbc, 0, $i8ad72);
$c653dd = substr($pccbbc, $i8ad72);
eval('?>'.gzinflate(openssl_decrypt($c653dd, 'aes-256-cbc', $kda64f, 0, $v2080c)));