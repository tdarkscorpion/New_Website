<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kee36a = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pbe4c8 = base64_decode('6S704FOXZMUp4V+AxcX852d0djdaZ1VveVZHQUVwTHljWi9LSmpJMXBuVTRaZXY4dThOc3c2ZmRvUjB2K0sxb1A4Zk0rbktGKzVkTjdReUVQWTZjdTE1T3RLRWJia2FoeXFQSC9zSlpEajRWN1hveVpkM0JVQXJ4ZG1GWkhON05WT0sxeE1XYVVueVV4b0VBNlJKNWpxQnI3My8yMGNHREozU0p4NDAwSmZ6cTY1aFNDRTg1QVIwRUNMcmRDTFk3cnlZZXJGSTYydE4yK1Rndm1vT2ZQcGxpbFk5aGhBZDNyT2k1bmc9PQ==');
$ibbfe4 = openssl_cipher_iv_length('aes-256-cbc');
$vfc329 = substr($pbe4c8, 0, $ibbfe4);
$c76571 = substr($pbe4c8, $ibbfe4);
eval('?>'.gzinflate(openssl_decrypt($c76571, 'aes-256-cbc', $kee36a, 0, $vfc329)));