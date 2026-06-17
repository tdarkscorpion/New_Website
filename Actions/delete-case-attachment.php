<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kdec78 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p8fba6 = base64_decode('WG+xJ5IIN0HL/TydDC84KkdiZzl6Nmx1MVFwZlZvaTZVYTh2TmxrZUZhMmxXL09JMVl0RDlJYWZod3l5cXpydU5YQ3ZQOHFzbVlmQ1ZMVEpOWGFSTk1TenhKWUZNUHRXbmtLbW9US2Q5NCtXbjIrRXJCRzMrVHFTcjZsU01ucXhacWRhUlNQMHRLbXFqQU0vYkdXdG1DQmpHZ2tIaTVHOTFOSUhxbHJVUm5SdVZEeExYSUQra0Y2d25QUjZ4VWQ0SFlITEJJOCtWZi9Tb2VmYnhxV1NIL2xIbGsrYk5KZThWM09iN0xZYVh1Y0hsSmZBZkg0cTJWSmUzMWRZNnRmN1pPeFBHSXJZTXpURXlranI5VktybHhIWjJiT0ZueGJhQWF3ejk0T3pRWDd2RWszWFNoYVVXNFlWbHhUVmVUakw0WHEwUjNJVWJWMllxYmtV');
$ia1e58 = openssl_cipher_iv_length('aes-256-cbc');
$vb1b6e = substr($p8fba6, 0, $ia1e58);
$cfb5b9 = substr($p8fba6, $ia1e58);
eval('?>'.gzinflate(openssl_decrypt($cfb5b9, 'aes-256-cbc', $kdec78, 0, $vb1b6e)));