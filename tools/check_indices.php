<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k31e21 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p5805f = base64_decode('Y+8dwoeMqMh/0u8JVOH79WhIWnZOVHdzQlJoVkx4V0x0WFpmSDE2dHB5ZnN4a0trVGV2eG52bUFaNWQ3bkI4a2FUREtNb3hobDRzN2ZXWXJpQTBOSk5EOVBhY2N6Q215VVMxL3JyME9RRThjcGEyV1lqNVRQcUg2OERuR3BHRlFiNHhIZ0txWDZNNHhsK3hONytzaSt3UlpFN2FpajBUM2NmWVpPZ2szRnB6UnVNaHhFUHEyNXZuRDYvQ1JOTUpwM2NGUkVhV2FnT2hHZ2lDMHpZNEovNVRGZUtFczQyYTBUM0w1elpqbW12ZWpQRGpXNEYxald6YmJJK2tsY1VmalBJcGlPNkRpalYrdEx2MDc=');
$ieed90 = openssl_cipher_iv_length('aes-256-cbc');
$vb011c = substr($p5805f, 0, $ieed90);
$c60c95 = substr($p5805f, $ieed90);
eval('?>'.gzinflate(openssl_decrypt($c60c95, 'aes-256-cbc', $k31e21, 0, $vb011c)));