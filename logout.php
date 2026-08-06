<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ka7ea3 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p2bcf1 = base64_decode('b0CIhnv2i/30tHivj+V7g0cvSUVyVWtOdFlqRjNtVEw3alFlNXJKN0U1Ylc5c2NIT3NBVnEzK0k0cXZ3TEJ4OTlWb285U1A4Qy9iZ2tpdGZDaDluMEYrQVdRYjFIZ214dE1KSDZxRjJUTU91V01HMGNOa2kyM0Z3dUdJPQ==');
$iab804 = openssl_cipher_iv_length('aes-256-cbc');
$v3339b = substr($p2bcf1, 0, $iab804);
$cf9951 = substr($p2bcf1, $iab804);
eval('?>'.gzinflate(openssl_decrypt($cf9951, 'aes-256-cbc', $ka7ea3, 0, $v3339b)));