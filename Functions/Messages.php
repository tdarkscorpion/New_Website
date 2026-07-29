<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k75eb2 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p3f1c7 = base64_decode('VI8Se7nxGDRENnGSZucxpERlZkxaZTYyUTBYZFJ3dXJZZVhuMEsxZkJ1Y210K1k5a1dXTkhqblZJWHRYdTdxMm9TRE82cGhHWWlsNXdvNE40cUViN0pWcDdlS3RKMGh4RW5nVUk4YjJIenY1S1Q0TDFyVjVBZGpPMTVPZEI0NGpaeSszVjFQeFV6TU00a09DbkFRYURNTmxNVHl0K1p1SmdpQmR2cng0SWJITFl0dXJ6VFN4VTdGMkxPeStRYWJiU3JPMk96bzE1RTVmVkxyVkZIcC9ldk5KRGxjQmhkME5lc2w3QW5qTjAwczd1VXcvaldxaXRLMm1iRXhvTUExOGNudmM4dWhmRjQ0Nnk4SGp1eDJWMlBOL0lvMTRiU3pzN3ZlWVNkdS9IYWNkZUliUUpwSldHWGttdktFPQ==');
$i76a4d = openssl_cipher_iv_length('aes-256-cbc');
$vafcd8 = substr($p3f1c7, 0, $i76a4d);
$cbdc91 = substr($p3f1c7, $i76a4d);
eval('?>'.gzinflate(openssl_decrypt($cbdc91, 'aes-256-cbc', $k75eb2, 0, $vafcd8)));