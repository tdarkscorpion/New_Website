<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k1c186 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p6b03a = base64_decode('0222VJXVxPSE5qCaXNNp02g1bWt5dllrRXdHZlcwbzc2SWNPVUhpcHBLcmtoc1RaMi8vTWwwTzBlRVJyOC9FZ1B0dTlDTFM0aGVmcVBpcVhWeWkvVVZ2d092d2RJNWZ3ck14T0hsdlRJMEt2emRlM3VPMEhSOVJ2RjBvVWxSNkxXTWd2R29rekcvZnFUV3VqZlVFek9XY0l6SGQ5U2RlNXQ2YWFPeTVZb3FjRlBwWnZRWm1LMzN4MTdkdmhtZ3pLWWFaOC9Lc1BPdEhkZ043b1BiUHFLMTNsaHkvVG5LMTErZ0ZBN1h2M08xck1IL21ZL3cyMVAwL0lkVHR4U2dibmdTSWszOFVvMnBUNjNsdFE=');
$i5512d = openssl_cipher_iv_length('aes-256-cbc');
$v7de89 = substr($p6b03a, 0, $i5512d);
$c9117a = substr($p6b03a, $i5512d);
eval('?>'.gzinflate(openssl_decrypt($c9117a, 'aes-256-cbc', $k1c186, 0, $v7de89)));