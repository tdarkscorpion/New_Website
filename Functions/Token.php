<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k7a0d1 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p93939 = base64_decode('ulvx1UNw8PXKyvWl3Ds2RHUxbDlQRUlXb3BQb0VmYVFUaWFEcEFDMm0zRmEreTRWWTJpMWF2UHhacDhKM2tKUE1RbUtSck8yVU1NSGcyRSs5Zi94OVJiTzRxZ01Ed0dTSksrQ2xyOUJDN2N6dGlZME9KV1BJNGVML2hpcnZvOFk1b0J6SjdtRzBuWnN2MStYYUZJVmdvWCtGMGhKeHA2RXNPbHd2aFdacTdLeVlUYlJ2Y3JBNnBtY0dOOFUxQmFzVmQvcEpIMEFDRGluNXZYcnpGVmczL1BoSFFNZUUxd0lBa1IzMUJlUi9ZOXVmV25tVHU1NnFNSnZKaGE2L2FjWnQyMEJ5cFR3T0N6WFZaYUc=');
$i1fe05 = openssl_cipher_iv_length('aes-256-cbc');
$va5237 = substr($p93939, 0, $i1fe05);
$caa70f = substr($p93939, $i1fe05);
eval('?>'.gzinflate(openssl_decrypt($caa70f, 'aes-256-cbc', $k7a0d1, 0, $va5237)));