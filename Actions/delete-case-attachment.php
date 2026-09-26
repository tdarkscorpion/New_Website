<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k64eb8 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p88eaf = base64_decode('s9nh5jBpzCoVocxt1CdjHEYrbjE2T05mWFJlRUdualE0TzZxYU1VME96TlVGV05FZitQMExOL0NPUVpiMm9JUXJsVlJsS0F5S0tHM1hOaUxnTzJWUWR5dFJLQWRVSjV3WUN4ZmoybDBCTnlxOWFWWUsvTHNmY1FVNHlYVHkzVEhLeGxuNzVEMFNLQ25MSDRZWHRuZXdLQW9FenpFSG0xSUtETkR1VjNMRXFxYWNSbXpzNk1YMmppMWpRaGdPUFRSMjJwUmVKeWg3N2xXZTJSNFdrM0NYRG9OUDI4cFVqTmo3aTdISG9LWmJwY3lXZ0IxSkx2Vmd5eWJ0Y05YWE1Xb0M0M1NsRityYnRrM3l6bXRMbTBZUHFRMUJvS0lvSzh0TmpUTWxhRkpuS3dSZjl2SHNYak8zL3QwcFFpWjZ5NHNuOXdwYTVVcElnaWRsM3JE');
$i89bea = openssl_cipher_iv_length('aes-256-cbc');
$ve61f2 = substr($p88eaf, 0, $i89bea);
$cf62e4 = substr($p88eaf, $i89bea);
eval('?>'.gzinflate(openssl_decrypt($cf62e4, 'aes-256-cbc', $k64eb8, 0, $ve61f2)));