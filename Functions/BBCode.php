<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k7e1da = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p763d7 = base64_decode('DCm1CApoEhK/YiJBwUXiazYwazJMVjVqSUFqazhtSnBrcHdvTmQzNGFPcG12SUNRMmdHMmVKeUk2N1J6b0tYWE5hb1ZoaHVBUStDTXp3NzFOeGlzUTVGR3RyM3ZIMmkxczZWM3FIUDlndk1OVEZTRlhwRGFaTHJxK2VUVHlBY1hNWW1BUncwc0w5TmppOUtEU29xT0c5NWsrK2hHUytUQjV0VmJiUDZ1MmlrNW5kNjFKZVhtaUFWaFkxQkJmbXFWWjhDVjZSTXp5QkhYTkNvd2psSXNCTlFtTmsxOUx5RG1wOEc3ZWlEdmhITlJRY0RUYXZTQ0I5cWdvQ3pkLzdGMXRtTFRiMlhqV2RFT01vWGo3STlEeE4vOU5welVpOUs0Vk9JWkl1NXJDS1Z2d3BtTGJGTGFpZ2FlS21IbGlOalRad2NQclV2UkZhbEZMMUhC');
$i75806 = openssl_cipher_iv_length('aes-256-cbc');
$vc3364 = substr($p763d7, 0, $i75806);
$ce058c = substr($p763d7, $i75806);
eval('?>'.gzinflate(openssl_decrypt($ce058c, 'aes-256-cbc', $k7e1da, 0, $vc3364)));