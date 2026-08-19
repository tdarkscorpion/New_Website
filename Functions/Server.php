<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k4dd6e = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$peb9f9 = base64_decode('Z7YcgD1d3jse21GGG80+g2MrS2hja09Td3orWWN0WUpKaWZPQ1BKdE1kbURVc1IrNThlTXZxcWYxdzZuanNkVHcxVnVkWms5cXdqRzMrR1pWZERXb0g4dTRFY2g4MUh4c28xZ0o1RDY1cVV0MDJDazIwaks3RWs5Y29ETGdDb2dwdDRlUmtnN0hXTm5pL09vSWd5dExxS0lCUnc3OFJVNmRlVnRjZlZsY0FxaEMrZHYvUW1hWURRYnA0N3E5VjN3K1BTVkdZckRGaUNISWRicXdMbVc2TU4yRGg2RmRmK3hTY3k3bjNRZEhjMVZMUFFIOVdhRkpkbUxNS0VsTmRhekxCUGhyRm5XZEhMTE5jTEMyOC91ZzY2WDkyVm9zeHBvYjlsaGxDcTA2ZE12VjYveElSZjNESGhSa2J3PQ==');
$i91a84 = openssl_cipher_iv_length('aes-256-cbc');
$v5a72c = substr($peb9f9, 0, $i91a84);
$c057de = substr($peb9f9, $i91a84);
eval('?>'.gzinflate(openssl_decrypt($c057de, 'aes-256-cbc', $k4dd6e, 0, $v5a72c)));