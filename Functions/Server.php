<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kf4fe5 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p0b96f = base64_decode('ORYbtg0HdhL7AlMJZf/YyVFZSmRlSkhwVmkrUGtSVWo2VjBCMUpNbGNzMUV5TFQ1TVNTSmppZUVld2hsY2lFZXBGanBvNkZ3VXE3RDN4aUYxU2ZLNDRZT1ZBb1piSG53QjAwTllzdVZ5Qjc0ZUNKaVR0U0NzcERKQU9mdG92OFAybk5kVG5ORXN5YXJBUnFrQldsd2JvcTF4MGhTc1NhZzZpeEUxdE52MEI2d1ZtYnJwd1BmdUVsUFVMaW8xWExxOGpHSWVZR0xZc3F6NUxzMlkrL3ZXSGkybGdCZnZhRXRoM21aS09hVlk5Y1JTQ2ZwUmVLRjhmU3VlZjAwbkVTWWMzdEVrc0lOdmRuV0lZYldoVWxONytvak1uK1RHektxM0FRSmZuRW1IRldJdldkQTZ1RnFJWm5oODNnPQ==');
$ie214a = openssl_cipher_iv_length('aes-256-cbc');
$v33b8c = substr($p0b96f, 0, $ie214a);
$cff950 = substr($p0b96f, $ie214a);
eval('?>'.gzinflate(openssl_decrypt($cff950, 'aes-256-cbc', $kf4fe5, 0, $v33b8c)));