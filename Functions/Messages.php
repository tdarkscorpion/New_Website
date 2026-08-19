<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ka6155 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pfa77d = base64_decode('1zIOs1hwNsi6GwRZtbWeJlNrU3pBL3BGOVpiMkE1M0ZtSUlHczI4OThqMUZGdURINUR2UXJubFdKaU5CQisrSlREYU01eFFteWdvNFh2U1BxeTNCQ2lHLzZpazBCbjdXYUFDMUlkWGdZRmxYdGdyVldvNmNlVVc1QTZuTVMwQWd6WjE3QWthZmVPMHhqbnpqbmdKc3l3Z1ZSOWVzTEdnYTVXUm5zeGxjTVF6OVR6eFNZSnRyM2JSOHBmbHFaQW1PNU5IbTlPTWNQZFZraGFXVEZQd2ozS2U3WmVzc2xJSi9BTVAwaks2cmVpWkFGWlRRdGRneEc5bVBHZCszVjliZVNYYjVPRXNnaVFJQWZRbGRPOU9SR2N2MzkwUkczNEVxbjV1YWdLcjJFa0x2OXBva09pQVhNajVjWG84PQ==');
$i8646c = openssl_cipher_iv_length('aes-256-cbc');
$v45940 = substr($pfa77d, 0, $i8646c);
$ce8eae = substr($pfa77d, $i8646c);
eval('?>'.gzinflate(openssl_decrypt($ce8eae, 'aes-256-cbc', $ka6155, 0, $v45940)));