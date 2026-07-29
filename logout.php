<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k77d26 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pe6cfd = base64_decode('AIoA3G4sLDpKuLEeZwBQ+E5NVzdrQzdManZmeG94SUdiVGErTWMvb3JqSzR4T2dzdnpsb3oxVU00SGpkckdzY0VzbmM5TG5KOHl3WFFkdW4vUStuMUpzbHJiazhwK1lLZVZybXBiNlhSMVNCM2JKYnRxQjBsR0V5ck44PQ==');
$if1603 = openssl_cipher_iv_length('aes-256-cbc');
$vd2530 = substr($pe6cfd, 0, $if1603);
$cef8d2 = substr($pe6cfd, $if1603);
eval('?>'.gzinflate(openssl_decrypt($cef8d2, 'aes-256-cbc', $k77d26, 0, $vd2530)));