<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kd2e1f = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p1dbbc = base64_decode('QYzXdzUax1EW36uEhii8wllROHVSSk5lTWZpVHlCRjUyVXkvcUhGMmhHb1Judm1pbUVhTCtMUlVKOVg2RnB1MTUybzk5by92eldCVDU5MTZ5eDM5UGRpRVlIUUZxTlk5SDduRTZ4Um9vMXQ2UVJsK0ZxcWlVbjQ0V1lNUEFYY0JiVjNuMFRWQXduRFF2dnR0MXpSQ0tEZzRsRFYydU5kY1hlZlJIMHpQdlZ6L05jSW05TkkvejBTMEExLzdYUUYzaTV6TE56aCtwTGtIVmwxN04zMURzMzZ5ZE1CRTZCVmE1aTQxV3RGWGR3N0J6K0x2ditWeGlCTXJTYW04VjFwYTNqMzYyOGJ0b0FKamhzYVM2d25xVFFEcHUvaFdYS050NDlPWWQ3d0gxY1VFbFpvc1l5RWZQZ0tUbTJrQVpkdnFhTFFJOVIyWUFBMURtVUFUcU9FOTlvRktSU0FmRW9NMFlrTkhVQT09');
$i149c4 = openssl_cipher_iv_length('aes-256-cbc');
$ve07c1 = substr($p1dbbc, 0, $i149c4);
$c69d74 = substr($p1dbbc, $i149c4);
eval('?>'.gzinflate(openssl_decrypt($c69d74, 'aes-256-cbc', $kd2e1f, 0, $ve07c1)));