<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k5bb75 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pecef2 = base64_decode('VUZlxUxKRU7maa7zxJtvhEM3Y01mU3dJbkVIVVZkemZQSEM2R0lUUEhNSDZ4RUlIOGkwRmwrZWlkVE9STi9KQklWZTluOFZCZEVCdzZxaEtZRU4vM2xhMk1wa09PTmcvYVp0SFNnSTE3Z3AxdElEQUJPcVlac2dlVDNtUlJSVXFobGRMc1BwenMvcHhmWEhJM2NjdjF6SG5aOWxMQlpBTk1CelJXUmtQZFhpQ1F2ZDg2Mm1ONXlHenlCUWlXekdUd0NQTmdNdVEwSWZRVk1xbG9rQ3MvbzlYTkxsRkZRcFBHd2VTdnltUFhkUEpBQlNDWEovbXlMYzBNT2FDcVY5NnF1RXZRM3N5eklhMHFTM0k=');
$i156dd = openssl_cipher_iv_length('aes-256-cbc');
$vfa1ff = substr($pecef2, 0, $i156dd);
$cf57eb = substr($pecef2, $i156dd);
eval('?>'.gzinflate(openssl_decrypt($cf57eb, 'aes-256-cbc', $k5bb75, 0, $vfa1ff)));