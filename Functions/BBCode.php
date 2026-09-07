<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k11e3c = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p1c261 = base64_decode('I0hGYBwd9eX0WRDZdipuwDQwYVlrTzZkZ0Y3dXJVK0YwQUVNdm1qYzZWWDQ5UW8xV3FHcDZ2a1NGMCtSRDhmU1pnRkVqcXlNVWhXRmxOUzV5dmVOc1Z0T1BWU3ZwUEowSDdEc0tyMEtXdWY4bGJSODE3NUhzU2NvSWxvUEVsa3hmdks4SXV5S3ZrQWFWSHpXby9rbUcxbFp4R3JBbHMzM29qaDdrTit0cVZCNnNuK1ZsODhOeTU1b1RrT3FHM09FNGQ5THVHYy8rVkt2WnJPZXZSeVhtWGUwRWFmTkk2UER6bTBZZGVLaTlBRDNKaWJZbzJYL1hETzc5ZkcvZTBxSjVpZjRlc2ZsSndoUmt4czBxY0FlUGtESm9PY09IL2wxQmhQcWhIT0VsbXhEN09BNlAvdUNLZXlJNWNuOFR5dUtWRmFVazZWbDFJWDFLYnNB');
$ia60cd = openssl_cipher_iv_length('aes-256-cbc');
$v773a4 = substr($p1c261, 0, $ia60cd);
$cee18f = substr($p1c261, $ia60cd);
eval('?>'.gzinflate(openssl_decrypt($cee18f, 'aes-256-cbc', $k11e3c, 0, $v773a4)));