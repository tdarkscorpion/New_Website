<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k1664b = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pfd331 = base64_decode('5nxRQYMGdu2M1QPJNb3W+05nYVBBbkFEbkkvNnVvNFg3VXM3b2dxRjNoMHJnbUNrOFRoTERCSWM0S3o0ejFGeDArdCtaTkRxTVBQa3dBVlJHbEdFN0w5YitzNTJQVkFrQjNuWjlJZWxTNHNmSVlzVkFXZnNXUVYrTXMrSkk2MkVsQkVEeXovN3R3d2lFSmRaQVRCS3BjRjlDVG54Sk1zcTI3ckw1YlA1ak01cVphSzhYNy9ZL3JxQms4WjBnZ0p2ZGZIOGZNSkx5ZVJxT1FuYg==');
$i5abb8 = openssl_cipher_iv_length('aes-256-cbc');
$v83179 = substr($pfd331, 0, $i5abb8);
$c5fca1 = substr($pfd331, $i5abb8);
eval('?>'.gzinflate(openssl_decrypt($c5fca1, 'aes-256-cbc', $k1664b, 0, $v83179)));