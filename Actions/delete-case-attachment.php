<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k4232d = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p3a5aa = base64_decode('EfybUy4JsGrWEhSQqFNhW1lrQXdTRHpIWUtiWTJRUE5na09QZTJ2cDJHUnYwbVhXYVRHOTJ4MWI2ZW5vME85UUFYeGMxWlB4eldYWXQ3VE1Dcit0Nm1IRlZwalNuNVNQcjEyOW9GUEVVTE5wUklpbXlZR0RBNVB4eklPU1gzd29uK1N6YTlDTjNpUE9wTENQTUU3VnNJWWduNHNhWkp4dnd6VGY3ME1USlpTQmZFK0w4OGQxcjBXWHdyUG0rRWQyZDNnMkdZUTRiY2hOc0dlNHdxOFl0SXM4Rkpxd1BhOWdrYmVhdk5iaSt6TlZNak55aGtIN3E0MzE4UVZHSlVJdmIvL1dlVjcrd3htVElCVjdZWU9iV0wvNWxIL29mYzIxZ0NhRkphenJOaWV2Mmh6blp0WkxQb1dZNWNmSUpvaHp1aDM4L0V3VG1UcEcrZjVF');
$ifa527 = openssl_cipher_iv_length('aes-256-cbc');
$vc7ef5 = substr($p3a5aa, 0, $ifa527);
$c525ad = substr($p3a5aa, $ifa527);
eval('?>'.gzinflate(openssl_decrypt($c525ad, 'aes-256-cbc', $k4232d, 0, $vc7ef5)));