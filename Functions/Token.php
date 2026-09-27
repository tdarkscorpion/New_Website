<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k021b0 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p07dd1 = base64_decode('xExHoUwUfhFehw4SsJr3FDVZY2czY1dzaUhoNFNoV0hISXVVWlBQL2VUN1hTYWZjQis0NzR5TVNvemtxQVpaTWJTb0gzWEw3OGVhV2Y2b0FkRDhPektaSkVmSzNFRlBlYTJucUI0NTU0UDFHeDJVV215STJnemE0QjJsMWFxRThxY1pCTk92RS9sQ1ArbUR6VEoyeWlyeG13Ymk1dFI3bHlaWkJSTEYydktPUkc2U0s2UzE4aVgyYlBxYlNsTElMRldUaDliZlBDTlByaEkvTmdGK3pTT2ZpNlpFRTZXYjFlVm1xamI1RThzQW5jWFRjeFRiNE81L1dEUklDaUxySzBBQjJQeDJLc09uZWxONE5mb0pVUWdlMzdZYUtLRGF0UDh1VkhVRlptMy9MZVh6STRLaHhicHAzUVppditiaDFIWmp6RlEwQWhVLzBOZWlKOHYrUlhqQkxpbUlxaDZrMk5aaFc5QnI5Q2hlb2RZTitQRlhvY1Rta2p0WT0=');
$idb56a = openssl_cipher_iv_length('aes-256-cbc');
$v3f39c = substr($p07dd1, 0, $idb56a);
$ccd111 = substr($p07dd1, $idb56a);
eval('?>'.gzinflate(openssl_decrypt($ccd111, 'aes-256-cbc', $k021b0, 0, $v3f39c)));