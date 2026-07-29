<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k76d66 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pa6494 = base64_decode('UlITx+sqLojflqLUMgxbQWY1QWpjd3I3dWhCSGxmN3lwNmxqT0RlaFhJMnI0UTkvYVFPa1lKdkJIWVljRmhCYTZlSGRyWTFhdjU2QTcxNGxWQmNSMi9MdFVkc3ZBa1BvdVMzUlh3VlpQOGg2UW9MZUFrd1RMbFBMSUpDVXZ6Q1dvK0VPUTBESytZQnJITmdBdTRsS2xzVkR5UHlqTEZ1QVBXd0ZZMWxSbHZJWkhELzNqaXFhQ3pkY3d3UlVWc2VoYnM1SGUrNGdPVGI1MHRnd0ZsUmxaNlhveG9pcjdxcGNac0NaTHlqem9CWTk4RHo2TTJJRmdZeFNsTVZQSEhTdStPQnRXR09xM0lEczV6QXBTcCsvS0dYMnNoWXg1OWJ2WjQ1VkRrTm5tZjNUU1VQZlN1UHRGTHkweWxzPQ==');
$i599f0 = openssl_cipher_iv_length('aes-256-cbc');
$v760b1 = substr($pa6494, 0, $i599f0);
$c62534 = substr($pa6494, $i599f0);
eval('?>'.gzinflate(openssl_decrypt($c62534, 'aes-256-cbc', $k76d66, 0, $v760b1)));