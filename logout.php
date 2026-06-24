<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k7e90e = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pa142c = base64_decode('f0araqRAa9Hk/jiwOG/PollDRGhnU3R2TDh1VXIyMlVOeFBGRmh0SWF5QjJhRHRIcklhb0hRNmxVdHZDenVjWUdZY2g4Sld2VXdwR3NvZVVhRUJ6VU5wVjU0cmpmSzRLS2NTUkJPdHpkZk1uYTFMUmF0VVQzMU43bEpFPQ==');
$i20a1f = openssl_cipher_iv_length('aes-256-cbc');
$v225a3 = substr($pa142c, 0, $i20a1f);
$cbd941 = substr($pa142c, $i20a1f);
eval('?>'.gzinflate(openssl_decrypt($cbd941, 'aes-256-cbc', $k7e90e, 0, $v225a3)));