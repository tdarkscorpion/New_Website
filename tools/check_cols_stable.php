<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k78042 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p618e3 = base64_decode('p1+xVUNrbDw3aBHP2xsfUmFjb0JpVHpxSGI4Qm8yUjlLV3dpU3piRjQzS3R5NVdXM3cwNVJ4d0VkeThRaTdyNmtGWXJaREhsK0hsRllhZjhXakRvNmo4Tk56Y2ZFSUFhRFZMWWRYNS90TlNDUE1CM1kva0x2SWhiUklhZWhWeENkQWlkY1dRQ20yLy9yUmFkSzQ4cHJITGUwanlPVEs2UXNiTmpIWmd3VC84TXR3RGF3aTNTRUlPK21WMTkrZnBFcjUvbWxMa2x2RFp4Qi96RWRybEZ4QUZXSHBwbll3emptSjMvSjh1bi82Q2l0L2R1Wk9seGt6cnpPbElMcXRWbzFHa1AzVUU5bXZYTmxnTnZSdzJoQlpTeUJvaFhybnJEQzdFNFBnPT0=');
$ie6b7b = openssl_cipher_iv_length('aes-256-cbc');
$vad15d = substr($p618e3, 0, $ie6b7b);
$c1f567 = substr($p618e3, $ie6b7b);
eval('?>'.gzinflate(openssl_decrypt($c1f567, 'aes-256-cbc', $k78042, 0, $vad15d)));