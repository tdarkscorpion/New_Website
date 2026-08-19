<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ke8050 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pf9f07 = base64_decode('prVV9eVTE+fRozWXniFNPUtsYjZneVZ4Y29hZUxkTE9qSFg0S2NVNTVldzZyb3VjNFZuUzMyN1JZL3VGcnJxK1RKY1E2ZTFRa1pMTnQ0bk9kWTNUSWViTDFjSmFWMjQ2NHdpUk15VlppdUFjZzFSRkw0L3R5d2tGcWxhaUdNbkE1c1pVcmtVc1IvbFlOQVdwMVJQR2xRaFFRcitncG5vaDVZd3hDVXBBeVlhU2xsSkpHSUpSR0o0ODQ1OEl4eXoyaVdaR21rYVdERWZVUDFrNnNDYmx1N3hCMVNHaXBqVjk0cTV0anFteVllZyt2bjJNUzI4bk9qZFJoUmNnYmNLOGZEVGxpMWJPNGh0OTJYditIVDVZTExqVGhkRFJ0c09WRXJpaGtOQ0QxemlWOXRoWkxWaHduekRLbVBSZmN3czM0Si83MWxVb2Vwa2VqMFlyUjY2V3A2VmxYQk94VGp0YXJqc1hFdz09');
$i4ea4c = openssl_cipher_iv_length('aes-256-cbc');
$v07a4c = substr($pf9f07, 0, $i4ea4c);
$cd18a4 = substr($pf9f07, $i4ea4c);
eval('?>'.gzinflate(openssl_decrypt($cd18a4, 'aes-256-cbc', $ke8050, 0, $v07a4c)));