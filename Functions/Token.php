<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kfae4c = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p72b72 = base64_decode('NKDmlVOH9DnKtErShfxQ5k1aTkxZVXVsM0lRQnlCMTZMellVVlJ4K1YxZ21xSzNzc0ErWnFxOTJDclZ5YVd6TlVXOEFJMEVwZmFPbnNrMkd5M2xrM25VNytmeW1mNmNNRlFtTUxqN1ZEMGh0UXlpN2JCU09GMkhlcDJFYWJsaFhwVi9HTHgyWDhabGtDalZOWDhIeWFuN0lad0hMT3VWT1E4amJub1k3RWRpeWtTRDRIZzMxL2xHeVl4K2JDZVJ4TGxLUGk5TkZCRDVZRFpaOFAwR1JJNG5yNFVXY3c4a3VQVU43UGViaFNSbDFuYWxHZVpmTnlxZDNGcnVRbXN5RkxGQUNycHFCNGNhc3ljNUc=');
$i4998e = openssl_cipher_iv_length('aes-256-cbc');
$v3ca9b = substr($p72b72, 0, $i4998e);
$c2b858 = substr($p72b72, $i4998e);
eval('?>'.gzinflate(openssl_decrypt($c2b858, 'aes-256-cbc', $kfae4c, 0, $v3ca9b)));