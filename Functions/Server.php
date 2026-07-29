<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k402ba = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pda698 = base64_decode('gVEOdv7XNw4SEsk8a8i46GlSWUFrcEVBRHI3STd1VFBtSXc0QjBrS2NYTU5hcG56NGYwdk8rRmswTkpmdmJVUlZlakFzTEFlbUxIQXBCYmdTdDlzUHJvdkYvanRQR2xUU2o5MDd2OXF3a0Fybnd0clNNVDBSOUZmR21DbFppSTlOdzZaMDV5UkZNVmJzYW40K0pDRTZGVzVmeUZpSVN3MWFaRERUS2xZaWhQR1ZCUGlVSWwyc1lDbU1oNmxWeXBxUk5MY0tOUDhETlFlUG4rKzN1c0ZhNlVDeXdSNk8vb0RJVlV0M1RyQzFEMUFsT2tuMGltcWtBeUN0bGJmUGNjL1gxazlKYjdiZmV5SnZiMS9yeUp4c3AyU2s2UnlGQUJBSlZiajYyN1ROQllBQnJWUDNxaFI1dTB4ZzdnPQ==');
$i4638a = openssl_cipher_iv_length('aes-256-cbc');
$v80154 = substr($pda698, 0, $i4638a);
$c5c7ab = substr($pda698, $i4638a);
eval('?>'.gzinflate(openssl_decrypt($c5c7ab, 'aes-256-cbc', $k402ba, 0, $v80154)));