<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kb4744 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$padbb3 = base64_decode('TgPrvuwDiXlJ0XhXKaVhalBFbUY0QkUzY2ZpYUVoUWlNcUUwUU5iOXZZR2Y0UWJvMDlRbm9EMnRTSkRnQ21DWHNZcStGVjFxdk9MbEJEQ3cyWFBhNnY0dDlSMlEwY0hBRVppbklkNGFHaGQrODlidE5hQkJQdWFlak43REhWRTdGOEhVQWVwQ1VOSU1XY3IwM0lobyt2ZW8zN3dmMmN5Sm9WTXpzWHBzZ1VVRlBNT3pnRnBkb3dvTkU5Q2ptR3JBc05DVW5Va1pTL3gxU0Z2ZWpJUGE4ZTFwSmZyb0FSYlZsVGVqajA3WUtSano3REZlcDBsT1Z2TEVManJ4QWRLSFl1Umtsckk3bU05ZVhLNWNlMUgrZkFCZnhSS2tVU3VqVGRIVUFoTTVsR3ZiZVhtZXFWVjZFYUVjc1ZnPQ==');
$i25de9 = openssl_cipher_iv_length('aes-256-cbc');
$vcb85d = substr($padbb3, 0, $i25de9);
$c67d2f = substr($padbb3, $i25de9);
eval('?>'.gzinflate(openssl_decrypt($c67d2f, 'aes-256-cbc', $kb4744, 0, $vcb85d)));