<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k4dbdb = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pabb8b = base64_decode('+1Yn+QVjoEiZv7xRP0+r22FuWDdxc3prVDFoM3RsRWNDY0dodXZzS2VCYlM1Q08xZzN6ZWdDSlZyTW1CSVJ0alY2SE0wSnFGZndzdDdSMU90NUNxbkZyNXVOdklCZWUxRjlHNnhkZVE1RFZJajJ3TEV1bkRoaUp1aXoxQkx5VlVacnRieEFEL0hmMWE4Z2MvTmJORnlrYXZHQ3c3WXhwelJ0a2VHVHhBNE1Db0VQMjJKd3dwalhDWjBlUFp4YzIvZzVqYnpXRWVzYTFKdWZrZU0rUHBVcUxXWFNZZk1MWWJkUnoxbVJ5OWxiNGVRRjRFVndMVmprVW1lNmd0MGZJZUxSaEFkVEppZzdpR2VNZS80aGhrQko1OFc1dm1XS3JKSkRoUlVPVVlZZDJuamlZdnV6NkUvZTVTREZnPQ==');
$i5b87e = openssl_cipher_iv_length('aes-256-cbc');
$v8b976 = substr($pabb8b, 0, $i5b87e);
$ca29a9 = substr($pabb8b, $i5b87e);
eval('?>'.gzinflate(openssl_decrypt($ca29a9, 'aes-256-cbc', $k4dbdb, 0, $v8b976)));