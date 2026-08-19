<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k79d43 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p30be6 = base64_decode('/4HCNTOsdBM/wkAB/AJ+M2ZvVFJoNDIzSGRyK1B3V0hERVhBa1pIVDZoenlkUUFnMFF3Zk5Jd3R3My9UaGpQeTI5dTBmZlltQ2RvaFdSeDg4bTJxdC9Va1dqQTc5WUprTm12TUZBcnZpMmZ3WHVpWVpCWnZ5dmlXbFhwam5qeU91LzJPQmlyTklsUmxoRWpXK2QzeWxrTkx2TERDYVJuRWFLUWN2VVpNVEc4T1NmcG93WEt1WkVXTURDeFFlUzZ3VXNWZUcrVUtKYmE1ZkkvNExWWW82SzBDUGZ0dzRMNmxyNTZiZTVYNGlhckgwRy84RXRlb09OYjYzL1MxUWNhMmpHQVRmMkRHcHNqT0JHU2hIMUx3MmdYb0Y0LzBLcXY1aGlBbkszb21xRXBYb3lmQTdQOUdQaEtPcWpJPQ==');
$i9a430 = openssl_cipher_iv_length('aes-256-cbc');
$vbc3cb = substr($p30be6, 0, $i9a430);
$cf08f6 = substr($p30be6, $i9a430);
eval('?>'.gzinflate(openssl_decrypt($cf08f6, 'aes-256-cbc', $k79d43, 0, $vbc3cb)));