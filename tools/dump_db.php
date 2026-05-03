<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ka94c5 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pc3f04 = base64_decode('lbkEeUBG8E1nDXhE7jcEX3N3Y2VSNzJkLzY5ZkRYK04yYXM1eW1acCtTaXUreG01QjVqaVc0L1NuTDhxd3FPSmthZkpMWU5sbVdoQnZ3dVg5OGdDSVN2SWNnUWk3TjJGMm55WVMxLzBzbUNiZ09PbENDaXNTYmh6blk5bmJuNGtpOGMxdVJ2S29ZQzVBaW1yK012NTFnZFhROTljZHRxU21nTnppa1NVd3BkTFVlY2U3eC9aTkJFZGVHa2IwUFJ3SkRndFVvMjh1OFZoUWpsbWFrZVRrZmhXZTc0VDQ3TUlxT3dGWHc9PQ==');
$if609c = openssl_cipher_iv_length('aes-256-cbc');
$vee659 = substr($pc3f04, 0, $if609c);
$c22bd2 = substr($pc3f04, $if609c);
eval('?>'.gzinflate(openssl_decrypt($c22bd2, 'aes-256-cbc', $ka94c5, 0, $vee659)));