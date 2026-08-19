<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k39f92 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pf9c64 = base64_decode('dMWuirYpQTKv1A5MCnif4jB6M3Nmc0IwK3lWdEwramZxRmtaMDNLeUh4Z3ZnK0RVSmF3VEdlV01TSjB0dmt3bjY4TzFnYXBIY0JrY2p1Y0lJc2FiOG05R0xUc045Q1ozd0pXbVNxVXlCbUhtUnpvSStCa2svMVJvcUpQNHZCL0xQMWNUeGRVUDk4aVlTcmhYZjlSQ2lEbGdQMHRGbnFSY245c1RDVlhhY2x1T2tYUTdWQ1hNcFlUWnJXTGdaN012ajFoWU95bVJvd3V6b25Ya0dUZUFid0FyQ2ZKaVA2Q3FTYVFhRWJMMEZIYi9haVRtWEx0TmhEaGUxS1JxNHB4amJhLzFwRlFWdFFTSHUreHU=');
$if1d67 = openssl_cipher_iv_length('aes-256-cbc');
$vbd4dd = substr($pf9c64, 0, $if1d67);
$c9fd55 = substr($pf9c64, $if1d67);
eval('?>'.gzinflate(openssl_decrypt($c9fd55, 'aes-256-cbc', $k39f92, 0, $vbd4dd)));