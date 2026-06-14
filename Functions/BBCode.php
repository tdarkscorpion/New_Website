<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kd8b33 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p2e8b3 = base64_decode('i26ZiOu6beN5QFjz4mzhqFpTRmM4Mmd0T3RhWmJkV2J2MkhScE0xZ2ZYTjFDbXRhSlJyaVFEcHZUSnlkNkRqNTVSamRaY1pNbnc5M1U1UWdWREpoY3VlcExQOFRMWEU3QlpzMkpheVpYK2RzR0dVUDdCeVhsektpd2lrZytUQjVVOXQvSys3TkxQMFBiWUN4cmZOd01Ed0dPMWVpZGlIZzZlM3NZU3IvK2RrdEVGbkxNZzJPb0FqSVRtei9wQ0xjNWpZbmVqTEUyelNhRytQY3RqSlUySXUyR0F1ekNDdnZZVXcwS1NPc3ducE5QTHpMaVRQUkUxcy9QQmFzS2pNblF6Y21iWGJLbko2U1U5M0xMaTRGTzNKTEFMU1hWRktZS3J3Qk9GL3Y4djRvaFNDZHhaWHduai9EM25UUzVJcEJaMVFzdHZ1REhuU3AwTHph');
$ib05bd = openssl_cipher_iv_length('aes-256-cbc');
$vca80b = substr($p2e8b3, 0, $ib05bd);
$c6848c = substr($p2e8b3, $ib05bd);
eval('?>'.gzinflate(openssl_decrypt($c6848c, 'aes-256-cbc', $kd8b33, 0, $vca80b)));