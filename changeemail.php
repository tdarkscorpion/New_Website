<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k11a04 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pa06b3 = base64_decode('xwxYR05ObdwtQKlAWtMeXjhpT1krUU5oWktZOUtFNVlWVFo0d0xMeWJWQVZGSzV1dFNhRjczT2VJbmk2VHZTRDIzSDhxaDExakRhZXc4UDk1djM0TDUrUms4QnlxMlQ2SmdLOW9ENlBpemlVTlVvRjl2RFZpWDA1cTRqSVVTZVQ2RlFXNEp0ZWVPay9UU08zeVVxOS9oU3lzSGs4bjBTSmNJVFNaOXhiVERRSHVuQnBjVExmSkRSSEdDeGhVNS9obDFOdHlnSWZqeCsweWMxYytsWndqMFZ3NTREaFdDVjBWekgwMkxlcWEvSU5YZi9SK2JFV1p1SjVQK29qSjJGcEQzUElQZmE1QTZuenA1blgzYytHMjd4eWN3eSsvOHRGSWxZSFpLMzRxckFleC9MT3Bmc0MzK0o2ZFFkSzB4NjVxZ2I4UUhmdkhaT3hzMGpQNzJNbk4xTWdpMGlGVTRralNMU21OUT09');
$i9dd82 = openssl_cipher_iv_length('aes-256-cbc');
$vc4daa = substr($pa06b3, 0, $i9dd82);
$c3785c = substr($pa06b3, $i9dd82);
eval('?>'.gzinflate(openssl_decrypt($c3785c, 'aes-256-cbc', $k11a04, 0, $vc4daa)));