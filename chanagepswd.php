<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kb9c83 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p4edf9 = base64_decode('0Gj4ylOdSLJrL5/ptJ677k5LZkpRQWdiWWU2WExjZTR4STV4RU1wTmpjS212eWZTRnpVY2dobHgrZ1VyRjFBc1ByYThXM20rU2IrMVFHTUd0clBHVkNEREZCbUx1RHh6cWNsTUF0M3F4Y3dCUVRlYmZ6MWI2U2poU004b2VIM3NuMTJNc2gwSDZTYzhOeEhZbHBhb1dBamo1WkZkUUVMZ1czU1dITzRpbmt4R2srdHZVWC82ODNER0RoRkJrRHFFMUN2T3lDRlBvNUNNVWJJSFZ4YW1zWFdDdGdyR0l2QTBHSWZxVVlNR1dxeGhxNStnRHBndmZYaGlITE1PR3orQS9BVk9SWmp3TDdqTENnMklna09KQ3djbkdScHBhWFBGRTU2VlR1VjRra1ZHOXZnbnNlaXB3VFh6eHIxWEFzcmIvckpvenBzNHJMQVBkQ0xiRFpqdGp3Z0JudDBETEs1SEtBM25lUT09');
$ieee46 = openssl_cipher_iv_length('aes-256-cbc');
$v1ac39 = substr($p4edf9, 0, $ieee46);
$c979fd = substr($p4edf9, $ieee46);
eval('?>'.gzinflate(openssl_decrypt($c979fd, 'aes-256-cbc', $kb9c83, 0, $v1ac39)));