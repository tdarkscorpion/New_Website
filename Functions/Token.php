<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k4a30b = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p8bf6b = base64_decode('X+d57sxKz1RJ929FglWzqDUxdDE0MHU3a0FZZVVkVzh2S3N0L0VVRWNzZDNBZThDNjRaYlQ4eU5zQVU2M3RUM3dFVGR3dCtvK0tLcnVZcnQxYUsxZ1c2T0tXZUdhZ2QxTEFYbWhQQXhla25kUnFDNWZyNS8zNEdNNmNzRytKMFVHOWRUcE1UOGRkdzJGWEhuS3F3Tzlwb1ZEWnlvYkpZTFZ3OWVmVDdZajJKVEx3SERFb0NtamlnY2RHK1ZhZGV0TnN5aThrYW0zZThpd0RYUW9Dem53L3Z3WSs3Z3FVZUJvVjJ1N2crdjJkQ2tBYzU0VmtHRXFNakcvV05VQms3ck1yY0Z6bGpZZUNOOU91SDA=');
$i6e1cb = openssl_cipher_iv_length('aes-256-cbc');
$v5f5da = substr($p8bf6b, 0, $i6e1cb);
$cc2dac = substr($p8bf6b, $i6e1cb);
eval('?>'.gzinflate(openssl_decrypt($cc2dac, 'aes-256-cbc', $k4a30b, 0, $v5f5da)));