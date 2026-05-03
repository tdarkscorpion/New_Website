<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k19a1f = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb7067 = base64_decode('DVYOBFev6jDsh8rhZQ9uRW9YZ3ZGM3ZmMERpQytGMXI2YS9INDd6U1k2ZkVJUzVibnhNTVIwbzk3VG15ZGc5bGNvenNwOUR2RTBJa0pWTVowNUhSbVB0MnJPQm5RTVQ2OStIRzZsK1o4V0ZsM244MHFsZkRSaDgwWFBwWGVscW9ESmVZVWVkUnkvSmhjc25YWnVZeHdjbHRzZXQybFVIWTZaUXRtOCsza0FnNEhXQjdVbTJBZ1R5MWJ2YkR4ZGlmaFZMMjI1TU9URWpPeEd5Qmt2eXBTUTNLUE9CNFRJRktNZU9jL0puYzFWaGpIazdIVWJQbHVPcm9aWTBTZ3NGbTZpVURQK3ZvUzFtK2M5M3E=');
$i18479 = openssl_cipher_iv_length('aes-256-cbc');
$v55adb = substr($pb7067, 0, $i18479);
$cdc894 = substr($pb7067, $i18479);
eval('?>'.gzinflate(openssl_decrypt($cdc894, 'aes-256-cbc', $k19a1f, 0, $v55adb)));