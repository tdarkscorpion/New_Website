<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ka1af9 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p35a05 = base64_decode('WeD/RtR1pQJTjJXkHuYFxG5menAwclkrc2s2Ym5KNkIva1VkSndjTjVrdzRzRXlVdjQ1TVNTa3dwRk9uWkV4YVNHd015cDUyRUV2S2c0dDdodThQTHRhaUE2RzUyeCs3Z2hpRU0xMm0yckpsYm5IRVZ3bzIyRVZtVFNIL29BRTZaYS9pR2RPeWRRRm9HYWpSUjZCZDRjR05DOUhEVUZaZHlZUGRNMno0OVhic0J0SDIwYTYvWHZSOEFHZ2lQditPVXh0bDY4elBNa1BLQldWa3VEYWFQT25ZV244bThURlA5ZU9sNlFzNkxUWXB6Um9LdEU4OHlORm1iY1U9');
$i4a950 = openssl_cipher_iv_length('aes-256-cbc');
$v81bf8 = substr($p35a05, 0, $i4a950);
$ca6302 = substr($p35a05, $i4a950);
eval('?>'.gzinflate(openssl_decrypt($ca6302, 'aes-256-cbc', $ka1af9, 0, $v81bf8)));