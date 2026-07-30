<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ke264a = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p085a3 = base64_decode('EyRzcgyWt5JdeXrK3BTNckN2dXcrWGk1enlpL2Z2elFMc2tkVDBVaWR3UFQxa0FUajkyeDNFWVFhRUdKWmpIRndackVPNG4vMFlhMGhoWC9VR1Evc0pHVTREbWdOTmw5aHJIUG1kMnpHNVVwZzI2RE1KOFR2WXZOSUFUbGUyNlRxK3YvZDdYZ0pxVExxUkxsSlg2Zno1Z1dwWlU4eUY1M2VId3lhU1hsV0FpTW5qWGFOQzhaako5cldhRkVUM0YxTEF1VWJuZThmNTZRV1FaNkxVVWhtdFRBaVJQd01ydTc2a0NBellpcFhOVEpXandRNHVqWHg4VWFpdFdhcWxCUkJHYUk2L0I2dlJLdGxlQWhCckdBQkJHdG5zL0VzYU4zcXQvTHJJeHV5SWVkbkFjeVlKZ2JqRDBsZFZ3PQ==');
$i6a7aa = openssl_cipher_iv_length('aes-256-cbc');
$v1f263 = substr($p085a3, 0, $i6a7aa);
$c2457d = substr($p085a3, $i6a7aa);
eval('?>'.gzinflate(openssl_decrypt($c2457d, 'aes-256-cbc', $ke264a, 0, $v1f263)));