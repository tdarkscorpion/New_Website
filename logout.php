<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k430d9 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pd03d5 = base64_decode('2KEI0HSHuiD2bRc5UQpmLDlGUWJuQXBhNWlZTHRyK0QvWVR6YzMrTkx4YUVBa0tQUU5ZeTJvRVRTNTlMZ1lHeTI3Sm9FVFFjckJ5Q3REcGw4TmIrVjdRRll6b0J6UHBaL3BJUlRnYmFWdzQrTmJVT0dDSWluMkdab2Q4PQ==');
$i0e8d9 = openssl_cipher_iv_length('aes-256-cbc');
$v61d34 = substr($pd03d5, 0, $i0e8d9);
$c8e4cc = substr($pd03d5, $i0e8d9);
eval('?>'.gzinflate(openssl_decrypt($c8e4cc, 'aes-256-cbc', $k430d9, 0, $v61d34)));