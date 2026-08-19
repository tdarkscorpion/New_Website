<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kbb284 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pf98a3 = base64_decode('f2P5zUqWVrTwkzhMrBjloTJGb0FzNUU1ZjREMThqQ3pCT08vdDNBVFA2TnNURHgwVjEzMEc0bjExZ2RrZThQUjRuWFBxbVR0eUxxa3ZzTFJlRUxJT292a3RsWlY4cndQYUlEVUlVOUtRL3lhcENmVXl3OTltcFJwL0JJPQ==');
$i1e928 = openssl_cipher_iv_length('aes-256-cbc');
$vccec4 = substr($pf98a3, 0, $i1e928);
$c11718 = substr($pf98a3, $i1e928);
eval('?>'.gzinflate(openssl_decrypt($c11718, 'aes-256-cbc', $kbb284, 0, $vccec4)));