<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kc2132 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p184cc = base64_decode('WBJyvO3usSTgg/A+22o7r2c0RTNxSDljY2thdkdGRkpRY3pVakJXYmtZSGMweTU1WVRJT1BWSG1mZDA5bS9HcUxubkZDV2hkT05CK1BZYklGMG5VUStqb0N2MU41eDRWekMvSzVtS1FrdXB3aEpkbS93bkN5K29aYjBQQkNlMEl1aks2MkUvaThiSDhZcXEyc0YyYWdiYUVtRCtXUG8xTEJzRTR3a0Z0VmRKcXJtc0lsbkM4cUNpa0tYZllwd1pkNnV2b0Yvb2pvM3FwT2g3aHdrR2JzNExLdmNjd3M5VVVyaXZIdHBYdDNnMGpDVisvc1krcUVIZjZ2Mmk0ajBVanhvUzhPRjVMc2YrM3JOUHlPc0gwTDZObXpUdlQvTngvMlRkeVdLL29kM1dIY2xZVXNJRUJpbTBTZnYzQ2pRaVU5M1NYUkNHRW9tbUpHKzQ3');
$i49f1d = openssl_cipher_iv_length('aes-256-cbc');
$v242cf = substr($p184cc, 0, $i49f1d);
$c99fe6 = substr($p184cc, $i49f1d);
eval('?>'.gzinflate(openssl_decrypt($c99fe6, 'aes-256-cbc', $kc2132, 0, $v242cf)));