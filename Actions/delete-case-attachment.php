<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k854a0 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p3cd57 = base64_decode('92q6ZXXhDoVIjJrATSliaEY2bjZER1poLzk4K09lVDVwTjMyblYrcWdIS044d0gxdmZiVXlMK28xK2htNUdnbGgycUZEaU42eExDNWZweUdnSXYyNjM1TVM1RlRqdXRPbGk1Q2gzdVZVVVFLZFRTaW1kb2VOZzcvalI5b1RsTEt0Sng3ZGNNd2d1aFJKZHM5UDJ3SHc0L1BvWStHdThaL3ZadmJKZ1l5VDFRNVdYcDVBODhheWtBSG9UNmQwUHdWNG56Vi9YazNBMEg4OGlFRTVhaUJRTExEby91ZWxCYXRERGtENmRhbGhnV2ZxUWJlZlgvM3pRMjNYMnVPK040OXIybVJuSGhSVFZFSCtxQXdRbmZqa0NuZXFQeXIvUHVrMzZDVDVrY0hyUDVOM1dtblg5WlppVVFiaTZ0TVNWZ3Q5WnYzMGN1NGt5SXpFaUtr');
$if996c = openssl_cipher_iv_length('aes-256-cbc');
$vbbbe7 = substr($p3cd57, 0, $if996c);
$c6a783 = substr($p3cd57, $if996c);
eval('?>'.gzinflate(openssl_decrypt($c6a783, 'aes-256-cbc', $k854a0, 0, $vbbbe7)));