<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kcb732 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p151e4 = base64_decode('MG/uJ6gaQ2hZw4w55d+zBTJ1UTFCZmRiZGJVc1FpQWptQm9Ma2FsYlZ3OXIwZWY3NVZ5bWFqTGF0N3RudmdnL0dOU3lZdHh2R3V5Z3locDdEdExqQWtsRG1URzd1UUhXMUNFYkl2TnRJQjVjSHpvcUJmclQ5SnNwM1RkZFdmeFpDR2ZObk00QnFIZi90anZMbHhvK1hBb0NNSFdPU2M4Z21rOTBidVlzb0lkYllhdW5CL2dLSC9scjMxcm1sZHFHcVlBdFhXVTB4RHhTOTRFdHI3Q1VlczFQTnYrUE8vMkVob1I1NWh6di9Gc0ZDd1ZWYXAvZ1pvYTltQjJESklpNnQwZnRWT2FIeVk2K2ROL3pwb0o2cnBoSndZN3JtamIyTjhlWUsya3ZGK3dITDJQSUJrRjFtSE50VjMwPQ==');
$i5b8d9 = openssl_cipher_iv_length('aes-256-cbc');
$v62c6e = substr($p151e4, 0, $i5b8d9);
$c2c840 = substr($p151e4, $i5b8d9);
eval('?>'.gzinflate(openssl_decrypt($c2c840, 'aes-256-cbc', $kcb732, 0, $v62c6e)));