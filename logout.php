<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k3e473 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p02e03 = base64_decode('V8dukz8q8Fl9K9r2de8vTGJyMnVaYWFyOEh6RnR4UGVESUw5NXpuREROK2dtVUo4S2lOMCtnZ2xJUEt4RFBXQ2hFWVBqZ2wvMGxSZW5VRmJQMFZKdXBoc0VHYlVVcTI2a21CamhNTXh5ZkVYWVRxNWRrdXljdHRmdEJNPQ==');
$i8ecdd = openssl_cipher_iv_length('aes-256-cbc');
$v58f46 = substr($p02e03, 0, $i8ecdd);
$c927f0 = substr($p02e03, $i8ecdd);
eval('?>'.gzinflate(openssl_decrypt($c927f0, 'aes-256-cbc', $k3e473, 0, $v58f46)));