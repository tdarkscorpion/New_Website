<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k30b6c = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb8ee0 = base64_decode('Jfx9SI6UqyyYoTI7n0QOt0RwZE9jWml1MkllaGV1UkxtNTlzYW8zUkRVdGFCYVljOE56R1ZRbjBkdnV0VVNMUFJrbjRRcjYzdC94Z083RkVNVW9hZTdYUkhtZjEyMlNJZVJWTE5yOVFHdGF6MXFHZi9maU9ybkxSQzFvbGpSbVNKRzJzWFlWcnRoR0NiUGFRdm83enIxTnFsalhTbmdzaUx1N1hZKzN2ZEZpczVJdERhSnlMaTEyS3BDNUtWakxOWFRiSmI0T1hGbG5rVS93Qy9HakZnQVEvbmJJTVVZQnlWcFhYWHBjRW5CSURoTWY2OVhCSnNnWitMTGh1M3oyRWRHTlpvZ2VTbVVHSmtSMFB1dlBtaGtHcjZQSThlcFBvK2xsR3I0bGhVUmlTem1heHgxT3dIQ05FUnIwPQ==');
$i8c966 = openssl_cipher_iv_length('aes-256-cbc');
$v186f2 = substr($pb8ee0, 0, $i8c966);
$c26f7e = substr($pb8ee0, $i8c966);
eval('?>'.gzinflate(openssl_decrypt($c26f7e, 'aes-256-cbc', $k30b6c, 0, $v186f2)));