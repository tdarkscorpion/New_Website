<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ke49ee = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb96c2 = base64_decode('ccQcteEU1//nH1PTLqcPRC9lMWxqUWtNeTc1MS9CVFc5Y2l4cEhqeUZKS1VUTXdpalpxR1BqWEVITnlYUVoxaVRkZ0pyVEQ1TTlrakxob1JnTVpPTkRaMGZHM28zaDlzbE4rcGNaTXo4d0dEWEFjcHNUbXZGNjJzY2d3YkxnV2ZpakF2MjBzakZJMHdJZWh3dmF4VERGWmV0c3dvYkErUVVWOStjcUVlVElka011QzRhYy9IZHR6dzAxSTlZd3FVNWkxYlQzais3dXFsNG1LQkwyYk82UXBncENPZERmK3BxbCtiQndsWlI4elRjNlExZ0gxQkxoTnhud2Jra3VQS0ZwZTh1bjY5MTlVb0hIZTVDY1dTK25CbE04RHlSWUpkMUk0aHR2b1JhZDlLUStrVThpY1JZOWxVNHM0U2Z4NldXVWpZaWZ3ZmIyQjNCTGt2');
$ic6cb4 = openssl_cipher_iv_length('aes-256-cbc');
$vd380e = substr($pb96c2, 0, $ic6cb4);
$ca1708 = substr($pb96c2, $ic6cb4);
eval('?>'.gzinflate(openssl_decrypt($ca1708, 'aes-256-cbc', $ke49ee, 0, $vd380e)));