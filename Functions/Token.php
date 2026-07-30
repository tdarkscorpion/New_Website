<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k37691 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p04c66 = base64_decode('r+yL7GGd926kV3X14cq0QVNBVVEwaVhMejlxZGJycWxxazBZaDdNVW9KUGxmNmR6SENXc20yRFBZaHJIRVNsd3k2SEU4MGRBbDBSbTN1Q3ZMNVpWL1haemNaTVkvY1Nwc3VRcC9KMjVtalVOdHphZm1LdnRJTDRrczVrYUs1Y2MzUGkyR1hsWk9IMmVqSVF4M0JENE9JVTVDTEZSOGFBMVYrM3hRYi9ZaVpoS1Q0TlpBdEkvenpkOC9MdmhhSno1ODE2Y2s1WE8zY3JRZEJmUnVKUVNXM2NQWWw3WkJuM0hRZVJJWFBxWDBiL2pDQkNmdWErYUwxL3N5aXFKc0ROcEZab2NFQU9EZitxRG9YSGE=');
$i7e208 = openssl_cipher_iv_length('aes-256-cbc');
$v6ce1e = substr($p04c66, 0, $i7e208);
$ce5100 = substr($p04c66, $i7e208);
eval('?>'.gzinflate(openssl_decrypt($ce5100, 'aes-256-cbc', $k37691, 0, $v6ce1e)));