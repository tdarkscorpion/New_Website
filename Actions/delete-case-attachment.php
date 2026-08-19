<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ke65a4 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p1c59b = base64_decode('B9g+yrFi7f2iotrYNBziom9XajFPdHVRdEV0RlRJU2dHYmxlYldrdjNTcFFHVkpTR3JMUVJnMXd5Wk1Za093WnBHci9zVDdlOHY3dGhZRy9XdmZDMlBvQWZieGhVZGk5Q05hQkRzUHhGcWRVNWg5eEEvNENWWHNJQTIzbTFPVTRJYU4ybmp5OVoyMStJNjdqb29WQkc5SFl5dDAxTE9iVG1tS0FBZTRTSThVem0xOWkwOTRKamxDKzdmRWxqemhGbGJObU1ZSmxnZmpjWlVSMGoxbzNUTVJlK3lUNHl5eXphTm9NLzh5Y2I5SVAyKzRQODU1NXBMcXhGcHpMVEF3cWs2V0Q4N2xleFJ5VHIvT2pwOEwxWHlnSVNIaVNoWVBnQ3Y0bTZwcUVhaXRHZVZjMFg0TEEwM0Z4djcrN2JXc0hiLzFGMWkzdmJiZzFhUUli');
$i49d89 = openssl_cipher_iv_length('aes-256-cbc');
$v9d46e = substr($p1c59b, 0, $i49d89);
$c05f50 = substr($p1c59b, $i49d89);
eval('?>'.gzinflate(openssl_decrypt($c05f50, 'aes-256-cbc', $ke65a4, 0, $v9d46e)));