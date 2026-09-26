<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k11f9b = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pef2b5 = base64_decode('N+awIsYHnSLwQv53gwem23BXQytvSkgrTSs5K2FqYUJXSWpSMi9HajBCanJ4emJ4QWpwaXFLM0xPVlh6aHl5cHkrNGozUm1IL0dWODRFQkJ2VmYwaWxRdDB5N0k5aGgzYTROTVllcU5mK1ZMeGIwL1dWV0JuVEhjbm8wbDh0WE5UaWJHd3YyaXhnaFpDZWZEbDJPU0ZLeVpvUjVFZnBCRjlqSWlNNVEyc2YxU2VicW1KbDRIaytMZ2tQRStpWStMb2JwNUlyUlVnd3RHN2ZPeW9UR2o4dWtIaXNLUUo0bm43MldlT3MrT1pjZTFrOTRPWTRNNDR2NkdaS2V4bnk1cHBIN0lBM1BuR2g2UjFGVGlmZ1VTb21pYnRSRDFZOWx5MWJjTG1rNUdVNW5YMzhHYitSNWE2a0UxNkhBPQ==');
$i25e4e = openssl_cipher_iv_length('aes-256-cbc');
$vc4e4b = substr($pef2b5, 0, $i25e4e);
$cf5704 = substr($pef2b5, $i25e4e);
eval('?>'.gzinflate(openssl_decrypt($cf5704, 'aes-256-cbc', $k11f9b, 0, $vc4e4b)));