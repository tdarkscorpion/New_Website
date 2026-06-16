<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kfb25d = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p895bf = base64_decode('gJDPHlZs6KA5CMFf32GyMHNodzVUSDdmeTB2RzRWbUFabElxR2hCeVZVWkFIZmxSNDlGRUdBelhnWGx5ZEZKbjZyMGdZTUd0MnhsTStHUXFwOVdvNXlkbGgrQjU3VDFYeVd2MzBLamVERnYyc1l1VE52OUJsaGpzSWFKR1VCczZRNHhhR0ZHNGMvekZvOWtocHovd2JIR0FVbW16VkxiU3p0K0EzZTdyTWRxa2ROZkxhODgwWkhyOURBWm5IMTdQcVR6OCtnQTl3Rm5ueTM4TWJ3NGN5SUNlWlpWN2NUa1M2dXoyWmFXdGRRMWZIUVpNeGdjYmhkZksrcG5OWFVYcENJTnR6MXdlQlFvcGZRdis0dS9QZTZlQzlGQkRZczJlZmk0bzUzYkRnM3Y4bVJ5Z3pNNzZ3Ym9kVG5FPQ==');
$ieb7fa = openssl_cipher_iv_length('aes-256-cbc');
$v74282 = substr($p895bf, 0, $ieb7fa);
$c3e28c = substr($p895bf, $ieb7fa);
eval('?>'.gzinflate(openssl_decrypt($c3e28c, 'aes-256-cbc', $kfb25d, 0, $v74282)));