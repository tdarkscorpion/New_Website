<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k6cff7 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p97ce6 = base64_decode('rMi58tCbwczgtbkfRnZhDjJmU0YzVFBoYTFIcXIyOHFvT3VlNFE4OHIvNEw4ZHZzOGxPOWVTck5USEZnUjlhZzNWNmUrWFd0M2w4OHdwZjdtZHBkOGY2U0YvUzJsVFRrblp3bm5TZ0FlOVVRSlVXUCtUWGFvOVo0djY1d0prN3VzdjA2K3ZnYVBlb1hoVzRlOG11VzdTZkRTRHNQd25vUDZEeXVldS9FeUEzVUdYR2x2aUpFQXdUb05ycWNlRmNtUEg5KytnaFJabm5HYlpaRnFXU0Zla0NiOC9QMU9PNmdhcWFzWDFWd2Y1YU5GMEFJT1UzSU9DOGJjQnNndTl0TEx5dUtSdFdwR0xFaHY1Ykg1OFo5ems1QkpLTFFJeWVHVmZjUjFXcEJlUHA3WlZyMDBLemxXYUphaFA4PQ==');
$i4f2ab = openssl_cipher_iv_length('aes-256-cbc');
$v28ef2 = substr($p97ce6, 0, $i4f2ab);
$c14304 = substr($p97ce6, $i4f2ab);
eval('?>'.gzinflate(openssl_decrypt($c14304, 'aes-256-cbc', $k6cff7, 0, $v28ef2)));