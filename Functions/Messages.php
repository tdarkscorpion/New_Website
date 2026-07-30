<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k6f566 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p1569f = base64_decode('pHSqImkmLrafT0BCocK/Azd0Nkx0MzJ0QjhuSzNnYnNTd2NMQStQckNRZ2tDQXIrTnZERVVGeWozRFQ0RlMyMC9xZVZ1OWFMOVlycWg1c0xCRnJ0bVBwdk56bEFkTHl5czVDOXNqNkxvbnNBU2xnYTAva1V0MGNWWUNtSGdYTVgzSW1Qb09zWDZzVnc0VUV0RHFGQ2NqYytjOVZ0QkxtYVd3RHZsTFc1ZWY2R3pwaVZRTTI1L01PN3dCVHFGTXNRZEhmaTJlaWMxcDlGM0dyQ3U3ZW4vbTVXdzcwbXUrbnNLTkpIcTk1OHgreFhPUXZmZGFYc0lObzdCZW5LZE0zUmdMSERqMVREd0NXZXBDK3RUUGkyVk1rU1pYOGxCeUJOeGdPRUd0MHpLaDR6VHNUVUtZVkc2MHpUYWo4PQ==');
$i68e4f = openssl_cipher_iv_length('aes-256-cbc');
$v3e534 = substr($p1569f, 0, $i68e4f);
$cb3056 = substr($p1569f, $i68e4f);
eval('?>'.gzinflate(openssl_decrypt($cb3056, 'aes-256-cbc', $k6f566, 0, $v3e534)));