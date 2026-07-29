<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k82480 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$peebf7 = base64_decode('zohMPdSOSlM9do6iHxZ57Vd5SWFhWkhzcGpnK29Za04vN2diWDNWR2xWalJlcnh4dm54d1oyNVZ6RlVxcURqWGYySlNwSWhZNFJaNDNpTi9OdHFITm9RNXA2ZU1sUEdWbHZqSW5TNFZpQ00wRXJxS3Z3dmwwSFRvNGVBPQ==');
$i895a9 = openssl_cipher_iv_length('aes-256-cbc');
$v6d90c = substr($peebf7, 0, $i895a9);
$cd16b4 = substr($peebf7, $i895a9);
eval('?>'.gzinflate(openssl_decrypt($cd16b4, 'aes-256-cbc', $k82480, 0, $v6d90c)));