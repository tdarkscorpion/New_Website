<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kc73b3 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p4a9eb = base64_decode('w6sKMg3PD+nWLeHPcLF5+m96R0grT0NDRTVYaU15bXI1N0V2ak9qNWZKVHUwWUZuMDM0NXo4UWhCT1hLSi9kMHlSRFZRb3FmNGJnc0pDd1pxZ0YxdVJRSmQrNUdsNDFIRkVSd1J5WkZ2NTBoWFN0dEZlM21ic1JFbXFGdHNscFA0T29BTkx5K3pLcDRWQllmRFhJQlNkc0c5aTZqenRUN2RTV2ZCSTNpcUUzdElkZ216b2M1b0JlTzhIM3hLb1hKbkNiK3RzcWR5UFRCalBiTXhJNStBQUJmQ3N4TjNaL1luWUVORFZYaGhXYW9Qa3R2OWsrdWNVdkdiaisrUlo2K0lab0tpRkZVVW9wRkM2N0g=');
$i777a7 = openssl_cipher_iv_length('aes-256-cbc');
$vdfd8c = substr($p4a9eb, 0, $i777a7);
$cd9dc0 = substr($p4a9eb, $i777a7);
eval('?>'.gzinflate(openssl_decrypt($cd9dc0, 'aes-256-cbc', $kc73b3, 0, $vdfd8c)));