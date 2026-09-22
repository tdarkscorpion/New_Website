<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kfeea2 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p34403 = base64_decode('xsdaqnbDLsYG878wY2d5VU9vUklnOEVET2wwdDcrM012VWIwaWlsSnlxTlNaS1A1R2dBZkNybDVsemRPUVI3akRlajhadXRVbVJQNzlHMDFWbmFYdUxXcEhtZUdHeWI1SlJoTEp2ZS9Tb0l5cWVKdFoxWjU3WHBHakRvPQ==');
$if86cd = openssl_cipher_iv_length('aes-256-cbc');
$vd9f30 = substr($p34403, 0, $if86cd);
$c6ee2b = substr($p34403, $if86cd);
eval('?>'.gzinflate(openssl_decrypt($c6ee2b, 'aes-256-cbc', $kfeea2, 0, $vd9f30)));