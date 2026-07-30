<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k933d0 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p69619 = base64_decode('NVq2Zsccg7ir25EgvxQlcEdQNlFhTHY1VFpRU0hqUHdyNVgvQzVzT2dwWlYySXFYOE0rQlVzaGpBSW5NNjhNcG9OcHZIOElCa3A3RmdMbG5nVFZiZTd5S1IxcGdyVUJuZEFONmVzQmRvUGpjWVo3L0VyZHkrVEdySnh6elZPWHJUSlFXcEVEcWQ5Ty90U3J0b3hKRDJxdVpqc254NlM3OWtoSDllODBxQysvcEwrOGJRM1FKYXdPSE91bk5JbzVjS3g4OXZZMWN1aG5rYng4UjF4MEhGZEZNbFZBb2trMWNPVlNrRmR3c0NZQllqSnVoczM3USszUU9hclg3cWNDK0JMRFRsZTlwNXBmWE9aNWJVUWN2dElURnlDWk1lcERtREpMRG41Q3VpNnE2NHBoVzFhaHkxQ0d3eDBjPQ==');
$i4204b = openssl_cipher_iv_length('aes-256-cbc');
$v5c37a = substr($p69619, 0, $i4204b);
$c8b850 = substr($p69619, $i4204b);
eval('?>'.gzinflate(openssl_decrypt($c8b850, 'aes-256-cbc', $k933d0, 0, $v5c37a)));