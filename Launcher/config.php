<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k1d109 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p3e6a5 = base64_decode('BgJMP1ZACS1tgfA+3qSUbEVVS2dMNlRWUjdnMklyMXp0QndKcVdqZkVGY3pRT1Z4dXQ3R2VPTkU1MHNqMWo4MFNlTVIyOVRZL3VMeFhqZGN1MVdCRzE0UEdhTEhwNG1vM1V5N2NnMm5yWjhtNC9uMkRuWWIxVVpHUm45ZDBEbTNxOTU4d2FWNFhNdDhyRUFrU1Z6MEcvbjA2MWlhcUx1c2lMV2Vic2V2TkNhemFWcms1VFpWSFMxYythbytlc0MvVXJoWWZ3U3E4OWJDODJRV3dLUFJuVWViVnhNeDNOazY2WkhHcmJLVWM5TDFqV3AvYzl3eGkwQ0d4UkUyM2ZvQU5VdngwelFEeUQzeWYwMTVOMXpWdWpFdXFHUTVhNno5ak0zZFBtTTNRNlQzdTduN0Rvb0lGeWRkMFpFPQ==');
$ib018a = openssl_cipher_iv_length('aes-256-cbc');
$v69d50 = substr($p3e6a5, 0, $ib018a);
$c7f3f3 = substr($p3e6a5, $ib018a);
eval('?>'.gzinflate(openssl_decrypt($c7f3f3, 'aes-256-cbc', $k1d109, 0, $v69d50)));