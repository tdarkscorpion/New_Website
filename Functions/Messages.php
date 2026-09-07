<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k66878 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p64d29 = base64_decode('29m1PvcHtxCevBns8B9dhTQ0TlVGbXJpVThVTmlnSFVaWVUyMmVEK3g0LzJ1MWs0TWh1Rk15dnlGTzhMeHo2aE5QdGlYRU9KMHJGeDh3dzhQS2Vac1Z2d1lweFlWdTc0MG1pSmZMMHZybithU1pxRmZOVHA3cDdKSG9aZlFLbjhTRHQ2UkdJcE9NSTBrNUxkSXMyTkh3bVRuTjVkaHFxckxaUFNxREpOR2Ywa2RmZDVsdjNIUEUxd3RwRUFVbXNseFRyTGFrY2ZSVTZaRjUxb3JKdU1YT3ZwRVRHNW5rTjQxYUI1T0YyY0w2NlRYb3JpS2x1UUt6d0czMURJdDBiNUFaQk1OSDdsMkFwNnhabXNxemN3Z1hYVENnYVlNeXZUSXJDQmNjRmpYZUV0MW5yWko5TDJicTJlMk80PQ==');
$ieab28 = openssl_cipher_iv_length('aes-256-cbc');
$vabecc = substr($p64d29, 0, $ieab28);
$c3761d = substr($p64d29, $ieab28);
eval('?>'.gzinflate(openssl_decrypt($c3761d, 'aes-256-cbc', $k66878, 0, $vabecc)));