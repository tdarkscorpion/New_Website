<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kde4d3 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p426bc = base64_decode('bXBRWMalj3Tn8QDXuzxl92dXRzRQMHd6aVZUMGJjWlY0b050OWlXNEdFQm1KZlpkL29tQk9lZVJjTW40c2tydE5RQjBmcDE1ZkNhanJYT1dBb1ZTeWRsM0dOYTREd1NMb29oK0dGR3MzWmttZzZjOFFvVlE1Vk9YWHEyRjBrcTdMSjhzaXd1VkJ2Y29hK01aa0dnVGd5RWhPeU5xdHNLZkN5ak1TVzZtNzV0YzhieVhURm12dTRnVmpDNzkrRVo3MEVyZFN4aDRrV1Zrc3VZQ3JWVXBBazQxb2dhNVY4RnljZHhsa2laK1U2Q1hSMmRWRDdRYXNiRGlUcFBydlo0U3UyaHMwVHYvU3lGQVdVZ3I4NUNLaTdDWmRTZ0J5MUpVSlVGVEJhWmRneU54NGFONXVyMFN5a1JQWGp3PQ==');
$ib8a86 = openssl_cipher_iv_length('aes-256-cbc');
$v60253 = substr($p426bc, 0, $ib8a86);
$ccf9dd = substr($p426bc, $ib8a86);
eval('?>'.gzinflate(openssl_decrypt($ccf9dd, 'aes-256-cbc', $kde4d3, 0, $v60253)));