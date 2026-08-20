<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k23ff9 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p894ef = base64_decode('nahGa8qhl2t8pFDZ91EtkDAyVzNVUDN1ZCtZWVlEb0lZZURiSmtIUENnSDNsOWdIZFBHZTZTLzEyQ3g3K3pncDU0UkplVS9zV2tGTnBKWFgveGFwYjBtSEJSeFFKL3dzdWJXL2JuOUYwRGQ1SFE2N3B4bUVVZDluUDg2QzdhZ1NjYXdWbkZrc0REd2dFZTZGQ3RTWjBWUlNOZk1yMER0cHJmai9kZWplS0JMd0RDU3Z2aTJTbkdyeW8vUTE5NE1mWFBXakY4WXR6MjFNanJRRVNQNnNGY0JaWVhKQjViSTJXUW42OVlJaGJFKytGUkMwelgvbmppZ3kvR29iQTBJVGh3Q01xSFZLTEFDMUZ6bnJJb1NlWENJelJ2RUN6YkNWL2UxVnArSkNSNytSOFA5VlgvRXFKNnRONHgwPQ==');
$i860cb = openssl_cipher_iv_length('aes-256-cbc');
$vc15bf = substr($p894ef, 0, $i860cb);
$c72750 = substr($p894ef, $i860cb);
eval('?>'.gzinflate(openssl_decrypt($c72750, 'aes-256-cbc', $k23ff9, 0, $vc15bf)));