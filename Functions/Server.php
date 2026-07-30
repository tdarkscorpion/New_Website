<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k60523 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p07987 = base64_decode('yodCqAcf/lLHQztr9Sd79lEzcHpHbWVqN3lCY3FSMmZmcjhEMXo0eVg5UGE3emJkNXA1VU9VY0JVU1Mya0xPSThBcSs3TTR2MFduSkZPVU9nVmtsdWo5alVhVGRVc0VaMnIxYWg1enc2aW1HMVp5NzNsUWxRb3d2eU9YQWNnV1J4dGRJY1liOGdhaEl2Nnp0Vi93TTFpTmdSODdLYlh6NllHUnVCSHBzSzkrRmVSVzdzS1BVY3JaUHZDU3IxY2pQbUFjTXVuYW56blR5MVo2bC93ZUVzQTB4dmVRSzU2dHhaNVVDQk9ueGNnM05iZEtsMnRuVzN2em1VTlRLWmlpMERaZEJHSFdMVGFVcmpvUDV0N1NCeE1tZTJBT3RFMFdIMERPb3E4NVRGd29oUmswQkRKQTd5VU5NUHI0PQ==');
$i5b4b5 = openssl_cipher_iv_length('aes-256-cbc');
$v0b93d = substr($p07987, 0, $i5b4b5);
$c3c45b = substr($p07987, $i5b4b5);
eval('?>'.gzinflate(openssl_decrypt($c3c45b, 'aes-256-cbc', $k60523, 0, $v0b93d)));