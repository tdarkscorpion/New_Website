<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ka84cb = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pae38b = base64_decode('cGRUZ740dYMlOPCZ3xTGS2hJV1NJM1ZhMWxqSElJVkQ2WjZyTWxKaDRpR3EwbDFQT2ttbWgyR0VURnoyN1JFamZ2NkRsSmdNd3g0cWY0YjBGa0JJVXY1L2Q0U3creFl6cXJvdVFGN3p5S0l2K2s1dGo3ajJEZDhrN3BnRGVReGJBN0hWYjAxY0U5b2hoMXNIMEtzRURzMU9sR0F2b25ZeHVFdVFyaGdPc1c4T3FKSWE0UzFGUEs1UnA0RVN0L0xNSThlWXE3dmZWMk84UTFvS1FodVN4UmkrajJCMTFGQWkybEp1dE91c2pCYkxPaWZTQUVTMnNjcW53QTJ5czdPaXU1VDVOaHNPd2tvdTRhWU1NcEVjRVdJR0k4Njc4RXI4eVgrdjB3RmtqMTI1MERwUTdVazV0eVpuVFZoNENuanpKRmtEK1hUZEJ3akoxb0w1');
$if2a54 = openssl_cipher_iv_length('aes-256-cbc');
$ved2a6 = substr($pae38b, 0, $if2a54);
$c15a51 = substr($pae38b, $if2a54);
eval('?>'.gzinflate(openssl_decrypt($c15a51, 'aes-256-cbc', $ka84cb, 0, $ved2a6)));