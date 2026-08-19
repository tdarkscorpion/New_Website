<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ka3cb2 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pe7bb1 = base64_decode('mLTYwFuis6KYC2brmn0KaDloeHFIRitNUjdXMDN0YXE2V0lzdmdDSmFGdklia1dVZ3ZxSEZiblFRYXp1THRWMG9BclVDVnExV3BwaHdRcjZIYnQzTjROUGJNcThzNVJjZktaTi9uK0tWK3pWTjRNdGZUZzV4Uml2bEIweUM2NmVyb3dOTm94UWFXQk5nV1hEbjZ4STNCYjVnM3EySGk1TkJKNmp0VkxEditaaHhMTEJqdWxSdmxDcmZrSk1ZU1J0cXY1SDZyb1hCM1huR1U4UHVNUTZVUGFWTHptQ1JVbGhDaHZvUjUwTmpkVHpwcWM5Q1kvN1E1T0szbFZwOFpCRzQvNFFWZzhsQytDMEx1bkhsblV6L2o5NndmUDFObkdrdDRVdUMzaUk4bVNOd1pxdDFzN0t2S2NCYmw0PQ==');
$if37e4 = openssl_cipher_iv_length('aes-256-cbc');
$v20935 = substr($pe7bb1, 0, $if37e4);
$caf742 = substr($pe7bb1, $if37e4);
eval('?>'.gzinflate(openssl_decrypt($caf742, 'aes-256-cbc', $ka3cb2, 0, $v20935)));