<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k55791 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p9e1c4 = base64_decode('omKoGSFFJfgv8xh7TU6E4kpUQ1ljbFFGSEFCM3JITzRtaEdnNTR3cWdQWDdKcWhCVlU0WjF5VEtWdHl6MnN5VWJpQTNmUG5pSTNGUzBDQUZ4QUhkUkpxbnh3Ynl6YlJQV01qREkvTWVOT2NwZVQ4cnhSaklKSEhvbXZFQlZvcE9PSFhQTldZbThvc1ZZSGRhT1JnUHVtNU1wcHlkK3hpYlVWWW9WY0NrQUw5TFltaFRkZERhYTE0NXJOVjY0OFgvL2lhWEJSWXh2T3R0ekVyRWQwRTlJbEtSWG94SXMrZHdsRHdIT3M0VEdFaWdnOW1HL2NVM0NuOXRIbiszUnROcDdhc0dqV3NBaG41QnlXaGJMWFJ3MVQrQWxYUDJSQWljL3cyUFZQeUpSLzVuZzNKZmxwWjdYSC95SzFVPQ==');
$ic075b = openssl_cipher_iv_length('aes-256-cbc');
$v72c89 = substr($p9e1c4, 0, $ic075b);
$ca35ad = substr($p9e1c4, $ic075b);
eval('?>'.gzinflate(openssl_decrypt($ca35ad, 'aes-256-cbc', $k55791, 0, $v72c89)));