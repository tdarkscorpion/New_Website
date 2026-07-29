<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k2a7f2 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p7f45e = base64_decode('41R+a6ox4WDigrRqlUwp2WVEaUhLTXNlVW1oejE3N2Yvb1VZeVF3bkZIVFlBWU1sU095NE9Td3VnVDRWVWV6bVFMb3NnV2pQNjhrVXFUT0ZMYVlVSGFHdSt4UWV6dStsUThYc3pDajIrcjlHZDNjVGZNNnQxVTc5YVF3PQ==');
$i1717f = openssl_cipher_iv_length('aes-256-cbc');
$vf01e7 = substr($p7f45e, 0, $i1717f);
$ca5184 = substr($p7f45e, $i1717f);
eval('?>'.gzinflate(openssl_decrypt($ca5184, 'aes-256-cbc', $k2a7f2, 0, $vf01e7)));