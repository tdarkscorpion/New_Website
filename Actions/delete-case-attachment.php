<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k65c61 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pf691c = base64_decode('dl7iTxIJYezl76gzyTpuH2xmdFlNVzhqR3pndnVSWThiVGJDZlF3Z3Y1aGhpdXoxL2orakptSHVtUTF3eDlCZExSL040V2x4NWsxR0hFdEl2aEtKUFB3RFJvRlEyUm9vS0hQYU5sMnZ0VTlzYzdLR1ZGQkxERXRaOUJlaTRoaENyZnlTOXZDL2hMcTVaUFJDRHgyY3RJb2cvVXJWUzRFcTRoZFFqUlc3MGllRkRCcFBYanV3OXRDNEJpQm1PNFNrYVNSQ1V6N2JnQnlnV09Hb1ZBNWZXemlnQmdkL0FoVlJFUmhvaXg5bFdqZWlNVGd1VGlLQmdSVC9iaHNCb0xKK3BFL1J2TFBBMWdUZjFneGVvcjFRU0R2L3psZG9jci8rc0VZR2xWd0ZmT3dlUnJhR1dGc3RpaEl5N2dDTFg2b2dGWllvam1sZStLR1JQRk5y');
$ia26ad = openssl_cipher_iv_length('aes-256-cbc');
$v9a3de = substr($pf691c, 0, $ia26ad);
$ce0ed4 = substr($pf691c, $ia26ad);
eval('?>'.gzinflate(openssl_decrypt($ce0ed4, 'aes-256-cbc', $k65c61, 0, $v9a3de)));