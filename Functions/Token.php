<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k32698 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb63f5 = base64_decode('G/qw3/1eQ1ZsAj+jbAiG4GdRcGFaekoxTGV1OTlrVUhKTDRlbUdJY2k3dDY5L0JVcStuUGd2eVFUa3dSVjFPUzBBZDBRcjdRVjRNazVZK3QzM3JIaUVhejk4Mmd5Zk1GWkJhcndnL1hMM0lLbU44eDBUZSt6bHFjVVdEbks1NWFGem9FVEJGd3FIOEJ6YTMxWUE1aHRkY3Y1VTZBK1k2eUVKL05aN3A3SGF2Nk13aVZQZ3U5cjNvemV4WWl3VmhMMUUvbUpORGk3eXU5c2U5L3dka0EyRnMvS3BlSWxBRHpPd0dIUUVrWHJMbXM1SGRnUzg5c2MwS0x2N3VWbjFaT1BjYVA1SGVJT1Z6Q2JkL0g=');
$i77511 = openssl_cipher_iv_length('aes-256-cbc');
$v1dca4 = substr($pb63f5, 0, $i77511);
$cacb76 = substr($pb63f5, $i77511);
eval('?>'.gzinflate(openssl_decrypt($cacb76, 'aes-256-cbc', $k32698, 0, $v1dca4)));