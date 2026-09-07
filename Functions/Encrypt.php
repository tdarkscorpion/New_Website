<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kfa282 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pccee8 = base64_decode('UBKxOLQtpyVoYVBF65KjXDM5TldnckVzVkkzNkY5K3V2YVdQSnlsankyVEJoTUt3MEhaTmdhWk1aTmM3TkNJTFdYVkJ4bXpheE82Umt5T3pxZ0VaL1dhYWtPd3RMTEN5c2VNWVpmeEQ5T1NCQnNrelFWRjc3RG8zR3cyQ2w4ZlM5U3o1TTZndUdqR2Z4M3FXa3NMQ0JhMEhOVk9nQ0pWZmdieU5hWEorVmcxaXlCYWZWaGhPYVhLVjBaYWdMTmdxWld4OFd2aGVydXBTVU9zeWcybVN5WnBva2hqOHFna2s3WElHZ0U1aEFRWWhFdHFFaEhxQ0UzbGxnK1RDNlB1NnNLTDJ2bnRnSENqRHVzdlRtb21xMzBYcUYvS0NuQjV3eHJCTVQ5V3pPbG1MVy9FemtLNUc5MjBwbmxkYUhUTnZjY3MvYmNJL21uYWhINzBpNDJqdlYrdUtobE1hSFpWZVVUVmxFdlpmZkNTMnY0eUowSkg2TmNrclN2RzhkMlNMaUV0andRSlFwZVF0cXBXZDFianJJNUJhZTNDNFpDcUl5MXVyNlpvK040OEthamdBRjFManZhRTBiZFl6dHFNUW9zMWZvK3AzdHFCRzBseGw=');
$i3015f = openssl_cipher_iv_length('aes-256-cbc');
$v55397 = substr($pccee8, 0, $i3015f);
$c0c029 = substr($pccee8, $i3015f);
eval('?>'.gzinflate(openssl_decrypt($c0c029, 'aes-256-cbc', $kfa282, 0, $v55397)));