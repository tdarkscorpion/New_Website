<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kbb900 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p7499f = base64_decode('wqXNxPmIAWZpEFwrDFzE1DdlSnczV25NWjlvOWxSV1JrNWhpRUt2ZDRVdnBHaDBORzFtS2k3bDdPYnUzMHk1U3VnaVR1aHd3Z0FIQXB4THhuV05jRjVLUE1EbTBMQXVrM0lNSlhhZld1Z212MmI2MmRVZVNoYjZMbWF0NW9oUzlFUXpTK01pNW9EL2UxaFZaU1NiU0VMazhnYWlOTUIyL21iVzNaSmR1YjhZV1ZCN1hVZWlWWFRiTFVTK3FqNU50MWZmL1ZXYUNoTzNWZHRPRXVhQ2pCSmpUemZSS0l2eDVMSno2bzgzaS9zeWtkR1pHb2VwZE9qbXQ4VkdqdzVhZlNXaDRod0dWL0IxYmdSd1E=');
$i71b66 = openssl_cipher_iv_length('aes-256-cbc');
$v04ca8 = substr($p7499f, 0, $i71b66);
$c5d93c = substr($p7499f, $i71b66);
eval('?>'.gzinflate(openssl_decrypt($c5d93c, 'aes-256-cbc', $kbb900, 0, $v04ca8)));