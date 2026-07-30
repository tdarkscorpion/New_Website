<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kf787e = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p00675 = base64_decode('qTQCQDNDOFdGpS7Il7DEK3ZHOWIrUHZocG5xUEFZaW1zTDNEUGZyV0JaaVc5bDQ0S2UyUk9CLzJISkRtRjBTYVNHZ3ZsNStmTm1JNlUzc3FleDRQODFoeUg5RHM5akp5cUdRTlBKY0dNNGtqMDdLUlFnUEVvZjM0UkdrPQ==');
$i5d62c = openssl_cipher_iv_length('aes-256-cbc');
$vdef27 = substr($p00675, 0, $i5d62c);
$c06c7e = substr($p00675, $i5d62c);
eval('?>'.gzinflate(openssl_decrypt($c06c7e, 'aes-256-cbc', $kf787e, 0, $vdef27)));