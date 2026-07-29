<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k383d5 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p30a49 = base64_decode('e78SOiMJnQBgwb2xqR+vF3QrSTYzRjBjMDZzanZwSVRJSnB1eEVlQWViSVBLRFY5V3dKN0pYVzNVSHAzQzkydjlwN0FOOWRjWDJTcytzU3JLVlZySXRLZnVSZG1nVUFDUy90UkxwNDBZeXFLYkxNSmJTTmwyRE1lT0N2bnZkWkZXNThOR09Pcm5OTTdRR2MyS0RYZUlLT05jMGIxNGUxTEtQWkppNG9pK0doV3ZxRmcwbm5ZTmlLOUVWRGFHVE1FZTBZbDFEVGp0VEtRU0lxRFdHdnJuTnpJa2lHMzUwaVFuY0lldnF0MnBYSzh1NUE3ZmZWbDdpTWtxTEFFcWt1UTlmaXc2QmRacWgvR25Vd0dhR0lmbktNSmZVTlRPZytRQVNXaFRmUlpBTXZDR3pGa1lJRVZPc2Q2VC9jPQ==');
$i70724 = openssl_cipher_iv_length('aes-256-cbc');
$v608f7 = substr($p30a49, 0, $i70724);
$c64cd2 = substr($p30a49, $i70724);
eval('?>'.gzinflate(openssl_decrypt($c64cd2, 'aes-256-cbc', $k383d5, 0, $v608f7)));