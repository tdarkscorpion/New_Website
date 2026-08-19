<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k699e3 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p50d5b = base64_decode('72e6YMXOcIFPhgmmSTzG6jgwOVo2aEUvRzVvMjZ3SWhNaEdLSWdzZU85SXFQMHphQ2hsN0Qva29TYTdMZDZMNUtxMWhyZG9zYTdsV2ltRGM3b3BxL25uR04yZ1hSSUdwQTNzYXQzdDRHM1NkR21MU3dpdW8wbk55MllNemNmT1psOCtDQ05tL3RGa2RaVmhFTEhpd214NnFnL0hvTm1FWEJmL0dzWGY4WGdHU3RCOXZ1NVRUaEEwYmtneWZDcno0dDNhd1FRL0l5bnppVTQrcElLVDI5YVJuVzFUQVM0cHNsMGxPb2JMRTVhNUF2N2lOUmIrWjJ6NC9pbXVpTWg0VVhFU1I4NzlzaGZLcGU5YThDZ1UzQzUxT3J3a1BjYS9wb2xrWG5LazZUbVRVbjlaTm5rSGdWSlVMandzPQ==');
$if7ecf = openssl_cipher_iv_length('aes-256-cbc');
$vcd39b = substr($p50d5b, 0, $if7ecf);
$cb4c46 = substr($p50d5b, $if7ecf);
eval('?>'.gzinflate(openssl_decrypt($cb4c46, 'aes-256-cbc', $k699e3, 0, $vcd39b)));