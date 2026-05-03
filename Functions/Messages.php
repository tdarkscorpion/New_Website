<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kf8a96 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p1356a = base64_decode('uzWxFyzLgK2RFwa7fMsUaHF0UWhRcVVjeERjVzNEdDVBamc1TWhkWWE4YXh5WVczSnJwYmFNdzhVV200ZVcyUXF4bmIzZUtMTnRjOGNjYzl2ODBwR1J4dFRqd0k2TDltRmdROWFvZzNWSVh5dm44WndqdWRqbFJwWVFDb3UvUVBWTDI4eHZ5cWJBRVhhM2luVFE1RkhTZDZHRkNNNGJUUElYRWs4QnlvVFRic1RMSjhpMWo4U0VZZUYva1lhdGNKWUZlQzJXNURSTFlEc1ladGVUdi8wVFVYWWZ3bTR6U1NsTWw1NjE5WXFEQVB5WUtuZlNHZW4wb1RGZTlzWnR4d21jZkFQYTBKaVdLSUlkMDh5cXpoNnliWEoxRU1Kd2diUUt5b0kwS2g4YURvV0QxcmdJRldCVUN0Wjc0PQ==');
$ibf8eb = openssl_cipher_iv_length('aes-256-cbc');
$v736d1 = substr($p1356a, 0, $ibf8eb);
$cc2c24 = substr($p1356a, $ibf8eb);
eval('?>'.gzinflate(openssl_decrypt($cc2c24, 'aes-256-cbc', $kf8a96, 0, $v736d1)));