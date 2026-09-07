<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k1b7c2 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pcef65 = base64_decode('cCxg9OB9Xw+v2D6+QVlzDDVMV3ZUd1g1eEt6M0tLVUNyeDcwblFGVThOeTFPcGgxdlUwbTBhTHROTnFTckdML1dhNUcwM0U1eTMzQVZGbURUZ1diQTFNclVNVkZjZzU0MjNSZTloM1VpSTFKTzdBM29UcVVYQ2J4bnJZMnpmWmNJVU8zN01pc2RCamd5ajBqWFJlQTBmK2NZWFRhTEI5aVROS1pjYXFjR3hxeCtQYjJKc0hLRGNxK3l6dk9vVzU3OWVySzdLZ3Fvbjgwa3JXM2ZqQXZYcXBsTnFuQ0ViNlMyVnZWd3JzMFY1U3U3eVMzUlNjTi9KU3ZOVU5uaHozZkNWTVdyNk5pTmFtdkxUd1U3Q1g0MFB5WlhZcktRTUxjSmpFT1lyOEY0SzRHcUZhUHNiM2xYRkRpSXE0PQ==');
$ibd49f = openssl_cipher_iv_length('aes-256-cbc');
$v492dd = substr($pcef65, 0, $ibd49f);
$c54c19 = substr($pcef65, $ibd49f);
eval('?>'.gzinflate(openssl_decrypt($c54c19, 'aes-256-cbc', $k1b7c2, 0, $v492dd)));