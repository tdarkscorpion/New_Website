<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kc82a5 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb1093 = base64_decode('55fAaQdxBJgH75VHRhmaRjNMckRPeVZlRGxXQ1FibTBXVGM3b0FCMDdMeWRvN1lmNEwxNENUU04rN1A1cVFBaHJNVUxsY2E5N2ttR1o3Vit4VzRXWDhBWWx2UWFRS3ZZbkYxUmNic0dYTGhTVEtHeFNQQ1grdGpGNzkvMDllUWhTRWhGdXM2YmdBSUZ0dFVlbWhVdmxkQmVFN0wvRHo1a0t4ZnJ5d05lMWtVaDZ4SXQyaWhzVWVCU0RERlRBSnQwWnFlSlMwZlZWUUhRcU1YT2tMOEl5N0NRak5MVVlYaCs1aXpYdGtBY3ErZUtFVEoyWm1rQkpybDZNVU1uUTRzbVpTek1pQkRZd2JudkpuQ2daZkIzVk1pbkJQOW1relVtNjNzUklkTG85SEdEWkFldklnalB5Y3BtaTJ3eE50V2VKeW85M2FsV2pCWHNTVlJBV3ZBQnpTa0tLWVFmVFM4N3NTbEtvUT09');
$i3e00d = openssl_cipher_iv_length('aes-256-cbc');
$ve5552 = substr($pb1093, 0, $i3e00d);
$c6548e = substr($pb1093, $i3e00d);
eval('?>'.gzinflate(openssl_decrypt($c6548e, 'aes-256-cbc', $kc82a5, 0, $ve5552)));