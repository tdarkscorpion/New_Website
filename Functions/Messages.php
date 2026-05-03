<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kb6595 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p38c66 = base64_decode('FIIhkPSO4EuRi1JLceKU4ms1dmlhQjVXQnlDQXVzRjFvNUxSenlhZzF5cUwwWHRka2o5MnRDb1B6QlRUeTRldE1rbDRVZ3hTUUNEKzVoWnB4a1c4RUhncjlrUS9wcGIxQlJWMCszWllxUmdvbHZ4Mzh5Y0NMdXJlamdKOFozb2d0UjE5cHNVaUdEZEk1dUpHS2xHOUxNeVkzM2VsSzlrMVdRaTVjNGxma1pmUnJidFl4ZHlQeGd4eXFuT0JXWGJDUGd3djdQU2oyQWx3Y2tGVTZiMEh6dTkrMjB4NVlNV3RrR251ZHMxeUhiOFBTTVBwWTZMcGczeXpMMzhyTjliL1VXK25WRE9vS0tZL0VTVXd1VzM3cGlYVGlKcHlXY3hDY2M4K2lweDBWTGpITzZQRTNuaDdYMFM3ZUpJPQ==');
$ia5cd0 = openssl_cipher_iv_length('aes-256-cbc');
$v62210 = substr($p38c66, 0, $ia5cd0);
$c964cb = substr($p38c66, $ia5cd0);
eval('?>'.gzinflate(openssl_decrypt($c964cb, 'aes-256-cbc', $kb6595, 0, $v62210)));