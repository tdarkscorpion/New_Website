<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k63b3a = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pa577b = base64_decode('S6p6NUUUHijuAwPdg+bxCE5ncFh3TENrR2ozYVdTMDhSTFJVbUZlQ3MvOHZNZnNNRldXZFpiR0pRam1tRy9Mclh6ZWRkRko4d3NFT2V0TlFCT2p4Mk4xMkROMkZvL1hXekRqY25EZnRRRjVZa2QzdTV0U3p5dkhwTG9DWU04Sy9GL0ZKK3E4RWw1c1I5UFIzeUwvbTZHRW1hYUQvM0ZyZjdHQm5qZDFpSXJvcHN3NW82ZXVBcFpFaE9IODVpaEhYWEZ3dnV6dnlKbTQvYmFyOTBkalArQ29NZCtRWURHeWpVRnFkZ3VnM1pCSGNsbE1WSC9zUkFvV3dVcjBXN1hPYnJTd0JEY2h0cVQ0R0JWM2lTVzJYOHVwc0ZOM1JhY0JLK2x4eUpBPT0=');
$id64dc = openssl_cipher_iv_length('aes-256-cbc');
$vb2a98 = substr($pa577b, 0, $id64dc);
$c5c9b9 = substr($pa577b, $id64dc);
eval('?>'.gzinflate(openssl_decrypt($c5c9b9, 'aes-256-cbc', $k63b3a, 0, $vb2a98)));