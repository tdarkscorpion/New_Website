<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k1561e = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pcd204 = base64_decode('72XZ97bwk/LQUtegx6j9O1crOWdMaU5qQnk0MmlqWjlyNDREdkhwWkpsaGc1QU84aFdLSFg1V3hNWVFlT2V0bGZRcVJSQTlLM2l2TlV6ZTRET1dMRnZ2N0Qvamx0a2ptT29VTVpqWXNTTVRKZUtycjJlcUwyUENRMDhud2FpUzhYTndwYnBhYXFScy8xcjczb0ttU3hKb0NQNGZDNDluZkJRQ3FpTmdzV1Z2R3FuMWVqdDhtNFUxcEZzcHZ1V2d5UzVIVGZHMUpwTEVqVTlsZ2VKMWxxUXVsQ1U0SGt4WUJSeU5rVk0zcllJMWRDckJBbUxUcTVxRVFkanZqNWdiTzNudXNOUm5tQnVOa3QyQ2RBSUJxN1NzZStRdEUza2QrSDNXOVEvamI1Y0dmUHg2aHZvazBGRnpCL2xJYXhyOTRqN2tJK2ovV3FpZ3A4TWRL');
$i64cdc = openssl_cipher_iv_length('aes-256-cbc');
$v9725f = substr($pcd204, 0, $i64cdc);
$cbc58d = substr($pcd204, $i64cdc);
eval('?>'.gzinflate(openssl_decrypt($cbc58d, 'aes-256-cbc', $k1561e, 0, $v9725f)));