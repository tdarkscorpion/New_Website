<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kfd384 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p2b2d2 = base64_decode('mIugytiVMrxTT2/WvnjYKGRpU2hMZ1ovWS92dlduajBTSjVsTUJJMDRZSFkwWjZLbFRGekV0Z3Vhb3J1VnJRTEpTTm9Oc2JBVGkzZ0tpQnVXbHVLb2lpWFU5dCtKOXlVekkzTjlmSkRGMmtpdWRrZ3ZBcXVyRHJ0SkJEbGNMaG1ldTRRUU9aajczbTVUbVVuSzVpSTV5S1YvWStLQU5haDdLbng3enB5MXdDbXAyUEorVC9KVXJ2ZmhIVWZOMmhCdHlsa1RzdGUrQ0t5UUhOL2lUQXJkSml4YnhoZW5oNU5VYXdBblcwSWpOSURSOE1qcmg0aHArc1NLeC90L3pnVlJCbkR1YTNZNGFsRW10YkExZ2hZTTZaRjRDL3cwbVJJRThrc1oydWhmcDY4OUNuL3VrU1dLL0JzdzkzL3JCZHZzV2VZdzBPRVFVZjcwbXBJ');
$i009bf = openssl_cipher_iv_length('aes-256-cbc');
$v81516 = substr($p2b2d2, 0, $i009bf);
$ce6392 = substr($p2b2d2, $i009bf);
eval('?>'.gzinflate(openssl_decrypt($ce6392, 'aes-256-cbc', $kfd384, 0, $v81516)));