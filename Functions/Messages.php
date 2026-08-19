<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k8178a = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pc2634 = base64_decode('QpXx+Wv++Lyj9B/kof2E3UY0dVBad3NsTlFzdnRpdDRHK2NucDMwcVdYWUNjbThaT21iTGlnclhpYnVBMnJucnJScGNwekh3QWNKcTRxaFh4NEk2S3ExOTIzdytJZlBNWFNDaVdETzVONmFoSlA4a2dqM2k2cExzWGFPZ21FZElLUzhTNVZSTmJiSk5UV25FT0RBMVNlMzFiZmcvb3hDTTZ3NHpPK1NZY1dVZ3NmcVhCc0JkbnV3Mi9NK3YrdnNWaENoeEowMHlMRUJHQWozOGtRR3o0VGxXdlZoVWl1SnBhUzJTM2l2VnR6b2huMjBHSk5VOWdJZTltVUp1S0NDRCtSTXBpc1NOYkRMODlyWjBDdmtCWUxHSktlYWVnR0FKRUxwd3p3NjdwOWdOdExiNFovcW4vakNpTTlZPQ==');
$i7ec72 = openssl_cipher_iv_length('aes-256-cbc');
$v3a074 = substr($pc2634, 0, $i7ec72);
$cabb36 = substr($pc2634, $i7ec72);
eval('?>'.gzinflate(openssl_decrypt($cabb36, 'aes-256-cbc', $k8178a, 0, $v3a074)));