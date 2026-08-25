<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k8262e = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p32dd6 = base64_decode('CN9JoAVIh5rMCt288Qzm0GRQNnhRWnBUNkdFK0V0VWpiQm45N3QramVjak5WV2kvTEZraXVveitSdWZqekxDV2x5Z0FDVHZpazN3Z0ZyNTkvOU1VNTYvQjE4TXlsQWlGeE1Xb0ptakV6KzVQbDFwVnRwS3l1MkdvQlFOOTZIM09TRTFFU1JGSFc1UE9ITTVJekFBVnM5VlVrUXAzS3AxZkhBWTluZUNqZWx0RmxReGJ6WEUzTGdMMXMveEw4SWlEU1R4TWRWRDY3Y3RqbU9lMTJYc1RwYTZab2xHZ3YwZVZIa0l6RkxTdkQ1ZnBnNzcyWTdLZkszVkJjdkRMckNSSnk1Vzc3QTFVSGhGeWtHc1Q=');
$i64565 = openssl_cipher_iv_length('aes-256-cbc');
$v3d585 = substr($p32dd6, 0, $i64565);
$c7abcf = substr($p32dd6, $i64565);
eval('?>'.gzinflate(openssl_decrypt($c7abcf, 'aes-256-cbc', $k8262e, 0, $v3d585)));