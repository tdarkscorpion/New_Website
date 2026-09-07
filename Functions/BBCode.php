<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k624ad = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p82c2d = base64_decode('i9n88CTHMdbDPmZ8U7OWoGRrVndCVitwWjA2WWplcW8wR2hKd1ZPZW1JaFdWNkhmMmwyemlQZmRYYkpjVU1VQTQ0bFpGeVFqcEtaakMrQXBUUXBoMy8ybUEzdzF2bHRaNkRhU3d2dTlZQnBSRWdqc2NIY3VtanhEY2Q2NklCYU9zeGx5TXB3UVRhVVlqbEo0Y1paUjVhcDVMOUhYR2F6WDJuamtHZS8xZGo5akNBVjZHUnQyUVltTnk5V2RMK3pjTStZOUtzNEQrdmdXb3VkWnk1enVzaVhlL3c1eC8wWmpuZHBHd1lpNkNoeUFESzBvNjk0NEl0dk9kcVNDRFNuaGRFbHNYT3BtWU5Za1Z2RjlPazAxTHBPaEYzYTdPUy96aklKbDBzQ0NRZUZUOEtxUXJJMm5YcEFrZDFmdHVCa1VKYnpSLyswWlZ2UzNvWUMr');
$i6b981 = openssl_cipher_iv_length('aes-256-cbc');
$v60182 = substr($p82c2d, 0, $i6b981);
$cf2e5e = substr($p82c2d, $i6b981);
eval('?>'.gzinflate(openssl_decrypt($cf2e5e, 'aes-256-cbc', $k624ad, 0, $v60182)));