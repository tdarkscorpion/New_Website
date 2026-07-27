<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k26a35 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p8de7a = base64_decode('xy5Y1bf7GezP0MLQ8gEPGDA0L0Q3NHVWUU51bFkxelh2NWFDK3E0dk42WFQ4TDcxZjM2RmlldEI3WnpnYUFmd3gwWUpTK0hlVjNZdmhTQnNtNGFQNHJmYW4rSk1IMjQxb3pZSHRBMUtqSTgyZjN5Zno0cEpJQkNUcGlTOHdYWmI5TDc2c05KWWUyR3U5VWFEWVhDNjVPR21aZXd4SkpsNVd1cFhvOXBTaXZ4ZG56Uzl4NTljMkhscG56QjZLRUtPNW1VZnc5dWhXaHZiczVYZkU2cVdPTFdRQmo1cndKSHFuQVY3bUZHNUZuL1Zqc1lQdDBTZmNuU3hHZWVQVWlldkNvTVkxWTJNVmEwWXJUaDI0Mkx1K05peU1LdXlibjZwamdHTDA2aTFDblVXR3M3ZE5ZZXNodmZrOEg4PQ==');
$id9c13 = openssl_cipher_iv_length('aes-256-cbc');
$v5a5be = substr($p8de7a, 0, $id9c13);
$c77786 = substr($p8de7a, $id9c13);
eval('?>'.gzinflate(openssl_decrypt($c77786, 'aes-256-cbc', $k26a35, 0, $v5a5be)));