<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k9dd5b = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p5f49d = base64_decode('wKNzSKwjiqSvNC35HJE0UlpWd1AvYUZzcHBQOWtKQUZNWlZuR1lCdmFnK3FuYWlQRkVVbWpBQmo1cU9UU2JIYmhPR0JHTE5ReHpINk10NHp2b0ZpN05CZ1k1S3A0RCs5NThtTCtBNWNDSmx6VmlXK0g1T2ZOUTE0R3ppZUIvMlZ3U2hGRnhVRVRVMTFYMVErUktmN2hKSmJncFZPZ3M3QjFtaDMyUVlEOGEzZUxibFlZc1kxWDdhVXFycnlaRkpBdnRKT0NaVmhEbU1IN1ZNd2NKVGU2dVBaY2tvR2tBWWx6MkU1STdXTVdGdmtRUjZTN0MxSkFKcGlSK3oxRlByN3RkclB5akxEUVViRzVnako=');
$ieda59 = openssl_cipher_iv_length('aes-256-cbc');
$v439ee = substr($p5f49d, 0, $ieda59);
$c3db40 = substr($p5f49d, $ieda59);
eval('?>'.gzinflate(openssl_decrypt($c3db40, 'aes-256-cbc', $k9dd5b, 0, $v439ee)));