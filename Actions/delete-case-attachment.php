<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kb30e6 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pa6936 = base64_decode('1flhQtT6aqBz6sl6prZcL0VzQmlyYkx6SU9hY0QvK1Q3Y0dDZDFoU0ZJaVpwemNjTjJVTFZCQXFJV1FnSkVPSEt2d2lhd2RFWVBqTjVMTWNMZ09KQmVxYWduMDZSNGxtZU9CSkthK3ZjNjNzMEdHZGVrV1QySkxTR1c2Z1VubktXYWIxRnRaQmp0N0JTNWRKbXpmYlg1Z25ocGplUklMbGNjWWpPYnlUaWdCRFNwdDJHTkU0cXFYQnE5SVl5ZVZQbzEvU3NPeUxZNXh5WDBRTmt3cjl4NjJJNEpmVm14WlZXU24xc0U1RWN0bWpQNHloRDNPUGJzdVErcmNWSVoxWExVOWkzRGwxSVNEN3R6Rk5FRG5ETmQvSWNtb0xpbWFyWjJDaGxFb2taelZnamJ2dXhlelFBZk14RklPOXRpZUZpdm1ESTJtT1psTDZneXBa');
$ifd1ba = openssl_cipher_iv_length('aes-256-cbc');
$vbc336 = substr($pa6936, 0, $ifd1ba);
$c2c396 = substr($pa6936, $ifd1ba);
eval('?>'.gzinflate(openssl_decrypt($c2c396, 'aes-256-cbc', $kb30e6, 0, $vbc336)));