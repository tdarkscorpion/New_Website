<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k4d20b = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p3c8ac = base64_decode('jjk4Yzxp9yw/Ju9pb7yl1W5Kb05LcjVsWThLbzViSFNpLzNPQjdCUXZMTG92QjA1YlNjY3pEZG9HVS9GTFkwd0F1eGlGa05RNWJzVTNKVDFBY3pKZm1jZWxJUGFmUm5CNUsxckREcUNXU2VsdHJIL3Z1Mm9UOW50TkpCRFNrQnMzWFhVcVlPMW1QVkY2R2pUbWVIbWNta1I0clpoaVJqTG13dmtWQm5qdnpqdmZYOHdQMGN1Q2I1SjZVYnhsYU5QSjdib1VtNGNGWTJ6cEM2cWFtamlHMjRTNlRQZWk3ZEtMdHY4NWYyVFMrYkhlU3hZbHg5THhHcFlLdzRKRnNreFU2eTBVb3NzSUNTcmxTTkJGVEpsRTlOQk1QUUl4TlZ0S2p3emhEQ2FMeDBGS0dJYjI0UFBoRHYwSWU0Zm81WXZnYnpONTZySVpDWmpNMWNLc1Vla1JiOHpxc1V0SExBNmZQOWYyQT09');
$ib1ad4 = openssl_cipher_iv_length('aes-256-cbc');
$vc4997 = substr($p3c8ac, 0, $ib1ad4);
$c10cac = substr($p3c8ac, $ib1ad4);
eval('?>'.gzinflate(openssl_decrypt($c10cac, 'aes-256-cbc', $k4d20b, 0, $vc4997)));