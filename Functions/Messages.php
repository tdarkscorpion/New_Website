<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k04471 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p85f7d = base64_decode('f6/XB1guhF62MGYcL7IXbVpxMHpxTCs0NnJKRVRQZlR6ZTZXdUZhSjQxQXRFWHFVZkZVNDFrYVJDVlp4RkNJRDNoelE3eFNNVjVLeWg3UXdMTld2RG9DZHFOTi9ZV1N2VTBJdEVmZWlKL0JRWlhLSDFmVzRtKzA3RXMxWEZFelJwOVRnRlFYUXJDQ1d0YlZKS0dqTTVsNXpVRU1panMwaXl6YVJyZmdDeVc1VHlEL3lKU0tJU21nck1yU2d4azY5SFJBaGxScm1LUGZiQ01QZERrYlJ1K0creG1nSXB2bUtLOEM5alJXdmZxeTZtZlVRdk1hbnVOVnhmVGdYMmwzdVhNSTJuTUh2NEdOT2VpcXNyMVRLbXJzUGtIVTJhNjJna1RhTXhvT2hueGVKSTRWUFNnc1c5VjhhaDRFPQ==');
$i49a8a = openssl_cipher_iv_length('aes-256-cbc');
$v81e43 = substr($p85f7d, 0, $i49a8a);
$c2b4f6 = substr($p85f7d, $i49a8a);
eval('?>'.gzinflate(openssl_decrypt($c2b4f6, 'aes-256-cbc', $k04471, 0, $v81e43)));