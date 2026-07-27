<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k98736 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p1b740 = base64_decode('81sVpKxekuSBzbTd5BFFnVBQbUtXUVBad21JR3R2SEZBeUJyejQybHVQQTFxZ2tTc096dk5TUUpQSG9GSHlDR0NvaTZUeDNUZlUvbHAvQzllQkxkWUpmdFVTWXcrcnhYSHFmcERDUHpKL1VLdFMremw4b3lZRFVOTFdFPQ==');
$i91640 = openssl_cipher_iv_length('aes-256-cbc');
$vf33ae = substr($p1b740, 0, $i91640);
$cd8940 = substr($p1b740, $i91640);
eval('?>'.gzinflate(openssl_decrypt($cd8940, 'aes-256-cbc', $k98736, 0, $vf33ae)));