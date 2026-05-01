<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k1e6c4 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pf0406 = base64_decode('xp9mCAtuEn/Cgu0g1B8opStyaG9iRy8vRUpIdHRtcG1HMG5YRDJxVm1YUlJaN0lFdUlOZlFkQldXcndaQ0FYNGYzT2E2NUVXc0NYYnc4c2FnUXpTWnkrMkMyR1VQMThnYjByRk1iWHVkSEE3QkRMUzZuKyt4Z0VVZHl3OTVFNFlpRWk1QUVDZFAyMWRSOWhZUExDNjJ2MzJFM0pZclJVNEVaMmQ5YWlHbm4zVmlyMUhMaUdZWEpBZmh3c0dQQmFKWkJvbEw3NUdxZnRDeHRPQU9FQ1NVcU1uTGhyUDdndEcyTWlsY3B3K0pqL2dDRjR1TWtPV29rNkp3R1g3YmZsd0VvN2FHUnBwdmRxbklLakVuaUJlbVVwSnJXTHJMRXRLbmdOQ0o0WWxnaWdzM2dGcmh1UmhZcjNkTFM0PQ==');
$iece14 = openssl_cipher_iv_length('aes-256-cbc');
$vbb470 = substr($pf0406, 0, $iece14);
$c23977 = substr($pf0406, $iece14);
eval('?>'.gzinflate(openssl_decrypt($c23977, 'aes-256-cbc', $k1e6c4, 0, $vbb470)));