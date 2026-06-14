<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kcb3ca = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p19740 = base64_decode('OX5UbDeNVAYrZnBQIgYDJjQrTDJ0azJWTHFJa0kvT3NWQlBZbjBjdnlSVHRUeDlURFZZTFlIc1RKSUZxelB6K1NHVlp1RzlGMmZzdDUrVnpqNm9TK1hhZ2htaThRV3NGbEZKelIybzN6VEZNWW5QeTRsZ3F5R0owQ0xaVStyR1JUcTBKMUtnRjZLSnFPZEFwa0R0K3I1Wm9FWTFjL20xczY3dmZReUpsN0ZQTWRzY1dtL0hnVVdoZ0JRbTFQSEw4TkNEY24xcVNaUUFjc3JmT2M0VDhSbHBrSzNqMjArSjk5T3BkcWc9PQ==');
$i7cbfc = openssl_cipher_iv_length('aes-256-cbc');
$vedfd2 = substr($p19740, 0, $i7cbfc);
$c3bb80 = substr($p19740, $i7cbfc);
eval('?>'.gzinflate(openssl_decrypt($c3bb80, 'aes-256-cbc', $kcb3ca, 0, $vedfd2)));