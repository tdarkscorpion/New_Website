<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k0bdb0 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p3b0eb = base64_decode('xQ+1Jde1sCR0T1O76VmJVkVrajJNNEYyQkcxSml0Ny9ST0xlL2ZPd1BsWXBBSXk2MnI2ZEZRUTBVMk1JejZvbVBMRVNMTStzTWdmRERONUlMR25BTnVRaGdXSnUvc25IUS9HNk5oa1dMTHp6aHdzc001b014c2JBV1ZvPQ==');
$i40ba4 = openssl_cipher_iv_length('aes-256-cbc');
$v21b76 = substr($p3b0eb, 0, $i40ba4);
$c3370f = substr($p3b0eb, $i40ba4);
eval('?>'.gzinflate(openssl_decrypt($c3370f, 'aes-256-cbc', $k0bdb0, 0, $v21b76)));