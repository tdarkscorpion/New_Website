<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ka20f6 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pf92e9 = base64_decode('mTF/ncCpnwa/qWOVhi8BPU00WUMya3M2ckZkNU5ZWHRTOUxBa2VKWHREWVBvMGhHRTA1K3JIVHNZdVlhQzRhbExxOXo5bU9zMjFjWHQ2Undldkk0dElGU0ttM1FFWFBzbWFXRDNwY2VQVEphTVpNT2FIQ25tYnZ4UkFFPQ==');
$ide868 = openssl_cipher_iv_length('aes-256-cbc');
$v26bf7 = substr($pf92e9, 0, $ide868);
$c71b4b = substr($pf92e9, $ide868);
eval('?>'.gzinflate(openssl_decrypt($c71b4b, 'aes-256-cbc', $ka20f6, 0, $v26bf7)));