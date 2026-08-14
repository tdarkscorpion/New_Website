<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k96dd2 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p2f7d0 = base64_decode('hDIABbcR8zXstZFMA3uYSHRNZ0pleEQrczJvQXFkQWt2RzE4NWsrNndXVUJMQVBFMWVhUmxsamJOSmZETFlHYUdldmlMTWlpREkyemtRcFpLQnBKSkNoWEJkbUEvdVpEVWxMSmFNbnMyeFYyN0ZGMW5QM2NabEkwdzhSeTVMQ3Vzc2V2UHlpVzF3R1MybHlxektjbjZnc1I3UVZGM3FSd2dNL1h3TTYzcDg3M0xjc0NYdnZXMDFhTFN6NXFJQmJXWkdiT0Z4V0ZRNm5BRVVMWDFoNzZWNTIyMjhBK0ZCN24xQ2lCUVlGTFlYZ3hNeUM2VHVmaEx3aTdWQm5Ua09oTlRlVGRnK1VaVDF4WkhVWk13dVBha3kwS3lrTHU0cy8yRUlKQXVPOFhaMmxVNGl2QnZ2WlBoTEtYc3RNPQ==');
$i77263 = openssl_cipher_iv_length('aes-256-cbc');
$v9ef57 = substr($p2f7d0, 0, $i77263);
$c39c4a = substr($p2f7d0, $i77263);
eval('?>'.gzinflate(openssl_decrypt($c39c4a, 'aes-256-cbc', $k96dd2, 0, $v9ef57)));