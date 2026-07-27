<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k9c78c = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb05fd = base64_decode('80Zo6HbTmZoTL0RbS62c6lpYOHdBcm5FZ21BdERPVG1yZVFZZ0Jod1JqTTRyVlNoajEwSGJPQ2RadUdmMnBuaVJqbzNOUFBkY1l2a1RCcXdEWnVpRi9FZGhGQ2dnWkc1RUozajBqNW8zMWdHZ3hBejhMZW4wd29SYnE4UnZhd2tiVE9TQU1ZbTBQV1ltZU9YaUhEU1NkSTkvQjF6UHZaVEpjUGhvWE1JTFpCTEFka1pRQ3NPR3haOGhkMlZZZGNDWk9SQllSREwvSkZ3VThPRFlGSm4vTi9UbjlJWlJpR2V0TXNJQURTUXJYOU95WFZuNTRYU3ZXampoSjk4b0RIUSswODluVjlFcStNSE54dG4wbllCQW9yZHZFZzRvTXhPZHc2dGtTYld6eTJLRHJXdkovQnN1ejEyZkMwPQ==');
$ia2a36 = openssl_cipher_iv_length('aes-256-cbc');
$v1c24b = substr($pb05fd, 0, $ia2a36);
$c2f021 = substr($pb05fd, $ia2a36);
eval('?>'.gzinflate(openssl_decrypt($c2f021, 'aes-256-cbc', $k9c78c, 0, $v1c24b)));