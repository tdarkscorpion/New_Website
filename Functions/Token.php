<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k96693 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p527ca = base64_decode('5k9GNJrNssvrhN7t0YvJWlJiK1EwWFFUMEIvT056QzJaaXFYa1NFWUF0NHRvZXVCd0lhL2RTREV3a3NjMDZkbkR3V3I1M3Ywb0RlNzFpdlBLbzhNSDYrMEw2Y2NORDVoUXJaZ3lYNVc3QzBrNk1TK1ZuS1ZBYzhhWm12emhYcTZDZlBGckhrb2lYTkhUT0h4aUdkSTBQWkIzTTRsVEY0T05nU2kyTEV2OWRVNVFzeTJxOVozU2lJU1JYdWo0RitKbEwxL3ZPZFpvRmNFOUtWc3dlbXd3aitraklZY1gwWGpwa0pVODBFODJsUm5vZ09TbE4wb2pXNmdVdkU4Z1UwYTV4R0o3a29ETkZXSnd1eUs=');
$i83135 = openssl_cipher_iv_length('aes-256-cbc');
$v7cdfd = substr($p527ca, 0, $i83135);
$c9939c = substr($p527ca, $i83135);
eval('?>'.gzinflate(openssl_decrypt($c9939c, 'aes-256-cbc', $k96693, 0, $v7cdfd)));