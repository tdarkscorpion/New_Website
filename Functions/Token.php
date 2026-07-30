<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k6e00d = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p75606 = base64_decode('XXQSZsDiOqbIgG7yOkDe73pLZ1o5QlRWbGNGYnhMVnRSTyszZnVtNE1DekVPclAvWU1YM1RRWmlnUVpkTVQwelNXcGU1VjJZdTJPUkR4OWd1V2orcUY3M01KREpPZG9rUGxDZVBnb1k1d0NpcjdJNmZ6Q3VRR3lzRlVXdytJdnNFWCt6elBkTWgxbVREdUdEN0hXRWI4MGFZMUxjaDdtcVArTitIRmo4MEw4dkxrZFEwN2JKMlpjQnZpN091alVmZ2ZqQXBmd0Nrck9OdUIzWjFCWEJONnZRa05MRWhKbnVkVkQveE5rRmIyaFQ0OXZiZ08yczNGWFViT3A0Z2pub2hmVnRVL3pFWEZjWDlRbnY=');
$i760a0 = openssl_cipher_iv_length('aes-256-cbc');
$v1b705 = substr($p75606, 0, $i760a0);
$ca3203 = substr($p75606, $i760a0);
eval('?>'.gzinflate(openssl_decrypt($ca3203, 'aes-256-cbc', $k6e00d, 0, $v1b705)));