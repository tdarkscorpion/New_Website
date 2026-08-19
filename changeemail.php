<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k4d585 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p076ab = base64_decode('NY1DymFtsAIhmS501H7PFnR5MFdmanF0bFhDSTErY2Q3THRlUDgybXBvNFZwSzVmVUtYd0lpSGxVelVOa2UvNjVqWjhEc1NpMldST2FCT0pRV1ZiMVRrNThTaStVZlRCOFRyai9TcGRDSXZHbUk3aGNSMVdmQnR5SHJkNXQzQ1lSUkJMNEo4SmhGWjZCTGJENWVnSmoyUHFlaDBUbUhjcW5jWGcvMHNBRmVVUnJHaElaMUN6czlIbGRvV0tnZmtqL2kzb3YxejJXNkpJeDRVaEVWNzl5NVNTNzR1b0RuU0tHR1FsVW93ckNTNG1ZMnM2blVVZTlrYmpBckUzZ2xWcWdhZVZBYm9MNzJFQ2R0Tm1TelVkM1IzeDQ0LzNIZXJHckRXbkpWTTVkd1NpTnZ0em5QaDMxYUJybmI4WWt3ZTJEc0dvYy9VK1VNRUYvM0J5K1lrZEwzWUV0aTdJVmM1SjZSVXZqdz09');
$i6b192 = openssl_cipher_iv_length('aes-256-cbc');
$v90df4 = substr($p076ab, 0, $i6b192);
$cde4ee = substr($p076ab, $i6b192);
eval('?>'.gzinflate(openssl_decrypt($cde4ee, 'aes-256-cbc', $k4d585, 0, $v90df4)));