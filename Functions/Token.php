<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kd21f8 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p2ce07 = base64_decode('QIdHEdD3UH5atVQeYT74/0xodUNuT2Qxemo1VTc2UTdQVU84bzFrdXhSTXI5SlZ1N2Q2TFdKa08zcVUrSEtIQnl5MTZJVFh6Tk1ocDFtanV6alU0eWdxYUg1TmpDQ0d2RDFScC90aXAzdEdzc3pLTFVQdE80M2xFOG1oM0pobFlETXJyS3dTU2lkekZCd0RmSWxFOUlBazdBejQ3NlZBMGhkVGNrR0c0V0F6UVkrT0dCaXdVbmhqUERNZEFVY0xaUHB5YXVjSjd5VC9qN3dCbHAxcjFFVUlyVDBkeEJ5OHN3U2VUNklFT3d2aFFadTNHTkV4SEcrTkIwMXpTNlY1S0tpM3VyR1NoNUswSW9ZaEU=');
$i0fa77 = openssl_cipher_iv_length('aes-256-cbc');
$vbfea0 = substr($p2ce07, 0, $i0fa77);
$c21afc = substr($p2ce07, $i0fa77);
eval('?>'.gzinflate(openssl_decrypt($c21afc, 'aes-256-cbc', $kd21f8, 0, $vbfea0)));