<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k9699e = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p90948 = base64_decode('kolMfEYiHG6JsQlVIGEtyTFLamNGZDI3amRQT3lJUHA0RWtKVE9LZkVCcjl2Z0d0SUhOSUpIeFAxYU1qWWRnandVazFPbStFTHZVY044b1M4Nm8xWlk2bHEwUUduS3JjUGYyTzJnQ0gxRENZZnN2djdEak5La2d6ZHVlRlhnamRMN2l6dmMxclIwZDhIK0FKdVd2YUdHR1FWQ3E5N09QWUxyQnNzUUE0WmF1S3NDaldGYUlzMTBvYlBtLzBHUmpLS2pqYk4yZCtBYTlRaTVQY0xzaXRLSDFUeVZzdEI3YnE4cUNndis2V0k2VmJIWW9zTVMwQVlYYjA2TUtXZEk5MVRGTjUvbzEwYWlHeDdFRlk=');
$i63824 = openssl_cipher_iv_length('aes-256-cbc');
$v9bcf3 = substr($p90948, 0, $i63824);
$cc1121 = substr($p90948, $i63824);
eval('?>'.gzinflate(openssl_decrypt($cc1121, 'aes-256-cbc', $k9699e, 0, $v9bcf3)));