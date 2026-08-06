<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k62a14 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pa498e = base64_decode('CWIeqy0Jr6eu7TEI2kje2UZEVDB6SGJFTitLZzhTOEY2MjdCanVHQ2tOUTZwQ0xHcU9yTHduMmcwajMzSS8zQmRKOENHY1JPUDlGVnpCODVWN0dIOWFHOTFaYWlWZkpuNXlIVVlHN3BTZTNzRnpDY0VyanZHbDNqcFVjPQ==');
$i565d6 = openssl_cipher_iv_length('aes-256-cbc');
$v7281f = substr($pa498e, 0, $i565d6);
$c6e4e0 = substr($pa498e, $i565d6);
eval('?>'.gzinflate(openssl_decrypt($c6e4e0, 'aes-256-cbc', $k62a14, 0, $v7281f)));