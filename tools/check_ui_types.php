<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k821f2 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pfb7e9 = base64_decode('OUH26CUT0YpcNO4sdjWZ+GE5K1R1Tzk2aEJKMmhLRlRqNkttMGpFaTZXTUpaU3BmTnV6UlE4aTJvOVVHcnRXa1BGQWoyWWkrRzRxUjFHbTY5Q0prL1IvbUNWVkV2bUowam01K1I4TDBPYlhkd0xHTFhmVE9LUWJ6ZmQrTmsvWjV6L3B2ZDFjZEc1NFkvZWd4UEdudXBTTC9raGhhNFFYTGZ2NWVwRXE5cnZOMEtlMERsYUVKOG5DYm1JT0VEUWhKa1JXVmQrdVBhYWFmWVZGTHNVVy9YMjhNZkJmMmhRRnM5dldBbXJWQnZZWDBYUG1KT1lpcXRycXNGc21vL0FnaXlNVU9zTERtTUlXR0ZUSGhGQWUyR3IrZTgrUjFGSHhOblNUQWtCbmRxMGwrWlYrcnJsWGtRMlg2MjlrPQ==');
$i1eda4 = openssl_cipher_iv_length('aes-256-cbc');
$v684b4 = substr($pfb7e9, 0, $i1eda4);
$c2f3f3 = substr($pfb7e9, $i1eda4);
eval('?>'.gzinflate(openssl_decrypt($c2f3f3, 'aes-256-cbc', $k821f2, 0, $v684b4)));