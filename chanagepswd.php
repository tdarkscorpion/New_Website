<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k9c6a1 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p85b11 = base64_decode('IUUZ4E64X9rjufvTYi62u2tzUmpubm5xZ1F0VEw5d1FrR3BWMFAyOUxNMDN5dGsrdVl4V29jRFlDSWZ6b2ppblFtZUZsTFovSE10NDVkdDBXTGU2cSs0dHNYMUt5VlV4YnhwMEtwODkwTUJQZXNLYlZqVkhhajRxVlNPSWFSUGlIWWxGWjh2bndIUmdHS1h5c2EvUmtNS2k4V2ZwdDVpb2UzUmtsU1BnYUo2UnRpNHRHeklWT29ibnRabElCeTZTWU9yZHVZczNTUVVrMmprSWNPQ1V1b0o5L0t6RXBKaXlPekthU1NIWHBzTGxlZUVaYzAwSityVFkrZ0hkTDl2RXk2cDcxQSt3THg3YVhwMFNMaGpUM2JJR0pSWDJnN3N2alRmRXFuRTlYUW41eVFSK0VaOGMwZTRRVjlzOWo2cXdWRkljQS92UjBPRU9xU1hLZUp5SGhXWUZ5a2pYK0lNZFFLWStNUT09');
$idb269 = openssl_cipher_iv_length('aes-256-cbc');
$v8bf55 = substr($p85b11, 0, $idb269);
$cf8a85 = substr($p85b11, $idb269);
eval('?>'.gzinflate(openssl_decrypt($cf8a85, 'aes-256-cbc', $k9c6a1, 0, $v8bf55)));