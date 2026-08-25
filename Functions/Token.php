<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k5a310 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p6d116 = base64_decode('yryb5rb1IZzEU+2VO/gKN3oxdkJTRUxSM1pKdTRWL1h4b3JSR1NrWWNvdDFyYkNLSEtxQXVEZ0lnZXEwVGJMSjhJdElqd3FZaFhWNG5PV0ZDd2hhSFdLU3d6cVBTOTFrQ3ozYVRKcUcyck51OVUrRUlCNXZzanIrR1dpNjRhUUplNk5RNjB3ODZ2S0JRRkF6c3RUeUJ0QXM0OC9zcVVXT0xnUkdrY0t6QkovZDM5RmV3SGxKMXRBVStWSDI1Tjg2RkJrVTJIbFZ0MVdoV3RhK05CanNRN3RWekRwS2JFTzdvQU5KbDNROGN5SmtkY0syeFpCNys1TUJRQ2RGanFURVFITnRTYmhvYU02bXhibGc=');
$i172c2 = openssl_cipher_iv_length('aes-256-cbc');
$vd099e = substr($p6d116, 0, $i172c2);
$cabcd1 = substr($p6d116, $i172c2);
eval('?>'.gzinflate(openssl_decrypt($cabcd1, 'aes-256-cbc', $k5a310, 0, $vd099e)));