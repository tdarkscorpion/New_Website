<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k55836 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pe9d11 = base64_decode('f8I9UE2/HCx3mmR8xHyOX0Y1aDhzYnVybHl0NWlaVHB4c0RxdVpiQVI3RmR4ZUNIZHdjeUN4ZnJ0QjByTXBBRjlXVXlZYUdHaXRmUUJLM3h2NWtOVmNmSzVSMlFXcDZZUjByODVvWWdURHJOQTNadmllVWphaERTeHh5b0dueGxsb3JBRmFXM1g1RlVocFdlRk5JdGplYjl2UlJBeUt6dW55MUx3RzVrZ20zMDZOSXJwQWFYcUxyNEh6ZmRUN0U0U2ROOENXMlZSSUpKd1l1MjArYThMcjNzV016bnVUa3U1TWJ4cFphVEU4Q1BOTjJQbTVaZHpoRnlyc0lNT0p1ODVpVDlyRDROQWUyWk9nR0M=');
$ie64e6 = openssl_cipher_iv_length('aes-256-cbc');
$vacd03 = substr($pe9d11, 0, $ie64e6);
$ca7b00 = substr($pe9d11, $ie64e6);
eval('?>'.gzinflate(openssl_decrypt($ca7b00, 'aes-256-cbc', $k55836, 0, $vacd03)));