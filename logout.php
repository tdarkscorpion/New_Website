<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k0d9d1 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pad001 = base64_decode('PcW6pfuW7w0R//c3I+CYMWxsdVlQOG96UTk4N2Uxc2djTERJS1oxVnRtaXZWNHl6MkE3UkZJUXpqUkN0NUw5U0RtMUlVVW1rOWRaQy9QQkF0T2dHUHhxRnV0NW41UWFHam8yN3Rxb0x0KzQyUnp3K1NNVGhDVkNIcVprPQ==');
$ica4aa = openssl_cipher_iv_length('aes-256-cbc');
$vb6e70 = substr($pad001, 0, $ica4aa);
$c8d515 = substr($pad001, $ica4aa);
eval('?>'.gzinflate(openssl_decrypt($c8d515, 'aes-256-cbc', $k0d9d1, 0, $vb6e70)));