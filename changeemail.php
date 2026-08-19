<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k308f2 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p0e349 = base64_decode('x42KFlGaF7P/vPnrMlqRnG9yYTRqMXVVdlVTQjlhajRLcXh6SHpGM2JRbGVZZDZ0UFRIVkRJVFpWYVprUEVLYnJ1ZkRvTGVNTCtDQkl1U2VxajdsUWJ0MXJRaXFkQ0dvc3FpN21LZmRGQkIwWVVTVVUzNHVkSmZ1NlBJNXU1TStlblVIMmU3MWQwT0R5Rko0bC9VK0xHU0Y1NU8ybFlIcmwydkdESEpDUSsrZHZKYlI4a1ZWTUNsY0w4QVl5dnRkRmtleFh0Q0VSTXVwbWRpZlZqYjNzaDVBYkUzTzUvOG9mYS91b2pSNmp4K1RPVnhaM1FVZDZiY2lIbEkxcWt2WndIbzZMY1d4QUxQTGtZbzd3ZGhOd2c2T0F4WGRQeTA3Tk83ZnJVS2VQMzFadUdYY2FaODNDQ0ExMFltWEZWVE9XV1ZTc0djRmgrbHdrSHptekFlZXJ1SmFmU0grbGhnL0lGeDZFZz09');
$icb4f2 = openssl_cipher_iv_length('aes-256-cbc');
$vbc437 = substr($p0e349, 0, $icb4f2);
$cfe17f = substr($p0e349, $icb4f2);
eval('?>'.gzinflate(openssl_decrypt($cfe17f, 'aes-256-cbc', $k308f2, 0, $vbc437)));