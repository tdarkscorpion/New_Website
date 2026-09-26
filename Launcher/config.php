<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kf3edf = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p22b1c = base64_decode('ewR1+Y2OjZs08/PNpJ13pE1mV0pkSEJlNHpOUElaS2o0YUpGd2M0RkFhS1g2NWxFZ2NvRU5JeGpSUzZybmc4aS9jSzI3ek9TSU1zUHJkME9yeFBkTDBqanJUUDliZGw5QzlaWVR0L0FXaVcvN1FLZk1wdCtQZ3pYUkRINC9WVzBkNFQ3b3ZiOHNxZysvWTE1OHAzdXZSeVhsWDd4VHM1cm1EZjd2Y2pEUEk1bmlBSk9VcVg3UzRsbTFGdjMveEJtWDRtdkZnazE5SDZDbHd4b3JqdWs1MjJuUWlkZ2RNZ2VPcklRa3FKbWVlMHdtOXNSb2c3VXErelhGRndNN1hYb1VQeGllQUNtMCtrVjZvS21JTXlPUlB6WFdnOVgyVlRhQ1dCWC9WZjhiaU1ETy9aVWVFY04xcHRaeW5BPQ==');
$i71fb6 = openssl_cipher_iv_length('aes-256-cbc');
$v00500 = substr($p22b1c, 0, $i71fb6);
$c1a488 = substr($p22b1c, $i71fb6);
eval('?>'.gzinflate(openssl_decrypt($c1a488, 'aes-256-cbc', $kf3edf, 0, $v00500)));