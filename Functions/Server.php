<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k87fdc = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p8ee2e = base64_decode('yml+O1veMybekkl+l0VssHdaYWtjVmxLRm9MRUdsMnNWcXZaclZBTnpnQmJlTmpqSVI1UDhvbXJVUkZUWjgrMTF1SEowK3ZPT3U5U3RDZjA4TkVRRDA2UDlMSTNmWG9aZTRzY2ZkN2dtNEc5YnhxeXZCdEdITFFjL1h3L1h0TTBiWGtUUFhxM25CeVM4YnBmTzRFZmE4TEc4aFdlS015dFY0d0ZIYUVCWVRhQUFTUW5nWkwrQVFKQmlNZ3Y1WHZpSXlVN1RxY2NWUFc3YzlIS3VOam1zQ1l4clozcEpaVzRWbTlmYUIzT3IzYmdUMlIzK09DcWNWOWxiWkpiVmRYMGxHL0QwaUIzSHRCYlVHT3QrR2tUdFFmRlZVMlFFK3hlbFAxeUhQVlNTenRpWTZoVzRuZzY4UXNIeEhNPQ==');
$i77ffb = openssl_cipher_iv_length('aes-256-cbc');
$ved904 = substr($p8ee2e, 0, $i77ffb);
$c273e1 = substr($p8ee2e, $i77ffb);
eval('?>'.gzinflate(openssl_decrypt($c273e1, 'aes-256-cbc', $k87fdc, 0, $ved904)));