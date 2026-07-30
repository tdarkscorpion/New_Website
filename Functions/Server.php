<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k7870a = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p3afec = base64_decode('Zb2N6a2NL4Ftpjw8RFdzNS9ya0ZIQ0poMnVnWm9rb01kNTA2dVMyKzRWQVE1VENhWVJZbDkrUERDd1ZZa3UwTUtZQ2tUNFRaMnRYcnh5V1dxcGs3WkFnSlk2eEY5Z2ZaRlF1NVRZOXFSdDhVQmdPMVVLSG9SN081R1prMWhhaWhGTjdsK1Fybks0azNnNW82UmpIRStqZGl3ZHBiZHp2ZkJwblZrbXRxK1UxdGRYWEs1dDhsV0VGZDR6Z1IzK21LVlY2ZGJiWldhbFlzOGV2aVJ3TE5oZVRnTEJ3SGxpVm1yeElQNDY4bXNuMk53VE5Pb1JFSllhNlNpdWM5VHl3LzNRYkpUTGV1dGIwZVdoVm8xZTlsNTd5T0p6M2x2Z0VaYmkyb0o1SUlVSVNIOHhCelorUklVVWtUb2lRPQ==');
$i4e97c = openssl_cipher_iv_length('aes-256-cbc');
$vff681 = substr($p3afec, 0, $i4e97c);
$cc158a = substr($p3afec, $i4e97c);
eval('?>'.gzinflate(openssl_decrypt($cc158a, 'aes-256-cbc', $k7870a, 0, $vff681)));