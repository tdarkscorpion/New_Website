<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k63f91 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pe9990 = base64_decode('V/bNjKIP36ej+09PBSS691RMTHJ4L3BzakJOODUvMGhIMzdmZjBPVTAzYlQ0clczVDJZTnFGaStUcERpT2xxUVNNcWJCWjB4dWNDa1JuaHh5aEFNQmJqaFRNYTZ0Tmh5MGliMjNHS3cvYS9wYldOdlliemJLRVdSa1FrUHhOWnRKNElSMjVTd1NSc1FoU3JoSHB5QitDN1lQblR5ZGs1ZmtvUE12ZEgvRmNFMFR3WTUvTjk1a0RMNi9YOFErVDM1NnZtTWtYK2xRaW4yODZJVFRoeWs5QmpMZUZnUmhRb0ZRaHVYV1dNMkRjaDVXUXpZbUlRZldHMWRJZTZCRnFibFloZi9tc3hhZ3JPcis1Nk5Ndi9LNUtrRkFmYmdKNHF0RGhZTG1lQXBJSlkzTVppWFQycFVCOUdBdmc0PQ==');
$ic2f94 = openssl_cipher_iv_length('aes-256-cbc');
$vd7c3f = substr($pe9990, 0, $ic2f94);
$c6f73a = substr($pe9990, $ic2f94);
eval('?>'.gzinflate(openssl_decrypt($c6f73a, 'aes-256-cbc', $k63f91, 0, $vd7c3f)));