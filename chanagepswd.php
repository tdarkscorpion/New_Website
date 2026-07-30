<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k27f70 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p73a10 = base64_decode('exnDTvnNLYZcyQp/sZCYk0tZNkFJMlI3RTExRHVjWENSeldFNHdYQXBoRFFVYlFQbTZ4V2tKNWxrNGw3Rng3Y3crMlRYSTMwdzlOZTFJYjExcjdqVVNSb0w3MVlwNitMM0Ird0VnaXhqYkhERjJMRzFoeGpiNXhpTWxrL2FpWkZjQUFGT2UwTTB4Mzh6WGJ0bzlLNlpwdHRmcTErcjY4TjcwYVRKR2hnMERXemZDUkd1eFYvaERrKzd5V0o4bmVtRlZINWFWc0JxWGxTVFpoNTZRcmJyQkU3ZGxWZVVGZHdqTWhVanRQTFMvN1Frem52OTJBbE1xTkNvV1NCNk9sWXViZXFJb25wL1JTcEhNWSttVWQyVGJxWGR5UWdVVVp1K0I0aHE2SStKOEVCL3JuMzAveUlrSXhEL2V1d2FSU1N1MkM0LzA3aHgzYlhQM0xENXRUclIybXNDZVZYRmprbjEzOStydz09');
$i63600 = openssl_cipher_iv_length('aes-256-cbc');
$v03ad9 = substr($p73a10, 0, $i63600);
$c511ab = substr($p73a10, $i63600);
eval('?>'.gzinflate(openssl_decrypt($c511ab, 'aes-256-cbc', $k27f70, 0, $v03ad9)));