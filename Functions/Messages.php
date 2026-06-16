<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kfb8ba = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p29ee9 = base64_decode('RnNW0pZ3teCC85gn6ZPc2HExRlhKdFVhL0dXSWlscTVRc1VQYStBYU9CU3dnaHM3NXhka0NrZTRwb1RuWTRIbDBuNXlZWSt3M0lWYnRmWlNGRnM5Skh1Q3orb0NaT3VrNWlSVklEbE1NSGpiWVFZNDBqN3VaWDQzYlA1VytwR0tkUXdNYzNScDJMOWZ6V1pObE4wMk1iSk9iZWx1K2g1QUxDTjVWejdtTS9XRnhHSHphOVhtZ3FPWGdaaWdPbE1QcytkbGh6RE12dkNHZlNyUURsbVdkaFVMZy9QalZwNDhUdG16c2VLRHFjOUc5K2toNmQ0Z2pobWxrVTdzcE81Y2RMKzByTEZYbFVJYzAyMVV1aXhBUW9yanBkNzdPRjQ3eUFTU0VGY1BTeURRR0ZnMnd2c0pjaVU4WFZvPQ==');
$i6a2e3 = openssl_cipher_iv_length('aes-256-cbc');
$v1fa82 = substr($p29ee9, 0, $i6a2e3);
$c966f8 = substr($p29ee9, $i6a2e3);
eval('?>'.gzinflate(openssl_decrypt($c966f8, 'aes-256-cbc', $kfb8ba, 0, $v1fa82)));