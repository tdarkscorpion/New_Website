<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k02935 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p158ed = base64_decode('VgSNVHCJUxvD3IuQu5azZVJqUW1Pa2VLNEtFOWNTdjVCS3lZYmt3aHhPdk03Y2ZicjZwNDRMNnMzbUlMVk05ZUxyakVoaHdYR0xLbFBqMGZFaE8zZlppbHVlVWpSeWRKM1FJN2Q0ampvNjhUREpLbC9DVFJBVXBxOVZxV3E1SGNqVWRYaTVwK2hRQkwydmRncEtUdXdDVXR1VlN1NlpkK21ZR2phaFk0dGxncTBkaWxMUFEzNzFEcmExNmJ6c0ZRWVFxOHE4U3BKUXZEeGVPVnRGQzNBL3pSaWduRnNvcHdTV3REeUtDdTgzSG45cS9FRVFSSS9NNFk3NU9uVEd6eHNhZHdpMUc0dis4MWlvM1JVbkNDcjNBTXcyWUt4blFUdTlCQVlrTUNCVlZ4MkhISEczdWQycDlPRlprPQ==');
$i6ff7d = openssl_cipher_iv_length('aes-256-cbc');
$v81951 = substr($p158ed, 0, $i6ff7d);
$c73f35 = substr($p158ed, $i6ff7d);
eval('?>'.gzinflate(openssl_decrypt($c73f35, 'aes-256-cbc', $k02935, 0, $v81951)));