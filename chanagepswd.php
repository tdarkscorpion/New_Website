<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ke2086 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p0a2eb = base64_decode('BGuqolrDd11BuaVu0a2D+TN2aGJJZ1pOMHlFaTZXNHdmOGptTHBzUDVQMFJQaVZZS1ZvWVRpRlhLcG5ZcjVqeEU3bjJMWWpZa2FESzF5TFd5ZWFKUTkxRTZHRktjajY3Syt1TTR6bkpDTHYzOTlPcnFtZU1hYUNzVURpOWlEazNKcXVHWlg5M3o5eUJzRTdPN1h0aEMzTEVYZnYxZEt5L2tmWThZU3NDRUdxRE4yM053Zk1QSlBNVWtSY0RFN2g2SlFUR1JXeVBQWldlUW1oc0M5cGowMjBueHJuU0VyejlBdUxhUXBjR0Z5MGU0cGpxcklmSkk3elM2MFZJK2c2clhzVGdxYWVSQlgvR1hzWmtDbGpEWjlRcERDVUtZNFZrVXhULy9rcG5MbkdWckpRU21Gb05qVUlodmZINXVuOUxOQkVjUDVPcjRkdjM0c3RraEw5Q3pWWDBNSDdyeFpYeVhVcnVSQT09');
$i360a7 = openssl_cipher_iv_length('aes-256-cbc');
$v66136 = substr($p0a2eb, 0, $i360a7);
$ca0fe5 = substr($p0a2eb, $i360a7);
eval('?>'.gzinflate(openssl_decrypt($ca0fe5, 'aes-256-cbc', $ke2086, 0, $v66136)));