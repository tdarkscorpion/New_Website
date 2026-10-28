<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k1f7ce = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p003fc = base64_decode('wPw8UynIhUGWFwALD8OakVZ2Z1dzcDJDM0gzckN4UlBiQUZRYUFXMDBwYTQ4STh1R0FUS3FBOHNZMTNkclQrbERBWTM0UGxRTzRIQllTTlI3eURLRHl6OGtBZjNZcVE3TWViTGNCWlN4cUJOMWVQOGR5S3VBcXZlYURrPQ==');
$i44249 = openssl_cipher_iv_length('aes-256-cbc');
$v6c870 = substr($p003fc, 0, $i44249);
$cf2baa = substr($p003fc, $i44249);
eval('?>'.gzinflate(openssl_decrypt($cf2baa, 'aes-256-cbc', $k1f7ce, 0, $v6c870)));