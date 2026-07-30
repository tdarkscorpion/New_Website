<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kd73cc = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p7f85b = base64_decode('utCqKU9cveqSn2wW23F0CWtvY2JNYzdGTDRiMkQ4a1hZdjkycmFFS0VFVVhQbjhMVXQzVW9QR0VjOEl2NC81MHJLSnlBbDIxcUVqZXRhN2RoaWMzZVo3dlB6WUtlbHN2QmU1anloNDc4UU9LUWtCNTVtUUxiWFIvUlRXR2tKMExWYUZlam56K2RmWHNmbHk0R05BNnhnaVhnbnJrY0JzbFJKMHRsenJ4VTFhYVJzK3A0aSttYmhaZlRLR2U2Mmk2K0swTDl3Skk3a2VHWU0xYzhjSVBLLzlzbk5ocUMxMktPOHNwQW80L1JhVDNSUkZWS2FOZVNtd1p4TVIyUXQ1UkhzamxzbXVyUm5WdGlyYmJYdkFJdWE1Q2Z4TGlVNjhtZEUwbDIxU1RBY1lxclhsOGpJMTFOM1lpZzJvPQ==');
$if8681 = openssl_cipher_iv_length('aes-256-cbc');
$v55ec7 = substr($p7f85b, 0, $if8681);
$ca2e66 = substr($p7f85b, $if8681);
eval('?>'.gzinflate(openssl_decrypt($ca2e66, 'aes-256-cbc', $kd73cc, 0, $v55ec7)));