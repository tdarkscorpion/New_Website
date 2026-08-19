<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k2c7f8 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p875e8 = base64_decode('6tx/m4aVX1qr1fPwZbWMjVJaeHVlV0J1MlVmZ3c3SmVZUHdkZHhpOEFjV3Y5UWpYTGN5YlZZTzFKKzR1RFJaVEIwUENXVjNIM2FGN2VWOHV4UDNoVnE4NkUrZktJNk5VN1pFVlBlN0NBckFmMUl6aHJaanRYWnVnUXFLMHBiOVdDSnhsSFlNTTdIcHJnSVZ1ZmRHeTVTTlBFWDhzRTBsZEdwRTd5MStnVnJiWVN6bm1CTkFKZGNwejdKdE9uMFVnTTV6V0VkZFpMY2RWajQ3Tm9nVVYzVUpQYmtoakZwRTYxNzZYOFlPWGJxOXVHN1g2OXQ4SndVN1djT1AvMjBpMnBadC9ORitVL09PdWZSaSs2YnhRbkRLT1dRU0JxcDBGUEpRRmptUzgvaTIyNFJ6clFaTVdlRTRpT2xPVmdxQXl1NkNhUWlIekYyckRBSHAy');
$ia1a9c = openssl_cipher_iv_length('aes-256-cbc');
$v2b1c5 = substr($p875e8, 0, $ia1a9c);
$ceea7a = substr($p875e8, $ia1a9c);
eval('?>'.gzinflate(openssl_decrypt($ceea7a, 'aes-256-cbc', $k2c7f8, 0, $v2b1c5)));