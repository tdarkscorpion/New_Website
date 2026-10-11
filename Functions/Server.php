<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k16f42 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p4727f = base64_decode('4pseLPmlJMv+sMUhbJxTjVVHcTdxZit5a1IraWdmeXdXbkpjWllEZWtuOEwzM21UNVVaNFVRdHNNNERWOTZmTm9TMUlpQlcxUzlnYkU4UXV3WmE0dGw3WnZWanArb3NSWGpvWWwzdTlKU0xjbUhmb1U4b1RMa3YyMVJPYmNpK21PbmNYRFdpbjdNeGh3RS9MdzdqSVp2cEpsT1J0cTZIRk9Id29lUjhjbzZUbDdNRDd4dklNZzNXdXN6TW9uZW1qVktsSUFOYmJnbXV5Q0RCT0tWQmw0VVFzd0E5eTgxWGhtMWRLTWg4ZmNETDZsK1hGd2F5clZuNXZTMDA5UTk2RlMyejQzeWl3UWRsMCswaDVnSTBGYzVHRjdQSXFPNWtrVXppbmZDNHJxUS9VQ2ZlR21vZ2V0RTFyYkNjPQ==');
$idf2ba = openssl_cipher_iv_length('aes-256-cbc');
$v5a09d = substr($p4727f, 0, $idf2ba);
$c8f9ba = substr($p4727f, $idf2ba);
eval('?>'.gzinflate(openssl_decrypt($c8f9ba, 'aes-256-cbc', $k16f42, 0, $v5a09d)));