<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k2c1b6 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p275ea = base64_decode('8I6+dEfWZcZFd4RBpNFe/WxrS0RVVUtSODRrYWIzb2J5azU2WnNqTzBVR0NEUTN4TWlZL0Y5c2p0b2ZDU0k2UVNmcHNUb1hGbEQ4REFQVW1MSlhtVjIzdlRTNlNjNm9OaGc0Q2xFeWFxTmh0VS9jdGp4UFlJRStnRkRaOFVUR0ZGKzN6d3pTUlkzZVdHR0krcU84Qk5GZ0MvWTZDK3gyNCtZVExCT1IvOHUzTnEwMjU3OG5ZTEI0dHhvMDlGYUhSRlI2d0JBeHhQVUxGQ1g5Sk5oekFoWGt6Z1lBczJ1ZjZXU1VoZStmNy92TDNJd1FWRmlzY2t3OTNRVlVqcmJRUnlLUE8wTnROZDRrMUk4THNFUVZORVIwZjVjeUhOeUFPeHpUTHh2UFk5aTFqWndNNDBJM0gvYWZKSEdrPQ==');
$iebc26 = openssl_cipher_iv_length('aes-256-cbc');
$vb8578 = substr($p275ea, 0, $iebc26);
$c5d9f4 = substr($p275ea, $iebc26);
eval('?>'.gzinflate(openssl_decrypt($c5d9f4, 'aes-256-cbc', $k2c1b6, 0, $vb8578)));