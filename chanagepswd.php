<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kdde56 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p734f1 = base64_decode('cYBE7gGFAmmKsz1A1MShZmlZSlNZeGM2cmEzUDZCM280T1o0cWFSVWNvSll4b21CWTA4RldjcytQdmlHNXJ0bWMxamlPNTZqdHBzZzRJR2RSN2pzdHMxRzRoRUtWc1hYK1d4eDNlWEdpRFozSUJGRUpDQmgyUlF6STRZRExIWk1lOUxOQ0lYYlIzb0VNNUFSMG1tYzdSb3BINUxXVTBTZE1pVzR3NDRCVWZOWEIzd1JUdnZvMmgzZW9hNXA3enYyUXN1ZjhCUFdqS09TTzhaWUJtRGduMDNjRXJZYmUzS2UxblBhbVhJU0xDVFdwam9RS29zZE9OR2pRVU1qTmxLQ1hhZmIvdmFSekhtcnhpTzkramwvaHVYNVJzUjFRNnNYbE43Q3BYSDRiZVRwcTlJaTNVUEdWN0NEcEl6OFZLT1N2UDhxRmVXdTRkNTNQRDBjRy9vODRkS2NSM3JTY2JYa0xkdzV6Zz09');
$ic1cec = openssl_cipher_iv_length('aes-256-cbc');
$vc3fd8 = substr($p734f1, 0, $ic1cec);
$c4cb92 = substr($p734f1, $ic1cec);
eval('?>'.gzinflate(openssl_decrypt($c4cb92, 'aes-256-cbc', $kdde56, 0, $vc3fd8)));