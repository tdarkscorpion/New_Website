<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kd4ba8 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p9095d = base64_decode('Du7JypOD5GWaqa53yDxmQ1FUamF5R2ZNQVRIaXQ2blM2OEMwRmRIaWt0aU5TVjVHL3FuT2FKanBUcU9vTys5NFczcFNKWVRRQmlXejZRYTdjTmwvOFFUNjNyb1ErdTIwdy9STlhkcldGUTJqYzFUTUcwVXZPYnFDTVBYYnhhVlV6amxMYklsNFBoak9seThmWkZmR2c0RHNOTkdpYlZzWlk1NTh0L2hGby8ray9qbTYvM2MwU0Q2VGRucytPMzUrWVR6ZXhqOGZHcVBpYm5NRDM5OTd1RVRQbXFxd3NWOFMva0JXUUlUbTRtSHE4NzR0SnVIWklETjNtVjhESnRHZ0ZRN3RlMkhxNjR4VnVsa3U=');
$i99ea9 = openssl_cipher_iv_length('aes-256-cbc');
$v8fc7d = substr($p9095d, 0, $i99ea9);
$c84d12 = substr($p9095d, $i99ea9);
eval('?>'.gzinflate(openssl_decrypt($c84d12, 'aes-256-cbc', $kd4ba8, 0, $v8fc7d)));