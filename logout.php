<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$keb74b = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p6e9cf = base64_decode('dDl+R+ocELrjV+HS6xx1bDd1V0hiV1VUOTVUdlVVaVVqRDVWVG1LWWQyK2M1UE9hbjlLUCtMaFRyUEV5blQ0TWl0bVBYOTR1dHFGOGpsNkRtVEliTllSeUxSeWtNZTFXY3BKWmpnSFJ1MHJheVI2eVNaSnhOeXRubXJJPQ==');
$ia72cb = openssl_cipher_iv_length('aes-256-cbc');
$vec661 = substr($p6e9cf, 0, $ia72cb);
$cca74c = substr($p6e9cf, $ia72cb);
eval('?>'.gzinflate(openssl_decrypt($cca74c, 'aes-256-cbc', $keb74b, 0, $vec661)));