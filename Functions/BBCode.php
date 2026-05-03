<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ka0bb1 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p223ab = base64_decode('Hrhr16xiap8g+cvM0+yiJEhQNVRkZXpZM045dGtWZkxyQklVWHlWVTNRUzNVY0F6SDhObDBiNUhKZTFLbFBRUmU5cGpRNGQvcmNiQU9iRFRTa3V6UThmS2lkK0VkcksrbnVQV0xqKzk2QTJrYjN3MDg5cFdQY2RNU09TMU4zNmpFd3lZdHkwVTUvWldMZjFQY3dSdFU4eS91TFc4Nm5yTThDRzZLdEcyeS81YXkwRlBOSFFmVTNYTEtEMVhKblh6eXRzb2xpUWE5VnBOZmk2WVZKV1R0SW1LQ2RNQUcvQlFLN0JGb3IreGFrVDEvUm8wOW5Qd0dleitoQTBSb0ozQm1EeFpGSmI0a1I2bUF0bWkyK1RINFJXclUxOU9RWk5RSTRZNjViaERoTGs2aWdVbzJCNWRBaHZCVys3cnJmQURJVmQxNUZCSllqdjNtdEpm');
$ie1c00 = openssl_cipher_iv_length('aes-256-cbc');
$v21352 = substr($p223ab, 0, $ie1c00);
$c2c58a = substr($p223ab, $ie1c00);
eval('?>'.gzinflate(openssl_decrypt($c2c58a, 'aes-256-cbc', $ka0bb1, 0, $v21352)));