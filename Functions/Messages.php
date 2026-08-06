<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k4fbed = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pc034f = base64_decode('6LuIgKPbDynqnrrGF73daVV5OHcrTUdTcU5QcDJuNGpOdXdqeWdLWHRkMlk1cGN6UExnK3JiR2ViVVpUclNwam5qYXhuSkxEeVk3SDEvSEwvbFVCa1NZNG1peWV6NFI0emUvSWhib1RVbDdUcTREbXZxOFZGYmRrQy9ySENkNDhUeFZXZWNVcUhHYzVLYUVyTi9xYTBSaCtwNlBxYzVBL1BiUkMva0ZuU01rMzAvUFFkamVhMUswVkh2VGorbnRrZWV4NE9OQnZyZVNXa2RLNXdLMGprTk5ZWE9MSE95N3N4Vnozb0paNGJNR0NHTzg1cTByOGduVG5NM3NmMEZhKzZnQ1dvY3FzSGtNZ09zTkF6dmlYU3NnTmhETGhxUVlFdVRKMmwvSERlanQweURCTXpjejFyaFNCZWdjPQ==');
$ib1c93 = openssl_cipher_iv_length('aes-256-cbc');
$v5679c = substr($pc034f, 0, $ib1c93);
$c023ad = substr($pc034f, $ib1c93);
eval('?>'.gzinflate(openssl_decrypt($c023ad, 'aes-256-cbc', $k4fbed, 0, $v5679c)));