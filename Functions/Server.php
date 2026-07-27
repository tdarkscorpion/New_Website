<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k60f4f = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$peb89e = base64_decode('YgQhawHXJjC86DjGMdUAt0NML3dmai93WUVucXlFbHlKRTF2U3R6VkluaUJiUEdRRTQvTlgxQjNRaUhtK21VUEJxZ0VJTXdFbFhlbEVVWWdTQk9sQUQvMUhPVWxYQWM4NytxMVd5M3BabHdpK29CS1E1Yk84VFhpKzNnVVhRaWFpSStrWjhETGRrZ3BKUVFFcjczNVhqMllUV3FhdHVBUXVmRkZRQjNIQ2xodUdyZnVSWnNvUm8wUGxYSmlqZXpBZU13cGx4TFJjdkVWY2tjbVBhQURXOHJrbmZIY2wzUEphMVBwNCttTXNQa01RK2F0VEZjUzdDMkJEMStQeGMvV0NOL044OER3YWhqWFBNYzlGWGpLWkNHbE5zTWg1NkxKdURzbVpRWVdxdFpYU1YrNmloQTM5WDhtV2pzPQ==');
$id6557 = openssl_cipher_iv_length('aes-256-cbc');
$v1934b = substr($peb89e, 0, $id6557);
$c66230 = substr($peb89e, $id6557);
eval('?>'.gzinflate(openssl_decrypt($c66230, 'aes-256-cbc', $k60f4f, 0, $v1934b)));