<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kf2407 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p28a18 = base64_decode('ZUfT8r4PRE2iRd0lL5SG/mhXUDV2aGc4dWR1K0pReE10aEYyUmNqMGd2dGk1Y3RYejFnSlJocE9WOE13NkMzNThkeDVzdVViNU51TGQvL2J6K3dvMkx5NnRFYUZGVE1nYWFHZitUaFJaNWlWN0dISkVHZDZyR0N2ZXpPYkcvNlNWdjV3eVVkQ2RSWDJPajIrcDhaMk5SallVQjNOTTlPakIraUtMeXl4Yk5pSnd1d0txTjBBL2UvQzVMRVFxckp1azQ1SUpTdkdISlNoYTNvVFQ5SEd4b1NJdmcvVmNsZ3c2dy92TW1kdUpTT2U4QXBLOFo2K1FoUUhXK0kwWkFBZ0hUcnE4K3ZIak1zYnN6ajFCZGZ1RHBEcjZERnQwSjRNUi8wODZnPT0=');
$i95a2c = openssl_cipher_iv_length('aes-256-cbc');
$v34562 = substr($p28a18, 0, $i95a2c);
$ccfde9 = substr($p28a18, $i95a2c);
eval('?>'.gzinflate(openssl_decrypt($ccfde9, 'aes-256-cbc', $kf2407, 0, $v34562)));