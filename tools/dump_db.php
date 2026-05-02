<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k3fb3e = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p2327d = base64_decode('9o/35bYVUtNrqlvLGBsHdUJXY0Q5Zk5VL0lPQWdDcEgxSXVrb3Y3YTdGLzN1NjVtbk9Ic1RJK3ArU2ZIbGlzV09VWEZZY1g0R1lCKzFFNDRDL2hXeEFtS0pDZENwVzZoUE0yeUVDM3FnL0JKdW1VZXZHV2J0eWFqeFBrOVFoS2Y4SklWYjZpWE12SFkwdlUrOE9IUFZRd3RYOHArdW5TOS9wVnpYUjlhVFlwRnpBVzc1Q3RTTW5HVHN3NG85aVlxSkNCdHpNS0c3ZGpmNDFVQmZMZEJyenQ0bnRyMlFzUjA4N3pjUXc9PQ==');
$ie1ab9 = openssl_cipher_iv_length('aes-256-cbc');
$v379da = substr($p2327d, 0, $ie1ab9);
$c7a9b3 = substr($p2327d, $ie1ab9);
eval('?>'.gzinflate(openssl_decrypt($c7a9b3, 'aes-256-cbc', $k3fb3e, 0, $v379da)));