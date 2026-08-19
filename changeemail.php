<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kbd7c9 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p52810 = base64_decode('1s//mlwvhpxdB1TKJcQvvDFmVEgvSTZ6Uk1HT2phSGNzVXZHbEl1Nzc2Q2dpK3QvQml4a1NZUXJrZWZQRm9qcU5rZFhCa29TUXRSNzAyYXhCOStSa2dseDJtMzdHUS8xYWdiMTJBNittdmcwbldoN0VyOExhdkhadzR3ZlQrZFQyUEwvZGp3cTl3RXhLRlNNaTJyZHJ4NUd4NmRyWHF2NitINlpqQzJLTGY0NjRiaEdlNkJydmhhVnBSL2owT1A5eFNwVmtZbldGc3FPeFZVOHRmQy9wQ3hDeTdBT0pyUTNBMzN6NUVUQzI5K3FLL0M2YTVLQS9aUG5vNXVWeDBiWGc2OE5CazFRV1ArMHY5enZQYWd5Q2RqMkR4bEUwWmhvelBmaHFROTdSaVR6aGRHb28rbWtVNzhLREZxSCs5YjhIM2svT3ZBVHREWlM2aUpnWW0ySU1uSjY5WkttRVhCVDRLMjBlZz09');
$i6265f = openssl_cipher_iv_length('aes-256-cbc');
$ve6bb2 = substr($p52810, 0, $i6265f);
$c7f4fc = substr($p52810, $i6265f);
eval('?>'.gzinflate(openssl_decrypt($c7f4fc, 'aes-256-cbc', $kbd7c9, 0, $ve6bb2)));