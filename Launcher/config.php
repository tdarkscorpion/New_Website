<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k1d6f2 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p8d818 = base64_decode('3FmDZu4GBDoyfpiwEpukQS93MWVaRUk1cysyL0RkNm9JVG5EWTVTdlRkbFlxTTZkTlR5Mm1sQjh6S2ZXa2pOYzFIbEpyZDJmSGlDYm11QkltTDNMUlBkSlBZMytJOWxQMWhURS9sMWFnVkpOSmlacndXTS9jenFwRWMxZ1c1ZFREaFdraHQranhmd08yZEtQeDBKclFHTmxrR3g3MFh5YWNma0tqMGFDYS9aK0dNTXJoTGdzVHd2UTBSR3ZIbmlBalNsZWcvb0Z0MmQyaHhtZGErbG5GSHI4aW1pN09DYytkcC83UVFwUEYwd3IrY2RYY0xkb1RWaEFmckVxOVNwVktNRU1xdFFVcUtmVlMrb2cwZkdDSFpnSE9HQ1dSWHlSUmZRY2FjQkhmZkdZeWxvaXJhTE9yejZKY3dnPQ==');
$ic9997 = openssl_cipher_iv_length('aes-256-cbc');
$v9cc36 = substr($p8d818, 0, $ic9997);
$c72657 = substr($p8d818, $ic9997);
eval('?>'.gzinflate(openssl_decrypt($c72657, 'aes-256-cbc', $k1d6f2, 0, $v9cc36)));