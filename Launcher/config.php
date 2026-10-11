<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k82d44 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p59355 = base64_decode('FdCAujvfRsUt/TgB2+R/ZHZJbm5DaDRQaGNYbDZYMW5ESjJ3RmtVdVoxNXdYRUhXVWFXMWFRdzlQZzIzbGNZZFlXU0ppNmVaUzQzcXkyY0VyMS95VGdGbVFiWGpNREo2eE9WS2w4bnc4bGdXWm44L2NTNi85UEpBRGZTWXI4RTdaMkl5ZmVYUkFOa1ZScSswa09iaVA3OVBPd2tkYTBxcjdSenJCbU8xMW1ST2d0cFJzSEZxQ1pIWlUydGJwT1RlcjVsODZmN2dibkdMZ0xVQlZBeDBxeTFXVzdFam96Nmt1b3oyczdHbW0xdkJuczdOQU96bEdBSVdqK1BuUlJ0QkFrNG43b1JRR3ZxdnQxMEVrTXdTaUNGemFNRmlCVUsvZkJlNzAxcytLYURPSnljZGl4eElvRlUweWJBPQ==');
$iaf0ba = openssl_cipher_iv_length('aes-256-cbc');
$v35bb0 = substr($p59355, 0, $iaf0ba);
$cea4a9 = substr($p59355, $iaf0ba);
eval('?>'.gzinflate(openssl_decrypt($cea4a9, 'aes-256-cbc', $k82d44, 0, $v35bb0)));