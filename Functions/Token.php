<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k2481f = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pec6b6 = base64_decode('RFIiqMXplBda3xV1i/BqGEsvdmhZT3FSS0Q2UmYyb0ViK3YrYkdQL2dFaW5PMEtCUElWRk0wckRkUThrWVBQelhjOXdmY3VtSG00QVpEL2hIc1M3QW0wQko0WjNmZDVpL2FIa0w3amJwOXM2Z25hY0YxcXo2UlczcktXY0EvUDM3V1RnRW5KZ3hGb2NPTCs1V1U0ZWRwNGRHcEdMT3hvNWJtUXN5bWxTaWdvL1ozUVlsbEttZXJNS2JKU2NzdFEvYVI2NmhyNDBoOEdDTkFJZEVlYm11WmdJNnZvUFVKYkl1UWJCcmJ2OHltOHE4U3hKU3F2TEJaS0xuNFJVZnZSUkFQVHV5eDQ4cSt6Y3d6Vlc=');
$i92f74 = openssl_cipher_iv_length('aes-256-cbc');
$v6c682 = substr($pec6b6, 0, $i92f74);
$c98a67 = substr($pec6b6, $i92f74);
eval('?>'.gzinflate(openssl_decrypt($c98a67, 'aes-256-cbc', $k2481f, 0, $v6c682)));