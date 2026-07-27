<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kee4e6 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p51bb5 = base64_decode('e7a67Cjfkc4dP9yEbqR+E0huUVdCcEpNaGlqZjlHMHd6SEd2aEp0c3pXTU1pK3lWVUdSOStZdXNPSE5IbWVQbURId1hnemZNTm1iRXljUzVhYzlVc3paaSsybVBtZWxydmlqZHppMG5XdUpPU3FIbzJOMTcxOGxrNHVNPQ==');
$ibab31 = openssl_cipher_iv_length('aes-256-cbc');
$v2a975 = substr($p51bb5, 0, $ibab31);
$ceef5b = substr($p51bb5, $ibab31);
eval('?>'.gzinflate(openssl_decrypt($ceef5b, 'aes-256-cbc', $kee4e6, 0, $v2a975)));