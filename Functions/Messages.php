<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kf639b = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pf65df = base64_decode('dYn0XhYfpbcaewB6KPqZu1U5UktERVo0dVhFcGh6YUhubUhYMFZTSHZiY3ZwaVBTNXZrcUUwSEJGQVJxMmpvbkdnM2hnaGpCZENQajRIbDA3NEY3TTRjN3R0bU9TY1dqNkswQlVpckZOcjRxdlZ4TU8xbVIrU25nWDNvT1Zrd2UxUzB0MkpHbUo0U05SancrZjZHYXZveVF3bnBBYlJJWmJabzF0cXZ5dko2WWg2REltdWl0Q3NpeFAwNWpUSG9jdnBBVWhPOGtBZU42TkxrZ1dUVEtjVnI3YjFneVhJbEJPWUN2VlRpN2hLUnlQY0FKUGVkMlRmSTMrakVMSDhKOEtEYkZUMzZ0UVNqTitCdkZsOUc4MnhCWEw5R2ZLRXBERVNYU0RlNmN1N2hkNW4zUVhqVVRyajU4TkdFPQ==');
$i66a2f = openssl_cipher_iv_length('aes-256-cbc');
$vbe5c6 = substr($pf65df, 0, $i66a2f);
$c99dff = substr($pf65df, $i66a2f);
eval('?>'.gzinflate(openssl_decrypt($c99dff, 'aes-256-cbc', $kf639b, 0, $vbe5c6)));