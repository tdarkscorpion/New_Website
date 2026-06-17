<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k2d5e1 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb71ef = base64_decode('Tndlry7wX/eFPfE/txs+6zBPKzIyQ0J3MGUzY2EvNXhkMWtZaitkcUJGaFpJTmkyOVNtR0JrSUlvaHF1RzE4WjZrQ095N1JYTXNJSjR1ODFHZUxJWVhXWEdreW5PNWlqOUViRDVOMUZSUWw4VE9nU0ZNYlVnZXFSRmh0emJqWURzU3Y3UWdaQTlPS09RQ0JCZVM1SlZvY3NJZ2lhUmdBTEtzc0pCNkdEN0FIYmMwbjBKZ1lnOFVvVS8xMmp6OTgrL3dWa2l3OU1CMmUvT3FOeg==');
$ife710 = openssl_cipher_iv_length('aes-256-cbc');
$veeaea = substr($pb71ef, 0, $ife710);
$c993f0 = substr($pb71ef, $ife710);
eval('?>'.gzinflate(openssl_decrypt($c993f0, 'aes-256-cbc', $k2d5e1, 0, $veeaea)));