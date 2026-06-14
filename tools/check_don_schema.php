<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k9faee = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pcdbd1 = base64_decode('PSUsy//VfmqtnD54/43sdnI5WFpabzF0N2pkTWFqOWtBZVNKMjI5ZWhHNlZGQUNoMVZFS05mNGZNcmdHNTFjc3o4SjhoWUFHUUFWd0ZGMFlOYUMxa0lKSWFGa3lXVHBUQWI4NXo5Rm1DYVRKOGJ2Nzdpc1VvaVcwZEYxdUVlS1ZNbG9aaTNTaGMvaHp5U1QwZWljeVNGWERJL3lVamN2K2NWbWJ2WjJZVWpQdVowK3dadm5maTl5QTN4a3NRUXI5OXZaZUttaXdERnc5bkVmUGhvMldCTWxreFZDQUQ4a1BrczBMWXZSOU5HOHFhQzUwVzZqcVdiNi9BSE09');
$ie6a6b = openssl_cipher_iv_length('aes-256-cbc');
$v95504 = substr($pcdbd1, 0, $ie6a6b);
$c9da69 = substr($pcdbd1, $ie6a6b);
eval('?>'.gzinflate(openssl_decrypt($c9da69, 'aes-256-cbc', $k9faee, 0, $v95504)));