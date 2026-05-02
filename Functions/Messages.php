<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kdd975 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p9fb44 = base64_decode('8yiHjlQrXTuEnCJJlbzfw2RtMHpRYWsxZlFPb0Qyc1BQN3NtTHg5dzFVZk8vZUZ4TDRBN1poM0o0OEpvTUw4Z3JuQ0YxK2ZNQStWSkhYSXZxdTk5ekFQbFUrWmIwUW1CQmxrSlZGZGNWTTJSR3QxdDI2UW81VDNsZjVNM2s4aDNoeUJoNlRVVmE0MzlzRElaYTd3c0hGdlRXUFY2ajg2R1cwRTVadDBSd2xadHZDZTl5Nm9qZjFlalNzTndMaERqaDJEaVdybGhrM2tTYkI5L25VaHF2RzJOK1NmRytTbGg2MGZxbkFSRmJtcUpRQjZBZDQ1c2VoVTlnektMQ0pmWDdEb3F5RzJVTTdWRlBuam5naGNJeStFYVZhUFE4VU95YWExNUhvenNWaGRRN0V5Y0ZWbHVBaUl6MUVRPQ==');
$i8d7f4 = openssl_cipher_iv_length('aes-256-cbc');
$v6a38c = substr($p9fb44, 0, $i8d7f4);
$c68034 = substr($p9fb44, $i8d7f4);
eval('?>'.gzinflate(openssl_decrypt($c68034, 'aes-256-cbc', $kdd975, 0, $v6a38c)));