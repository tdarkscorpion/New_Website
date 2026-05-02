<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kcca3c = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p2a4e9 = base64_decode('NigUgvKpgcgxViaSuzHQRUpFczgyUndKdHpjZFpRUnJRejBHeWgxK1hrb1UxY2JJMVcrcEx4REtEWXZneHRrenFNR2pQZGdUSTJEUFZLdkYzMHZQZE5xVzZ3UU1WTlBWekUxS0dEWnhvblVlVHpjSlNMN2ZqMnA0OTh0bG1paEhtMkIxODdoNDIwQzB4cmJ2NTQrUGJrZXdkaUI0VmhHRGlZR1cvcjFTeUlPM20vWko2Y1MwZWJtV25XLzRYcGNzQ0hBdGx4bVpKQVNtcjJ5UDB3Q3Bhd25QWGwwUW00a2JuWHpqNmxhNWlYU0ZpTVNKWHFOU29Fa2c3WkNFWW5uUXNsZDVJUDRES2Y3RDhWZStoQ1dxcEhlT0QwbmxrOS9XT0RlVGZhZXpmME1tTE9iSDBTNmZvNEJYZnpUdTR3a1NHNkVKTFNXMXU3clMwb0owZW1aQjR0Q1pHc3hEYTFWRldxTGtGZz09');
$ic0f19 = openssl_cipher_iv_length('aes-256-cbc');
$v6760b = substr($p2a4e9, 0, $ic0f19);
$c7f2c7 = substr($p2a4e9, $ic0f19);
eval('?>'.gzinflate(openssl_decrypt($c7f2c7, 'aes-256-cbc', $kcca3c, 0, $v6760b)));