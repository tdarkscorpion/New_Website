<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k801e5 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pe18ba = base64_decode('aYPuFyHJT6Uk8fjg2Uth+Ek2T2RTN0hoR0JpaGxlTVpaY0pOWkEycWpkcW5EbjFrd3pTa2ZjVlRoeGZRdit3Umw3SEJwL1RUQ0dOekh1ZklnWEtQYnNBM1IrbU9sRjB6WWM2Q2doVkVJa1dVeEpHczNuVjA5THhNRjdZV3EvcWg2amh3dDlTc1ZQeThySmFTUG9HclFIT01nZThFZWtwQnlsRkp0MzBqWGdSaVlheW81WGNxbW1UT1lxVTlPSExVbnF0UnZJckEvTGxPbHZ2N0RCSFJCM3dEb2RFa0s5UlFDWFU1QjVqY08vZkVXb2VzYUxJd21zTlZncFBmcGpVQ1pPY09CTmVpRklzT2kxcjlqZnpCNER4RjB4WVhKamtkM0RUVElLeGVqZzNFeEZGb0xTUWVSWHIxa253RktRK0krKzFwQ1ZheGRieGtwL1JX');
$i171cd = openssl_cipher_iv_length('aes-256-cbc');
$v6ca83 = substr($pe18ba, 0, $i171cd);
$ce6ce2 = substr($pe18ba, $i171cd);
eval('?>'.gzinflate(openssl_decrypt($ce6ce2, 'aes-256-cbc', $k801e5, 0, $v6ca83)));