<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k613c0 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb42fe = base64_decode('YfKFPQ09Gqsqda/G3DoC4Go2Yk05VXUvMm9VOWpWSUQwUGRuK09JNjU2NkJDNkxEVGx0QXRFUStrSFZlMCt4cmwvcXRpMHQzNkNJUFg5TlZLVFRMMFdUMmJqeS9iOENtemhxTjZPcEJSeGdZLytjNTVwQ1g0c3FJdHlsaDVsVHRGWWJjNkNVOE1VS3NkWnpXWllFTFQrMUxaaE1YdzlOZmorMDM3SVJLR0FmL0Y2UEhRbkxZT01POEVYZzdabWFjQXU3VzJBcEp2TzQ2Y1RlTzZuSGgweDlsZGNtZHRDZEFLQ1ZIa0pOYmhmWHJkZVdHekNod2FWUFdYbFNJVjNxRTREc25ZdnR3OWNtMEZrUmloMVBKaHhlTUxtTDF2aDRYdFZLMVNlWWZjZXc5VUtSUjR4QlpDNWdNUDhvOExHN2xsSGdaK08yWTJod1AvVXBC');
$ida8e2 = openssl_cipher_iv_length('aes-256-cbc');
$veea1a = substr($pb42fe, 0, $ida8e2);
$cc7d00 = substr($pb42fe, $ida8e2);
eval('?>'.gzinflate(openssl_decrypt($cc7d00, 'aes-256-cbc', $k613c0, 0, $veea1a)));