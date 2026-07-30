<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ke4085 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pf90be = base64_decode('uWoZALnguKp5EhkiINrfBW9wckU2bUxGTjNVb1oyMGZxY0dWQk9GSVdtVHIzQUlEdklrV2YrTnBaekdTM3M1RUNuM3phaWl3WU5La0RBa3BLaXJRZ09rcHB0ZGFYbGNKWUV1T0tsNTdsSml4aU94Y0VPd3dFY3NkNFZyNzFOVG9PM1dJb3UvQVBuWmdtQy9qdGZoZ3VacUVoZVJ6M0NNbFZlOGgwNVEyRStRQnAyMGRNUGF5MkFYR01vYmtSQ0VjRzZMd3VtZUlIeERaSm9CbkZjSGFtWHlkUEp3TkszU3dQTkhZeTBCSjRxemtjZjl2NXdISjZGRVlsZUpPdjZJUmhTdHFtZEVvaUplSFZna3U1cWYwRDdBZzUwYUVQcjlLQ3FBM1FXVlVQTG5uaERXSmp0ZHlRNEpSem1RVE1ZdnY2WVRaMm4ydXEwNTZZZkorL3VaeUdhNG9MRGU4T2FLVDdYSENHZz09');
$i3f7f3 = openssl_cipher_iv_length('aes-256-cbc');
$vc2635 = substr($pf90be, 0, $i3f7f3);
$c2834a = substr($pf90be, $i3f7f3);
eval('?>'.gzinflate(openssl_decrypt($c2834a, 'aes-256-cbc', $ke4085, 0, $vc2635)));