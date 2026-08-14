<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k65b37 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pcfced = base64_decode('+DuwVGaGfxQH+psy55BIQzlFVDhQQ0tUbzFRTGlvQ01TT0tCaXZZakt3UjU4OWRIWFFzdWZhZkVadXFtcEpubEM4dGdOVEwrUEhhaU9JYU5pcU5lSUlGTHN0UUowYjBYSEhqT3dYSmlLaW1KQmZpZzlwY3J4UzdqTjZxOExjRWJOdkJBQnFXQ29VOEN3VDFIcXR4VHpUR3YrQjFDcmxNVFZTakc4anR1MUdydUpIczlHd3c0cHNJSTFPWXl6TDNmc0dlb0czbmFwTzJPc3NSWXlZZndyWHM1aXpWOE9iTXFJVUg2WVkveEUwNjBNU2FWakZyTzRBVFJ2TmpmUUJ3Z3FiQVlHSU1hV051dDlEa0k1Yzd1dU1RQWJSREYyM1N6dGh5TXNraFhFenpJdEtLaVF4ejcwOGZseHhvcFBvWGQ3UWNHRUttZEkvVmJseHY0QlAzeVhGaWhFbzFiMnVzVmZydVNHQ2wzSmRKK2tuUnFHdm1PckRlalhRSGNjZG13bzlvN2xPR2Fvd1VGMDlmWm5aQUJZSUxpNlhBM29nam5iYUd5SUhTUDFWZXRHR3VvRnpvYUc2a3p5MTM4UHhVWTRuK2I0ellTWU1YekF5U0w=');
$i808e3 = openssl_cipher_iv_length('aes-256-cbc');
$vc123a = substr($pcfced, 0, $i808e3);
$c80ad9 = substr($pcfced, $i808e3);
eval('?>'.gzinflate(openssl_decrypt($c80ad9, 'aes-256-cbc', $k65b37, 0, $vc123a)));