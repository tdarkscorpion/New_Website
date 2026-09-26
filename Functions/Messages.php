<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kbc2ba = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p228b1 = base64_decode('aABr14Fut6aiaKf7ei//Tms5SnU5bEJGUWc5VWtXRmx4MlpjSjNXcVZMSEo3S213NUl3ZG9TU1NtUFdXOGxPVVllOUtVekk1T09QRG9XNWYwR21INUxDd1MzOUdzL1dOWnpWa3ord2piWk9xZzR1WUpicmxPUyszOXExY2RmR0xwZEdUb1lPellwaHVVRGN1TEV4YVBSMklwVEpLR0F6QWNISDh0bXpRbnZveFNVVng5NWNkMG9zdEtWRlltTDBmQUxaRk95aDMvNkJ0S1hBSDVFRGhycnJBWTY5TWVsL0JzRXZxYU1MY0tVY0dDTS9qeXBwbi9zMkp6UFpPdldiV2Q5ZkIzdEhhTnc0OFhLai9kREZ6aUpMeXNKd2NCd3NlblNaVm53SUJpSmlHNzFoSXQ3QlBLVFhzRmFRPQ==');
$i5089f = openssl_cipher_iv_length('aes-256-cbc');
$vf7c7c = substr($p228b1, 0, $i5089f);
$c31841 = substr($p228b1, $i5089f);
eval('?>'.gzinflate(openssl_decrypt($c31841, 'aes-256-cbc', $kbc2ba, 0, $vf7c7c)));