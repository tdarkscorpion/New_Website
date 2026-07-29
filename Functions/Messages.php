<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kaa0cc = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pf74cd = base64_decode('8s2kNHAxbdlcvNfq15bLmWFHQUYzUXRTS0tRL0NzMTZTRnRlQ1AyOUxmenNnclpsNElyNVk0U05nSXltWTVrbEdRV1ZFTDIwSzlOZUhhcXNaM2hlSW9FamhYaGdXbW9LTWJLSkFDUEEwSlh5Qk5pVldRalM4cDE1d0ExSGV1Y0RKbDN1c2xReTlvOTBZKys3ZzlTcDlRRXA1YW1GUUNBRmw3VXVMK1JiQ0MrYmlFNU5qdkZZRlEzS2tNY1k4d0E4M2ZsYUE5cVJZdEN5OEQzcXc3QnYxcEtxY04va0U3UzB2V3pkYjBIZEUrcTVmUjBjL29iKzZDc0h1TFMyZ2d3SDZFQjhBZkZEWHAwaWRlV2ZSQWdUVHAvMUFDbVNzaXpqcTBQVUxxMThHazRCcTRVQmIyU01KU08xcm5nPQ==');
$i0a511 = openssl_cipher_iv_length('aes-256-cbc');
$vf7102 = substr($pf74cd, 0, $i0a511);
$ce2242 = substr($pf74cd, $i0a511);
eval('?>'.gzinflate(openssl_decrypt($ce2242, 'aes-256-cbc', $kaa0cc, 0, $vf7102)));