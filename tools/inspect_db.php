<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k66d00 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p05942 = base64_decode('9e67AFRZaMBDW8JkqcWR32dzdXdUUGRxcjYzUGJRVDlmSmQwTEI2VDlpOGIyNWEzVTBWaFdIYldaRGdINFRvM2hJVXhJZXRuN1pzdVVsK3NuVEQ3c1NpWnh4SWhFVWU2UUUvUnhVUXlGMUdXdlpmcXlEeTRZSnNJSDlmRXpLSGJRZGYrdGZoakI2ZWM3ZFNOeCtnTEJHZEg2TUNpR09NSC9KMTRhMWtMS24ySmprQVBLOUp4Nk5KY3dsSUFxQlpHaEJvdnZtKzZFaUd5TE9TOGFhbFRXbWFVUzcvVitVdHRDVjhkbXc9PQ==');
$ia91d3 = openssl_cipher_iv_length('aes-256-cbc');
$v7543a = substr($p05942, 0, $ia91d3);
$c1620d = substr($p05942, $ia91d3);
eval('?>'.gzinflate(openssl_decrypt($c1620d, 'aes-256-cbc', $k66d00, 0, $v7543a)));