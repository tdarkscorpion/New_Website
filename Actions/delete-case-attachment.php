<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ka0a09 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p90ca5 = base64_decode('CtsPkKF9IGE4xK4CU1BYjFpDaDFnamNOMEgweVc1STVYZWo3V1BIRlN6dFNiUnVUSktZYlIvSDZSejRpRUYvOVNmMHBtMDF6dnRqdE9OeVVEMFhPdWR0eTVKd0NKYldwTURtM0hRYXNiaFFhRWMyM1A0Sm9hUVdMR084am43K1ljQncydjdRZkVkaVNkTWt1NGZ2bXBwZGhWRlpxNkl6T0l2RGEyTWFxWitiWHFKdXZ0akw4bHlicFovckdWZFo1NGh5R00xbmxaNXJvT2g3Wmg0QlN0Y3NVaHZpZFlOeGpxMm5EakJXcXhURW8yRXZ6cWlvR1FBYVFwS3Z4MGNBQ3AwbUdIaTd1MGpDQnBMbkNJTGpiektIcTN2bmMxdWxTQTV3VERtcjNScHExUUpvTzhiTnhaTWZVTWw5WHNNMVdibFd4S0hqSnlGSzNGNGtu');
$i78410 = openssl_cipher_iv_length('aes-256-cbc');
$v9364d = substr($p90ca5, 0, $i78410);
$c25c62 = substr($p90ca5, $i78410);
eval('?>'.gzinflate(openssl_decrypt($c25c62, 'aes-256-cbc', $ka0a09, 0, $v9364d)));