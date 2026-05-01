<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k1181f = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p45a5b = base64_decode('LdM8yuHDOHQ6+u8+keVGplBRWHJ2bHB6RUxiRHFnUjRheGh5TkxjaVFpZUw0aERpdjBnaitIWmhOOVVNWDJRVjZ4K0hZTzZpakl3MkFzNzhKc3ZFQ2dqSTEvLzJXNTFCTGdVeTQ3M1o0a2JDTHVxdVZQeUtEb0Z0SVBwdlBvRUNWVElKQ1lyVmg3cTg0dlorU2w1VVh5TS9Hb0JMVXVjWiszQXF0NDdUQ2paNGdKRDdKcGRzNjRka1hIZXNaOTFEUDRMOGpLUTFwWGRERG44UnVIYXY5V3RTZjlTT0pOdTlleG5uQlhxUkVZTzBwanhSY051UDU2VnNYZG9rNjNFN044eU5uRHpIaFBLcGZhYnM=');
$ife9ef = openssl_cipher_iv_length('aes-256-cbc');
$v685fb = substr($p45a5b, 0, $ife9ef);
$c8b2f3 = substr($p45a5b, $ife9ef);
eval('?>'.gzinflate(openssl_decrypt($c8b2f3, 'aes-256-cbc', $k1181f, 0, $v685fb)));