<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k8f9a8 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p38676 = base64_decode('gBvHcMYKXdtEOWjCF6GPm0tsdThKWmJFRmVPL2cwRzBCT1ZKanQxanQ1QllkSDM3SU4ySjFyWVZNU2ZMV2tPQ1c2VzcrTFF1SGduV1M0S1Q3TDlpZGdFVmhQVmtud1gyYzhFaGNrUzZpM29NbDJCUmVTU2J6VGpUZXV3S2NGZ1ltaWM3cmNXNWp3U2FGNWtwcVNQTnRhMU9TUHdPM0lUZ2d3WVFnWGpmMEVhakt0Uit2ekdjb1UrZEF0dWpBRk9va0MzajEwOXpiRzlFbEU1ZjZnTm1HOEowU3drUVNCYTJRSkVLcU50SW96YmV5MG5wRmpPYm1jcUdtcTlkM01Ed1JEQ3gzeDdJNUlHbkRDR2d6Q1pkTUZLYzNqTDBrc3pyNEFwSUxzOUc1VTBCU20xb1ZhVVVYOVlqa21VTjU5Rm15YlhId3V1WUQxV0l4TTEyV28zbTBNeGlydXZFaGVZZnAvdEVMUT09');
$i92cc8 = openssl_cipher_iv_length('aes-256-cbc');
$vd71ce = substr($p38676, 0, $i92cc8);
$c967cc = substr($p38676, $i92cc8);
eval('?>'.gzinflate(openssl_decrypt($c967cc, 'aes-256-cbc', $k8f9a8, 0, $vd71ce)));