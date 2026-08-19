<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k22162 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p63dbc = base64_decode('OG/EYl+lh/uhSylU6aN/wTN5N2l3NFNZN1FQZ2lNcmQ0UHRLUVV5RnNIcHJvd1NmTFlvcVp0QUZqZldNU3lhRGt6a1MzMU1jMGpEVURSYXpGMnJuY2J3UlNFR0NlVWZKbERUbnNzODdmQ3huZ3R5T0xtZE1ibzBIVTRZMFlKRmNvejFTTFgvU2VldXp2b1ljcDlRRXY3MjRPOURocGhCV1l1K2dyMGh6T1k0T2c0ampMMEtuT2dzVUN3cHo3ZW96dE5ocE9rY1VWakdTTWxPdnczNG1kRmgxTytaaWRSalRXdFFLQWR3TTlnKzBBZXRPNktLU0l4OFMwbUZkc2NuUjRDbGI1ZjhRWWJaOU9uVDE=');
$i228dc = openssl_cipher_iv_length('aes-256-cbc');
$v8e0d3 = substr($p63dbc, 0, $i228dc);
$cc2606 = substr($p63dbc, $i228dc);
eval('?>'.gzinflate(openssl_decrypt($cc2606, 'aes-256-cbc', $k22162, 0, $v8e0d3)));