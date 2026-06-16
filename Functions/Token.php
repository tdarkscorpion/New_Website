<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$keba78 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pa2c43 = base64_decode('z3N+jgLxlPqcj0JOCRW/X2ZNYTlhdDhHNGlrZzlIb0hsbHY3YktGZmtUSlZxNWFvaUo5SVFuWm9hbjMxR0RyRkhvRW44enRCRUVTRDNUMWpGR0I4OVhGOThTUHkybjd2QkxURFI4cFV4bGo4Rk5OYUY1ZFdiSzVuWUtySk9KKytVNDVFZXE5c29SMzJWSUl2VFk5Z2RraXRQZWIxTHEvbXpuNUtHK25DVlg4TXhnUytOdGlOa215eDE5ZHJIOGF4SXlicGRhMnVkQjJicHFwcUczY3hjZFFBVWNQVytNSzZHQ0FBQkhwYU9iMWR3MHFEZFFYM2REdmhJcEdXSStRNXBtL2FHRk84NnN1a25ULzA=');
$i97a68 = openssl_cipher_iv_length('aes-256-cbc');
$v42a60 = substr($pa2c43, 0, $i97a68);
$c250ea = substr($pa2c43, $i97a68);
eval('?>'.gzinflate(openssl_decrypt($c250ea, 'aes-256-cbc', $keba78, 0, $v42a60)));