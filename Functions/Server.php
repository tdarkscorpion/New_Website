<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k8ea20 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p3dfb6 = base64_decode('BX0EN+eqOsE4BbmmuGXtEXNVVmZXSkdLTkJhWkJ0VGo1elR0djJlLzJaYXQ5cFhiOEM5TThPdUlNME41SFlsNmdaR2hyZFJWWENuQmd1TWlOb1B6SzA4RTJzVitQcVU4RUVvWWs3L1dHMmQvejhob0g4eGpPRmJHK2V4eXFETjI0VkxjSk9JUXJRWnFOejVwUm5hZHcrbWxscFNuMm9vN2UrSDZ6WkFEa2NscStNN1NxdG9NVDU5N1RldmRjeHF3OVptVFg5Qi84MTU1T3d6QnYwRGZIM1EzTXhZMElaTzZvWVFic0c3NVdJaWtrRFVuTmZFRkJnUXM1M1hmLzNHL2hRNkV3Nk5EL1U5Z2lpa3FRenVsNWxSQVo3RDE5RFN4NW5TMUthRzg1UGtHa1hPZU42bjJHd0xBcGx3PQ==');
$i487a8 = openssl_cipher_iv_length('aes-256-cbc');
$v881db = substr($p3dfb6, 0, $i487a8);
$cb7367 = substr($p3dfb6, $i487a8);
eval('?>'.gzinflate(openssl_decrypt($cb7367, 'aes-256-cbc', $k8ea20, 0, $v881db)));