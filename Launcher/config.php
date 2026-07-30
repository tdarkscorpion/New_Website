<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kdf7cb = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p481b4 = base64_decode('QkDk1F6LrcTZ2LpJpK5rxm5BbkdtQ0xJMjFsTzlGYjNsM2wvRFE5QUxqd01ZMExtdmJORkt1RmthQi9RcEc0OCtVNUU0emZ1OFloRGJnenRLaXViUzJ1ZmZFQ3ZKdTR0WkhiN05vbU8vUGVwdktzaEl3SjRUd3c5N2k5cjlLelZWYkJzTTZ2VW9rVHFZdGVKd3l1YmRmNTNBSUkzU1FTbWVxcDRSRXVsTzZTZi9aRmtjQ25BNFFFMDJOSWQxZjF1cVd4ZGZiRWpUOGlLK2JDSnY4TnljeHpsMiszZ2piN1RRSFRtdHpLMzgxUHkwUVRGRXNsS256UHNwMkFJS2RzN3NsVG5XTXN0ZGRabEsvbTFQU0Z5YWRBYTh0Mm5qb1VxajZKY2FlamowWFZoMzA5Z003clJmWCs3ZS9BPQ==');
$ie3a5c = openssl_cipher_iv_length('aes-256-cbc');
$v99114 = substr($p481b4, 0, $ie3a5c);
$cb8a03 = substr($p481b4, $ie3a5c);
eval('?>'.gzinflate(openssl_decrypt($cb8a03, 'aes-256-cbc', $kdf7cb, 0, $v99114)));