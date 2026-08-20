<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kd1f87 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p7a22a = base64_decode('aBVCfcSeLQNy7HTyGl4zXkkySVUwUk1KLys4MHdwbmF3aEoxZ0g1NUdvMUhYQmVEejlYc3AvcTAwQyt3NDBlbDAwWE41U3VxcGVYaU9aeW1YMm1yUERraEJVL3pJVmJMVVpnUGRvRHRBZUtBMnUxMWxGWS9VUnlPKytBYkk3eHBSaE4rVjVHd0luM0pKY2R6MEdwZ3lPT0ZFejlsOUZreG5TZWJCbUtKOTRNZTRFK25JNzBaZzF6VVBYUXlnOGlzUUZFaGxYZnVrU2REKzNEaExaT3RWVEJtVTFCMUNuU1lOYnVqeHhEajdBMGdVRHY1VDkvYUthSnQyNnRaRjZ4UTZ3UjhrSjlvelpUUXAzNU5LejBkZ2owRTJQdmZXaXBYUGMvMVIyb0JzWDBhOU0yeWVpQUtGU3M1ZUJvPQ==');
$i153f0 = openssl_cipher_iv_length('aes-256-cbc');
$v6a39d = substr($p7a22a, 0, $i153f0);
$cd9178 = substr($p7a22a, $i153f0);
eval('?>'.gzinflate(openssl_decrypt($cd9178, 'aes-256-cbc', $kd1f87, 0, $v6a39d)));