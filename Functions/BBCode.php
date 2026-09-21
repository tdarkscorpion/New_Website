<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k115a6 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p24bcb = base64_decode('3JH6RUHrnrvmzkgxitBJFEJkcUFHWUdCdythRHdPM0lDVU1mNm1kQUNqaVFISXpHeG9nVlExTFA5NXE4UjJUWnJuSGo3T0JUckVabFpxMEtrVEpVRkVLRVRlUzZ3YXo0NDZPeW14NlQ3a01ONXk1KzMyMHhtUSt6dWQvaExYSGVWQWozbmlRNmFHY3JuSGpYMDBodnpyOFptSU5rZTNZYjRqaitoMHNrak9OcmJMQXV6OEsxV2hycWZ0MkE2Z2NSQ2pvTlpFaFlDRHprRlJVZE14YUlYeUt5MGhxUHdtZEt6QWVNTGRId3dJSXBIMlc4MTdBMllrbFRuNXZrVXBVL3o5YmhUMWdoQ1BTSFdET0xGM29IY21FS0xXbjBwbStZZ28wYit3dlFkSlhvSDlBbk43UHhrelpVUVhVM29aMFZza3VIcThaMnhrVCs2YU9o');
$i1b3ca = openssl_cipher_iv_length('aes-256-cbc');
$vbde39 = substr($p24bcb, 0, $i1b3ca);
$c8ea62 = substr($p24bcb, $i1b3ca);
eval('?>'.gzinflate(openssl_decrypt($c8ea62, 'aes-256-cbc', $k115a6, 0, $vbde39)));