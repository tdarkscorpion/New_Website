<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kcfb79 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p140b2 = base64_decode('Xh4InJK7CiwWFw4w6FGID3dRVmpYcDErSXFtV25velg2VngrU1gxOFpQa1QyRUM3S1M2cTNNM212WHNBeFBWYk1ERzFqd2l6Q0RyN0N4MVdORzVERC9BbHJOTHNPWGxUWjZTTTN2ejhTWXBKKzJ4Nkoza2E3czVsVXlUejcyZ3J1OWVvd0ZNR2hEMDhLTjhuWTZVRTUwQkJ6SGRINDdWUVR1cnE4aHpsc3RSdGtnSElXc3VXeTgyMk5FeGk4SnlCbjdVMUh4enZBdnQ5MkRucEtaNnROZlZTMWFHdmRMTWNNelE0Z0E9PQ==');
$i0aec4 = openssl_cipher_iv_length('aes-256-cbc');
$v9715b = substr($p140b2, 0, $i0aec4);
$c0f726 = substr($p140b2, $i0aec4);
eval('?>'.gzinflate(openssl_decrypt($c0f726, 'aes-256-cbc', $kcfb79, 0, $v9715b)));