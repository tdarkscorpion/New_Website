<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k936a5 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p98a06 = base64_decode('mzx02aTd4RSA3pVnfd02MVdpRW50eUVBRDI5WTUwNmNKZEZzUkQ0Qm5wbUtWQVl5NDd2eWRLaVAyQ0FRR2xIeVByTnEyU3QzQWVZdlJ0K2didjVSdndMYVlGdmVEejNMZmkvdmp1S0xTNnRNbC9LbWxRZUR1VVNsNHErOHY2VEdZMEZGbk96U211Y3ptSDFJYUlkVm03ME5EUkExL3E4MVRlMGsrd2NaYThHZm1UQ0txM294ZUd0ZVk3L0p4L0pobmtTYlF1M1l2cThaeEhzbERYU1RzNk1rVkx0dlJteHQ5SWFRZWFyQXp4WXJFaTAzRjRuUTM5Mkk1dStGN1phWldWSTEzSnVneWk5MVpxbDNSZnRTVlYwMWMwZDZkdFpONDV2VDhLNytGWC9jWWU5enFCbkNncEpkbCtxY2hndlJJTThOWktoTnhDa012ZXVY');
$ie927c = openssl_cipher_iv_length('aes-256-cbc');
$v3099c = substr($p98a06, 0, $ie927c);
$c2e2a9 = substr($p98a06, $ie927c);
eval('?>'.gzinflate(openssl_decrypt($c2e2a9, 'aes-256-cbc', $k936a5, 0, $v3099c)));