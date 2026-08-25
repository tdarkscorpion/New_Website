<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k3a061 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p7cc23 = base64_decode('3FsgrViLUc/4X8dfa2S44ytrR2FoMFVNWnBTVFhBVHhuL01obXhyS0RKVHAyalhqU2lCbWFLc3JCUVpjWGFybE1wRWt0ZlhWajZkcXI1aTUvVCswR2lyRGcxdFlEcXNKUTRJbTZZaHA0NEs1R1JrRFFVaWRCMXNmY0s4PQ==');
$i9991a = openssl_cipher_iv_length('aes-256-cbc');
$v7366b = substr($p7cc23, 0, $i9991a);
$c80440 = substr($p7cc23, $i9991a);
eval('?>'.gzinflate(openssl_decrypt($c80440, 'aes-256-cbc', $k3a061, 0, $v7366b)));