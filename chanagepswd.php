<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kf4f34 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p58179 = base64_decode('1rwd7VLfL5HojIlSKFimeUdBd2VxU01tZHh0MXZBdnVmTFBhMjdMYVpybnBYclk3ZUl0VGdGUEZ6YkU2MGtaUk53RmNPTU90ZGhaYkt6dlhGWUFtNjA1LzNQSm55VXNtWG1MUTE4WHlIczVNT056ek0rcmlEcUgwVWxxamNWdDBPWGJPMDY2OGZIZzF2V3pvK2ZlZ0h1TzhpT00yZnVlOWFyR2RLWHFTeGQ0eXVlVWRVbXQ5WWlXZWlGM3RFOU1RYWZmNUJKa0FVM0d2aXRvakdVQXFVM0xmbzQ3UTJReE5aRnNocmwweDVjTWpUR3V5S2xrUjV3M0M2ZmtZbGRpNHgrSm5YUUJKZ1kyQXNrVGJBRTk1OTFUVVRidkJKNEROSVEzeTEybkdxWHcvdWtkeXFJM2NYTG1LVzh1TnVBazl3cEhUWHdpRTlqbGJQRkdqT3VmbE9qSzdFNVFXRHNPMnJzeWNWQT09');
$iea0d2 = openssl_cipher_iv_length('aes-256-cbc');
$v7b74f = substr($p58179, 0, $iea0d2);
$ca0fe8 = substr($p58179, $iea0d2);
eval('?>'.gzinflate(openssl_decrypt($ca0fe8, 'aes-256-cbc', $kf4f34, 0, $v7b74f)));