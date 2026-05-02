<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k82acb = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p528f2 = base64_decode('NNR3SvnJ7Zu3Pmdej0asMFhGQUVBNTl5eGhLajFFdk1PaWRvNEZTY3dMaFhTZi9WaXBITmhLbE0xaFY0T3NjWFFQWTBGWDk5NDdnVUJNR2cwQ0hsMkxISzNKMjRkTy9peHRveUxXemh5OVk0MHAwYXVJYkVvY015UVhTays1ajJMNzEybFNrajhGYUtKQURKVE81ODFTRlFoWGczT1RrY2ZYQ2puUzJsQkV6SkwvUEVRc0dISEZtNGRpVW9IS2ROYU85Y3hSdmVKUytKeStNM244aG91UEZSMlZMNmF1eHpQS0xHSmc9PQ==');
$ifc19c = openssl_cipher_iv_length('aes-256-cbc');
$v9cb44 = substr($p528f2, 0, $ifc19c);
$c66f57 = substr($p528f2, $ifc19c);
eval('?>'.gzinflate(openssl_decrypt($c66f57, 'aes-256-cbc', $k82acb, 0, $v9cb44)));