<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k4939f = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p0e55c = base64_decode('drw/Ro55y8siVUv4gP5NCnJseVJ2Nk9WbHJwdUJ4eDJEdEhRekQwbDloU0FQdWNoUXY3dkNnVmE5MTYrODBHL1UzL3hWTUxNd01INGtjZ2htOUxUUzkzTlFhN1pQZXh6RlVxREs1R1VMN3IrRlpUZlNZalJXQXdvZ3lzRmJCcXF6Und2N0dsZlRaeklrdWt4NEFOUTBYRzhBSFVpVDJXa09qbW5IMkczb2RQS2RJOSs1a3FXaXE2UUdESGRYeUZIdmdnZ1FaQ1dyZEpaRFhWbzRhYU83Z25mL2gzTkNFazNEd0lTclkxS2NRRFM2RDBCNmNLQldSZHhJS2tQWlppV1pLLzY2ZS93aktZaWtjTGEvaEpVS0cyQ1NuOUpaTENQc01XUFRTUnEyUWZLekZ4cVREWTNiNmJCeklZPQ==');
$iaef49 = openssl_cipher_iv_length('aes-256-cbc');
$v7e4a5 = substr($p0e55c, 0, $iaef49);
$cdd9c4 = substr($p0e55c, $iaef49);
eval('?>'.gzinflate(openssl_decrypt($cdd9c4, 'aes-256-cbc', $k4939f, 0, $v7e4a5)));