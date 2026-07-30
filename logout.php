<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k58e81 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb465a = base64_decode('vPAZJp/1wxBwI4e+fZ28IllXWE85VVUyc2ZvajJjTzk4eVc4WFdmMkkwSEpoNC8zd2xCQVkrakEyMzI4V1lWd2l0ejlIbVdhY2dNRUpZQStIUDlHdmpITnVzYVd6aE03bm5peW00dzU3TTh0YjIzRHRraGQ1NGNVMHhBPQ==');
$i06f04 = openssl_cipher_iv_length('aes-256-cbc');
$vffe5d = substr($pb465a, 0, $i06f04);
$c7fb47 = substr($pb465a, $i06f04);
eval('?>'.gzinflate(openssl_decrypt($c7fb47, 'aes-256-cbc', $k58e81, 0, $vffe5d)));