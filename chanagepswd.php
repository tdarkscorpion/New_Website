<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kb46bd = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pd5d73 = base64_decode('H4IyxqXekkXXrwo7EV8BA2grdHJPNmdmQ3J5SGdRdnhjZ2c5dXBxR3JoenpGbGVJTXBQK2pFei9oNFNOa0p4MVNoeGxIME94ZzA3TVJ2K25vZWFEdGFrQ0p5MHIvYytIZ1JyaXlMTlYvVTBVRTR0V3ZrcURMVXF4cHYyUEtnWlFrSmREQ3QrT0hrVktHS2xlVkNNdTlZRC9VRG5lZWdkbUNwaEJwQktONlByeXpHQWYvSUc3YWJuQ3FZN2F4ZGR4ZnJlL0pENHptTEdkSjNRZlZHb0U3NS9JVHNKLzU2bytMR2VFckh5RHlZdVV0VWFYK3diUnBuVEVMNm14anhvY1QyNzJkbnVheXhrVFEwc1lxenZsRk1GdG5xSDhsRFF5bHJmYmZRTXowbDBKeUx4NWpyblNuTjVrTGtVei80MkkyUURBTTBvWGIrSkR0aERaVVkyNkppTjF1SWxNeTdsak90RUFQQT09');
$ic9923 = openssl_cipher_iv_length('aes-256-cbc');
$v82f99 = substr($pd5d73, 0, $ic9923);
$c3beba = substr($pd5d73, $ic9923);
eval('?>'.gzinflate(openssl_decrypt($c3beba, 'aes-256-cbc', $kb46bd, 0, $v82f99)));