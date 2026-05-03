<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kcb953 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p2243e = base64_decode('n+bqQ38OPXAgMEBC2iKPy3VTeHo2STYyRGp0aU94OHQ4dit5aTkza2hKQmlxTC9oQjgyVWxmOXVCZk9aSlVDVk5XcXRjdWU1anRMbjVFejVSWEZjU1lrSWdrTUFQUFlLcjNlZnFXQ2ZsUllaK2RjSkN2NEk3dW9jVFo4RWk1RGlDUm8rRXZhV0tqMkx4aDJ2R3NMenF2bldxMURlaUdOTm5aMGthWU00YjV1ZnhPazZBa09nbk05dzk5bk82a053VmI2VnZnMTB1OGNlVXVrODkycEh2cC9XemZpWTY4M2RjU0JFTjJHcmVkdk1wOXl4VHR6SGZXeTFBZjM5TVNmR0RBbnJmTjRkcHAxMzhZR01JSlNld1R6TlB5WlRqazVlbHpibFBRMXBaeExMdUhlb1NheWFrdkN1UjdhU0tBV28wVHc1ZWtyZ2xSaWlGUE5ZaURzL25MYzRTSHpYdm1XbDFSYXExZz09');
$i95d5c = openssl_cipher_iv_length('aes-256-cbc');
$v4a455 = substr($p2243e, 0, $i95d5c);
$c364d8 = substr($p2243e, $i95d5c);
eval('?>'.gzinflate(openssl_decrypt($c364d8, 'aes-256-cbc', $kcb953, 0, $v4a455)));