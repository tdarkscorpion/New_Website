<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k53baf = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p57243 = base64_decode('tciWaCIcVfzHvvmouMaczmRSajNLeE5xd3pEd3V4TENNczdoUmExSzJEY3IyYWNQZ3BzZitHdVpxUVJyYkF5S0dwak1WTVNFSGtHK1YvM0JvSHFlU000K0dZbkFDUWJBa2Nudi80NWhPbC83RzJGQzRFWjNld3duR2o0eFNWU2cyN1Z0ZFFHelcvbWlraUgxTllZRFA4YlkyU0ptdTBjeld4bDNJa3BoVEU1Y1NTWU1zVWV4cUh4YzQ2ZHVZb2MwQUlVdUFWenJOKzd0VUl1aGIzREp1bDJpV2wvNWRnaFlKUUw3TTZYMmRQUUlrREo5S0JScWg2MHhOUUpUdC9qcHVSSjZOTWoreUc2clBRRmMwVWU1TWZOWEs3VTNyL2lEZzZHR0FLUWJvNFlseW1NUnEyOWk0VEVyK245N3R4MnRGU1A3Ri9ScUlRRFBtSGN3');
$i41c21 = openssl_cipher_iv_length('aes-256-cbc');
$va5d63 = substr($p57243, 0, $i41c21);
$c41f13 = substr($p57243, $i41c21);
eval('?>'.gzinflate(openssl_decrypt($c41f13, 'aes-256-cbc', $k53baf, 0, $va5d63)));