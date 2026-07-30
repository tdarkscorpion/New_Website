<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k204de = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p762a1 = base64_decode('NSiVAv7xTY9m9+qJ3fAKcDg2WTBYd281L2Q2MC93VFk4UnRhKzdRK0FUT2h1TmRMNXpURk1ia2FPcldUWFdZeUFnWUxkODlRSW9DWENzMFd5S3VhN3htd0JZOFk0b2c0UmlVaWlLbjJ1eURlbzVTSFpLY0JicnRTVmhzPQ==');
$ic3cfd = openssl_cipher_iv_length('aes-256-cbc');
$vbe39c = substr($p762a1, 0, $ic3cfd);
$c2c17a = substr($p762a1, $ic3cfd);
eval('?>'.gzinflate(openssl_decrypt($c2c17a, 'aes-256-cbc', $k204de, 0, $vbe39c)));