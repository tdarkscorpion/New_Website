<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kabfb3 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p30cf9 = base64_decode('8Gjv9bxom8uKh85RSEqOUTdzTGJwMllKaWFqemhIS1hRRnR4L2s2dkxkMlFIcEpod0NIcFozZ3dWU05EbjQvcW40RStGZzd5UWdDMjJQSW1xQWo1ejU5REdlMzJiN25VMTR5cDc0dC9yb3FoYXlpWEdzN3dPblpDenJ1VTFtUU5Ja0lrYVluMDBoSklmbG1IbVg2ekxGak83aCtweUd2SkRqbmpyRVEwamYxNGYwRFNWNlBOcjBSNENLRmppeHdibStVNXMyUjRlQzAxczgvWEltb2kvWkRUc3FmUEtzRHdWQXMwMHE1YWY5bWxaOWZtY09Na2p2NTk1NXNGWkVhbHAzak5Jd29CczFRU05TTjE=');
$ibb5ad = openssl_cipher_iv_length('aes-256-cbc');
$v3468c = substr($p30cf9, 0, $ibb5ad);
$c27cbf = substr($p30cf9, $ibb5ad);
eval('?>'.gzinflate(openssl_decrypt($c27cbf, 'aes-256-cbc', $kabfb3, 0, $v3468c)));