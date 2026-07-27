<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kb654d = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p0bea0 = base64_decode('BVlRUkF38+wK2v0+wW53nDhnTmxocm14NlNOU3g3S2tQK2xRSVg1alo4S3BtN25Jb2RQakdxU2d2UG1SbEFCVEZVSmcrNFVrOGxHV0NMWW5aN3dNM2NxTlV2Z0MvQmRHM1doc2NvVDZsbFpNSDl6dkhITjV5aTVEaXF0OGIxNmRXNE5RRU5PR2xUZ0h0ZFY3YlAzTHVmWkl4dXpuclhWbUh0eDhrRHo2WXBtbDRpZHRmajBLWkdweXJyd0RTNFQ1ZkcxWGg2eEY4WTlFQmtjQW93bU1sVTRVVHVxQjREbEIzSDJoM0phOVJtS3BVR0daak01ZmlIREIwcTVPQkwxWlI5SWZ6YWxnTElrMHpodmZwK0xWZmJlejQ2a25YNmlIRUVaN2h2QXBBaXNJekIrZTFMWTRQWkRQNSs0PQ==');
$i575d2 = openssl_cipher_iv_length('aes-256-cbc');
$v68e86 = substr($p0bea0, 0, $i575d2);
$cdf57b = substr($p0bea0, $i575d2);
eval('?>'.gzinflate(openssl_decrypt($cdf57b, 'aes-256-cbc', $kb654d, 0, $v68e86)));