<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k81013 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb89ce = base64_decode('7zAegyt1eOmQ5Y5Rjyk9VzU3cGRnSkxxTFhKRVZNN2tVYTRXN1ZWSkFvQ2pYR1FNM09qUUVnUngrOEtXalRJL0VuY041QUc3TkRTU0VBdjhaVEZCWjVJVFhDcWh1akpJRlZFT2pTdWdRcHBqS0xVQnNQRTUvUWZQa1EydUI1STNSZW0rOVRVTjZxNHBLTUZvRGc4d08zQis4YVprekZuYSt4VDNWc1Nta3J5YjNZV0UzNys5a0tBV000QlFtT0ZQOWlrSURsUmduZU1IczBxTk9aeE10cDdUSCtpNmExT3Y3clE4Sm52bkpBVTYyR0N3R1ZZNGlodUFQZVl2ODZYdkJUS2E3VmlrOWtvbTlJK0NvTjdTS1RSNUNDRUhYZndlR2FpT3dpYldwRkpkUk1JWmlGUDUwQVk2Y2lKYkQzOGUwMlJKT3haZGhETlNXQ2xt');
$ie4243 = openssl_cipher_iv_length('aes-256-cbc');
$v4b946 = substr($pb89ce, 0, $ie4243);
$cc851d = substr($pb89ce, $ie4243);
eval('?>'.gzinflate(openssl_decrypt($cc851d, 'aes-256-cbc', $k81013, 0, $v4b946)));