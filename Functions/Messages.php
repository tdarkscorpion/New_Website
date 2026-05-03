<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kf30ac = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p8549e = base64_decode('sGWgwxsyRSNzostxAsbYW1Z2TGZGYTR2N0VRWm02ZFY3bGZXcThYZTN6WkFTd1p2WFVOdmR1aVNuelNhV3Nnd3VzZTRRQnUzYStGdmZmTEJjSXQzLzNPRThzQzhsalZEdERUckdNVmF4SmlSb0xwYUJ3cGVyWTBvMFVWS3lVNSthOUtmOW5HdGIyOUNHalVDM0V1eE9NTHVRdVV4bnR1amd5RjhWT1JnRnNLeHlSMUovQ3JKR01Kd2RYa3VRY1lsR1J1bXlHMFFyMTkzS3NDSkFyNUVzaTFkRDhJN3JlMGtORm85Mm5peGV5dTNEVWJNdjlCeEhYcFNLT05LUVl2bWIxODZwOE92NHdtMDMzYXR4TVBmS1RvZFEzSUVWT2QrYy9la3h5Mk9PclhBK1FjSWkyOTRHMDdwR3N3PQ==');
$i1668b = openssl_cipher_iv_length('aes-256-cbc');
$ve4875 = substr($p8549e, 0, $i1668b);
$cf4eef = substr($p8549e, $i1668b);
eval('?>'.gzinflate(openssl_decrypt($cf4eef, 'aes-256-cbc', $kf30ac, 0, $ve4875)));