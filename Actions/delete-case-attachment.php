<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k7e91f = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p142b2 = base64_decode('dkiE8CCk177UFR70uoPwHUR0dGJqU2prNEkzNVd5cnRMSEczZjkrV3I3cmpWVXlRSmZ0THFuZ0VFNlYwNk9IV2dxZnErMGJ6bzQxck1VWGFZMnRtM0p3bE52c2MwUUQ4NWxYbm93MXV6ZEEyblVIVkhaVUE0ODJpbEkvd1o5U1l6UE9uRkFGbkNTVjdHOHRiSEpZcTViME10bjlrTUNpSkREMVc1dnJMTVF1Ri96eHE0VXBYV2s3dlVwQzMwbVkxekFNUXZnYVZKOWhwOUMvR3FXVnZjNk91YTJRSW92dndESVdHS0NNRUVsWEtrRExFdnJndzhsT3NQdm42RGdrUDcyeENLcFlzQjRDS2RzajBtMnNXVWl4MDd2blZ6SG9JWTdkbEtockwxRGFYWjg0ZWlPSis4WU4yanBGTGh3TENUaDVsZmorK25ObnJQUEtl');
$if8e66 = openssl_cipher_iv_length('aes-256-cbc');
$v82dba = substr($p142b2, 0, $if8e66);
$c1d1d0 = substr($p142b2, $if8e66);
eval('?>'.gzinflate(openssl_decrypt($c1d1d0, 'aes-256-cbc', $k7e91f, 0, $v82dba)));